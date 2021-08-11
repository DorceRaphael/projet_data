<?php
include "../../pdo/connexion.php";

if (isset($_POST["musicfilter"]) && $_POST["musicfilter"] != "") 
{
    $musicFilter = $_POST["musicfilter"];
    $musicFilter = preg_replace('/\_/', ' ', $musicFilter);
    $musicFilter = htmlentities($musicFilter);
}
else
{
    $musicFilter = "danceability DESC";
}

$limit = 150;
if (isset($_POST['page_no'])) {
    $page_no = $_POST['page_no'];
}else{
    $page_no = 1;
}
$offset = ($page_no-1) * $limit;

$stmt = $pdo->prepare
(
    "SELECT * FROM alternative ORDER BY $musicFilter LIMIT $offset, $limit"
);
$stmt->execute([]);
$musics = $stmt->fetchAll(PDO::FETCH_ASSOC);
$rowTotal = $stmt->rowCount();

if ($rowTotal > 0) 
{
    foreach ($musics as $music):
        include "../../public/view/genre_filter_view.php";
    endforeach;
} 

$stmt = $pdo->prepare
(
    "SELECT * FROM alternative"
);
$stmt->execute([]);
$rowTotal = $stmt->rowCount();
$totalPage = ceil($rowTotal/$limit);

include "../../public/view/pagination_btns_view.php";
?>