<?php
    require_once('../Modelo/pelicula.php');

    $modeloPelicula= new pelicula();
    $peliculas = $modeloPelicula->get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/css/estilo.css">
    <link rel="stylesheet" href="../../Public/css/tabla.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/768de8c2f5.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="noopener"></script>
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.html">
                    <h1 class="no-margin centrar-texto">RoyalFilms</span></h1>
                </a>
                <nav class="navegacion">
                    <a href="nosotros.html" class="navegacion__enlace">Peliculas</a>
                </nav>
            </div>
        </div>
    </header>

    <section>
        <main class="contenedor">
            <div class="contenedor__bloque">
                <div class="contenedor__texto">
                    <input type="search" placeholder="Buscar..." class="buscar" onchange="filtrar(this.value)" value="">
                    
                    <a href="Javascript:void()" onclick="abrirFlotante()"><i class="fa fa-plus icono"></i></a>
                    <div class="crud">
                        <table class="tabla">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Película</th>
                                    <th class="anchoa2">Clasificacion</th>
                                    <th class="anchoa2">Fecha de estreno</th>
                                    <th class="anchoa">Acciones</th>
                                </tr>
                            </thead>
              
                            <tbody>
                            <?php         
                                if($peliculas != null){ 
                                    foreach($peliculas as $pelicula){
                            ?>
                                <tr class="fila">
                                    <td><?php echo $pelicula['id_pelicula']; ?></td>
                                    <td class="center"><?php echo $pelicula['nombre']; ?></td>
                                    <td class="center"><?php echo $pelicula['clasificacion']; ?></td>
                                    <td class="center"><?php echo  date("d/m/Y", strtotime($pelicula['estreno'])); ?></td>
                                    <td class="center">
                                        <a href="Javascript:void()" onclick="abrirFlotanteEditar(<?php echo $pelicula['id_pelicula']; ?>)" class="link" title="Editar"><i class="fa fa-pencil color"></i></a>
                                        <a href="Javascript:void()" onclick="abrirFlotanteEliminar(<?php echo $pelicula['id_pelicula']; ?>)" class="link" title="Eliminar"><i class="fas fa-trash-alt color"></i></a>
                                    </td>
                                </tr>

                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- .contenedor__texto--contactamos-->

                <div id="flotante" class="contenedor__bloque form--none" >
                    <div onclick="this.parentNode.style.display='none'" class="formulario"></div>

                    <div class="form" onclick="document.getElementById('flotante').style.display='none'">
                       <?php
                            require_once('add.php');
                        ?>
                    </div> <!-- .form-->
                </div> <!-- .contenedor__bloque formulario-->


                <!-- EDITAR -->

                <div id="flotanteEditar" class="contenedor__bloque form--none" >
                    <div class="formulario"></div>

                    <div class="form" onclick="document.getElementById('flotanteEditar').style.display='none'">
                        <?php
                            require_once('edit.php');
                        ?>
                       
                    </div> <!-- .form-->
                </div> <!-- .contenedor__bloque formulario-->

                <!-- ELIMINAR -->

                <div id="flotanteEliminar" class="contenedor__bloque form--none" >
                    <div class="formulario"></div>

                    <div class="form" onclick="document.getElementById('flotanteEliminar').style.display='none'">
                        <?php
                            require_once('delete.php');
                        ?>
                    </div> <!-- .form-->
                </div> <!-- .contenedor__bloque formulario-->
            </div>
        </main>
    </section>

    <footer class="footer">
        <p>2021 - Todos los derechos reservados</p>
    </footer>

    <script src="../../Public/js/javascript.js"></script>
</body>
</html>