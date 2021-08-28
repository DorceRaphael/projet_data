<?php
$stmt = $pdo->prepare(
    "SELECT COUNT(*) nbr FROM information_schema.tables  WHERE table_schema = 'raphaeld_spotify' AND table_name = '$table'"
);
$stmt->execute([]);
$post = $stmt->fetch();
?>