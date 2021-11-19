<?php

require_once("../../Pelicula/Modelo/pelicula.php");

$ideditar = $_POST["ideditar"];
$arreglo = array();

$modeloPelicula = new pelicula();
$informacionPelicula = $modeloPelicula->getById($ideditar);

if ($informacionPelicula != null){

    foreach ($informacionPelicula as $infoPelicula) {
       
        $arreglo[] = array(
                            "nombre"=>$infoPelicula["nombre"],
                            "idioma"=>$infoPelicula["idioma"],
                            "clasificacion"=>$infoPelicula["clasificacion"],
                            "duracion"=>$infoPelicula["duracion"],
                            "estreno"=>$infoPelicula["estreno"],
                            "urlpelicula"=>$infoPelicula["urlpelicula"],
                            "sinopsis"=>$infoPelicula["sinopsis"],
                            "director"=>$infoPelicula["director"],
                            "reparto"=>$infoPelicula["reparto"]
                        );
    }
}

echo json_encode($arreglo);

?>