function mostrarOcultarFecha() {
    console.log(2);

    /* VARIABLES DEL CERTIFICADOS BASICOS */
    var opciones_estañado = document.getElementById("color_semaforo_estañado");
    var fecha_estañado = document.getElementById("fecha_estañado");

    var opcion_encintado = document.getElementById("color_semaforo_encintado");
    var fecha_encintado = document.getElementById("fecha_encintado");

    var opcion_eslivas = document.getElementById("color_semaforo_eslivas");
    var fecha_eslivas = document.getElementById("fecha_eslivas");

    var opcion_empaque = document.getElementById("color_semaforo_empaque");
    var fecha_empaque = document.getElementById("fecha_empaque");
    
    var opcion_tapas = document.getElementById("color_semaforo_tapas");
    var fecha_tapas = document.getElementById("fecha_tapas");

    var opcion_etiquetas = document.getElementById("color_semaforo_etiquetas");
    var fecha_etiquetas = document.getElementById("fecha_etiquetas");

    var opcion_cinchado = document.getElementById("color_semaforo_cinchado");
    var fecha_cinchado = document.getElementById("fecha_cinchado");

    var opcion_distribucion = document.getElementById("color_semaforo_distribucion");
    var fecha_distribucion = document.getElementById("fecha_distribucion");
    
    var opcion_aplicacion_terminales = document.getElementById("color_semaforo_aplicacion_terminales");
    var fecha_aplicacion_terminales = document.getElementById("fecha_aplicacion_terminales");

    var opcion_deschaquete = document.getElementById("color_semaforo_deschaquete");
    var fecha_deschaquete = document.getElementById("fecha_deschaquete");

    /* VARIABLES DEL CERTIFICADOS INTERMEDIOS */
    var opcion_corte_manual = document.getElementById("color_semaforo_corte_manual");
    var fecha_corte_manual = document.getElementById("fecha_corte_manual");

    var opcion_corte_eubanks = document.getElementById("color_semaforo_corte_eubanks");
    var fecha_corte_eubanks = document.getElementById("fecha_corte_eubanks");

    var opcion_corte_eubanks_dominios = document.getElementById("color_semaforo_corte_eubanks_dominios");
    var fecha_corte_eubanks_dominios = document.getElementById("fecha_corte_eubanks_dominios");

    var opcion_corte_schleuniger = document.getElementById("color_semaforo_corte_schleuniger");
    var fecha_corte_schleuniger = document.getElementById("fecha_corte_schleuniger");

    var opcion_corte_schleuniger_dominios = document.getElementById("color_semaforo_corte_schleuniger_dominios");
    var fecha_corte_schleuniger_dominios = document.getElementById("fecha_corte_schleuniger_dominios");

    var opcion_corte_schleuniger_jc3985 = document.getElementById("color_semaforo_corte_schleuniger_jc3985");
    var fecha_corte_schleuniger_jc3985 = document.getElementById("fecha_corte_schleuniger_jc3985");
    
    var opcion_corte_artos = document.getElementById("color_semaforo_corte_artos"); 
    var fecha_corte_artos = document.getElementById("fecha_corte_artos");

    var opcion_corte_esliva_maquina = document.getElementById("color_semaforo_corte_esliva_maquina");
    var fecha_corte_esliva_maquina = document.getElementById("fecha_corte_esliva_maquina");

    var opcion_corte_esliva_manual = document.getElementById("color_semaforo_corte_esliva_manual");
    var fecha_corte_esliva_manual = document.getElementById("fecha_corte_esliva_manual");

    var opcion_conectores_fibra_optica = document.getElementById("color_semaforo_conectores_fibra_optica");
    var fecha_conectores_fibra_optica = document.getElementById("fecha_conectores_fibra_optica");

    var opcion_conectores_coaxiales = document.getElementById("color_semaforo_conectores_coaxiales");
    var fecha_conectores_coaxiales = document.getElementById("fecha_conectores_coaxiales");

    var opcion_ensamble_conectores = document.getElementById("color_semaforo_ensamble_conectores");
    var fecha_ensamble_conectores = document.getElementById("fecha_ensamble_conectores");

    /* VARIABLES DEL CERTIFICADOS avanzados */
    var opcion_soldadura = document.getElementById("color_semaforo_soldadura");
    var fecha_soldadura = document.getElementById("fecha_soldadura");

    var opcion_soldadura_ultrasonido = document.getElementById("color_semaforo_soldadura_ultrasonido");
    var fecha_soldadura_ultrasonido = document.getElementById("fecha_soldadura_ultrasonido");

    var opcion_enmallado = document.getElementById("color_semaforo_enmallado");
    var fecha_enmallado = document.getElementById("fecha_enmallado");

    var opcion_impresion_etiquetas = document.getElementById("color_semaforo_impresion_etiquetas");
    var fecha_impresion_etiquetas = document.getElementById("fecha_impresion_etiquetas");

    var opcion_soldadura_jstd = document.getElementById("color_semaforo_soldadura_jstd");
    var fecha_soldadura_jstd = document.getElementById("fecha_soldadura_jstd");

    var opcion_moldeo = document.getElementById("color_semaforo_moldeo");
    var fecha_moldeo = document.getElementById("fecha_moldeo");
    
    var opcion_encapsulado = document.getElementById("color_semaforo_encapsulado");
    var fecha_encapsulado = document.getElementById("fecha_encapsulado");

    var opcion_prueba_electrica = document.getElementById("color_semaforo_prueba_electrica");
    var fecha_prueba_electrica = document.getElementById("fecha_prueba_electrica");    

    //ENSTAÑADO
    if (opciones_estañado.value === "Pendiente" || opciones_estañado.value === "Vacio" || opciones_estañado.value === "") {
        fecha_estañado.classList.add("hidden");
        fecha_estañado.removeAttribute('required');
        fecha_estañado.value = '';
    } else {
        fecha_estañado.classList.remove("hidden");
        fecha_estañado.setAttribute('required', 'required');
    }
    
    //ESLIVAS
    if (opcion_eslivas.value === "Pendiente" || opcion_eslivas.value === "Vacio"||opcion_eslivas.value === "") {
        fecha_eslivas.classList.add("hidden");
        fecha_eslivas.removeAttribute('required')
        fecha_eslivas.value = '';
    } else {
        fecha_eslivas.classList.remove("hidden");
        fecha_eslivas.setAttribute('required','required')
    }

    //EMPAQUES
    if (opcion_empaque.value === "Pendiente" || opcion_empaque.value === "Vacio"||opcion_empaque.value === "") {
        fecha_empaque.classList.add("hidden");
        fecha_empaque.removeAttribute("required");
        fecha_empaque.value = '';
    } else {
        fecha_empaque.classList.remove("hidden");
        fecha_empaque.setAttribute('required','required');
    }

    //TAPAS
    if (opcion_tapas.value === "Pendiente" || opcion_tapas.value === "Vacio"||opcion_tapas.value === "") {
        fecha_tapas.classList.add("hidden");
        fecha_tapas.removeAttribute('required');
        fecha_tapas.value = '';
    } else {
        fecha_tapas.classList.remove("hidden");
        fecha_tapas.setAttribute('required', 'required');
    }

    //ETIQUETAS
    if (opcion_etiquetas.value === "Pendiente" || opcion_etiquetas.value === "Vacio"||opcion_etiquetas.value === "") {
        fecha_etiquetas.classList.add("hidden");
        fecha_etiquetas.removeAttribute('required');
        fecha_etiquetas.value = '';
    } else {
        fecha_etiquetas.classList.remove("hidden");
        fecha_etiquetas.setAttribute('required','required');
    }

    //CINCHADO
    if (opcion_cinchado.value === "Pendiente" || opcion_cinchado.value === "Vacio"||opcion_cinchado.value === "") {
        fecha_cinchado.classList.add("hidden");
        fecha_cinchado.removeAttribute('required');
        fecha_cinchado.value = '';
    } else {
        fecha_cinchado.classList.remove("hidden");
        fecha_cinchado.setAttribute('required','required');
    }

    //DISTRIBUCION
    if (opcion_distribucion.value === "Pendiente" || opcion_distribucion.value === "Vacio"||opcion_distribucion.value === "") {
        fecha_distribucion.classList.add("hidden");
        fecha_distribucion.removeAttribute('required');
        fecha_distribucion.value = '';
    } else {
        fecha_distribucion.classList.remove("hidden");
        fecha_distribucion.setAttribute('required','required');
    }

    //APLICACION TERMINALES
    if (opcion_aplicacion_terminales.value === "Pendiente" || opcion_aplicacion_terminales.value === "Vacio"|| opcion_aplicacion_terminales.value === "") {
        fecha_aplicacion_terminales.classList.add("hidden");
        fecha_aplicacion_terminales.removeAttribute('required');
        fecha_aplicacion_terminales.value = '';
    } else {
        fecha_aplicacion_terminales.classList.remove("hidden");
        fecha_aplicacion_terminales.setAttribute('required','required');
    }

    //DESCHAQUETE
    if (opcion_deschaquete.value === "Pendiente" || opcion_deschaquete.value === "Vacio"|| opcion_deschaquete.value === "") {
        fecha_deschaquete.classList.add("hidden");
        fecha_deschaquete.removeAttribute('required');
        fecha_deschaquete.value = '';
    } else {
        fecha_deschaquete.classList.remove("hidden");
        fecha_deschaquete.setAttribute('required','required');
    }

    //CORTE MANUAL
    if (opcion_corte_manual .value === "Pendiente" || opcion_corte_manual .value === "Vacio"|| opcion_corte_manual .value === "") {
        fecha_corte_manual .classList.add("hidden");
        fecha_corte_manual.removeAttribute('required');
        fecha_corte_manual.value = '';
    } else {
        fecha_corte_manual.classList.remove("hidden");
        fecha_corte_manual.setAttribute('required','required');
    }
    
    //CORTE EUBANKS
    if (opcion_corte_eubanks.value === "Pendiente" || opcion_corte_eubanks.value === "Vacio"|| opcion_corte_eubanks.value === "") {
        fecha_corte_eubanks.classList.add("hidden");
        fecha_corte_eubanks.removeAttribute('required');
        fecha_corte_eubanks.value = '';
    } else {
        fecha_corte_eubanks.classList.remove("hidden");
        fecha_corte_eubanks.setAttribute('required','required');
    }

    //CORTE EUBANKS-DOMINOS
    if (opcion_corte_eubanks_dominios.value === "Pendiente" || opcion_corte_eubanks_dominios.value === "Vacio"|| opcion_corte_eubanks_dominios.value === "") {
        fecha_corte_eubanks_dominios.classList.add("hidden");
        fecha_corte_eubanks_dominios.removeAttribute('required');
        fecha_corte_eubanks_dominios.value = '';
    } else {
        fecha_corte_eubanks_dominios.classList.remove("hidden");
        fecha_corte_eubanks_dominios.setAttribute('required','required');
    }

    //CORTE SCHLEUNIGER
    if (opcion_corte_schleuniger.value === "Pendiente" || opcion_corte_schleuniger.value === "Vacio"|| opcion_corte_schleuniger.value === "") {
        fecha_corte_schleuniger.classList.add("hidden");
        fecha_corte_schleuniger.removeAttribute('required');
        fecha_corte_schleuniger.value = '';
    } else {
        fecha_corte_schleuniger.classList.remove("hidden");
        fecha_corte_schleuniger.setAttribute('required','required');
    }

    //CORTE SCHLEUNIGER-DOMINOS
    if (opcion_corte_schleuniger_dominios.value === "Pendiente" || opcion_corte_schleuniger_dominios.value === "Vacio"|| opcion_corte_schleuniger_dominios.value === "") {
        fecha_corte_schleuniger_dominios.classList.add("hidden");
        fecha_corte_schleuniger_dominios.removeAttribute('required');
        fecha_corte_schleuniger_dominios = '';
    } else {
        fecha_corte_schleuniger_dominios.classList.remove("hidden");
        fecha_corte_schleuniger_dominios.setAttribute('required','required');
    }
    
    //CORTE SCHLEUNIGER JC3985
    if (opcion_corte_schleuniger_jc3985.value === "Pendiente" || opcion_corte_schleuniger_jc3985.value === "Vacio"|| opcion_corte_schleuniger_jc3985.value === "") {
        fecha_corte_schleuniger_jc3985.classList.add("hidden");
        fecha_corte_schleuniger_jc3985.removeAttribute('required');
        fecha_corte_schleuniger_jc3985.value = '';
    } else {
        fecha_corte_schleuniger_jc3985.classList.remove("hidden");
        fecha_corte_schleuniger_jc3985.setAttribute('required','required');
    }

    //CORTE ARTOS
    if (opcion_corte_artos.value === "Pendiente" || opcion_corte_artos.value === "Vacio" || opcion_corte_artos.value === "") {
        fecha_corte_artos.classList.add("hidden");
        fecha_corte_artos.removeAttribute('required');
        fecha_corte_artos.value = '';
    } else {
        fecha_corte_artos.classList.remove("hidden");
        fecha_corte_artos.setAttribute('required','required');
    }
    
    //CORTE ESLIVA MAQUINA
    if (opcion_corte_esliva_maquina.value === "Pendiente" || opcion_corte_esliva_maquina.value === "Vacio"|| opcion_corte_esliva_maquina.value === "") {
        fecha_corte_esliva_maquina.classList.add("hidden");
        fecha_corte_esliva_maquina.removeAttribute('required');
        fecha_corte_esliva_maquina.value = '';
    } else {
        fecha_corte_esliva_maquina.classList.remove("hidden");
        fecha_corte_esliva_maquina.setAttribute('required','required');
    }

    //CORTE ESLIVA MANUAL
    if (opcion_corte_esliva_manual.value === "Pendiente" || opcion_corte_esliva_manual.value === "Vacio"|| opcion_corte_esliva_manual.value === "") {
        fecha_corte_esliva_manual.classList.add("hidden");
        fecha_corte_esliva_manual.removeAttribute('required');
        fecha_corte_esliva_manual.value = '';
    } else {
        fecha_corte_esliva_manual.classList.remove("hidden");
        fecha_corte_esliva_manual.setAttribute('required','required')
    }

    if (opcion_conectores_fibra_optica.value === "Pendiente" || opcion_conectores_fibra_optica.value === "Vacio"|| opcion_conectores_fibra_optica.value === "") {
        fecha_conectores_fibra_optica.classList.add("hidden");
        fecha_conectores_fibra_optica.removeAttribute('required');
        fecha_conectores_fibra_optica.value = '';
    } else {
        fecha_conectores_fibra_optica.classList.remove("hidden");
        fecha_conectores_fibra_optica.setAttribute('required','required');
    }

    if (opcion_conectores_coaxiales.value === "Pendiente" || opcion_conectores_coaxiales.value === "Vacio"|| opcion_conectores_coaxiales.value === "") {
        fecha_conectores_coaxiales.classList.add("hidden");
        fecha_conectores_coaxiales.removeAttribute('required');
        fecha_conectores_coaxiales.value = '';
    } else {
        fecha_conectores_coaxiales.classList.remove("hidden");
        fecha_conectores_coaxiales.setAttribute('required','required');
    }

    if (opcion_ensamble_conectores.value === "Pendiente" || opcion_ensamble_conectores.value === "Vacio"|| opcion_ensamble_conectores.value === "") {
        fecha_ensamble_conectores.classList.add("hidden");
        fecha_ensamble_conectores.removeAttribute('required');
        fecha_ensamble_conectores.value = '';
    } else {
        fecha_ensamble_conectores.classList.remove("hidden");
        fecha_ensamble_conectores.setAttribute('required','required');
    }

    if (opcion_soldadura.value === "Pendiente" || opcion_soldadura.value === "Vacio"|| opcion_soldadura.value === "") {
        fecha_soldadura.classList.add("hidden");
        fecha_soldadura.removeAttribute('required');
        fecha_soldadura.value = '';
    } else {
        fecha_soldadura.classList.remove("hidden");
        fecha_soldadura.setAttribute('required','required');
    }

    if (opcion_soldadura_ultrasonido.value === "Pendiente" || opcion_soldadura_ultrasonido.value === "Vacio"|| opcion_soldadura_ultrasonido.value === "") {
        fecha_soldadura_ultrasonido.classList.add("hidden");
        fecha_soldadura_ultrasonido.removeAttribute('required');
        fecha_soldadura_ultrasonido.value = '';
    } else {
        fecha_soldadura_ultrasonido.classList.remove("hidden");
        fecha_soldadura_ultrasonido.setAttribute('required','required');
    }

    if (opcion_enmallado.value === "Pendiente" || opcion_enmallado.value === "Vacio" || opcion_enmallado.value === "") {
        fecha_enmallado.classList.add("hidden");
        fecha_enmallado.removeAttribute('required');
        fecha_enmallado.value = '';
    } else {
        fecha_enmallado.classList.remove("hidden");
        fecha_enmallado.setAttribute('required','required');
    }

    if (opcion_impresion_etiquetas.value === "Pendiente" || opcion_impresion_etiquetas.value === "Vacio"|| opcion_impresion_etiquetas.value === "") {
        fecha_impresion_etiquetas.classList.add("hidden");
        fecha_impresion_etiquetas.removeAttribute('required');
        fecha_impresion_etiquetas.value = '';
    } else {
        fecha_impresion_etiquetas.classList.remove("hidden");
        fecha_impresion_etiquetas.setAttribute('required','required');
    }

    if (opcion_soldadura_jstd.value === "Pendiente" || opcion_soldadura_jstd.value === "Vacio"|| opcion_soldadura_jstd.value === "") {
        fecha_soldadura_jstd.classList.add("hidden");
        fecha_soldadura_jstd.removeAttribute('required');
        fecha_soldadura_jstd.value = '';
    } else {
        fecha_soldadura_jstd.classList.remove("hidden");
        fecha_soldadura_jstd.setAttribute('required','required');
    }

    if (opcion_moldeo.value === "Pendiente" || opcion_moldeo.value === "Vacio"|| opcion_moldeo.value === "") {
        fecha_moldeo.classList.add("hidden");
        fecha_moldeo.removeAttribute('required');
        fecha_moldeo.value = '';
    } else {
        fecha_moldeo.classList.remove("hidden");
        fecha_moldeo.setAttribute('required','required');
    }

    if (opcion_encapsulado.value === "Pendiente" || opcion_encapsulado.value === "Vacio"|| opcion_encapsulado.value === "") {
        fecha_encapsulado.classList.add("hidden");
        fecha_encapsulado.removeAttribute('required');
        fecha_encapsulado.value = '';
    } else {
        fecha_encapsulado.classList.remove("hidden");
        fecha_encapsulado.setAttribute('required','required');
    }

    if (opcion_prueba_electrica.value === "Pendiente" || opcion_prueba_electrica.value === "Vacio"|| opcion_prueba_electrica.value === "") {
        fecha_prueba_electrica.classList.add("hidden");
        fecha_prueba_electrica.removeAttribute('required');
        fecha_prueba_electrica.value = '';
    } else {
        fecha_prueba_electrica.classList.remove("hidden");
        fecha_prueba_electrica.setAttribute('required','required');
    }

    /////////////////////////////////////////////////////////////////////

}