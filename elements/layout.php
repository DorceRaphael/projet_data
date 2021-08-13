<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MUSIC DATA</title>
    <link rel="shortcut icon" type="" href="./assets/images/logo.svg" />
    <link rel="stylesheet" href="./assets/css/style.css" />
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
          <img class="logo" src="./assets/images/logo.svg" alt="" />
        </ul>
        <div class="navbar">
          <img class="logo" src="./assets/images/logo.svg" alt="" />
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
          <img class="logo" src="./assets/images/logo.svg" alt="" />
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
              <a class="social-icon" href="" target="_blank">
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
        <div class="logo-item">
          <img class="logo" src="./assets/images/logo.svg" alt="" />
        </div>
        <article class="footer-article">
          <div class="admin">
            <div class="admin-item">
              <h2>Dylan Chapuis</h2>
              <a class="social-icon" href="" target="_blank">
                <i class="fab fa-github-square"></i>
              </a>
              <a class="social-icon" href="" target="_blank">
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
            <h3>À PROPOS</h3>
            <h3>CONNEXION</h3>
            <h3>MENTIONS LEGALES</h3>
          </div>
        </article>
        <div class="copyright-item"><h4>COPYRIGHT 2021</h4></div>
      </section>
    </footer>

    <!--------------------------------------------- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!--------------------------------------------- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--------------------------------------------- SLICK SLIDER -->
    <script
      type="text/javascript"
      src="./assets/slick-1.8.1/slick/slick.min.js"
    ></script>

    <!--------------------------------------------- SCRIPTS -->
    <script src="./assets/js/home.js"></script>
    <?= $pageJavascripts ?? "" ?>
  </body>
</html>