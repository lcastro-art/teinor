
<?php
    require_once("../../config/conexion.php");

    $conexion = mysqli_connect($servidor,$usuari,$password,$bbdd);
    $array = array();

    if(isset($_POST['ordenar'])){

        $orden = $_POST['ordenar'];

        if($orden == 'up'){
            $sql = "select * from peliculas order by any";
        }
        elseif($orden == 'down'){
            $sql = "select * from peliculas order by any desc";
        }

        $res = mysqli_query($conexion,$sql);

        while($fila = mysqli_fetch_assoc($res)){
            $nombre = $fila['nombre'];
            $any = $fila['any'];

            $array[] = array("nombre"=>$nombre,
                            "any"=>$any);
        }

        echo json_encode($array);
    }

?>
