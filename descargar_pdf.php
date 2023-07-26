<?php
// Ruta del archivo PDF a descargar
$pdfFilePath = 'assets/MANUAL_DE_USUARIO.pdf';

// Nombre que se mostrará al descargar el archivo
$downloadFileName = 'MANUAL_DE_USUARIO.pdf';

// Establecer las cabeceras adecuadas para la descarga
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $downloadFileName . '"');
header('Content-Length: ' . filesize($pdfFilePath));

// Leer y enviar el archivo PDF al navegador
readfile($pdfFilePath);
exit;
?>
