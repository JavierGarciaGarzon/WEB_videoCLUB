<!-- Page Content -->


<div class="container">

<!--    <h3>Práctica 8 </h3>
    <form  action=""method="POST">
        <input id="text" type="text" name="fragment" placeholder="Cadena de búsqueda">
        <span id="errFragment"></span>
        <br>
        <input id="submit"type="submit" value="Buscar" >
    </form>-->
    <div id="modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Vas a enviar los datos, ¿Estás seguro?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="envia"> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="Cerrar"class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="Enviar" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <div>
        <!-- Heading Row -->
        <div class="row align-items-center my-5">
            <div class="col-lg-7">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="<?= base_url() ?>plantilla/img/imagen1.jpg" alt="">
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-5">
                <h1 class="font-weight-light">Inicia Sesion o Registrate</h1>
                <p>Consigue los beneficios de ser un usuario de nuestra página</p>
                <button class="btn btn-primary" onclick="location.href='<?= base_url() ?>/index.php/home/inSesion'" >Iniciar Sesion/Registrarse</button>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Call to Action Well -->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body">
                <p class="text-white m-0">¡Nuevas peliculas, Recien estrenadas! - Consiguelas al mejor precio online :D</p>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Alita: Angel de combate</h2>

                        <img class="img-fluid rounded mb-4 mb-lg-0" src="<?= base_url() ?>plantilla/img/alita.jpg" alt="">

                    </div>
                    <div class="card-footer">
                        <button id="" onclick="location.href='<?= base_url() ?>index.php/masinfo'" href="#" class="btn btn-primary btn-sm">Más información</button>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Capitana Marvel</h2>

                        <img class="img-fluid rounded mb-4 mb-lg-0" src="<?= base_url() ?>plantilla/img/cmarvel.jpg" alt="">

                    </div>
                    <div class="card-footer">
                        <button id="1" onclick="location.href='<?= base_url() ?>index.php/masinfo'" href="#" class="btn btn-primary btn-sm">Más información</button>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Como entrenar a tu dragon 3</h2>

                        <img class="img-fluid rounded mb-4 mb-lg-0" src="<?= base_url() ?>plantilla/img/dragon3.jpg" alt="">

                    </div>
                    <div class="card-footer">
                       <button id="2" onclick="location.href='<?= base_url() ?>index.php/masinfo'" href="#" class="btn btn-primary btn-sm">Más información</button>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->