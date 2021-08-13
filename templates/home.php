<!--------------------------------------------- SLIDESHOW -->
<!-- BLACK VIGNETTE -->
<div class="vignette"></div>
<section class="slideshow-section">
  <!-- SINGLE SLIDE -->
  <article class="slideshow-article">
    <div
      class="slideshow-img"
      style="background: url(./assets/images/base_1.jpg) center/cover;"
    ></div>
    <div class="slideshow-text">
      <h3>MUSIC DATA</h3>
      <h4>Le meilleur site pour découvrir des musiques de qualité!</h4>
    </div>
  </article>
  <!-- END OF SINGLE SLIDE -->
  <article class="slideshow-article">
    <div
      class="slideshow-img"
      style="background: url(./assets/images/pop_1.jpg) center/cover;"
    ></div>
    <div class="slideshow-text">
      <h3>NON STOP</h3>
      <h4>"An other one" prendra enfin tout on sens.</h4>
    </div>
  </article>
  <article class="slideshow-article">
    <div
      class="slideshow-img"
      style="background: url(./assets/images/base_5.jpg) center/cover;"
    ></div>
    <div class="slideshow-text">
      <h3>NO LIMIT</h3>
      <h4>112 ans. La durée totale de toutes les musiques disponibles!</h4>
    </div>
  </article>
</section>

<!--------------------------------------------- HOME -->
<section class="home-section">
  <div class="section-center">
    <h2>À la recherche de <span>MUSIQUE </span>?</h2>
    <h3>
      Music Data vous propose une recherche de musique par genre et en
      fonction de vos envie et de votre mood!
    </h3>
    <article class="home-article">
      <!-- SINGLE GENRE ITEM -->
      <div class="genre-item">
        <div class="genre-img">
          <a href="<?= $router->generate("genre") ?>alternative">
          <img src="./assets/images/alternative_logo.svg" alt="icone de musique alternative" />
          </a>
        </div>
        <div class="genre-text">ALTERNATIVE</div>
      </div>
      <!-- SINGLE GENRE ITEM -->
      <div class="genre-item">
        <div class="genre-img">
          <a href="<?= $router->generate("genre") ?>blues">
          <img src="./assets/images/blues_logo.svg" alt="icone de musique blues" />
          </a>
        </div>
        <div class="genre-text">BLUES</div>
      </div>
      <div class="genre-item">
        <div class="genre-img">
          <a href="<?= $router->generate("genre") ?>hiphop">
          <img src="./assets/images/hiphop_logo.svg" alt="icone de musique hiphop" />
          </a>
        </div>
        <div class="genre-text">HIP HOP</div>
      </div>
      <div class="genre-item">
        <div class="genre-img">
          <a href="<?= $router->generate("genre") ?>rock">
          <img src="./assets/images/rock_logo.svg" alt="icone de musique rock" />
          </a>
        </div>
        <div class="genre-text">ROCK</div>
      </div>
      <div class="genre-item">
        <div class="genre-img">
          <a href="<?= $router->generate("genre") ?>indie">
          <img src="./assets/images/indie_logo.svg" alt="icone de musique indie" />
          </a>
        </div>
        <div class="genre-text">INDIE</div>
      </div>
      <div class="genre-item">
        <div class="genre-img">
          <a href="<?= $router->generate("genre") ?>metal">
          <img src="./assets/images/metal_logo.svg" alt="icone de musique metal" />
          </a>
        </div>
        <div class="genre-text">METAL</div>
      </div>
      <div class="genre-item">
        <div class="genre-img">
          <a href="<?= $router->generate("genre") ?>pop">
          <img src="./assets/images/pop_logo.svg" alt="icone de musique pop" />
          </a>
        </div>
        <div class="genre-text">POP</div>
      </div>
      <div class="genre-item">
        <div class="genre-img">
          <a href="https://www.youtube.com/watch?v=7zbesXqL1kg">
          <i class="fas fa-question"></i>
          </a>
        </div>
        <div class="genre-text">?????</div>
      </div>
    </article>
    <h3>Et ce n'est <span>PAS</span> tout..</h3>
  </div>
</section>

<!--------------------------------------------- ABOUT -->
<section class="about-section" id="about">
  <article class="about-article">
    <div class="about-text">
      <h2>À <span>PROPOS</span> :</h2>
      <div class="line">
        <h3>
          Choisissez juste un genre de musique parmis la liste que l’on vous
          propose: alternative, blues, hip hop, indie, metal, pop et rock
        </h3>
        <h3>
          Enfin, vous pouvez choisir de trier les musiques, par titre,
          artiste, popularité, ainsi que par danceability, energy et tempo.
        </h3>
      </div>
    </div>
    <div class="about-img">
      <img
        src="./assets/images/base_16.jpg"
        alt="femme detendue ecoutant de la musique"
      />
    </div>
  </article>
</section>

<!--------------------------------------------- PARALLAX -->
<section class="parallax-section">
  <!-- <img class="parallax" src="./assets/images/base_11.jpg" alt="image" /> -->
  <div class="parallax"></div>
  <p>DANCE LIKE NEVER BEFORE</p>
</section>

<!--------------------------------------------- CONNECTION -->
<section class="connection-section">
  <article class="connection-article">
    <div class="connection-text">
      <h2><span>CONNEXION</span> :</h2>
      <div class="line">
        <h3>
          Créez un compte gratuitement pour gerer vos playlists privées et
          ajouter des chansons!
        </h3>
        <a href="#" id="login">Se connecter</a>
        <h3>
          Vous n’avez pas de compte? <a href="" id="sign-up">S’inscrire.</a>
        </h3>
      </div>
    </div>
    <div class="connection-img">
      <img
        src="./assets/images/base_7.jpg"
        alt="femme detendue sur son telephone"
      />
    </div>
  </article>
</section>

