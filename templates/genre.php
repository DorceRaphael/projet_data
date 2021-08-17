<!--------------------------------------------- SLIDESHOW -->
<!-- BLACK VIGNETTE -->
<div class="vignette"></div>
<section class="slideshow-section">
  <!-- SINGLE SLIDE -->
  <article class="slideshow-article">
    <div
      class="slideshow-img"
      style="
        background-image: url(./assets/images/<?= $params["slug"] ?>_1_cropped.jpg);
      "
    ></div>
    <div class="slideshow-text">
      <h3><?= $params["slug"] ?></h3>
      <h3>MUSIC</h3>
    </div>
  </article>
  <!-- SINGLE SLIDE -->
  <article class="slideshow-article">
    <div
      class="slideshow-img"
      style="
        background-image: url(./assets/images/<?= $params["slug"] ?>_2_cropped.jpg);
      "
    ></div>
    <div class="slideshow-text">
      <h3><?= $params["slug"] ?></h3>
      <h3>MUSIC</h3>
    </div>
  </article>
  <!-- SINGLE SLIDE -->
  <article class="slideshow-article">
    <div
      class="slideshow-img"
      style="
        background-image: url(./assets/images/<?= $params["slug"] ?>_3_cropped.jpg);
      "
    ></div>
    <div class="slideshow-text">
      <h3><?= $params["slug"] ?></h3>
      <h3>MUSIC</h3>
    </div>
  </article>
</section>

<!--------------------------------------------- GENRE -->

<section class="genre-section">
  <article class="genre-article">
    <div class="filter">
      <h2>Trier par:</h2>
      <div class="select" tabindex="1">
        <!-- SINGLE FILTER -->
        <input name="filter" type="radio" id="opt1" checked />
        <label for="opt1" class="option" value="danceability DESC"
          >DANCEABILITY <i class="fas fa-arrow-down"></i
        ></label>
        <!-- SINGLE FILTER -->
        <input name="filter" type="radio" id="opt2"/>
        <label for="opt2" class="option" value="tempo DESC"
          >TEMPO <i class="fas fa-arrow-down"></i
        ></label>
        <!-- SINGLE FILTER -->
        <input name="filter" type="radio" id="opt3"/>
        <label for="opt3" class="option" value="valence DESC"
          >VALENCE <i class="fas fa-arrow-down"></i
        ></label>
        <!-- SINGLE FILTER -->
        <input name="filter" type="radio" id="opt4"/>
        <label for="opt4" class="option" value="danceability ASC"
          >DANCEABILITY <i class="fas fa-arrow-up"></i
        ></label>
        <!-- SINGLE FILTER -->
        <input name="filter" type="radio" id="opt5"/>
        <label for="opt5" class="option" value="tempo ASC"
          >TEMPO <i class="fas fa-arrow-up"></i
        ></label>
        <!-- SINGLE FILTER -->
        <input name="filter" type="radio" id="opt6"/>
        <label for="opt6" class="option" value="valence ASC"
          >VALENCE <i class="fas fa-arrow-up"></i
        ></label>
      </div>
    </div>
    <div class="genre-results">
      <ul>
        <li class="genre-results-item" href="">
          <h2>TITRE</h2>
          <h2>ARTISTE</h2>
          <h2>PP</h2>
          <h2>LIEN</h2>
          <h2>DANCE</h2>
          <h2>VALENCE</h2>
          <h2>BPM</h2>
        </li>
        <div id="table-data">
            <?php include "./public/controller/genre_pagination_controller.php"; ?>
        </div>
      </ul>
    </div>
  </article>
</section>
<button id="top-btn"><i class="fas fa-arrow-up"></i> TOP</button>

<?php ob_start(); ?>
<script src="./assets/js/genre.js"></script>
<?php $pageJavascripts = ob_get_clean(); ?>