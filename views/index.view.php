<?php require "views/header.php" ?>
<div id="body">
    
    
    <div class="peliculas row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        <?php foreach ($datos as $key=> $value) {
            $nombre = $value['nombre'];
            $any = $value['any'];
            echo "<div class='tarjetas col text-center  pb-3 pt-3'><p class='nombre2'>$nombre</p><p class='any2'><em>$any</em></p></div>";

        }
        ?>
        
</div>
<?php require "views/footer.php" ?>
    
