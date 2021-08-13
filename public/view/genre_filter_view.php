<li class="genre-results-item" href="">
    <h2><?php echo $music["track_name"]; ?></h2>
    <h2><?php echo $music["artist_name"]; ?></h2>
    <div class="progress">
        <div class="progress-value" style="width: calc(<?php echo $music["popularity"]; ?> * 5rem / 100);"></div>
    </div>
    <a href="https://open.spotify.com/track/<?php echo $music["link"]; ?>" target="blank">SPOTIFY <i class="fas fa-external-link-alt"></i></a>
    <h2><?php echo $music["danceability"]; ?></h2>
    <h2><?php echo $music["valence"]; ?></h2>
    <h2><?php echo $music["tempo"]; ?></h2>
</li>