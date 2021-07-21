<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Las Mejores Peliculas y Series</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
              <button  class="btn btn-link" onclick="location.href = '<?= base_url() ?>/index.php/home'" >Inicio</button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca de</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">Carrito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Series</a>
          </li>
          <li class="nav-item">
              <button  class="btn btn-link" onclick="location.href = '<?= base_url() ?>/index.php/peliculas'" >Peliculas</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>