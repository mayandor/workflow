<?php
session_start();
include('includes/header.php');
include('includes/sidebar.php');
include "conexion.inc.php";
$codflujo=$_GET["cf"];
$codproceso=$_GET["cp"];
$sql ="select * from proceso ";
$sql.="where codFlujo='$codflujo' ";
$sql.="and codProceso='$codproceso'";
$resultado = mysqli_query($conn, $sql);
$fila = mysqli_fetch_row($resultado);
?>
<div class="main">
<?php
include "cabecera.".$fila[5];
?>
        <!-- Aqui va el contenido -->
<form action="controlador.php" method="GET" />
<?php
include $fila[5];
?>
<br/>
<input type="hidden" name="pantalla" value="<?php echo $fila[5];?>"/>
<input type="hidden" name="codflujo" value="<?php echo $fila[0];?>"/>
<input type="hidden" name="codproceso" value="<?php echo $fila[1];?>"/>
<input type="hidden" name="tipo" value="<?php echo $fila[3];?>"/>
<input type="submit" name="Anterior" value="<<" class="botonSubmit"/>
<input type="submit" name="Siguiente" value=">>" class="botonSubmit"/>
</form>
</div>