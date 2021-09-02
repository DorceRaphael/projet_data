<?php
$stmt = $pdo->prepare(
    "SELECT COUNT(*) nbr FROM information_schema.tables  WHERE table_schema = 'spotify' AND table_name = ?"
);
$stmt->execute([$table]);
$post = $stmt->fetch();
?>