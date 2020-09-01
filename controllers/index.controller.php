<?php

    require_once ("models/index.model.php");

    class ControllerTemplate {

        private $model;

        function __construct(){
            $this->model=new Modelo();
        }

        function index(){
            $peliculas 	=	new Modelo();
            $datos = $peliculas->mostrar();
            require_once("views/index.view.php");
        }

        function guardar(){
            $nombre = $_POST['nombre'];
            $any = $_POST['any'];
            $sql = "insert into peliculas values(null,'$nombre',$any)";

            $pelicula = new Modelo();

            $dato = $pelicula->insertar($sql);

        }
    }
