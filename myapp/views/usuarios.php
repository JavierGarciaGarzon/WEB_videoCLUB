<!--
<html>
    <p>Estos son los usuarios actuales.</p>
    
    <?php
    while($fila = mysqli_fetch_array($rs_usuarios)){
        echo '<p>';
        echo '<a href="' . site_url('/usuarios/actuales' . $fila['nick']) . '">' .$fila['nombre'] .'</a>' ; 
            echo '</p>';
            
    }
    ?>
</html>-->