<?php 

    require 'database/conexion_bd.php'; 

    $obj = new BD_PDO();

    $detalles_empleado =  $obj->Ejecutar_Instruccion("SELECT * FROM tblmatriz WHERE id_certificacion = '".@$_GET['idmodificar']."'");

    //var_dump($detalles_empleado);

    if(isset($_POST['btnmodificar'])){

        //DATOS EMPLEADO
        @$numero_empleado = $_POST['numero_empleado'];
        @$nombre_empleado = $_POST['nombre_empleado'];
        @$apellido_empleado = $_POST['apellido_empleado'];
        @$fecha_ingreso_empleado = $_POST['fecha_ingreso_empleado'];

        //VARIABLES POST

        //CERTIFICACIONES BASICAS
        @$estañado = $_POST['color_semaforo_estañado'];
        @$fecha_estañado = $_POST['fecha_estañado'];
        
        if($_POST['fecha_estañado']){
            @$estañado_limite = new DateTime($fecha_estañado);
            @$estañado_limite->add(new DateInterval('P6M'));
            @$res_estañado = $estañado_limite->format('Y-m-d');
        }
        else{
            @$res_estañado = '';
        } 

        @$encintado = $_POST['color_semaforo_encintado'];
        @$fecha_encintado = $_POST['fecha_encintado'];
        if($_POST['fecha_encintado']){
            @$encintado_limite = new DateTime($fecha_encintado);
            @$encintado_limite->add(new DateInterval('P6M'));
            @$res_encintado = $encintado_limite->format('Y-m-d');
        }
        else{
            @$res_encintado = '';
        }

        @$eslivas = $_POST['color_semaforo_eslivas'];
        @$fecha_eslivas = $_POST['fecha_eslivas'];
        if($_POST['fecha_eslivas']){
            @$eslivas_limite = new DateTime($fecha_eslivas);
            @$eslivas_limite->add(new DateInterval('P6M'));
            @$res_eslivas = $eslivas_limite->format('Y-m-d');
        }
        else{
            @$res_eslivas = '';
        }

        @$empaque = $_POST['color_semaforo_empaque'];
        @$fecha_empaque = $_POST['fecha_empaque'];
        if($_POST['fecha_empaque']){
            @$empaque_limite = new DateTime($fecha_empaque);
            @$empaque_limite->add(new DateInterval('P6M'));
            @$res_empaque = $empaque_limite->format('Y-m-d');
        }
        else{
            @$res_empaque = '';
        }

        @$tapas = $_POST['color_semaforo_tapas'];
        @$fecha_tapas = $_POST['fecha_tapas'];
        if($_POST['fecha_tapas']){
            @$tapas_limite = new DateTime($fecha_tapas);
            @$tapas_limite->add(new DateInterval('P6M'));
            @$res_tapas = $tapas_limite->format('Y-m-d');
        }
        else{
            @$res_tapas = '';
        }

        @$etiquetas = $_POST['color_semaforo_etiquetas'];
        @$fecha_etiquetas = $_POST['fecha_etiquetas'];
        if($_POST['fecha_etiquetas']){
            @$etiquetas_limite = new DateTime($fecha_etiquetas);
            @$etiquetas_limite->add(new DateInterval('P6M'));
            @$res_etiquetas = $etiquetas_limite->format('Y-m-d');
        }
        else{
            @$res_etiquetas = '';
        }

        @$cinchado = $_POST['color_semaforo_cinchado'];
        @$fecha_cinchado = $_POST['fecha_cinchado'];
        if($_POST['fecha_cinchado']){
            @$cinchado_limite = new DateTime($fecha_cinchado);
            @$cinchado_limite->add(new DateInterval('P6M'));
            @$res_cinchado = $cinchado_limite->format('Y-m-d');
        }
        else{
            @$res_cinchado = '';
        }

        @$distribucion = $_POST['color_semaforo_distribucion'];
        @$fecha_distribucion = $_POST['fecha_distribucion'];
        if($_POST['fecha_distribucion']){
            @$distribucion_limite = new DateTime($fecha_distribucion);
            @$distribucion_limite->add(new DateInterval('P6M'));
            @$res_distribucion = $distribucion_limite->format('Y-m-d');
        }
        else{
            @$res_distribucion = '';
        }

        @$aplicacion_terminales = $_POST['color_semaforo_aplicacion_terminales'];
        @$fecha_aplicacion_terminales = $_POST['fecha_aplicacion_terminales'];
        if($_POST['fecha_aplicacion_terminales']){
            @$aplicacion_terminales_limite = new DateTime($fecha_aplicacion_terminales);
            @$aplicacion_terminales_limite->add(new DateInterval('P6M'));
            @$res_aplicacion_terminales = $aplicacion_terminales_limite->format('Y-m-d');
        }
        else{
            @$res_aplicacion_terminales = '';
        }

        @$deschaquete = $_POST['color_semaforo_deschaquete'];
        @$fecha_deschaquete = $_POST['fecha_deschaquete'];
        if($_POST['fecha_deschaquete']){
            @$deschaquete_limite = new DateTime($fecha_deschaquete);
            @$deschaquete_limite->add(new DateInterval('P6M'));
            @$res_deschaquete = $deschaquete_limite->format('Y-m-d');
        }
        else{
            @$res_deschaquete = '';
        }

        //CERTIFICACIONES INTERMEDIAS

        @$corte_manual = $_POST['color_semaforo_corte_manual'];
        @$fecha_corte_manual = $_POST['fecha_corte_manual'];
        if($_POST['fecha_corte_manual']){
            @$corte_manual_limite = new DateTime($fecha_corte_manual);
            @$corte_manual_limite->add(new DateInterval('P6M'));
            @$res_corte_manual = $corte_manual_limite->format('Y-m-d');
        }
        else{
            @$res_corte_manual = '';
        }

        @$corte_eubanks = $_POST['color_semaforo_corte_eubanks'];
        @$fecha_corte_eubanks = $_POST['fecha_corte_eubanks'];
        if($_POST['fecha_corte_eubanks']){
            @$corte_eubanks_limite = new DateTime($fecha_corte_eubanks);
            @$corte_eubanks_limite->add(new DateInterval('P6M'));
            @$res_corte_eubanks = $corte_eubanks_limite->format('Y-m-d');
        }
        else{
            @$res_corte_eubanks = '';
        }

        @$corte_eubanks_dominios = $_POST['color_semaforo_corte_eubanks_dominios'];
        @$fecha_corte_eubanks_dominios = $_POST['fecha_corte_eubanks_dominios'];
        if($_POST['fecha_corte_eubanks_dominios']){
            @$corte_eubanks_dominios_limite = new DateTime($fecha_corte_eubanks_dominios);
            @$corte_eubanks_dominios_limite->add(new DateInterval('P6M'));
            @$res_corte_eubanks_dominios = $corte_eubanks_dominios_limite->format('Y-m-d');
        }
        else{
            @$res_corte_eubanks_dominios = '';
        }

        @$corte_schleuniger = $_POST['color_semaforo_corte_schleuniger'];
        @$fecha_corte_schleuniger = $_POST['fecha_corte_schleuniger'];
        if($_POST['fecha_corte_schleuniger']){
            @$corte_schleuniger_limite = new DateTime($fecha_corte_schleuniger);
            @$corte_schleuniger_limite->add(new DateInterval('P6M'));
            @$res_corte_schleuniger = $corte_schleuniger_limite->format('Y-m-d');
        }
        else{
            @$res_corte_schleuniger = '';
        }

        @$corte_schleuniger_dominios = $_POST['color_semaforo_corte_schleuniger_dominios'];
        @$fecha_corte_schleuniger_dominios = $_POST['fecha_corte_schleuniger_dominios'];
        if($_POST['fecha_corte_schleuniger_dominios']){
            @$corte_schleuniger_dominios_limite = new DateTime($fecha_corte_schleuniger_dominios);
            @$corte_schleuniger_dominios_limite->add(new DateInterval('P6M'));
            @$res_corte_schleuniger_dominios = $corte_schleuniger_dominios_limite->format('Y-m-d');
        }
        else{
            @$res_corte_schleuniger_dominios = '';
        }

        @$corte_schleuniger_jc3985 = $_POST['color_semaforo_corte_schleuniger_jc3985'];
        @$fecha_corte_schleuniger_jc3985 = $_POST['fecha_corte_schleuniger_jc3985'];
        if($_POST['fecha_corte_schleuniger_jc3985']){
            @$corte_schleuniger_jc3985_limite = new DateTime($fecha_corte_schleuniger_jc3985);
            @$corte_schleuniger_jc3985_limite->add(new DateInterval('P6M'));
            @$res_corte_schleuniger_jc3985 = $corte_schleuniger_jc3985_limite->format('Y-m-d');
        }
        else{
            @$res_corte_schleuniger_jc3985 = '';
        }

        @$corte_artos = $_POST['color_semaforo_corte_artos'];
        @$fecha_corte_artos = $_POST['fecha_corte_artos'];
        if($_POST['fecha_corte_artos']){
            @$corte_artos_limite = new DateTime($fecha_corte_artos);
            @$corte_artos_limite->add(new DateInterval('P6M'));
            @$res_corte_artos = $corte_artos_limite->format('Y-m-d');
        }
        else{
            @$res_corte_artos = '';
        }

        @$corte_esliva_maquina = $_POST['color_semaforo_corte_esliva_maquina'];
        @$fecha_corte_esliva_maquina = $_POST['fecha_corte_esliva_maquina'];
        if($_POST['fecha_corte_esliva_maquina']){
            @$corte_esliva_maquina_limite = new DateTime($fecha_corte_esliva_maquina);
            @$corte_esliva_maquina_limite->add(new DateInterval('P6M'));
            @$res_corte_esliva_maquina = $corte_esliva_maquina_limite->format('Y-m-d');
        }
        else{
            @$res_corte_esliva_maquina = '';
        }

        @$corte_esliva_manual = $_POST['color_semaforo_corte_esliva_manual'];
        @$fecha_corte_esliva_manual = $_POST['fecha_corte_esliva_manual'];
        if($_POST['fecha_corte_esliva_manual']){
            @$corte_esliva_manual_limite = new DateTime($fecha_corte_esliva_manual);
            @$corte_esliva_manual_limite->add(new DateInterval('P6M'));
            @$res_corte_esliva_manual = $corte_esliva_manual_limite->format('Y-m-d');
        }
        else{
            @$res_corte_esliva_manual = '';
        }

        @$conectores_fibra_optica = $_POST['color_semaforo_conectores_fibra_optica'];
        @$fecha_conectores_fibra_optica = $_POST['fecha_conectores_fibra_optica'];
        if($_POST['fecha_conectores_fibra_optica']){
            @$conectores_fibra_optica_limite = new DateTime($fecha_conectores_fibra_optica);
            @$conectores_fibra_optica_limite->add(new DateInterval('P6M'));
            @$res_conectores_fibra_optica = $conectores_fibra_optica_limite->format('Y-m-d');
        }
        else{
            @$res_conectores_fibra_optica = '';
        }

        @$conectores_coaxiales = $_POST['color_semaforo_conectores_coaxiales'];
        @$fecha_conectores_coaxiales = $_POST['fecha_conectores_coaxiales'];
        if($_POST['fecha_conectores_coaxiales']){
            @$conectores_coaxiales_limite = new DateTime($fecha_conectores_coaxiales);
            @$conectores_coaxiales_limite->add(new DateInterval('P6M'));
            @$res_conectores_coaxiales = $conectores_coaxiales_limite->format('Y-m-d');
        }
        else{
            @$res_conectores_coaxiales = '';
        }

        @$ensamble_conectores = $_POST['color_semaforo_ensamble_conectores'];
        @$fecha_ensamble_conectores = $_POST['fecha_ensamble_conectores'];
        if($_POST['fecha_ensamble_conectores']){
            @$ensamble_conectores_limite = new DateTime($fecha_ensamble_conectores);
            @$ensamble_conectores_limite->add(new DateInterval('P6M'));
            @$res_ensamble_conectores = $ensamble_conectores_limite->format('Y-m-d');
        }
        else{
            @$res_ensamble_conectores = '';
        }

        //CERTIFICACIONES AVANZADAS
        @$soldadura = $_POST['color_semaforo_soldadura'];
        @$fecha_soldadura = $_POST['fecha_soldadura'];
        if($_POST['fecha_soldadura']){
            @$soldadura_limite = new DateTime($fecha_soldadura);
            @$soldadura_limite->add(new DateInterval('P6M'));
            @$res_soldadura = $soldadura_limite->format('Y-m-d');
        }
        else{
            @$res_soldadura = '';
        }

        @$soldadura_ultrasonido = $_POST['color_semaforo_soldadura_ultrasonido'];
        @$fecha_soldadura_ultrasonido = $_POST['fecha_soldadura_ultrasonido'];
        if($_POST['fecha_soldadura_ultrasonido']){
            @$soldadura_ultrasonido_limite = new DateTime($fecha_soldadura_ultrasonido);
            @$soldadura_ultrasonido_limite->add(new DateInterval('P6M'));
            @$res_soldadura_ultrasonido = $soldadura_ultrasonido_limite->format('Y-m-d');
        }
        else{
            @$res_soldadura_ultrasonido = '';
        }

        @$enmallado = $_POST['color_semaforo_enmallado'];
        @$fecha_enmallado = $_POST['fecha_enmallado'];
        if($_POST['fecha_enmallado']){
            @$enmallado_limite = new DateTime($fecha_enmallado);
            @$enmallado_limite->add(new DateInterval('P6M'));
            @$res_enmallado = $enmallado_limite->format('Y-m-d');
        }
        else{
            @$res_enmallado = '';
        }

        @$impresion_etiquetas = $_POST['color_semaforo_impresion_etiquetas'];
        @$fecha_impresion_etiquetas = $_POST['fecha_impresion_etiquetas'];
        if($_POST['fecha_impresion_etiquetas']){
            @$impresion_etiquetas_limite = new DateTime($fecha_impresion_etiquetas);
            @$impresion_etiquetas_limite->add(new DateInterval('P6M'));
            @$res_impresion_etiquetas = $impresion_etiquetas_limite->format('Y-m-d');
        }
        else{
            @$res_impresion_etiquetas = '';
        }

        @$soldadura_jstd = $_POST['color_semaforo_soldadura_jstd'];
        @$fecha_soldadura_jstd = $_POST['fecha_soldadura_jstd'];
        if($_POST['fecha_soldadura_jstd']){
            @$soldadura_jstd_limite = new DateTime($fecha_soldadura_jstd);
            @$soldadura_jstd_limite->add(new DateInterval('P6M'));
            @$res_soldadura_jstd = $soldadura_jstd_limite->format('Y-m-d');
        }
        else{
            @$res_soldadura_jstd = '';
        }

        @$moldeo = $_POST['color_semaforo_moldeo'];
        @$fecha_moldeo = $_POST['fecha_moldeo'];
        if($_POST['fecha_moldeo']){
            @$moldeo_limite = new DateTime($fecha_moldeo);
            @$moldeo_limite->add(new DateInterval('P6M'));
            @$res_moldeo = $moldeo_limite->format('Y-m-d');
        }
        else{
            @$res_moldeo = '';
        }

        @$encapsulado = $_POST['color_semaforo_encapsulado'];
        @$fecha_encapsulado = $_POST['fecha_encapsulado'];
        if($_POST['fecha_encapsulado']){
            @$encapsulado_limite = new DateTime($fecha_encapsulado);
            @$encapsulado_limite->add(new DateInterval('P6M'));
            @$res_encapsulado = $encapsulado_limite->format('Y-m-d');
        }
        else{
            @$res_encapsulado = '';
        }

        @$prueba_electrica = $_POST['color_semaforo_prueba_electrica'];
        @$fecha_prueba_electrica = $_POST['fecha_prueba_electrica'];
        if($_POST['fecha_prueba_electrica']){
            @$prueba_electrica_limite = new DateTime($fecha_prueba_electrica);
            @$prueba_electrica_limite->add(new DateInterval('P6M'));
            @$res_prueba_electrica = $prueba_electrica_limite->format('Y-m-d');
        }
        else{
            @$res_prueba_electrica = '';
        }

        //INSERT
        $obj->Ejecutar_Instruccion("UPDATE tblmatriz SET `nuevo`='$numero_empleado',`nombre_empleado`='$nombre_empleado',`apellido_empleado`='$apellido_empleado',`fecha_ingreso`='$fecha_ingreso_empleado',`estañado`='$estañado',`fecha_estañado`='$fecha_estañado',`estañado_limite`='$res_estañado',`encintado`='$encintado',`fecha_encintado`='$fecha_encintado',`encintado_limite`='$res_encintado',`eslivas`='$eslivas',`fecha_eslivas`='$fecha_eslivas',`eslivas_limite`='$res_eslivas',`empaque`='$empaque',`fecha_empaque`='$fecha_empaque',`empaque_limite`='$res_empaque',`tapas`='$tapas',`fecha_tapas`='$fecha_tapas',`tapas_limite`='$res_tapas',`etiquetas`='$etiquetas',`fecha_etiquetas`='$fecha_etiquetas',`etiquetas_limite`='$res_etiquetas',`cinchado`='$cinchado',`fecha_cinchado`='$fecha_cinchado',`cinchado_limite`='$res_cinchado',`distribucion`='$distribucion',`fecha_distribucion`='$fecha_distribucion',`distribucion_limite`='$res_distribucion',`aplicacion_terminales`='$aplicacion_terminales',`fecha_aplicacion_terminales`='$fecha_aplicacion_terminales',`aplicacion_terminales_limite`='$res_aplicacion_terminales',`deschaquete`='$deschaquete',`fecha_deschaquete`='$fecha_deschaquete',`deschaquete_limite`='$res_deschaquete',`corte manual`='$corte_manual',`fecha_corte_manual`='$fecha_corte_manual',`corte_manual_limite`='$res_corte_manual',`corte eubanks`='$corte_eubanks',`fecha_corte_eubanks`='$fecha_corte_eubanks',`corte_eubanks_limite`='$res_corte_eubanks',`corte eubanks-dominios`='$corte_eubanks_dominios',`fecha_corte_eubanks-dominios`='$fecha_corte_eubanks_dominios',`corte_eubanks_dominios_limite`='$res_corte_eubanks_dominios',`corte schleuniger`='$corte_schleuniger',`fecha_corte_schleuniger`='$fecha_corte_schleuniger',`corte_schleuniger_limite`='$res_corte_schleuniger',`corte schleuniger-dominios`='$corte_schleuniger_dominios',`fecha_corte_schleuniger_dominios`='$fecha_corte_schleuniger_dominios',`corte_schleuniger_dominios_limite`='$res_corte_schleuniger_dominios',`corte schleuniger jc3985`='$corte_schleuniger_jc3985',`fecha_corte_schleuniger_jc3985`='$fecha_corte_schleuniger_jc3985',`corte_schleuniger_jc3985_limite`='$res_corte_schleuniger_jc3985',`corte artos`='$corte_artos',`fecha_corte_artos`='$fecha_corte_artos',`corte_artos_limite`='$res_corte_artos',`corte de esliva en maquina`='$corte_esliva_maquina',`fecha_corte_esliva_maquina`='$fecha_corte_esliva_maquina',`corte_esliva_maquina_limite`='$res_corte_esliva_maquina',`corte de esliva manual`='$corte_esliva_manual',`fecha_corte_esliva_manual`='$fecha_corte_esliva_manual',`corte_esliva_manual_limite`='$res_corte_esliva_manual',`conectores fibra optica`='$conectores_fibra_optica',`fecha_conectores_fibra_optica`='$fecha_conectores_fibra_optica',`conectores_fibra_optica_limite`='$res_conectores_fibra_optica',`conectores coaxiales`='$conectores_coaxiales',`fecha_conectores_coaxiales`='$fecha_conectores_coaxiales',`conectores_coaxiales_limite`='$res_conectores_coaxiales',`ensamble de conectores`='$ensamble_conectores',`fecha_ensamble_conectores`='$fecha_ensamble_conectores',`ensamble_conectores_limite`='$res_ensamble_conectores',`soldadura`='$soldadura',`fecha_soldadura`='$fecha_soldadura',`soldadura_limite`='$res_soldadura',`soldadura ultrasonido`='$soldadura_ultrasonido',`fecha_soldadura_ultrasonido`='$fecha_soldadura_ultrasonido',`soldadura_ultrasonido_limite`='$res_soldadura_ultrasonido',`enmallado`='$enmallado',`fecha_enmallado`='$fecha_enmallado',`enmallado_limite`='$res_enmallado',`impresion de etiquetas`='$impresion_etiquetas',`fecha_impresion_etiquetas`='$fecha_impresion_etiquetas',`impresion_etiquetas_limite`='$res_impresion_etiquetas',`soldadura jstd`='$soldadura_jstd',`fecha_soldadura_jstd`='$fecha_soldadura_jstd',`soldadura_jstd_limite`='$res_soldadura_jstd',`moldeo`='$moldeo',`fecha_moldeo`='$fecha_moldeo',`moldeo_limite`='$res_moldeo',`encapsulado (epoxico)`='$encapsulado',`fecha_encapsulado`='$fecha_encapsulado',`encapsulado_limite`='$res_encapsulado',`prueba electrica`='$prueba_electrica',`fecha_prueba_electrica`='$fecha_prueba_electrica',`prueba_electrica_limite`='$res_prueba_electrica' WHERE id_certificacion = '".$_GET['idmodificar']."'");
        //$obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `nuevo`= '$numero_empleado',`nombre_empleado`= '$nombre_empleado',`apellido_empleado` = '$apellido_empleado',`fecha_ingreso` = '$fecha_ingreso_empleado',`estañado` = '$estañado', `fecha_estañado` = '$fecha_estañado', `encintado` = '$encintado', `fecha_encintado` = '$fecha_encintado', `eslivas` = '$eslivas', `fecha_eslivas` = '$fecha_eslivas', `empaque` = '$empaque',  `fecha_empaque` = '$fecha_empaque', `tapas` = '$tapas', `fecha_tapas` = '$fecha_tapas', `etiquetas` = '$etiquetas', `fecha_etiquetas` = '$fecha_etiquetas', `cinchado` = '$cinchado', `fecha_cinchado` = '$fecha_cinchado', `distribucion` = '$distribucion', `fecha_distribucion` = '$fecha_distribucion', `aplicacion_terminales` = '$aplicacion_terminales', `fecha_aplicacion_terminales` = '$fecha_aplicacion_terminales', `deschaquete` = '$deschaquete', `fecha_deschaquete` = '$fecha_deschaquete',`corte manual` = '$corte_manual',`fecha_corte_manual` = '$fecha_corte_manual',`corte eubanks` = '$corte_eubanks',`fecha_corte_eubanks` = '$fecha_corte_eubanks', `corte eubanks-dominios` = '$corte_eubanks_dominios', `fecha_corte_eubanks-dominios` = '$fecha_corte_eubanks_dominios', `corte schleuniger` = '$corte_schleuniger',`fecha_corte_schleuniger` = '$fecha_corte_schleuniger', `corte schleuniger-dominios` = '$corte_schleuniger_dominios', `fecha_corte_schleuniger_dominios` = '$fecha_corte_schleuniger_dominios', `corte schleuniger jc3985` = '$corte_schleuniger_jc3985', `fecha_corte_schleuniger_jc3985` = '$fecha_corte_schleuniger_jc3985', `corte artos` = '$corte_artos', `fecha_corte_artos` = '$fecha_corte_artos', `corte de esliva en maquina` = '$corte_esliva_maquina', `fecha_corte_esliva_maquina` = '$fecha_corte_esliva_maquina', `corte de esliva manual` = '$corte_esliva_manual', `fecha_corte_esliva_manual` = '$fecha_corte_esliva_manual', `conectores fibra optica` = '$conectores_fibra_optica', `fecha_conectores_fibra_optica` = '$fecha_conectores_fibra_optica', `conectores coaxiales` = '$conectores_coaxiales', `fecha_conectores_coaxiales` = '$fecha_conectores_coaxiales', `ensamble de conectores` = '$ensamble_conectores', `fecha_ensamble_conectores` = '$fecha_ensamble_conectores', `soldadura` = '$soldadura', `fecha_soldadura` = '$fecha_soldadura', `soldadura ultrasonido` = '$soldadura_ultrasonido', `fecha_soldadura_ultrasonido` = '$fecha_soldadura_ultrasonido', `enmallado` = '$enmallado', `fecha_enmallado` = '$fecha_enmallado', `impresion de etiquetas` = '$impresion_etiquetas', `fecha_impresion_etiquetas` = '$fecha_impresion_etiquetas', `soldadura jstd` = '$soldadura_jstd', `fecha_soldadura_jstd` = '$fecha_soldadura_jstd', `moldeo` = '$moldeo', `fecha_moldeo` = '$fecha_moldeo', `encapsulado (epoxico)` = '$encapsulado', `fecha_encapsulado` = '$fecha_encapsulado', `prueba electrica` = '$prueba_electrica', `fecha_prueba_electrica` = '$fecha_prueba_electrica' WHERE id_certificacion = '".$_GET['idmodificar']."'");
        
        echo '<script>window.location = "index.php"; </script>';
      
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Rubic landing page.">
    <meta name="author" content="Devcrud">
    <title>Matriz|de certificaciones</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="icon" type="image/jpg" href="assets/imgs/icon.png"/>
    <!-- Bootstrap + Rubic main styles -->
	<link rel="stylesheet" href="assets/css/rubic.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="assets/js/validaciones.js"></script>
    <script src="assets/js/.js"></script>
    <script>
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
    //ENCINTADO
    if (opcion_encintado.value === "Pendiente" || opcion_encintado.value === "Vacio" || opcion_encintado.value === "") {
        fecha_encintado.classList.add("hidden");
        fecha_encintado.removeAttribute('required');
        fecha_encintado.value = '';
    } else {
        fecha_encintado.classList.remove("hidden");
        fecha_encintado.setAttribute('required', 'required');
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
</script>

    <script>
        window.addEventListener("load", mostrarOcultarFecha);

        function validarFechaMenorActual(date){
        var x=new Date();
        var fecha = date.split("/");
        x.setFullYear(fecha[2],fecha[1]-1,fecha[0]);
        var today = new Date();

        if (x >= today)
        window.alert('Selecciona una fecha anterior a la actual')
        else
        window.alert('Formato correcto')
        }

        var myDate = $('#fechaInspeccion');
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        if(dd < 10)
        dd = '0' + dd;

        if(mm < 10)
        mm = '0' + mm;

        today = yyyy + '-' + mm + '-' + dd;
        myDate.attr("max", today);

        function myFunction(){
        var date = myDate.val();
        if(Date.parse(date)){
            if(date > today){
            alert('La fecha no puede ser mayor a la actual');
            myDate.val("");
            }
        }
        }

    </script>

    <style>
        .hidden{
            display: none;
        }

        .green{
            background-color: green;
            color: white;
            }

            .red{
            background-color: red;
            color: white;
            }

            .yellow{
            background-color: yellow;
            color: white;
            }
            .grey{
            background-color: grey;
            color: white;
            }
            .orange{
            background-color: orange;
            color: white;
            }

            .pending{
            color: black;
        }
        .blanco{
            color: black;
        }

        #btnmodificar{
            background-image: url('assets/imgs/add_employeer.png');
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border-color: transparent;
            background-color: #fceb51;
            background-repeat: no-repeat;
        }
    </style>
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- inicio del nav -->
    <nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#"><img src="assets/imgs/logos.png" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                    
                    <div style="margin: 5%;">
                        <li class="nav-item">
                            <a href=""><img src="assets/imgs/usua1.png"></a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Terminacion del nav -->

<section class=""style="margin-top:110px">
 </section>
 <h1 class="pricing-title3" id="pricing-title3">Editar</h1>
    <form name="frmodificar" id="frmodificar" action="" method="post">
        <div class="column4">
            <!-- regitro  -->
            <div class="row">
                <div class="col">
                    <label style="font-size: medium;">#Numero</label>
                    <input name="numero_empleado" id="numero_empleado" type="text" class="form-control" value="<?php echo $detalles_empleado[0][1]; ?>" onkeypress="return onlynumbers(event)" onblur="javascript: validar_empleado(this.value)" required="required">
                </div>
                <div class="col">
                    <label style="font-size: medium;">Nombre</label>
                    <input name="nombre_empleado" id="nombre_empleado" type="text" class="form-control" value="<?php echo $detalles_empleado[0][2]; ?>" onkeypress="return onlyletters(event)" required="required">
                </div>
                <div class="col">
                    <label style="font-size: medium;">Apellido</label>
                    <input name="apellido_empleado" id="apellido_empleado" type="text" class="form-control" value="<?php echo $detalles_empleado[0][3]; ?>" onkeypress="return onlyletters(event)" required="required">
                </div>
                    <div class="col">
                    <label style="font-size: medium;">Fecha</label>
                    <input name="fecha_ingreso_empleado" id="fecha_ingreso_empleado" type="date" class="form-control" value="<?php echo $detalles_empleado[0][4]; ?>" onblur="myFunction()" required="required">
                </div>
            </div>
            
        </div>

 <!-- TABLAS DE NIVEL -->
 <div class="row column4">
    <div class="column1" >
            <h3 class="pricing-title">Basico</h3>
            <!-- tabla nivel 1  -->
            <table class="table table-bordered">
              <thead style="background-color: rgba(154, 188, 209, 0.61);">
                 <tr>
                    <th >Certificacion</th>
                    <th >Estatus</th>
                    <th >Fecha</th>
                 </tr>
              </thead>
              <tbody>
                 <tr>
                  <td>Estañado</td>
                  <td >
                  <select class="form-control" name="color_semaforo_estañado" id="color_semaforo_estañado" onchange="mostrarOcultarFecha()">
                    <option value="<?php echo $detalles_empleado[0][5]; ?>" hidden><?php echo $detalles_empleado[0][5]; ?></option>
                        
                        <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        
                    </select>
                  </td>
                  <td ><input type="date" class="form-control hidden" name="fecha_estañado" id="fecha_estañado" onblur="myFunction()" value="<?php echo $detalles_empleado[0][6]; ?>" ></td>
                 </tr>
                 <tr>
                 <td>Encintado</td>
                 <td >
                    <select class="form-control" name="color_semaforo_encintado" id="color_semaforo_encintado" onchange="mostrarOcultarFecha()">
                    <option value="<?php echo $detalles_empleado[0][8]; ?>" hidden><?php echo $detalles_empleado[0][8]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                 </td>
                 <td ><input type="date" class="form-control hidden" name="fecha_encintado" id="fecha_encintado" placeholder="Date" value="<?php echo $detalles_empleado[0][9]; ?>"></td>
                </tr>
                <tr>
                  <td>Eslivas</td>
                  <td >
                    <select class="form-control" name="color_semaforo_eslivas" id="color_semaforo_eslivas" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][11]; ?>" hidden><?php echo $detalles_empleado[0][11]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                  </td>
                  <td ><input type="date" class="form-control hidden" name="fecha_eslivas" id="fecha_eslivas" placeholder="Date" value="<?php echo $detalles_empleado[0][12]; ?>"></td>
                 </tr>
                 <tr>
                  <td>Empaque</td>
                  <td >
                    <select class="form-control" name="color_semaforo_empaque" id="color_semaforo_empaque" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][14]; ?>" hidden><?php echo $detalles_empleado[0][14]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                  </td>
                  <td ><input type="date" class="form-control hidden" name="fecha_empaque" id="fecha_empaque" placeholder="Date" value="<?php echo $detalles_empleado[0][15]; ?>"></td>
                 </tr>
                 <tr>
                  <td>Tapas</td>
                  <td >
                    <select class="form-control" name="color_semaforo_tapas" id="color_semaforo_tapas" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][17]; ?>" hidden><?php echo $detalles_empleado[0][17]; ?></option>
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                  </td>
                  <td ><input type="date" class="form-control hidden" name="fecha_tapas" id="fecha_tapas" placeholder="Date" value="<?php echo $detalles_empleado[0][18]; ?>"></td>
                 </tr>
                 <tr>
                  <td>Etiquetas</td>
                  <td >
                    <select class="form-control" name="color_semaforo_etiquetas" id="color_semaforo_etiquetas" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][20]; ?>" hidden><?php echo $detalles_empleado[0][20]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                  </td>
                  <td ><input type="date" class="form-control hidden" name="fecha_etiquetas" id="fecha_etiquetas" placeholder="Date" value="<?php echo $detalles_empleado[0][21]; ?>"></td>
                 </tr>
                 <tr>
                  <td>Cinchado</td>
                  <td >
                    <select class="form-control" name="color_semaforo_cinchado" id="color_semaforo_cinchado" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][23]; ?>" hidden><?php echo $detalles_empleado[0][23]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                  </td>
                  <td ><input type="date" class="form-control hidden" name="fecha_cinchado" id="fecha_cinchado" placeholder="Date" value="<?php echo $detalles_empleado[0][24]; ?>"></td>
                 </tr>
                 <tr>
                  <td>Distribución</td>
                  <td >
                    <select class="form-control" name="color_semaforo_distribucion" id="color_semaforo_distribucion" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][26]; ?>" hidden><?php echo $detalles_empleado[0][26]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                  </td>
                  <td ><input type="date" class="form-control hidden" name="fecha_distribucion" id="fecha_distribucion" placeholder="Date" value="<?php echo $detalles_empleado[0][27]; ?>"></td>
                 </tr>
                 <tr>
                  <td>Aplicacion de <br>
                     terminales</td>
                  <td >
                    <select class="form-control" name="color_semaforo_aplicacion_terminales" id="color_semaforo_aplicacion_terminales" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][29]; ?>" hidden><?php echo $detalles_empleado[0][29]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                  </td>
                  <td ><input type="date" class="form-control hidden" name="fecha_aplicacion_terminales" id="fecha_aplicacion_terminales" placeholder="Date" value="<?php echo $detalles_empleado[0][30]; ?>"></td>
                 </tr>
                 <tr>
                  <td>Deschaquete</td>
                  <td >
                    <select class="form-control" name="color_semaforo_deschaquete" id="color_semaforo_deschaquete" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][32]; ?>" hidden><?php echo $detalles_empleado[0][32]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                  </td>
                  <td ><input type="date" class="form-control hidden" name="fecha_deschaquete" id="fecha_deschaquete" placeholder="Date" value="<?php echo $detalles_empleado[0][33]; ?>"></td>
                 </tr>
              </tbody>
           </table>
    </div>
    <div class="column2" >
        <div>
            <h3 class="pricing-title">Medio</h3>
                      <!-- tabla nivel 2  -->
            <table class="table table-bordered">
              <thead style="background-color: rgb(128 156 173 / 85%)">
                 <tr>
                    <th >Certificacion</th>
                    <th >Estatus</th>
                    <th >Fecha</th>
                 </tr>
              </thead>
              <tbody>
                  <tr>
                   <td>Corte manual</td>
                   <td >
                        <select class="form-control" name="color_semaforo_corte_manual" id="color_semaforo_corte_manual" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][35]; ?>" hidden><?php echo $detalles_empleado[0][35]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                   </td>
                   <td ><input type="date" class="form-control hidden" name="fecha_corte_manual" id="fecha_corte_manual" placeholder="Date" value="<?php echo $detalles_empleado[0][36]; ?>"></td>
                  </tr>
                  <tr>
                  <td>Corte eubanks</td>
                  <td >
                    <select class="form-control" name="color_semaforo_corte_eubanks" id="color_semaforo_corte_eubanks" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][38]; ?>" hidden><?php echo $detalles_empleado[0][38]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>

                  </td>
                  <td ><input type="date" class="form-control hidden" name="fecha_corte_eubanks" id="fecha_corte_eubanks" placeholder="Date" value="<?php echo $detalles_empleado[0][39]; ?>"></td>
                 </tr>
                 <tr>
                   <td>Corte eubank
                    <br>-dominos</td>
                   <td>
                        <select class="form-control" name="color_semaforo_corte_eubanks_dominios" id="color_semaforo_corte_eubanks_dominios" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][41]; ?>" hidden><?php echo $detalles_empleado[0][41]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                   </td>
                   <td ><input type="date" class="form-control hidden" name="fecha_corte_eubanks_dominios" id="fecha_corte_eubanks_dominios" placeholder="Date" value="<?php echo $detalles_empleado[0][42]; ?>"></td>
                  </tr>
                  <tr>
                   <td>Corte <br> schleungniger</td>
                   <td >
                        <select class="form-control" name="color_semaforo_corte_schleuniger" id="color_semaforo_corte_schleuniger" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][44]; ?>" hidden><?php echo $detalles_empleado[0][44]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                   </td>
                   <td ><input type="date" class="form-control hidden" name="fecha_corte_schleuniger" id="fecha_corte_schleuniger" placeholder="Date" value="<?php echo $detalles_empleado[0][45]; ?>"></td>
                  </tr>
                  <tr>
                   <td>Corte schleungniger<br> -dominos</td>
                   <td >
                        <select class="form-control" name="color_semaforo_corte_schleuniger_dominios" id="color_semaforo_corte_schleuniger_dominios" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][47]; ?>" hidden><?php echo $detalles_empleado[0][47]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                   </td>
                   <td ><input type="date" class="form-control hidden" name="fecha_corte_schleuniger_dominios" id="fecha_corte_schleuniger_dominios" placeholder="Date" value="<?php echo $detalles_empleado[0][48]; ?>"></td>
                  </tr>
                  <tr>
                   <td>Corte schleungniger <br> -dominos JC3985</td>
                   <td >
                        <select class="form-control" name="color_semaforo_corte_schleuniger_jc3985" id="color_semaforo_corte_schleuniger_jc3985" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][50]; ?>" hidden><?php echo $detalles_empleado[0][50]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                   </td>
                   <td ><input type="date" class="form-control hidden" name="fecha_corte_schleuniger_jc3985" id="fecha_corte_schleuniger_jc3985" placeholder="Date" value="<?php echo $detalles_empleado[0][51]; ?>"></td>
                  </tr>
                  <tr>
                   <td>Corte artos</td>
                   <td >
                        <select class="form-control" name="color_semaforo_corte_artos" id="color_semaforo_corte_artos" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][53]; ?>" hidden><?php echo $detalles_empleado[0][53]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                   </td>
                   <td ><input type="date" class="form-control hidden" name="fecha_corte_artos" id="fecha_corte_artos" placeholder="Date" value="<?php echo $detalles_empleado[0][54]; ?>"></td>
                  </tr>
                  <tr>
                   <td>Corte de esliva <br> en maquina</td>
                   <td >
                        <select class="form-control" name="color_semaforo_corte_esliva_maquina" id="color_semaforo_corte_esliva_maquina" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][56]; ?>" hidden><?php echo $detalles_empleado[0][56]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                   </td>
                   <td ><input type="date" class="form-control hidden" name="fecha_corte_esliva_maquina" id="fecha_corte_esliva_maquina" placeholder="Date" value="<?php echo $detalles_empleado[0][57]; ?>"></td>
                  </tr>
                  <tr>
                   <td>Corte de esliva <br> en manual </td>
                   <td >
                        <select class="form-control" name="color_semaforo_corte_esliva_manual" id="color_semaforo_corte_esliva_manual" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][59]; ?>" hidden><?php echo $detalles_empleado[0][59]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                   </td>
                   <td ><input type="date" class="form-control hidden" name="fecha_corte_esliva_manual" id="fecha_corte_esliva_manual" placeholder="Date" value="<?php echo $detalles_empleado[0][60]; ?>"></td>
                  </tr>
                  <tr>
                   <td>Conectores <br> fibra optica</td>
                   <td >
                        <select class="form-control" name="color_semaforo_conectores_fibra_optica" id="color_semaforo_conectores_fibra_optica" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][62]; ?>" hidden><?php echo $detalles_empleado[0][62]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                   </td>
                   <td ><input type="date" class="form-control hidden" name="fecha_conectores_fibra_optica" id="fecha_conectores_fibra_optica" placeholder="Date" value="<?php echo $detalles_empleado[0][63]; ?>"></td>
                  </tr>
                  <tr>
                    <td>Conectores <br> coaxiales</td>
                    <td >
                        <select class="form-control" name="color_semaforo_conectores_coaxiales" id="color_semaforo_conectores_coaxiales" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][65]; ?>" hidden><?php echo $detalles_empleado[0][65]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                      </td>
                      <td ><input type="date" class="form-control hidden" name="fecha_conectores_coaxiales" id="fecha_conectores_coaxiales" placeholder="Date" value="<?php echo $detalles_empleado[0][66]; ?>"></td>
                  </tr>
                  <tr>
                      <td>Ensamble de <br> conectores</td>
                      <td >
                        <select class="form-control" name="color_semaforo_ensamble_conectores" id="color_semaforo_ensamble_conectores" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][68]; ?>" hidden><?php echo $detalles_empleado[0][68]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                      </td>
                      <td ><input type="date" class="form-control" name="fecha_ensamble_conectores" id="fecha_ensamble_conectores" placeholder="Date" value="<?php echo $detalles_empleado[0][69]; ?>"></td>
                  </tr>
               </tbody>
           </table>
          </div>
    </div>  
    <div class="column3">
        <div>
            <h3 class="pricing-title2">Especializado</h3>
                      <!-- tabla nivel 3  -->
                      <table class="table table-bordered">
            <thead style="background-color: rgb(102 105 137 / 78%);">
               <tr>
                  <th >Certificacion</th>
                  <th >Estatus</th>
                  <th >Fecha</th>
               </tr>
            </thead>
            <tbody>
                <tr>
                 <td>Soldadura</td>
                 <td>
                    <select class="form-control" name="color_semaforo_soldadura" id="color_semaforo_soldadura" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][71]; ?>" hidden><?php echo $detalles_empleado[0][71]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                 </td>
                 <td ><input type="date" class="form-control hidden" name="fecha_soldadura" id="fecha_soldadura" placeholder="Date" value="<?php echo $detalles_empleado[0][72]; ?>"></td>
                </tr>
                <tr>
                <td>Soldadura <br> ultrasonido</td>
                <td>
                    <select class="form-control" name="color_semaforo_soldadura_ultrasonido" id="color_semaforo_soldadura_ultrasonido" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][74]; ?>" hidden><?php echo $detalles_empleado[0][74]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                </td>
                <td ><input type="date" class="form-control hidden" name="fecha_soldadura_ultrasonido" id="fecha_soldadura_ultrasonido" placeholder="Date" value="<?php echo $detalles_empleado[0][75]; ?>"></td>
               </tr>
               <tr>
                 <td>Enmallado</td>
                 <td>
                    <select class="form-control" name="color_semaforo_enmallado" id="color_semaforo_enmallado" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][77]; ?>" hidden><?php echo $detalles_empleado[0][77]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                 </td>
                 <td ><input type="date" class="form-control hidden" name="fecha_enmallado" id="fecha_enmallado" placeholder="Date" value="<?php echo $detalles_empleado[0][78]; ?>"></td>
                </tr>
                <tr>
                 <td>Impresion de <br> etiquetas</td>
                 <td >
                    <select class="form-control" name="color_semaforo_impresion_etiquetas" id="color_semaforo_impresion_etiquetas" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][80]; ?>" hidden><?php echo $detalles_empleado[0][80]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                 </td>
                 <td ><input type="date" class="form-control hidden" name="fecha_impresion_etiquetas" id="fecha_impresion_etiquetas" placeholder="Date" value="<?php echo $detalles_empleado[0][81]; ?>"></td>
                </tr>
                <tr>
                 <td>Soldadura <br> JSTD</td>
                 <td >

                 <select class="form-control" name="color_semaforo_soldadura_jstd" id="color_semaforo_soldadura_jstd" onchange="mostrarOcultarFecha()">
                        <option value="<?php echo $detalles_empleado[0][83]; ?>" hidden><?php echo $detalles_empleado[0][83]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                    </select>
                 </td>
                 <td ><input type="date" class="form-control hidden" name="fecha_soldadura_jstd" id="fecha_soldadura_jstd" placeholder="Date" value="<?php echo $detalles_empleado[0][84]; ?>"></td>
                </tr>
                <tr>
                 <td>Moldeo</td>
                 <td >
                     <div class="dropdown d-inline-block">
                        <select class="form-control" name="color_semaforo_moldeo" id="color_semaforo_moldeo" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][86]; ?>" hidden><?php echo $detalles_empleado[0][86]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                     </div>
                 </td>
                 <td ><input type="date" class="form-control hidden" name="fecha_moldeo" id="fecha_moldeo" placeholder="Date" value="<?php echo $detalles_empleado[0][87]; ?>"></td>
                </tr>
                <tr>
                 <td>Encapsulado <br> (Epoxicos)</td>
                 <td >
                    <div class="dropdown d-inline-block">
                        <select class="form-control" name="color_semaforo_encapsulado" id="color_semaforo_encapsulado" onchange="mostrarOcultarFecha()">
                            <option value="<?php echo $detalles_empleado[0][89]; ?>" hidden><?php echo $detalles_empleado[0][89]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>
                        </select>
                     </div>
                 </td>
                 <td ><input type="date" class="form-control hidden" name="fecha_encapsulado" id="fecha_encapsulado" placeholder="Date" value="<?php echo $detalles_empleado[0][90]; ?>"></td>
                
                </tr>
                <tr>

                <td>Prueba <br> electrica</td>
                 <td>
                        <select class="form-control" name="color_semaforo_prueba_electrica" id="color_semaforo_prueba_electrica" onchange="mostrarOcultarFecha()">   
                        <option value="<?php echo $detalles_empleado[0][92]; ?>" hidden><?php echo $detalles_empleado[0][92]; ?></option>
                        
                       <option class="green" value="Verde">Verde</option>
                        <option class="yellow" value="Amarillo">Amarillo</option>
                        <option class="orange" value="Naranja">Naranja</option>
                        <option class="red" value="Rojo">Rojo</option>
                        <option class="grey" value="Gris">Gris</option>
                        <option class="pending" value="Pendiente">Pendiente</option>
                        <option class="blanco" value="Vacio">Vacio</option>   
                        </select>   
                 </td>
                 
                 <td ><input type="date" class="form-control hidden" name="fecha_prueba_electrica" id="fecha_prueba_electrica" placeholder="Date" value="<?php echo $detalles_empleado[0][93]; ?>"></td>
                </tr>
                <tr>
             </tbody>
         </table> 
          </div>
    </div>
</div>

    <!--BOTON DE INSERTAR-->
    <div class="fixed-buttons2" style="display:flex;">
        <input type="submit" name="btnmodificar" id="btnmodificar" value="" style="margin-right:10px;">
        <a href="index.php"><button type="button" name="btnback" id="btnback"></button></a>
    </div>
</form>


 <section class="">
 </section>
    <footer class="footer py-4 bg-dark text-light"> 
        <div class="container text-center">
            <p>Copyright &copy; Prysmian Group</p>
        </div>
    </footer>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Rubic js -->
    <script src="assets/js/rubic.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
    <script src="assets/js/sweetalert.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>
