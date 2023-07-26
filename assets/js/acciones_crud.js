console.log(2);



function modificar(id){
    window.location = "update.php?idmodificar=" + id;
}

function cerrar_sesion()
{
    if (confirm("¿Estas seguro de cerrar la sesion")) {
        window.location = "cerrar_sesion.php"
    }
}


