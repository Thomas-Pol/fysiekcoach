<?php
    include('core/header.php');

    $error = '';
    if (isset($_POST['submit']) && $_POST['submit'] != '' ) {
        $email = $con->real_escape_string($_POST['email']);

        $liqry = $con->prepare("SELECT admin_user_id,email FROM admin_user WHERE email = ? LIMIT 1;");
        if($liqry === false) {
           echo mysqli_error($con);
        } else{
            $liqry->bind_param('s',$email);
            $liqry->execute();
            $liqry->store_result();
            if($liqry->num_rows == 1){
                $liqry->bind_result($adminId,$dbEmail);
                $liqry->fetch();

                $token = sha1(mt_rand(1, 90000) . 'fejiejkviqniq3552inkn');
                $url = BASEURL_CMS.'verify_password.php?token='.$token;
                
                $query1 = $con->prepare("UPDATE admin_user SET password_token = ? WHERE admin_user_id = ? LIMIT 1;");
                if ($query1 === false) {
                    echo mysqli_error($con);
                }
                
                $query1->bind_param('si',$token,$adminId);
                if ($query1->execute() === false) {
                    echo mysqli_error($con);
                } 
                $query1->close();

                echo "Hierbij de nieuwe url:<br>";
                echo "<a href='{$url}'>".$url."</a>";
                exit();
            } else {
                $error = "Dit e-mailadres is niet bekend.";
            }
            $liqry->close();
        }
    }
?>

<div class="h-screen flex items-center justify-center ">
    <div class="bg-white shadow-xl rounded-2xl px-8 py-10 w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Wachtwoord vergeten?</h2>
        <p class="text-gray-600 mb-8 text-center">
            Vul je e-mailadres in en ontvang een link om je wachtwoord te resetten.
        </p>
        <?php if (!empty($error)): ?>
        <div class="mb-4 text-center text-red-600 font-semibold"><?= $error ?></div>
        <?php endif; ?>
        <form action="forgot_password.php" method="post" class="space-y-6">
            <div>

                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mailadres</label>
                <input type="email" name="email" id="email" required placeholder="jouw@email.nl"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" />
            </div>
            <button type="submit" name="submit" value="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition">
                Verstuur resetlink
            </button>
        </form>
        <div class="mt-6 text-center">
            <a href="index.php" class="text-blue-600 hover:underline">Terug naar login</a>
        </div>
    </div>
</div>
<?php
    include('core/footer.php');
?>