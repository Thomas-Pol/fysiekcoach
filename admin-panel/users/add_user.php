<?php
    include('../core/header.php');


    if(isset($_POST['submit']) && $_POST['submit'] != "") {

        doMes();

        if($_POST['password'] != $_POST['password2']) {
            noticeRij('error');
            exit();
        }
        $password_new = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query1 = $con->prepare("INSERT INTO admin_user (email, password) VALUES (?,?);");
        if ($query1 === false) {
            noticeRij('error');
            echo mysqli_error($con);
        }
        $query1->bind_param('ss',$_POST['email'],$password_new);
        if ($query1->execute() === false) {
            noticeRij('error');
            echo mysqli_error($con);
        } else {
            noticeRij('ok');
        }
        $query1->close();
    }else{
?>
<div class="min-h-screen flex items-center justify-center bg-[#efe4dd] px-4">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Gebruiker Toevoegen</h2>

        <form action="<?= CURHREF; ?>" method="post" class="space-y-5">
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Emailadres</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord</label>
                <input type="password" id="password" name="password" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Password repeat -->
            <div>
                <label for="password2" class="block text-sm font-medium text-gray-700">Wachtwoord (herhaal)</label>
                <input type="password" id="password2" name="password2" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Submit button -->
            <div>
                <button type="submit" name="submit" value="1"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition">
                    Gebruiker toevoegen
                </button>
            </div>

            <!-- Close -->
            <div>
                <a href="<?= BASEURL_CMS; ?>users/index.php"
                    class="w-full inline-block text-center bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-md transition">
                    Sluiten
                </a>
            </div>
        </form>
    </div>
</div>

<?php
    }//afsluiten post check

    include('../core/footer.php');
?>