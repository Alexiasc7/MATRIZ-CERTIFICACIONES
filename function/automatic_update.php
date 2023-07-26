<html><link rel="icon" type="image/jpg" href="assets/imgs/icon.png"/></html>
<?php

require 'database/conexion_bd.php'; 

function daily_update(){

    $obj = new BD_PDO();

    $result = $obj->Ejecutar_Instruccion("SELECT * FROM tblmatriz");

    foreach($result as $act_fechas){
        //almacena las variables de certificaciones basicas de las fechas del select
        $estañado_limite = $act_fechas[7];
        $encintado_limite  = $act_fechas[10];
        $eslivas_limite = $act_fechas[13];
        $empaque_limite = $act_fechas[16];
        $tapas_limite = $act_fechas[19];
        $etiquetas_limite = $act_fechas[22];
        $cinchado_limite = $act_fechas[25];
        $distribucion_limite = $act_fechas[28];
        $aplicacion_terminales_limite = $act_fechas[31];
        $deschaquete_limite = $act_fechas[34];
        //almacena las variables de certificaciones basicas de las fechas del select
        $corte_manual_limite = $act_fechas[37];
        $corte_eubanks_limite = $act_fechas[40];
        $corte_eubanks_dominios_limite = $act_fechas[43];
        $corte_schleuniger_limite = $act_fechas[46];
        $corte_schleuniger_dominios_limite = $act_fechas[49];
        $corte_schleuniger_jc3985_limite = $act_fechas[52];
        $corte_artos_limite = $act_fechas[55];
        $corte_esliva_maquina_limite = $act_fechas[58];
        $corte_esliva_manual_limite = $act_fechas[61];
        $conectores_fibra_optica_limite = $act_fechas[64];
        $conectores_coaxiales_limite = $act_fechas[67];
        $ensamble_conectores_limite = $act_fechas[70];
    
        //almacena las variables de certificaciones basicas de las fechas del select
        $soldadura_limite = $act_fechas[73];
        $soldadura_ultrasonido_limite = $act_fechas[76];
        $enmallado_limite = $act_fechas[79];
        $impresion_etiquetas_limite = $act_fechas[82];
        $soldadura_jstd_limite = $act_fechas[85];
        $moldeo_limite = $act_fechas[88];
        $encapsulado_limite = $act_fechas[91];
        $prueba_electrica_limite = $act_fechas[94];
    
        //CAMBIO DE COLORES
        $verde = 'Verde';
        $amarillo = 'Amarillo';
        $rojo = 'Rojo';
        $gris='Gris';
        $naranja='Naranja';
    
        //OBTENER FECHA ACTUAL Y DARLE FORMATO NECESARIO
        date_default_timezone_set('America/Matamoros');
        
        /////SUSTITUIR ESTE APARTADO PARA QUE TOME EN CUENTA LA FECHA ACTUAL
        $fecha_actual = new DateTime();
        $fecha_actual->setTimezone(new DateTimeZone('America/Matamoros'));
        //$fecha_formateada = $fecha_actual->format('Y-m-d');
    
        $fecha_formateada = '2023-01-01';
    
        //echo $fecha_formateada; 
        //echo $estañado_limite;
    
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
        //ESTAÑADO
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($estañado_limite);
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[5] === 'Verde' || $act_fechas[5] === 'Amarillo' || $act_fechas[5] === 'Naranja' || $act_fechas[5] === 'Rojo' || $act_fechas[5] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `estañado`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `estañado`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `estañado`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `estañado`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `estañado`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
        
    
        //echo ' ';
    
        //ENCINTADO
        // 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($encintado_limite);
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[8] === 'Verde' || $act_fechas[8] === 'Amarillo' || $act_fechas[8] === 'Naranja' || $act_fechas[8] === 'Rojo' || $act_fechas[8] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `encintado`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `encintado`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `encintado`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `encintado`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `encintado`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //echo ' ';
    
        //ESLIVAS
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($eslivas_limite);
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[11] === 'Verde' || $act_fechas[11] === 'Amarillo' || $act_fechas[11] === 'Naranja' || $act_fechas[11] === 'Rojo' || $act_fechas[11] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `eslivas`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `eslivas`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `eslivas`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `eslivas`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `eslivas`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //echo ' ';
    
        //EMPAQUE
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($empaque_limite);
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[14] === 'Verde' || $act_fechas[14] === 'Amarillo' || $act_fechas[14] === 'Naranja' || $act_fechas[14] === 'Rojo' || $act_fechas[14] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `empaque`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `empaque`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `empaque`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `empaque`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `empaque`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
    
       // echo ' ';
    
        //TAPAS
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($tapas_limite);
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[17] === 'Verde' || $act_fechas[17] === 'Amarillo' || $act_fechas[17] === 'Naranja' || $act_fechas[17] === 'Rojo' || $act_fechas[17] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `tapas`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `tapas`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `tapas`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `tapas`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `tapas`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //echo ' ';
    
        //ETIQUETAS
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($etiquetas_limite);
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[20] === 'Verde' || $act_fechas[20] === 'Amarillo' || $act_fechas[20] === 'Naranja' || $act_fechas[20] === 'Rojo' || $act_fechas[20] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `etiquetas`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `etiquetas`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `etiquetas`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `etiquetas`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `etiquetas`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //echo ' ';
    
        //CINCHADO
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($cinchado_limite);
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[23] === 'Verde' || $act_fechas[23] === 'Amarillo' || $act_fechas[23] === 'Naranja' || $act_fechas[23] === 'Rojo' || $act_fechas[23] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `cinchado`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `cinchado`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `cinchado`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `cinchado`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `cinchado`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //echo ' ';
        
        //DISTRIBUCION
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($distribucion_limite);
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[26] === 'Verde' || $act_fechas[26] === 'Amarillo' || $act_fechas[26] === 'Naranja' || $act_fechas[26] === 'Rojo' || $act_fechas[26] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `distribucion`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `distribucion`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `distribucion`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `distribucion`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `distribucion`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //echo ' ';
        
        //APLICACION TERMINALES
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($aplicacion_terminales_limite);
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[29] === 'Verde' || $act_fechas[29] === 'Amarillo' || $act_fechas[29] === 'Naranja' || $act_fechas[29] === 'Rojo' || $act_fechas[29] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `aplicacion_terminales`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `aplicacion_terminales`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `aplicacion_terminales`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `aplicacion_terminales`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `aplicacion_terminales`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //echo ' ';
        
        //DESCHAQUETE
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($deschaquete_limite);
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[32] === 'Verde' || $act_fechas[32] === 'Amarillo' || $act_fechas[32] === 'Naranja' || $act_fechas[32] === 'Rojo' || $act_fechas[32] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `deschaquete`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `deschaquete`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `deschaquete`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `deschaquete`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `deschaquete`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //echo ' ';
        
    
    
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //CORTE MANUAL
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($corte_manual_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
       // echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
       if ($act_fechas[35] === 'Verde' || $act_fechas[35] === 'Amarillo' || $act_fechas[35] === 'Naranja' || $act_fechas[35] === 'Rojo' || $act_fechas[35] === 'Gris') {
        if ($diferencia_dias > 30) {
            // Se ha quedado igual
            $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte manual`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
        } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
            // Se ha modificado a color amarillo
            $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte manual`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
        } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
            // Se ha modificado a color naranja
            $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte manual`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
        } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
            // Se ha modificado a color gris
            $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte manual`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
        } else if ($diferencia_dias < -15) {
            // Se ha modificado a color rojo
            $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte manual`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
        }
    }
    
        //CORTE EUBANKS
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($corte_eubanks_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[38] === 'Verde' || $act_fechas[38] === 'Amarillo' || $act_fechas[38] === 'Naranja' || $act_fechas[38] === 'Rojo' || $act_fechas[38] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte eubanks`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte eubanks`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte eubanks`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte eubanks`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte eubanks`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //CORTE EUBANKS DOMINIOS
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($corte_eubanks_dominios_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[41] === 'Verde' || $act_fechas[41] === 'Amarillo' || $act_fechas[41] === 'Naranja' || $act_fechas[41] === 'Rojo' || $act_fechas[41] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte eubanks-dominios`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte eubanks-dominios`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte eubanks-dominios`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte eubanks-dominios`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte eubanks-dominios`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //CORTE SCHLEUNIGER
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($corte_schleuniger_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[44] === 'Verde' || $act_fechas[44] === 'Amarillo' || $act_fechas[44] === 'Naranja' || $act_fechas[44] === 'Rojo' || $act_fechas[44] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
    
        //CORTE SCHLEUNIGER-DOMINOS
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($corte_schleuniger_dominios_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[47] === 'Verde' || $act_fechas[47] === 'Amarillo' || $act_fechas[47] === 'Naranja' || $act_fechas[47] === 'Rojo' || $act_fechas[47] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger-dominios`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger-dominios`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger-dominios`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger-dominios`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger-dominios`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //CORTE SCHLEUNIGER JC3985
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($corte_schleuniger_jc3985_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        
        if ($act_fechas[50] === 'Verde' || $act_fechas[50] === 'Amarillo' || $act_fechas[50] === 'Naranja' || $act_fechas[50] === 'Rojo' || $act_fechas[50] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger jc3985`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger jc3985`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger jc3985`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger jc3985`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte schleuniger jc3985`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
    
        //CORTE ARTOS
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($corte_artos_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[53] === 'Verde' || $act_fechas[53] === 'Amarillo' || $act_fechas[53] === 'Naranja' || $act_fechas[53] === 'Rojo' || $act_fechas[53] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte artos`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte artos`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte artos`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte artos`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte artos`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
    
        //CORTE ESLIVA MAQUINA
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($corte_esliva_maquina_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[56] === 'Verde' || $act_fechas[56] === 'Amarillo' || $act_fechas[56] === 'Naranja' || $act_fechas[56] === 'Rojo' || $act_fechas[56] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte de esliva en maquina`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte de esliva en maquina`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte de esliva en maquina`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte de esliva en maquina`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte de esliva en maquina`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //CORTE ESLIVA MANUAL
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($corte_esliva_manual_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[59] === 'Verde' || $act_fechas[59] === 'Amarillo' || $act_fechas[59] === 'Naranja' || $act_fechas[59] === 'Rojo' || $act_fechas[59] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte de esliva manual`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte de esliva manual`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte de esliva manual`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte de esliva manual`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `corte de esliva manual`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //CONECTORES FIBRA OPTICA
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($conectores_fibra_optica_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[62] === 'Verde' || $act_fechas[62] === 'Amarillo' || $act_fechas[62] === 'Naranja' || $act_fechas[62] === 'Rojo' || $act_fechas[62] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `conectores fibra optica`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `conectores fibra optica`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `conectores fibra optica`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `conectores fibra optica`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `conectores fibra optica`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //CONECTORES COAXIALES
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($conectores_coaxiales_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[65] === 'Verde' || $act_fechas[65] === 'Amarillo' || $act_fechas[65] === 'Naranja' || $act_fechas[65] === 'Rojo' || $act_fechas[65] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `conectores coaxiales`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `conectores coaxiales`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `conectores coaxiales`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `conectores coaxiales`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `conectores coaxiales`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //ENSAMBLE DE CONECTORES
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($ensamble_conectores_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[68] === 'Verde' || $act_fechas[68] === 'Amarillo' || $act_fechas[68] === 'Naranja' || $act_fechas[68] === 'Rojo' || $act_fechas[68] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `ensamble de conectores`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `ensamble de conectores`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `ensamble de conectores`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `ensamble de conectores`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `ensamble de conectores`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //SOLDADURA
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($soldadura_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[71] === 'Verde' || $act_fechas[71] === 'Amarillo' || $act_fechas[71] === 'Naranja' || $act_fechas[71] === 'Rojo' || $act_fechas[71] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //SOLDADURA ULTRASONIDO
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($soldadura_ultrasonido_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[74] === 'Verde' || $act_fechas[74] === 'Amarillo' || $act_fechas[74] === 'Naranja' || $act_fechas[74] === 'Rojo' || $act_fechas[74] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura ultrasonido`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura ultrasonido`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura ultrasonido`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura ultrasonido`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura ultrasonido`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //ENMALLADO
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($enmallado_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[77] === 'Verde' || $act_fechas[77] === 'Amarillo' || $act_fechas[77] === 'Naranja' || $act_fechas[77] === 'Rojo' || $act_fechas[77] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `enmallado`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `enmallado`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `enmallado`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `enmallado`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `enmallado`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //IMPRESION DE ETIQUETAS
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($impresion_etiquetas_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
       // echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
       if ($act_fechas[80] === 'Verde' || $act_fechas[80] === 'Amarillo' || $act_fechas[80] === 'Naranja' || $act_fechas[80] === 'Rojo' || $act_fechas[80] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `impresion de etiquetas`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `impresion de etiquetas`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `impresion de etiquetas`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `impresion de etiquetas`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `impresion de etiquetas`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
        //SOLDADURA JSTD
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($soldadura_jstd_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[83] === 'Verde' || $act_fechas[83] === 'Amarillo' || $act_fechas[83] === 'Naranja' || $act_fechas[83] === 'Rojo' || $act_fechas[83] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura jstd`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura jstd`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura jstd`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura jstd`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `soldadura jstd`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //MOLDEO
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($moldeo_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[86] === 'Verde' || $act_fechas[86] === 'Amarillo' || $act_fechas[86] === 'Naranja' || $act_fechas[86] === 'Rojo' || $act_fechas[86] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `moldeo`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `moldeo`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `moldeo`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `moldeo`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `moldeo`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //ENCAPSULADO
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($encapsulado_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[89] === 'Verde' || $act_fechas[89] === 'Amarillo' || $act_fechas[89] === 'Naranja' || $act_fechas[89] === 'Rojo' || $act_fechas[89] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `encapsulado (epoxico)`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `encapsulado (epoxico)`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `encapsulado (epoxico)`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `encapsulado (epoxico)`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `encapsulado (epoxico)`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        }
    
        //PRUEBA ELECTRICA
        //echo 'nuevo:'.$act_fechas[1];
    
        $timestamp1 = strtotime($fecha_formateada);
        $timestamp2 = strtotime($prueba_electrica_limite);
    
    
        $diferencia_dias = ($timestamp2 - $timestamp1) / 86400;
    
        //echo "La diferencia entre las fechas es de " . $diferencia_dias . " días.";
    
        if ($act_fechas[92] === 'Verde' || $act_fechas[92] === 'Amarillo' || $act_fechas[92] === 'Naranja' || $act_fechas[92] === 'Rojo' || $act_fechas[92] === 'Gris') {
            if ($diferencia_dias > 30) {
                // Se ha quedado igual
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `prueba electrica`='$verde' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 30 && $diferencia_dias > 20) {
                // Se ha modificado a color amarillo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `prueba electrica`='$amarillo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 20 && $diferencia_dias > 0) {
                // Se ha modificado a color naranja
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `prueba electrica`='$naranja' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias <= 0 && $diferencia_dias >= -15) {
                // Se ha modificado a color gris
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `prueba electrica`='$rojo' WHERE nuevo = '".$act_fechas[1]."'");
            } else if ($diferencia_dias < -15) {
                // Se ha modificado a color rojo
                $obj->Ejecutar_Instruccion("UPDATE `tblmatriz` SET `prueba electrica`='$gris' WHERE nuevo = '".$act_fechas[1]."'");
            }
        } 
    }


    // Obtener la fecha y hora actual
    $fecha_actual = date('Y-m-d');
    $hora_actual = date('H:i:s');

    //echo $hora_actual;

    // Obtener la próxima fecha y hora de cambio de hora
    $prox_cambio_hora = strtotime('next hour');
   // echo $prox_cambio_hora;

    // Calcular el tiempo restante hasta el próximo cambio de hora en segundos
    $tiempo_restante = $prox_cambio_hora - time();
    echo $tiempo_restante;

    // Generar el script JavaScript para la recarga automática
    $script = "<script>setTimeout(function() { location.reload(); }, $tiempo_restante * 1000);</script>";
    
    echo $script;
}

?>
 
