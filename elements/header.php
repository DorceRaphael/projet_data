<?php
// include "./pdo/connexion.php";
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MUSIC DATA</title>
    <link rel="shortcut icon" type="" href="./assets/images/favicon.svg" />
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
          <li class="nav-item"><a href="#" class="nav-link">ACCUEIL</a></li>
          <li class="nav-item">
            <a class="accordion nav-link">GENRES</a>
            <ul class="panel">
              <li><a href="#">ALTERNATIVE</a></li>
              <li><a href="#">BLUES</a></li>
              <li><a href="#">HIP HOP</a></li>
              <li><a href="#">ROCK</a></li>
              <li><a href="#">INDIE</a></li>
              <li><a href="#">METAL</a></li>
              <li><a href="#">POP</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="#" class="nav-link">À PROPOS</a></li>
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
            <li><a href="#">ACCUEIL</a></li>
            <li>
              <div class="dropdown">
                <button class="drop-btn">GENRE</button>
                <div class="dropdown-content">
                  <a href="#">ALTERNATIVE</a>
                  <a href="#">BLUES</a>
                  <a href="#">HIP HOP</a>
                  <a href="#">ROCK</a>
                  <a href="#">INDIE</a>
                  <a href="#">METAL</a>
                  <a href="#">POP</a>
                </div>
              </div>
            </li>
            <li><a href="#">À PROPOS</a></li>
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