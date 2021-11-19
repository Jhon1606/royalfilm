<?php

require_once('../Modelo/pelicula.php');

if ($_POST) {
    $modeloPelicula = new pelicula();

    $id_pelicula = $_POST['id_pelicula'];
    $modeloPelicula->delete($id_pelicula);
}else{
    header('Location: ../../index.php');
}

?>