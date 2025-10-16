<?php

    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include('../../core/db_connect.php');
        include('../core/checklogin_admin.php');


    // Get selected page
    $page_id = isset($_GET['page_id']) ? (int)$_GET['page_id'] : 0;
    $total_blocks = 0;
    $pages = [];

    // Handle   update for blokken and blok-content
    if (isset($_POST['submit'])) {
        // Update main blokken fields
        if (isset($_POST['title'], $_POST['subtitle'], $_POST['text'])) {
            $new_title = $_POST['title'];
            $new_subtitle = $_POST['subtitle'];
            $new_text = $_POST['text'];
            $update = $con->prepare("UPDATE blokken SET title=?, subtitle=?, text=? WHERE blok_id=?");
            $update->bind_param('sssi', $new_title, $new_subtitle, $new_text, $page_id);
            $update->execute();
            $update->close();
        }

        // Update blok-content rows
        if (isset($_POST['bc_titel'], $_POST['bc_content'])) {
            foreach ($_POST['bc_titel'] as $bc_id => $titel) {
                $content = $_POST['bc_content'][$bc_id];
                $update = $con->prepare("UPDATE `blok-content` SET bc_titel=?, bc_content=? WHERE bc_id=?");
               $update->bind_param('ssi', $titel, $content, $bc_id);
                $update->execute();
                $update->close();
            }
        }
        header("Location: edit_content.php?page_id=$page_id");
        exit;
    }

  if (isset($_POST['add_block'])) {



    $stmt = $con->prepare("SELECT title FROM blokken WHERE blok_id = ?");
    $stmt->bind_param('i', $page_id);
    $stmt->execute();
    $stmt->bind_result($title);
    $stmt->fetch();
    $stmt->close();

    // Prepare and execute the query to fetch bc_type values
    $stmt = $con->prepare("SELECT bc_type FROM `blok-content` WHERE blok_id = ?");
    $stmt->bind_param('i', $page_id);
    $stmt->execute();
    $stmt->bind_result($bc_type);

    $total_blocks = 0;
    $new_blok_type = null;
    $bc_type_found = false; // Default type if none found
    $default_type = $title; // Default type to use if no other type is found

    while ($stmt->fetch()) {
        $total_blocks++;
        if ($bc_type !== null && !$bc_type_found) {
            // Use the first non-null bc_type
            $new_blok_type = $bc_type;
            $bc_type_found = true;
        }
    }
    $stmt->close();

    // Prepare values for the new block
    $new_blok_title = "";
    $new_blok_content = "";
    $new_blok_bedrijf = "";
    $new_blok_nummer = $total_blocks + 1;

    /* Insert the new block */
    $insert = $con->prepare("INSERT INTO `blok-content` (bc_titel, bc_content, blok_id, bc_bedrijf, bc_nummer, bc_type) VALUES (?, ?, ?, ?, ?, ?)");
    $insert->bind_param('ssisis', $new_blok_title, $new_blok_content, $page_id, $new_blok_bedrijf, $new_blok_nummer, $title);
    $insert->execute();
    $insert->close();

    /* Redirect after insert */
    header("Location: edit_content.php?page_id=$page_id");
        exit;
}

    // Fetch blokken info
    $stmt = $con->prepare("SELECT title, subtitle, text, foto FROM blokken WHERE blok_id = ?");
    $stmt->bind_param('i', $page_id);
    $stmt->execute();
    $stmt->bind_result($title, $subtitle, $text, $foto);
    $stmt->fetch();
    $stmt->close();

    // Fetch all blok-content rows for this blok
    $blokcontent = [];
    $stmt = $con->prepare("SELECT bc_id, bc_titel, bc_content FROM `blok-content` WHERE blok_id = ?");
    $stmt->bind_param('i', $page_id);
    $stmt->execute();
    $stmt->bind_result($bc_id, $bc_titel, $bc_content);
    while ($stmt->fetch()) {
        $blokcontent[] = [
            'bc_id' => $bc_id,
            'bc_titel' => $bc_titel,
            'bc_content' => $bc_content
        ];
    }
    $stmt->close();
?>

<header>
    <link rel="stylesheet" href="./src/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</header>

<div class="min-h-screen flex flex-row bg-gradient-to-br from-blue-50 to-orange-100">
    <!-- Sidebar -->
    <aside class="fixed h-screen w-64 bg-white shadow-xl flex flex-col py-8 px-4">
        <h2 class="text-xl font-bold text-gray-700 mb-6">Pagina's</h2>
        <?php include_once("./sidebar_content.php") ?>
    </aside>

    <!-- Main Content Editor -->
    <main class="ml-64 flex-1 flex items-center justify-center px-4 py-8">
        <div class="bg-white shadow-2xl rounded-2xl px-8 py-10 w-full max-w-2xl">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-8 text-center">
                <?= $page_id == 0 ? 'Pagina toevoegen' : 'Pagina bewerken' ?></h2>
            <form action="" method="post" enctype="multipart/form-data" class="space-y-10">
                <!-- Main blokken fields -->
                <section class="bg-blue-50 rounded-xl p-6 mb-8 border border-blue-100 shadow-sm">
                    <h3 class="text-xl font-bold text-blue-800 mb-4">Hoofdgegevens</h3>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Titel</label>
                        <input type="text" name="title" value="<?= htmlspecialchars($title) ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" />
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Subtitel</label>
                        <input type="text" name="subtitle" value="<?= htmlspecialchars($subtitle) ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tekst</label>
                        <textarea name="text" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200"><?= htmlspecialchars($text) ?></textarea>
                    </div>
                </section>

                <!-- blok-content fields -->

                <?php if (count($blokcontent)): ?>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Extra blokken</h3>
                <?php endif; ?>
                <div class="space-y-8">
                    <?php foreach ($blokcontent as $block): ?>
                    <section class="bg-gray-50 rounded-xl p-6 border border-gray-200 shadow-sm">
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Titel blok</label>
                            <input type="text" name="bc_titel[<?= $block['bc_id'] ?>]"
                                value="<?= htmlspecialchars($block['bc_titel']) ?>"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-100" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Inhoud blok</label>
                            <textarea name="bc_content[<?= $block['bc_id'] ?>]" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-100"><?= htmlspecialchars($block['bc_content']) ?></textarea>
                        </div>
                    </section>
                    <?php endforeach; ?>
                </div>

                <?php if ($page_id == 2 || $page_id == 4 || $page_id == 5 || $page_id == 6): ?>
                <section class="bg-gray-50 rounded-xl p-6 border border-gray-200 shadow-sm">
                    <div class="mb-0">
                        <input type="submit" name="add_block" value="Voeg subcontent toe"
                            class="w-full px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-sm focus:ring focus:ring-blue-100" />
                    </div>
                </section>
                <?php endif; ?>

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button type="submit" name="<?= $page_id == 0 ? 'toevoegen' : 'submit' ?>"
                        class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-md transition">
                        opslaan
                    </button>
                    <a href="../index_loggedin.php"
                        class="w-full sm:w-auto bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-6 rounded-md text-center transition">
                        Annuleren
                    </a>
                </div>
            </form>
        </div>
    </main>
</div>

<?php
 
    include('../core/footer.php');
?>