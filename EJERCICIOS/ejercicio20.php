<?php
class Carrera{
    function __construct($nombre){
        $this->carrera = $nombre;
    }
}
//crear un objeto
$info = new Carrera("Informatica Industrial");
echo $info->carrera;//muestra la propiedaddel objeto carrera
?>