<?php
    include('../core/header.php');

    if(isset($_GET['edit'])) { $edit = mes($_GET['edit']); } else { $edit = 0; }

    if(isset($_POST['submit']) && $_POST['submit'] != "") {

        doMes();

        if(isset($_POST['password']) && $_POST['password'] != "") {
            if($_POST['password'] != $_POST['password2']) {
                noticeRij('error');
                exit();
            }
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        } else {
            list($password) = mysqli_fetch_array($con->query("SELECT password FROM admin_user WHERE admin_user_id = '{$edit}' LIMIT 1;"));
        }
            
        $query1 = $con->prepare("UPDATE admin_user SET email = ?, password = ? WHERE admin_user_id = ?;");
        if ($query1 === false) {
            noticeRij('error');
            echo mysqli_error($con);
        }
        $query1->bind_param('sss',$_POST['email'],$password,$edit);
        if ($query1->execute() === false) {
            noticeRij('error');
            echo mysqli_error($con);
        } else {
            noticeRij('ok');
        }
        $query1->close();
    }else{
        $wpqry = $con->prepare("SELECT email FROM admin_user WHERE admin_user_id = ? LIMIT 1;");
        if ($wpqry === false) {
            noticeRij('error');
            trigger_error(mysqli_error($con));
        } else {
            $wpqry->bind_param('i',$edit);
            $wpqry->execute();
            $wpqry->bind_result($email);
            $wpqry->fetch();
            $wpqry->close();
?>
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Gebruiker Bewerken</h2>

        <form action="" method="post" class="space-y-5">
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Emailadres</label>
                <input type="email" id="email" name="email" required value="<?= htmlspecialchars(strip($email)); ?>"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Optional password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Nieuw wachtwoord</label>
                <input type="password" id="password" name="password"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- password repeat -->
            <div>
                <label for="password2" class="block text-sm font-medium text-gray-700">Herhaal nieuw wachtwoord</label>
                <input type="password" id="password2" name="password2"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
            </div>

            <!-- Submit -->
            <div>
                <button type="submit" name="submit" value="1"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition">
                    Gebruiker bijwerken
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
        }//afsluiten wijzig query
    }//afsluiten post check

    include('../core/footer.php');
?>