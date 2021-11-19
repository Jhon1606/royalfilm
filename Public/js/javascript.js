window.onload=function(){

    var pos=window.name || 0;
    window.scrollTo(0,pos);

}

window.onunload=function(){

    window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);

}

function abrirFlotante(){
    document.getElementById("flotante").style.display = "block";
}

function abrirFlotanteEditar(ideditar){
    
    $.ajax({
        url: "../../General/Queries/infopelicula.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){

        var nombre = info[0].nombre;
        var idioma = info[0].idioma;
        var clasificacion = info[0].clasificacion;
        var duracion = info[0].duracion;
        var estreno = info[0].estreno;
        var urlpelicula = info[0].urlpelicula;
        var sinopsis = info[0].sinopsis;
        var director = info[0].director;
        var reparto = info[0].reparto;

        $("#ideditar").val(ideditar);
        $("#nombre").val(nombre);
        $("#idioma").val(idioma);
        $("#clasificacion").val(clasificacion);
        $("#duracion").val(duracion);
        $("#estreno").val(estreno);
        $("#urlpelicula").val(urlpelicula);
        $("#sinopsis").val(sinopsis);
        $("#director").val(director);
        $("#reparto").val(reparto);
        $("#flotanteEditar").show();
    });
}

function stop(){
    event.stopPropagation();
}

function abrirFlotanteEliminar(ideliminar){
    document.getElementById("ideliminar").value = ideliminar;
    document.getElementById("flotanteEliminar").style.display = "block";
}

