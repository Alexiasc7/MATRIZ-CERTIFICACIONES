
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Rubic landing page.">
    <meta name="author" content="Devcrud">
    <title>Matriz|de certificaciones</title>
    <link rel="icon" type="image/jpg" href="assets/imgs/icon.png"/>
    <!-- Bootstrap + Rubic main styles -->
	<link rel="stylesheet" href="assets/css/rubic.css">

    <script>
        function volver(){
            window.location='index.php';
        }
        function verde(){
            window.location='verde.php';
        }
        function amarillo(){
            window.location='amarillo.php';
        }
        function naranja(){
            window.location='naranja.php';
        }
        function gris(){
            window.location='gris.php';
        }
    </script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
                                
    <!-- inicio del nav -->
    <nav  class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
         <div class="container">
         <a class="logo" href="#"><img src="assets/imgs/logos.png" ></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto"> 
                  <li class="nav-item">
                  <a href="verde.php"><img src="assets/imgs/verde.png"><br><br></a>
                  </li>
                  <li class="nav-item">
                  <a href="amarillo.php"><img src="assets/imgs/amarillo.png"><br><br></a>
                  </li>
                  <li class="nav-item">
                  <a href="naranja.php"><img src="assets/imgs/n.png"><br><br></a> 
                  </li>
                  <li class="nav-item">
                  <a href="graphics.php"><img src="assets/imgs/rojo.png"><br><br></a> 
                  </li>
                  <li class="nav-item">
                  <a href="gris.php"><img src="assets/imgs/gris.png"><br><br></a> 
                  </li>
               </ul>                        
            </div>
         </div>
      </nav>
    <!-- Terminacion del nav -->
 <section class=""style="margin-top:110px">
 </section>
    <!-- fin del formulario  -->
        <!-- TABLAS DE NIVEL -->
    <div class="">

<!-- tabla nivel 2 -->
<?php 
// Establecer la conexión a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'bdprysmiangroup2');

// Verificar si la conexión fue exitosa
if (mysqli_connect_errno()) {
    echo 'Error de conexión a MySQL: ' . mysqli_connect_error();
    exit;
}

// Consulta SQL para obtener los nombres de las columnas
$sqlColumnas = "SHOW COLUMNS FROM tblmatriz";

// Ejecutar la consulta para obtener los nombres de las columnas
$resultadoColumnas = mysqli_query($conexion, $sqlColumnas);
if (mysqli_connect_errno()) {
    echo 'Error de conexión a MySQL: ' . mysqli_connect_error();
    exit;
}

// Arreglo para almacenar los nombres de las columnas con el valor buscado
$columnasConValor = array();

// Recorrer los resultados de las columnas
while ($filaColumnas = mysqli_fetch_assoc($resultadoColumnas)) {
    $nombreColumna = $filaColumnas['Field'];

    // Consulta SQL para obtener los registros con el valor buscado en la columna actual
    $sql = "SELECT nuevo, nombre_empleado, $nombreColumna
            FROM tblmatriz
            WHERE $nombreColumna = 'Naranja'";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si la consulta devuelve algún resultado
    if (@mysqli_num_rows($resultado) > 0) {
        $columnasConValor[] = $nombreColumna;
    }
}

echo '<table class="table table-bordered">';
echo '<tr>';
echo '<th style="background-color:#ed8126">NÚMERO</th>';
echo '<th style="background-color:#ed8126">NOMBRE</th>';

foreach ($columnasConValor as $columna) {
    if ($columna !== 'nuevo') {
        echo '<th style="background-color:#ed8126; text-transform: uppercase; font-weight: 600;">' . $columna . '</th>';
    }
}

echo '</tr>';

$valorBuscado = "Naranja"; // Reemplazar

$sqlRegistros = "SELECT nuevo, nombre_empleado";

foreach ($columnasConValor as $columna) {
    if ($columna !== 'nuevo') {
        $sqlRegistros .= ", $columna";
    }
}

$sqlRegistros .= "
                  FROM tblmatriz
                  WHERE ";

$firstColumn = true;

foreach ($columnasConValor as $columna) {
    if ($columna !== 'nuevo') {
        if ($firstColumn) {
            $sqlRegistros .= "$columna = '$valorBuscado'";
            $firstColumn = false;
        } else {
            $sqlRegistros .= " OR $columna = '$valorBuscado'";
        }
    }
}

$resultadoRegistros = mysqli_query($conexion, $sqlRegistros);

while (@$filaRegistros = mysqli_fetch_assoc($resultadoRegistros)) {
    echo '<tr style="background-color:#fb851173; text-transform: uppercase;">';
    echo '<td style="font-weight: 600">' . $filaRegistros['nuevo'] . '</td>';
    echo '<td style="font-weight: 600">' . $filaRegistros['nombre_empleado'] . '</td>';

    foreach ($columnasConValor as $columna) {
        if ($columna !== 'nuevo') {
            if ($filaRegistros[$columna] == $valorBuscado) {
                echo '<td><img src="../PROJECT/assets/imgs/n.png"></td>';
            } else {
                echo '<td></td>';
            }
        }
    }

    echo '</tr>';
}
?>
</div>
</div>
</div>
    <!-- botones flotantes -->
<div class="fixed-buttons2">
    <input type="submit" name="btnback" id="btnback" onclick="javascript:volver();" value="">
</div>
</body>
</html>
