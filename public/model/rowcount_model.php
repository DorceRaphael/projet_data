<?php
$stmt = $pdo->prepare("SELECT * FROM alternative");
$stmt->execute([]);
$rowTotal = $stmt->rowCount();
$totalPage = ceil($rowTotal / $limit);
?>