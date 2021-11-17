<!--------------------------------------------- SLIDESHOW -->
<!-- BLACK VIGNETTE -->
<div class="vignette"></div>
<section class="slideshow-section">
  <div id="slick-slider">
    <!-- SINGLE SLIDE -->
    <article class="slideshow-article">
      <div class="slideshow-img" style="
        background-image: url(./assets/images/<?= $params["slug"] ?>_1_cropped.jpeg);"></div>
      <div class="slideshow-text">
        <h3><?= $params["slug"] ?></h3>
        <h3>MUSIC</h3>
      </div>
    </article>
    <!-- SINGLE SLIDE -->
    <article class="slideshow-article">
      <div class="slideshow-img" style="
        background-image: url(./assets/images/<?= $params["slug"] ?>_2_cropped.jpeg);"></div>
      <div class="slideshow-text">
        <h3><?= $params["slug"] ?></h3>
        <h3>MUSIC</h3>
      </div>
    </article>
    <!-- SINGLE SLIDE -->
    <article class="slideshow-article">
      <div class="slideshow-img" style="background-image: url(./assets/images/<?= $params["slug"] ?>_3_cropped.jpeg);"></div>
      <div class="slideshow-text">
        <h3><?= $params["slug"] ?></h3>
        <h3>MUSIC</h3>
      </div>
    </article>
  </div>
</section>

<!--------------------------------------------- GENRE -->

<section class="genre-section">
  <article class="genre-article">
    <div class="filter">
      <h2>Trier par:</h2>
      <div class="select" tabindex="1">
        <!-- SINGLE FILTER -->
        <input class="filter-btn" name="filter" type="radio" id="danceability-desc" checked />
        <label for="danceability-desc" class="option" value="danceability DESC">DANCEABILITY <i class="fas fa-arrow-down"></i></label>
        <!-- SINGLE FILTER -->
        <input class="filter-btn" name="filter" type="radio" id="valence-desc" />
        <label for="valence-desc" class="option" value="valence DESC">VALENCE <i class="fas fa-arrow-down"></i></label>
        <!-- SINGLE FILTER -->
        <input class="filter-btn" name="filter" type="radio" id="tempo-desc" />
        <label for="tempo-desc" class="option" value="tempo DESC">TEMPO <i class="fas fa-arrow-down"></i></label>
        <!-- SINGLE FILTER -->
        <input class="filter-btn" name="filter" type="radio" id="popularity-desc" />
        <label for="popularity-desc" class="option" value="popularity DESC">POPULARITY <i class="fas fa-arrow-down"></i></label>
        <!-- SINGLE FILTER -->
        <input class="filter-btn" name="filter" type="radio" id="danceability-asc" />
        <label for="danceability-asc" class="option" value="danceability ASC">DANCEABILITY <i class="fas fa-arrow-up"></i></label>
        <!-- SINGLE FILTER -->
        <input class="filter-btn" name="filter" type="radio" id="valence-asc" />
        <label for="valence-asc" class="option" value="valence ASC">VALENCE <i class="fas fa-arrow-up"></i></label>
        <!-- SINGLE FILTER -->
        <input class="filter-btn" name="filter" type="radio" id="tempo-asc" />
        <label for="tempo-asc" class="option" value="tempo ASC">TEMPO <i class="fas fa-arrow-up"></i></label>
        <!-- SINGLE FILTER -->
        <input class="filter-btn" name="filter" type="radio" id="popularity-asc" />
        <label for="popularity-asc" class="option" value="popularity ASC">POPULARITY <i class="fas fa-arrow-up"></i></label>
      </div>
    </div>
    <div class="genre-results">
      <ul>
        <li class="genre-results-item" href="">
          <h2>TITRE</h2>
          <h2>ARTISTE</h2>
          <h2>DANCE</h2>
          <h2>VALENCE</h2>
          <h2>TEMPO</h2>
          <h2>POPUL.</h2>
          <h2>LIEN</h2>
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
<script src="./assets/dist/genre.js"></script>
<?php $pageJavascripts = ob_get_clean(); ?>