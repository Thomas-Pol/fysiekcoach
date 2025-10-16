<?php include('../core/header.php'); ?>

<?php
$liqry = $con->prepare("SELECT admin_user_id, email FROM admin_user");
if (!$liqry) {
    echo '<div class="text-red-500 text-center mt-10">Fout bij laden van gebruikers: ' . mysqli_error($con) . '</div>';
} else {
    $liqry->bind_result($adminId, $email);
    if ($liqry->execute()) {
        $liqry->store_result();
        ?>

<div class="min-h-screen flex items-center justify-center bg-[#efe4dd] px-4">
    <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="px-6 py-4 border-b">
            <h2 class="text-2xl font-bold text-gray-800">Gebruikersbeheer </h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full table-auto text-left text-gray-700">
                <thead class="bg-gray-100 text-sm font-semibold uppercase tracking-wide">
                    <tr>
                        <th class="py-3 px-4 border-b border-gray-300">ID</th>
                        <th class="py-3 px-4 border-b border-gray-300">Email</th>
                        <th class="py-3 px-4 border-b border-gray-300">Acties</th>
                    </tr>
                </thead>
                <tbody class="text-sm sm:text-base">
                    <?php while ($liqry->fetch()): ?>
                    <tr class="hover:bg-gray-50 transition">
                        <?php prettyDump($adminId) ?>
                        <?php prettyDump($email) ?>

                        <td class="py-4 px-4 border-b border-gray-200"><?= htmlspecialchars($adminId); ?></td>
                        <td class="py-4 px-4 border-b border-gray-200"><?= htmlspecialchars($email); ?></td>
                        <td class="py-4 px-4 border-b border-gray-200 space-x-4">
                            <a href="edit_user.php?edit=<?= $adminId; ?>"
                                class="text-blue-600 hover:underline">Bewerk</a>

                            <a href="delete_user?delete=<?= $adminId; ?>" class="text-red-600 hover:underline"
                                onclick="return confirm('Weet u zeker dat u dit item wilt verwijderen?')">Verwijder</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                    <tr>
                        <td colspan="3" class="text-center py-6">
                            <a href="<?= BASEURL_CMS; ?>users/add_user"
                                class="inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">
                                Gebruiker toevoegen
                            </a>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <a href="<?= BASEURL_CMS; ?>./index_loggedin.php"
                class="w-full inline-block text-center bg-orange-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-md transition">
                Sluiten
            </a>
        </div>
    </div>
</div>
<?php
        $liqry->close();
    }
}
?>

<?php include('../core/footer.php'); ?>