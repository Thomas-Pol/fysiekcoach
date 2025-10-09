<?php
    include('core/header.php');
    include('core/checklogin_admin.php');
?>


<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-orange-100">
    <div class="bg-white shadow-xl rounded-2xl px-10 py-12 w-full max-w-lg flex flex-col items-center">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-2 text-center">Welkom</h1>
        <p class="text-lg text-gray-600 mb-8 text-center">
            Je bent ingelogd als <span
                class="font-semibold text-blue-600"><?php echo $_SESSION['Sadmin_email'] ?></span>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 w-full justify-center mb-2">
            <a href="users/"
                class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow text-center font-semibold transition">
                Gebruikers
            </a>
            <a href="content/"
                class="flex-1 bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg shadow text-center font-semibold transition">
                Pagina's
            </a>
        </div>
    </div>
</div>
<?php
    include('core/footer.php');
?>