<?php
    include('core/header.php');

    if (isset($_POST['submit']) && $_POST['submit'] != '') {
        
        $email = $con->real_escape_string($_POST['email']);
        
        $password = $con->real_escape_string($_POST['password']);
        
        $liqry = $con->prepare("SELECT admin_user_id, email, password FROM admin_user WHERE email = ? LIMIT 1;");
        if($liqry === false) {
            echo mysqli_error($con);
        } else{
            $liqry->bind_param('s',$email);
            $liqry->bind_result($adminId,$email,$dbHashPassword);
            if($liqry->execute()){
                $liqry->store_result();
                $liqry->fetch();
                if($liqry->num_rows == '1' && password_verify($password,$dbHashPassword)){
                   
                    $_SESSION['Sadmin_id'] = stripslashes($adminId);
                    $_SESSION['Sadmin_email'] = stripslashes($email);
                    echo "Bezig met inloggen... <meta http-equiv=\"refresh\" content=\"1; URL=index_loggedin.php\">";
                    exit();
                } else {
                    echo "ERROR tijdens inloggen";
                }
            }
            $liqry->close();
        }
    }
?>
<div id="admin-panel" class="w-screen h-screen bg-[#efe4dd]">
    <section class="bg-[#efe4dd] dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow-lg dark:border md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Admin panel
                    </h1>
                    <form action="index.php" method="post" id="loginForm" class="space-y-4">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Uw
                                mail</label>
                            <input type="email" name="email" id="" placeholder="Email"
                                class="bg-gray-50 border border-gray-300 text-white rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900">Wachtwoord</label>
                            <input type="password" name="password" id="" placeholder="Password"
                                class="bg-gray-50 border border-gray-300 text-white rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>

                        <p id="error-message" class="text-red-500 text-sm ">Ongeldige inloggegevens</p>

                        <button type="submit" name="submit" value="Login"
                            class="w-full text-white bg-[#db6f0b] hover:bg-[#db6f0b]/85 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                            in</button>
                        <a href="forgot_password.php">Forgot Password?</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
    include('core/footer.php');
?>