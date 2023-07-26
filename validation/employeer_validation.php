<?php 

    require '../database/conexion_bd.php';

    $obj = new BD_PDO();

    $result_validation = $obj->Ejecutar_Instruccion("SELECT * FROM tblmatriz WHERE nuevo = '{$_GET['nuevo']}'");

    echo json_encode($result_validation);

?>
