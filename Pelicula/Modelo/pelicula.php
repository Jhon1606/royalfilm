<?php 
require_once("../../conexion.php");

class pelicula extends conexion{

    public function __construct(){
        $this->conexion=parent::__construct();
    }   

    public function add($nombre,$idioma,$clasificacion,$duracion,$estreno,$urlpelicula,$sinopsis,$director,$reparto){
    $statement=$this->conexion->prepare("INSERT INTO pelicula ( nombre, idioma, clasificacion, duracion, estreno, urlpelicula, sinopsis, director, reparto)
                                        VALUES(:nombre, :idioma, :clasificacion, :duracion, :estreno, :urlpelicula, :sinopsis, :director, :reparto)");
    $statement->bindParam(':nombre',$nombre);
    $statement->bindParam(':idioma',$idioma);
    $statement->bindParam(':clasificacion',$clasificacion);
    $statement->bindParam(':duracion',$duracion);
    $statement->bindParam(':estreno',$estreno);
    $statement->bindParam(':urlpelicula',$urlpelicula);
    $statement->bindParam(':sinopsis',$sinopsis);
    $statement->bindParam(':director',$director);
    $statement->bindParam(':reparto',$reparto);

    if($statement->execute()){
        header('Location: ../Vista/index.php');
    }else{
        header('Location: ../Vista/add.php');
    }

    }
  
    public function get(){
        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM pelicula");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getById($id_pelicula){

        $rows=null;
        $statement=$this->conexion->prepare("SELECT * FROM pelicula WHERE id_pelicula=:id_pelicula");
        $statement->bindParam(":id_pelicula",$id_pelicula);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function update($id_pelicula,$nombre,$idioma,$clasificacion,$duracion,$estreno,$urlpelicula,$sinopsis,$director,$reparto){
        $statement=$this->conexion->prepare("UPDATE pelicula SET nombre=:nombre, idioma=:idioma, 
                                            clasificacion=:clasificacion, duracion=:duracion, estreno=:estreno, urlpelicula=:urlpelicula, 
                                            sinopsis=:sinopsis, director=:director, reparto=:reparto WHERE id_pelicula = :id_pelicula");


         $statement->bindParam(':id_pelicula',$id_pelicula);
         $statement->bindParam(':nombre',$nombre);
         $statement->bindParam(':idioma',$idioma);
         $statement->bindParam(':clasificacion',$clasificacion);
         $statement->bindParam(':duracion',$duracion);
         $statement->bindParam(':estreno',$estreno);
         $statement->bindParam(':urlpelicula',$urlpelicula);
         $statement->bindParam(':sinopsis',$sinopsis);
         $statement->bindParam(':director',$director);
         $statement->bindParam(':reparto',$reparto);
         
         if($statement->execute()){
            header('Location: ../Vista/index.php');
         }else{
             header('Location: ../Vista/edit.php');
         }
    }

    public function delete($id_pelicula){
        $statement=$this->conexion->prepare("DELETE FROM pelicula WHERE id_pelicula = :id_pelicula");
        $statement->bindParam(":id_pelicula",$id_pelicula);
        if($statement->execute()){
            header('Location: ../Vista/index.php');
        }else{
            header('Location: ../Vista/delete.php');
        }
    }
}

?>