<?php
    include('../core/header.php');
    include('../core/checklogin_admin.php');
?>


<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-orange-100">
    <div class="bg-white shadow-xl rounded-2xl px-10 py-12 w-full max-w-lg flex flex-col items-center">

        <div class="flex flex-col sm:flex-row sm:flex-wrap gap-4 w-full justify-center mb-2">
            <a href="delete_content.php"
                class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow text-center font-semibold transition">
                Delete pagina
            </a>
            <a href="edit_content.php?page_id=1"
                class="flex-1 bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg shadow text-center font-semibold transition">
                Edit pagina
            </a>
            <a href="../index_loggedin.php"
                class="w-full bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg shadow text-center font-semibold transition">
                Back
            </a>
        </div>

    </div>
</div>
<?php
    include('../core/footer.php');
?>