/* VALIDACION DE SOLO LETRAS */
function onlyletters(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales)
    {
        if(key == especiales[i])
        {
            tecla_especial = true;
            break;
        }
    }   

    if(letras.indexOf(tecla)==-1 && !tecla_especial)
    { 
        Swal.fire('¡Favor de ingresar solo letras!')
        return false;
    }
}


/* VALIDACION DE SOLO NUMEROS */ 
function onlynumbers(e){
    key=e.keycode || e.which;
    teclado=String.fromCharCode(key);
    numeros="0123456789";
    especiales="8-37-38-46";
    teclado_especial=false;

    for(var i in especiales)
    {
        if(key==especiales[i])
        {
        teclado_especial=true;
        }
        break;
    }
    if(numeros.indexOf(teclado)==-1 && !teclado_especial)
    {
        Swal.fire('¡Favor de ingresar solo numeros!')
        return false;
    }
}

/* VALIDACION DE EMPLEADO UNICO */
function validar_empleado(id)
{   
    $.getJSON("validation/employeer_validation.php?nuevo=" + id).done(function(datos)
        {

        console.log(datos);
            
        if (datos[0][0]>0) 
        {
            Swal.fire('¡Este empleado ya se esta registrado!')
            document.getElementById("numero_empleado").value='';
        }
                
    });  
}

// VALIDACION DE FECHA MAYOR

function validarFechaMenorActual(date){
    var x=new Date();
    var fecha = date.split("/");
    x.setFullYear(fecha[2],fecha[1]-1,fecha[0]);
    var today = new Date();

    if (x >= today)
        return false;
    else
        return true;
    }

$(document).ready(function() {    
    $('#example').DataTable({        
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            },
        //para usar los botones   
        responsive: "true",
        dom: 'Bfrtilp',       
        buttons:[ 
			{
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success'
			},
			{
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger'
			},
			{
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info'
			},
		]	        
    });     
});

