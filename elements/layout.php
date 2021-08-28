<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="music exploration">
    <meta name="keywords" content="music, alternative, hiphop, blues, pop, rock, metal">
    <meta name="author" content="Dylan Chapuis Raphael Dorce">
    <meta property="og:image" content="./assets/images/logo.svg">
    <title>MUSIC DATA</title>
    <link rel="shortcut icon" type="" href="./assets/images/logo.svg" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <?= $pageCss ?? "" ?>
    <!--------------------------------------------- SLICK SLIDER -->
    <link
      rel="stylesheet"
      type="text/css"
      href="./assets/slick-1.8.1/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="./assets/slick-1.8.1/slick/slick-theme.css"
    />

    <!--------------------------------------------- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!--------------------------------------------- FONT AWESOME -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
  </head>
  <body>
    <nav id="nav" class="nav" role="navigation">
      <section class="nav-section">
        <!-- ACTUAL NAVIGATION MENU -->
        <ul
          class="nav-menu"
          id="menu"
          tabindex="-1"
          aria-label="main navigation"
          hidden
        >
          <li class="nav-item"><a href="<?= $router->generate(
              "home"
          ) ?>" class="nav-link">ACCUEIL</a></li>
          <li class="nav-item">
            <a class="accordion nav-link">GENRES</a>
            <ul class="panel">
              <li><a href="<?= $router->generate(
                  "genre"
              ) ?>alternative">ALTERNATIVE</a></li>
              <li><a href="<?= $router->generate(
                  "genre"
              ) ?>blues">BLUES</a></li>
              <li><a href="<?= $router->generate(
                  "genre"
              ) ?>hiphop">HIP HOP</a></li>
              <li><a href="<?= $router->generate("genre") ?>rock">ROCK</a></li>
              <li><a href="<?= $router->generate(
                  "genre"
              ) ?>indie">INDIE</a></li>
              <li><a href="<?= $router->generate(
                  "genre"
              ) ?>metal">METAL</a></li>
              <li><a href="<?= $router->generate("genre") ?>pop">POP</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="<?= $router->generate(
              "home"
          ) ?>#about" class="nav-link">À PROPOS</a></li>
          <li class="nav-item"><a href="#" class="nav-link">CONNEXION</a></li>
          <a href="<?= $router->generate("home") ?>">
            <img class="logo" src="./assets/images/logo.svg" alt="logo du site music data"/>
          </a>
        </ul>
        <div class="navbar">
          <a href="<?= $router->generate("home") ?>">
            <img class="logo" src="./assets/images/logo.svg" alt="logo du site music data"/>
          </a>
          <!-- MENU TOGGLE BUTTON -->
          <a
            href="#nav"
            class="nav-toggle"
            role="button"
            aria-expanded="false"
            aria-controls="menu"
          >
            <svg
              class="menu-icon"
              xmlns="http://www.w3.org/2000/svg"
              width="50"
              height="50"
              viewBox="0 0 50 50"
            >
              <g>
                <line
                  class="menu-icon-bar"
                  x1="13"
                  y1="16.5"
                  x2="37"
                  y2="16.5"
                />
                <line
                  class="menu-icon-bar"
                  x1="13"
                  y1="24.5"
                  x2="37"
                  y2="24.5"
                />
                <line
                  class="menu-icon-bar"
                  x1="13"
                  y1="24.5"
                  x2="37"
                  y2="24.5"
                />
                <line
                  class="menu-icon-bar"
                  x1="13"
                  y1="32.5"
                  x2="37"
                  y2="32.5"
                />
                <circle class="menu-icon-circle" r="23" cx="25" cy="25" />
              </g>
            </svg>
          </a>
        </div>
      </section>

      <!-- NAV DESKTOP -->
      <section class="nav-desktop-section">
        <div class="navbar-desktop">
          <a href="<?= $router->generate("home") ?>">
            <img class="logo" src="./assets/images/logo.svg" alt="logo du site music data"/>
          </a>
          <ul>
            <li><a href="<?= $router->generate("home") ?>">ACCUEIL</a></li>
            <li>
              <div class="dropdown">
                <button class="drop-btn">GENRE</button>
                <div class="dropdown-content">
                  <a href="<?= $router->generate(
                      "genre"
                  ) ?>alternative">ALTERNATIVE</a>
                  <a href="<?= $router->generate("genre") ?>blues">BLUES</a>
                  <a href="<?= $router->generate("genre") ?>hiphop">HIP HOP</a>
                  <a href="<?= $router->generate("genre") ?>rock">ROCK</a>
                  <a href="<?= $router->generate("genre") ?>indie">INDIE</a>
                  <a href="<?= $router->generate("genre") ?>metal">METAL</a>
                  <a href="<?= $router->generate("genre") ?>pop">POP</a>
                </div>
              </div>
            </li>
            <li><a href="<?= $router->generate(
                "home"
            ) ?>#about">À PROPOS</a></li>
            <li><a href="#">CONNEXION</a></li>
            <li>
              <a class="social-icon" href="https://github.com/DorceRaphael/projet_data" target="_blank">
                <i class="fab fa-github-square"></i>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </nav>

    <?= $pageContent ?>

        <!--------------------------------------------- FOOTER -->
    <footer>
      <section class="footer-section">
        <div class="logo-item" data-aos="fade-up">
          <a href="<?= $router->generate("home") ?>">
            <img class="logo" src="./assets/images/logo.svg" alt="logo du site music data"/>
          </a>
        </div>
        <article class="footer-article" data-aos="fade-up">
          <div class="admin">
            <div class="admin-item">
              <h2>Dylan Chapuis</h2>
              <a class="social-icon" href="https://github.com/CDylan-source" target="_blank">
                <i class="fab fa-github-square"></i>
              </a>
              <a class="social-icon" href="https://www.linkedin.com/in/chapuis-dylan-373679210/" target="_blank">
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
            <div class="admin-item">
              <h2>Raphaël Dorce</h2>
              <a
                class="social-icon"
                href="https://github.com/DorceRaphael"
                target="_blank"
              >
                <i class="fab fa-github-square"></i>
              </a>
              <a
                class="social-icon"
                href="https://www.linkedin.com/in/raphael-dorce-524a32148/"
                target="_blank"
              >
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
          </div>
          <div class="seo">
            <a href="<?= $router->generate("home") ?>#about">À PROPOS</a>
            <a href="<?= $router->generate("home") ?>">CONNEXION</a>
            <a href="<?= $router->generate("legal") ?>">MENTIONS LEGALES</a>
          </div>
        </article>
        <div class="copyright-item" ><h4>COPYRIGHT 2021</h4></div>
      </section>
    </footer>

    <!--------------------------------------------- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--------------------------------------------- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({ offset: 120, once: true, duration: 500 });
    </script>

    <!--------------------------------------------- SLICK SLIDER -->
    <script
      type="text/javascript"
      src="./assets/slick-1.8.1/slick/slick.min.js"
    ></script>
    
    <!--------------------------------------------- PARALLAX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

    <!--------------------------------------------- SCRIPTS -->
    <script src="./assets/dist/home.js"></script>
    <?= $pageJavascripts ?? "" ?>
  </body>
</html>
