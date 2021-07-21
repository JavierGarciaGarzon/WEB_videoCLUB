<!-- Page Content -->
<div class="container">
    <br>
    <hr>

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h2 align="center">Peliculas</h2>
            <hr>  

        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->


    <?php
    if (sizeof($peliculas) > 0) {
        foreach ($peliculas as $row) {
            echo ' <div>';
            echo '<img style="float:left;margin-left: 2.5%;margin-right:2.5%" src="' . base_url() . $row->imagen . '" alt=""width="500" height="500">';
            echo '</div>';
            echo '<div class="caption">';
            echo ' <table float:right class="datospelicula "display: inline-block>';
            echo '<tr>';
            echo '<th> Sinapsis:';
            echo '<td>';
            echo '<p>' . $row->descripcion . '</p>';
            echo '</td>';
            echo '</th>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Duración:';
            echo '<td>';
            echo '<p>' . $row->duracion . '</p>';
            echo '</td>';
            echo '</th>';
            echo '</tr>';


            echo '</table>';
        }
    }
    ?>


    <!-- /.row -->
