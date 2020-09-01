<?php
// require_once("config/conexion.php");
// include "../config/conexion.php";

class Modelo{
    private $Peliculas;
    private $db;
    public function __construct(){
        $this->Peliculas = array();

        include("config/conexion.php");
        $this->db = mysqli_connect($servidor,$usuari,$password,$bbdd);
    }
    public function insertar($sql){
        $resultado = $this->db->query($sql);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }
    public function mostrar(){
        $sql = "select * from peliculas order by ID";

        foreach ($this->db->query($sql) as $res) {
            $this->Peliculas[] = $res;
        }
        return $this->Peliculas;
    } 

}