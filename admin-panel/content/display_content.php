<?php
    include('./core/db_connect.php');   

    // Fetch blokken info
    $page_content = [];
    $stmt = $con->prepare("SELECT blok_id, title, subtitle, text, foto FROM blokken");
    // $stmt->bind_param('i', $page_id);
    $stmt->execute();
    $stmt->bind_result($blok_id, $title, $subtitle, $text, $foto);
    while ($stmt->fetch()) {
        $page_content[$blok_id] = [
            'title' => $title,
            'subtitle' => $subtitle,
            'text' => $text,
            'foto' => $foto
        ];
    }
    $stmt->close();
    // var_dump($page_content[]);

    // Fetch all blok-content rows for this blok
    $blokcontent = [];
    $stmt = $con->prepare("SELECT bc_id, blok_id ,bc_titel, bc_content FROM `blok-content`");
    // $stmt->bind_param('i', $page_id);
    $stmt->execute();
    $stmt->bind_result($bc_id, $bc_blok_id ,$bc_titel, $bc_content);
    while ($stmt->fetch()) {
        $blokcontent[$bc_blok_id][] = [
            'bc_blok_id' => $bc_blok_id,
            'bc_id' => $bc_id,
            'bc_titel' => $bc_titel,
            'bc_content' => $bc_content
        ];
    }
    $stmt->close();
?>

