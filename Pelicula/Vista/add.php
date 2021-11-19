<form action="../Controlador/add.php" method="POST" >
    <div class="contenedor__form auto" onclick="stop()">
        
        <div class="cerrar">
            <p onclick="document.getElementById('flotante').style.display='none'" 
            class="cerrar--form" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="titulo">
            <h2 class="tituloCrud"><i class="fa fa-plus"></i> Añadir película</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="nombre">Nombre de la película</label>
            <input type="text" class="form--input" name="nombre" placeholder="Nombre de la película..."
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase" required="">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="idioma">Idioma</label>
            <input type="text" class="form--input" name="idioma" placeholder="Idioma..." required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="clasificacion">Clasificación</label>
            <select name="clasificacion" class="form--input" required="">
                <option value="">Seleccione una opción</option>
                <option>Todo público</option>
                <option>+12 años</option>
                <option>+14 años</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="duracion">Duración (min)</label>
            <input type="number" class="form--input" name="duracion" placeholder="Duración de la película..." required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="estreno">Fecha de estreno</label>
            <input class="form--input" type="date" name="estreno">
        </div>

        <div class="form--flex">
            <label class="form--label" for="urlpelicula">Url del trailer</label>
            <input type="text" name="urlpelicula" class="form--input" required=""></input>
        </div>

        <div class="form--flex">
            <label class="form--label" for="sinopsis">Sinopsis</label>
            <textarea name="sinopsis" class="form--input" placeholder="Especifique el nombre de la obra o labor..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase" required=""></textarea>
        </div>

        <div class="form--flex">
            <label class="form--label" for="director">Director de la película</label>
            <textarea name="director" class="form--input" placeholder="Director de la película..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase" required=""></textarea>
        </div>

        <div class="form--flex">
            <label class="form--label" for="reparto">Reparto de la película</label>
            <textarea name="reparto" class="form--input" placeholder="Reparto de la película..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase" required=""></textarea>
        </div>

        <div class="form--boton boton--enviar">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>