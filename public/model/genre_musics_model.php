<?php
$stmt = $pdo->prepare(
    "SELECT * FROM $table ORDER BY $musicFilter LIMIT $offset, $limit"
);
$stmt->execute([]);
$musics = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>