<?php
class Modelo{
    private $Peliculas;
    private $db;
    public function __construct(){
        $this->Peliculas = array();
        $this->db=new PDO('mysql:host=localhost:3307;dbname=teinor',"root","");
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