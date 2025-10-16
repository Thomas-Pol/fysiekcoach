<?php

/* Fetch all pages for sidebar */
$pages = [];
$result = $con->query("SELECT blok_id, naam FROM blokken");
while ($row = $result->fetch_assoc()) {
$pages[] = $row;
}

$total_pages = count($pages);

?>

<nav class="flex-1">
    <ul class="space-y-2">
        <?php foreach ($pages as $page): ?>
        <li>
            <a href="?page_id=<?= $page['blok_id'] ?>"
                class="block px-4 py-2 rounded-md transition
                           <?= ($page_id == $page['blok_id']) ? 'bg-blue-600 text-white font-semibold' : 'text-gray-700 hover:bg-blue-100' ?>">
                <?= htmlspecialchars($page['naam']) ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</nav>

<nav>
    <ul class="space-y-2">
         <li class="bg-red-600 text-white rounded-md hover:bg-red-700">
            <a href="index.php"
                class="block px-4 py-2 rounded-md transition">
                Terug
            </a>
        </li>
    </ul>
</nav>