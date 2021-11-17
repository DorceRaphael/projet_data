<?php
include "../../pdo/connexion.php";
session_start();
// keep the url variable slug in a session variable
$table = htmlentities($_SESSION["table"]);

// check the filter selected and chose base filter
if (isset($_POST["musicfilter"]) && $_POST["musicfilter"] != "") {
    $musicFilter = $_POST["musicfilter"];
    $musicFilter = preg_replace("/\_/", " ", $musicFilter);
    $musicFilter = htmlentities($musicFilter);
} else {
    $musicFilter = "danceability DESC";
}

// check the filter selected and chose base filter
if (isset($_POST["musicfilter"]) && $_POST["musicfilter"] != "") {
    $musicFilter = $_POST["musicfilter"];
    $musicFilter = preg_replace("/\_/", " ", $musicFilter);
    $musicFilter = htmlentities($musicFilter);
} else {
    $musicFilter = "danceability DESC";
}

//pagination  limit and base pagination number
$limit = 150;
if (isset($_POST["page_no"])) {
    $page_no = $_POST["page_no"];
} else {
    $page_no = 1;
}
$offset = ($page_no - 1) * $limit;

// check if table exist by checking the count of the named table in the database
include "../../public/model/check_tables_model.php";

// if count !== 0 show the results else go to page 404
if ($post->nbr !== 0) {
    include "../../public/model/genre_musics_model.php";
    foreach ($musics as $music) {
        include "../../public/view/genre_filter_view.php";
    }
    include "../../public/model/rowcount_model.php";
    include "../../public/view/pagination_btns_view.php";
} else {
    header("location:../projet_data/404");
}
