
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="<?= base_url()?>plantilla/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>plantilla/css/signin.css" rel="stylesheet">
  </head>
  <body class="form-signin">
      <?php   
      $data=array('titulo' => 'Home');
        
        $this->load->view("guest/head",$data);
        
        $data1 = array('app' => 'Blog');
        $this->load->view("guest/navegacion",$data1);
       ?>
	<?php echo validation_errors();?>
	<?php echo form_open('auth/login'); ?>
    <form class="form-signin">

  <img class="mb-4" src="<?= base_url()?>plantilla/img/imagen1.jpg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Inicio Sesión</h1>
  <label for="username" class="sr-only">Nick</label>
  <input type="text" id="username" name="username" class="form-control" placeholder="Usuario" required autofocus>
  <label for="password"  class="sr-only">Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Recordar Contraseña
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" value="Login" type="submit">Iniciar Sesión</button>
  <button class="btn btn-lg btn-primary btn-block" value="Registrar" type="submit">Registrarse</button>
  <p class="mt-5 mb-3 text-muted">&copy; Tecnología Web</p>
</form>
  <?php echo form_close(); ?>

<!--

	<label for ="username">Username</label><br/>
	<input type="text" size="20" id= "username" name= "username" />
	<br/>
	<label for="password">Password</label><br/>
	<input class="form-control" type="password" size="20" id="password" name ="password" />
	<br/>
	<input type="submit" value="Login"/>
	
-->
</body>
</html>
