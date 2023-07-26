<?php 

    require 'database/conexion_bd.php'; 

    $obj = new BD_PDO();

    if (isset($_GET['ideliminar']))
    {
        $id = $_GET['ideliminar'];


        $obj->Ejecutar_Instruccion("DELETE FROM `tblmatriz` WHERE id_certificacion = '$id'");
        echo '<script>window.location = "admin_view.php"; </script>';
    }

    if (isset($_POST['btnbuscar'])){
        @$buscar = $_POST['txtbuscar'];
        $detalles_empleado = @$obj->Ejecutar_Instruccion("SELECT * FROM tblmatriz WHERE nuevo LIKE '%$buscar%' OR nombre_empleado LIKE '%$buscar%' OR apellido_empleado LIKE '%$buscar%'");
        
    }
    
    else{
        $detalles_empleado = $obj->Ejecutar_Instruccion("SELECT * FROM tblmatriz");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Rubic landing page.">
    <meta name="author" content="Devcrud">
    <title>Matriz de certificaciones</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Rubic main styles -->
    <link rel="icon" type="image/jpg" href="assets/imgs/icon.png"/>
	<link rel="stylesheet" href="assets/css/rubic.css">
    <script src="assets/js/acciones_crud.js"></script>
    <script>
        function grafica() {
            window.location='graphics.php';
        }
    </script>

    <style>
        .tooltip-text {
            visibility: hidden;
            position: absolute;
            z-index: 1;
            width: 100px;
            color: white;
            font-size: 12px;
            background-color: #192733;
            border-radius: 10px;
            padding: 10px 15px 10px 15px;
            }

            .hover-text:hover .tooltip-text {
            visibility: visible;
            }
            .hover-text {
            position: relative;
            display: inline-block;
            font-family: Arial;
            text-align: center;
        }

        #btnacceso_insert{
            background-image: url('assets/imgs/follower.png');
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border-color: transparent;
            background-color: #fceb51;
            background-repeat: no-repeat;
        }

        #btngrafica{
            background-image: url('assets/imgs/unnamed.png');
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

            <form name="frmbuscar" id="frmbuscar" action="index.php" method="post">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <div style="margin-top: 6%;" class="form-group">
                            <input name="txtbuscar" id="txtbuscar" class="form-control form-control-lg" type="text" placeholder="Buscar">             
                        </div>
                        <div style="margin: 6%;">
                            <li>
                                <input name="btnbuscar" id="btnbuscar" type="submit" value="">
                            </li>
                        </div>                    
                        <div style="margin-top: 4%;">
                            <li class="nav-item">
                                <a href="excel.php"><img src="assets/imgs/excel.png"></a>
                            </li>                            
                        </div>
                        <div style="margin-top: 8%; margin-left: 6%;">
                            <li class="nav-item">
                            <a ><a href="descargar_pdf.php" target="_blank" download><h4>Manual</h4></a>
                            </li>
                        </div>
                    </ul>
                </div>
            </form>

        </div>
    </nav>
    <!-- Terminacion del nav -->
    <section class="section">
    </section>
        <div  style="margin-top:100px;">
        <table style=" margin:10px;" class="table table-bordered  ">
