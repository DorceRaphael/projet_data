<?php
// $stmt = $pdo->prepare(
//     "SELECT DISTINCT track_name, artist_name, popularity, link, danceability, valence, tempo FROM $table NATURAL JOIN alt_artists NATURAL JOIN alt_danceability NATURAL JOIN alt_popularity NATURAL JOIN alt_tempo NATURAL JOIN alt_valence ORDER BY $musicFilter LIMIT $offset, $limit"
// );
$stmt = $pdo->prepare(
    "SELECT DISTINCT track_name, artist_name, popularity, link, danceability, valence, tempo FROM $table ORDER BY $musicFilter LIMIT $offset, $limit"
);
$stmt->execute([]);
$musics = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>