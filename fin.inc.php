<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/consulta.css"></link>
    <title>Fin proceso</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['username'])){
	header("location: index.php");
} 
$codflujo='F1';
$codproceso='P9';
$pantalla= 'notificacion.inc.php';
?>
<div>
        <?php include('includes/header.php')?>
        <?php include('includes/sidebar.php')?>
        <div class="main">
            <h1>Finalizo Proceso</h1>
            <form action="controlador.php" method="GET" />
            <input type="hidden" name="pantalla" value="<?php echo $pantalla;?>"/>
            <input type="hidden" name="codflujo" value="<?php echo $codflujo;?>"/>
            <input type="hidden" name="codproceso" value="<?php echo $codproceso;?>"/>
            <input type="hidden" name="tipo" value="P"/>
            <input type="submit" name="Anterior" value="<<" class="botonSubmit"/>
            </form>
        </div>
</div>

</body>
<html>