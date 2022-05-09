<!DOCTYPE html>
<html lang="en">

<head>
  <!--Recommended Meta Tags-->
  <meta charset="utf-8">
  <meta name="language" content="sq">
  <meta http-equiv="content-type" content="text/html">
  <meta name="author" content="Enis Gjini">
  <meta name="designer" content="Enis Gjini">
  <meta name="publisher" content="Enis Gjini">

  <!--Search Engine Optimization Meta Tags-->
  <title> Rafayel Mkrtchyan - Official Website. </title>
  <meta name="description" content="Restaurant DONI">
  <meta name="keywords" content="Restaurant DONI,Restaurant,DONI,DONI Gjinoc,Gjinoc,Gjinoc Doni">


  <!--Optional Meta Tags-->
  <meta name="distribution" content="web">
  <meta name="web_author" content="Rafayel Mkrtchyan">
  <meta name="rating" content="general">

  <!--Meta Tags for HTML pages on Mobile-->
  <meta name="format-detection" content="telephone=yes" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--http-equiv Tags-->
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta http-equiv="Content-Script-Type" content="text/javascript">




  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- Inline CSS -->
  <style>
    .navbar-toggler {
      border: 0 !important;
    }

    .navbar-toggler:focus,
    .navbar-toggler:active,
    .navbar-toggler-icon:focus {
      outline: none !important;
      box-shadow: none !important;
      border: 0 !important;
    }

    /* Lines of the Toggler */
    .toggler-icon {
      width: 30px;
      height: 3px;
      background-color: white;
      display: block;
      transition: all 0.2s;
    }

    /* Adds Space between the lines */
    .middle-bar {
      margin: 5px auto;
    }

    /* State when navbar is opened (START) */
    .navbar-toggler .top-bar {
      transform: rotate(45deg);
      transform-origin: 10% 10%;
    }

    .navbar-toggler .middle-bar {
      opacity: 0;
      filter: alpha(opacity=0);
    }

    .navbar-toggler .bottom-bar {
      transform: rotate(-45deg);
      transform-origin: 10% 90%;
    }

    /* State when navbar is opened (END) */

    /* State when navbar is collapsed (START) */
    .navbar-toggler.collapsed .top-bar {
      transform: rotate(0);
    }

    .navbar-toggler.collapsed .middle-bar {
      opacity: 1;
      filter: alpha(opacity=100);
    }

    .navbar-toggler.collapsed .bottom-bar {
      transform: rotate(0);
    }

    /* State when navbar is collapsed (END) */

    /* Color of Toggler when collapsed */
    .navbar-toggler.collapsed .toggler-icon {
      background-color: white;
    }
  </style>

  <link rel="stylesheet" href="/css/main.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top p-3" style="background-color:#080808;">
    <div class="container">
      <a class="navbar-brand doni-bg-text " href="index.php">Restaurant DONI</a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 doni-paragraph">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Ballina</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rreth-nesh.php">Rresh nesh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galeria.php">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontaktoni.php">Kontaktoni</a>
          </li>
        </ul>
        <div class="d-flex">
          <a href="https://www.facebook.com/restaurandoni" target="_blank"><i class="bi bi-facebook pr-3" id="facebook-icon"></i></a>
          <a href="https://www.instagram.com/restaurant.doni/" target="_blank"><i class="bi bi-instagram pr-3" id="facebook-icon"></i></a>

        </div>
      </div>
    </div>
  </nav>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>