<thead>
                   <tr>
                            <th scope="col" class="texto-2">#Nuevo</th>
						    <th scope="col" class="texto-2">Nombre</th>
                            <th scope="col" class="texto-2">Fecha ingreso</th>
                            <!--PRIMERA PARTE-->
                            <div>
						    	<th class="texto-2"style="background-color: rgba(154, 188, 209, 0.61);">Estañado</th>
                                <th class="texto-2" style="background-color: rgba(154, 188, 209, 0.61);">Encintado</th>
                                <th class="texto-2"style="background-color: rgba(154, 188, 209, 0.61);">Eslivas</th>
                                <th class="texto-2"style="background-color: rgba(154, 188, 209, 0.61);">Empaque</th>
                                <th class="texto-2"style="background-color: rgba(154, 188, 209, 0.61);">Tapas</th>
                                <th class="texto-2"style="background-color: rgba(154, 188, 209, 0.61);">Etiquetas</th>
                                <th class="texto-2"style="background-color: rgba(154, 188, 209, 0.61);">Cintado</th>
                                <th class="texto-2"style="background-color: rgba(154, 188, 209, 0.61);">Distribución</th>
                                <th class="texto-2"style="background-color: rgba(154, 188, 209, 0.61);">Aplicacion de terminales</th>
                                <th class="texto-2"style="background-color: rgba(154, 188, 209, 0.61);">Deschaquete</th>
                                <th class="texto-2">TOTAL ACREDITADAS</th>
                            </div> <!--FIN PRIMER PARTE-->
                            <!--SEGUNDA PARTE-->
                            <div>
						        <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Corte manual</th>
                                <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Corte eubanks</th>
                                <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Corte eubanks-dominos</th>
                                <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Corte schleungniger</th>
                                <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Corte schleungniger-dominos</th>
                                <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Corte schleungniger JC 3985</th>
                                <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Corte artos</th>
                                <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Corte de esliva en maquina</th>
                                <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Corte de esliva en manual</th>
                                <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Conectores fibra optica</th>
                                <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Conectores coaxiales</th>
                                <th class="texto-2"style="background-color: rgb(128 156 173 / 85%)">Ensamble de conectores </th>
                                <th class="texto-2">TOTAL ACREDITADAS</th>
                            </div><!--FIN SEGUNDA PARTE-->
                            <div><!--TERCER PARTE-->
						        <th class="texto-2"style="background-color: rgb(102 105 137 / 78%);">Soldadura </th>
                                <th class="texto-2"style="background-color: rgb(102 105 137 / 78%);">Soldadura ultrasonido</th>
                                <th class="texto-2"style="background-color: rgb(102 105 137 / 78%);">Enmallado</th>
                                <th class="texto-2"style="background-color: rgb(102 105 137 / 78%);">Impresion de etiquetas </th>
                                <th class="texto-2"style="background-color: rgb(102 105 137 / 78%);">Soldadura JSTD</th>
                                <th class="texto-2"style="background-color: rgb(102 105 137 / 78%);">Moldeo </th>
                                <th class="texto-2"style="background-color: rgb(102 105 137 / 78%);">Encapsulado (Epoxicos) </th>
                                <th class="texto-2"style="background-color: rgb(102 105 137 / 78%);">Prueba electrica </th>
                                <th class="texto-2">TOTAL ACREDITADAS</th>
                                <th class="texto-2" style="background-color: #fceb51;">TOTAL ACREDITADAS</th>
                            </div><!--FIN TERCERA TABLA-->
                            <th class="texto-2" style="background-color: #fceb51;">Editar</th>
                            <th class="texto-2" style="background-color: #fceb51;">Eliminar</th>
                   </tr>
                </thead>
                <?php foreach($detalles_empleado as $registos_certificaciones){?>
                <tbody>
                    <tr class="alert" role="alert">
                        <td><?php echo $registos_certificaciones[1]; ?></td>
                        <td><?php echo $registos_certificaciones[2]; ?> <?php echo $registos_certificaciones[3]; ?></td>  
                        <td><?php echo implode('-', array_reverse(explode('-', $registos_certificaciones[4])));?></td>
                        <div > <!--CERTIFICACIONES COLUMNAS--> 

                            <!-- COLORES
                            <img src="assets/imgs/verde.png">
                            <img src="assets/imgs/amarillo.png">
                            <img src="assets/imgs/rojo.png">
                            <img src="assets/imgs/mano (1).png">
                            -->
                            <td>
                                <div class="hover-text">
                                    <?php 
                                        if($registos_certificaciones[5] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[5] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[5] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[5] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[5] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[5] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[6]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[8] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[8] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[8] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[8] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[8] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[8] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[9]; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[11] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[11] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[11] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[11] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[11] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[11] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[12]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[14] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[14] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[14] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[14] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[14] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[14] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[15]; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[17] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[17] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[17] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[17] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[17] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[17] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[18]; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[20] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[20] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[20] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[20] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[20] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[20] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[21]; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[23] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[23] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[23] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[23] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[23] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[23] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[24]; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[26] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[26] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[26] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[26] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[26] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[26] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[27]; ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[29] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[29] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[29] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[29] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[29] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[29] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[30]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[32] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[32] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[32] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[32] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[32] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[32] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[33]; ?></span>
                                </div>
                            </td>
                            <td>
                                <?php 
                                    // Arreglos de ejemplo
                                    $arrays = [
                                        [$registos_certificaciones[5]],
                                        [$registos_certificaciones[8]],
                                        [$registos_certificaciones[11]],
                                        [$registos_certificaciones[14]],
                                        [$registos_certificaciones[17]],
                                        [$registos_certificaciones[20]],
                                        [$registos_certificaciones[23]],   
                                        [$registos_certificaciones[26]],
                                        [$registos_certificaciones[29]],
                                        [$registos_certificaciones[32]],  
                                    ];
                                            
                                    // Valor específico a buscar
                                    $searchValue = 'Verde';
                                            
                                    // Contador de arreglos que contienen el valor específico
                                    $count_basico = 0;
                                            
                                    // Iterar sobre los arreglos y contar los que contienen el valor específico
                                    foreach ($arrays as $array) {
                                        if (in_array($searchValue, $array)) {
                                            $count_basico++;
                                        }
                                    }
                                            
                                    // Mostrar el resultado
                                    echo $count_basico;
                                ?>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[35] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[35] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[35] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[35] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[35] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[35] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[36]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[38] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[38] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[38] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[38] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[38] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[38] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[39]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[41] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[41] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[41] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[41] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[41] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[41] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[42]; ?></span>
                                </div>
                            </td>
                            <td> 
                            <div class="hover-text">
                            <?php 
                                        if($registos_certificaciones[44] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[44] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[44] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[44] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[44] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[44] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[45]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[47] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[47] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[47] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[47] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[47] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[47] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[48]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[50] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[50] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[50] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[50] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[50] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[50] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[51]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[53] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[53] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[53] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[53] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[53] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[53] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[54]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[56] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[56] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[56] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[56] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[56] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[56] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[57]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[59] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[59] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[59] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[59] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[59] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[59] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[60]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[62] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[62] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[62] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[62] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[62] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[62] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[63]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[65] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[65] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[65] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[65] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[65] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[65] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[66]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[68] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[68] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[68] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[68] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[68] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[68] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[69]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <?php 
                                        // Arreglos de ejemplo
                                        $arrays = [
                                            [$registos_certificaciones[35]],
                                            [$registos_certificaciones[38]],
                                            [$registos_certificaciones[41]],
                                            [$registos_certificaciones[44]],
                                            [$registos_certificaciones[47]],
                                            [$registos_certificaciones[50]],
                                            [$registos_certificaciones[53]],   
                                            [$registos_certificaciones[56]],
                                            [$registos_certificaciones[59]],
                                            [$registos_certificaciones[62]],
                                            [$registos_certificaciones[65]],
                                            [$registos_certificaciones[68]],   
                                        ];
                                                
                                        // Valor específico a buscar
                                        $searchValue = 'Verde';
                                                
                                        // Contador de arreglos que contienen el valor específico
                                        $count_intermedio = 0;
                                                
                                        // Iterar sobre los arreglos y contar los que contienen el valor específico
                                        foreach ($arrays as $array) {
                                            if (in_array($searchValue, $array)) {
                                                $count_intermedio++;
                                            }
                                        }
                                                
                                        // Mostrar el resultado
                                        echo $count_intermedio;
                                    ?>  
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[71] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[71] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[71] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[71] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[71] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[71] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[72]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[74] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[74] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[74] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[74] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[74] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[74] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[75]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[77] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[77] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[77] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[77] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[77] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[77] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[78]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[80] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[80] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[80] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[80] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[80] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[80] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[81]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[83] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[83] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[83] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[83] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[83] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[83] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[84]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[86] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[86] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[86] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[86] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[86] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[86] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[87]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[89] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[89] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[89] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[89] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[89] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[89] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[90]; ?></span>
                                </div>
                            </td>
                            <td> 
                                <div class="hover-text">
                                <?php 
                                        if($registos_certificaciones[92] == 'Verde'){
                                            echo '<img src="assets/imgs/verde.png">';
                                        }
                                        else if($registos_certificaciones[92] == 'Amarillo'){
                                            echo '<img src="assets/imgs/amarillo.png">';
                                        }
                                        else if($registos_certificaciones[92] == 'Naranja'){
                                            echo '<img src="assets/imgs/n.png">';
                                        }
                                        else if($registos_certificaciones[92] == 'Rojo'){
                                            echo '<img src="assets/imgs/rojo.png">';

                                        }
                                        else if($registos_certificaciones[92] == 'Gris'){
                                            echo '<img src="assets/imgs/gris.png">';
                                        }
                                        else if($registos_certificaciones[92] == 'Pendiente'){
                                            echo '<img src="assets/imgs/mano (1).png">';
                                        }
                                    
                                    ?>
                                    <span class="tooltip-text" id="top"><?php echo $registos_certificaciones[93]; ?></span>
                                </div>
                            </td>
                            <td> 
                                    <?php 
                                        // Arreglos de ejemplo
                                        $arrays = [
                                            [$registos_certificaciones[71]],
                                            [$registos_certificaciones[74]],
                                            [$registos_certificaciones[77]],
                                            [$registos_certificaciones[80]],
                                            [$registos_certificaciones[83]],
                                            [$registos_certificaciones[86]],
                                            [$registos_certificaciones[89]],
                                            [$registos_certificaciones[92]],   
                                        ];
                                                
                                        // Valor específico a buscar
                                        $searchValue = 'Verde';
                                                
                                        // Contador de arreglos que contienen el valor específico
                                        $count_avanzado = 0;
                                                
                                        // Iterar sobre los arreglos y contar los que contienen el valor específico
                                        foreach ($arrays as $array) {
                                            if (in_array($searchValue, $array)) {
                                                $count_avanzado++;
                                            }
                                        }
                                                
                                        // Mostrar el resultado
                                        echo $count_avanzado;
                                    ?>  
                            </td>
                            <td> 
                                    <?php 
                                    
                                        $total = $count_basico + $count_intermedio + $count_avanzado;
                                        
                                        echo $total;
                                    
                                    ?>

                            </td>
                            <td><!--INPUT DE MODIFICAR-->
                                <input name="btneditar" id="btneditar" type="submit" onclick="javascript:modificar('<?php echo $registos_certificaciones[0];?>');" value="">
                            </td>
                            <td><!--INPUT DE ELIMINAR-->
                                <input name="btneliminar"  id="btneliminar" onclick="javascript:eliminar('<?php echo $registos_certificaciones[0];?>');" type="submit" value=""> 
                            </td>
                        </div>  
                    </tr>
                    
                </tbody>
                <?php } ?>
</table>
        </div>
        <section class="section">
        </section>
        <div class="fixed-buttons2" style="display:flex;">
            <input type="button" id="btngrafica" name="btngrafica" onclick="grafica()">
            <a href="insert.php"><button type="button" name="btnacceso_insert" id="btnacceso_insert"></button></a>
        </div>
    </section>
    <footer class="footer py-4  text-light"> 
        <div class="container text-center">
            <p class="mb-4 small">Copyright &copy; Prysmian Group</p>
        </div>
    </footer>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Rubic js -->
    <script src="assets/js/rubic.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>

</body>
</html>