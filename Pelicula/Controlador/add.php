<?php

require_once('../Modelo/pelicula.php');

if ($_POST) {
    $modeloPelicula = new pelicula();

    $nombre = $_POST['nombre'];
    $idioma = $_POST['idioma'];
    $clasificacion = $_POST['clasificacion'];
    $duracion = $_POST['duracion'];
    $estreno = $_POST['estreno'];
    $urlpelicula = $_POST['urlpelicula'];
    $sinopsis = $_POST['sinopsis'];
    $director = $_POST['director'];
    $reparto = $_POST['reparto'];
    
    $modeloPelicula->add($nombre,$idioma,$clasificacion,$duracion,$estreno,$urlpelicula,$sinopsis,$director,$reparto);
    }else{
        header('Location: ../../index.php');
    }

?>