<form action="../Controlador/delete.php" method="POST" >
    <input type="hidden" id="ideliminar" name="id_pelicula">

    <div class="contenedor__form auto" onclick="stop()">
        
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteEliminar').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="titulo">
            <h2 class="tituloCrud"><i class="fas fa-trash-alt"></i> Eliminar</h2>
        </div>
        
        <div class="form--eliminar">
            <h2 class="eliminar center">¿Está seguro que desea eliminarlo?</h2>
        </div>

        <div class="form--eliminar center">
                <input class="boton boton-si" type="submit" value="Sí">
                <input class="boton boton-no" onclick="document.getElementById('flotanteEliminar').style.display='none'" type="button" value="No">     
        </div>
    </div> <!-- .contenedor__form--talento-->
</form>