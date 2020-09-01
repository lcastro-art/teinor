
<?php
    require_once("../../config/conexion.php");

    $conexion = mysqli_connect($servidor,$usuari,$password,$bbdd);
    $array = array();

    if(isset($_POST['busqueda'])){
        $busqueda = $_POST['busqueda'];
        $sql = "select * from peliculas where nombre like '%$busqueda%'";
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
