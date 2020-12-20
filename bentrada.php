<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/consulta.css"></link>
    <title>Examen oral</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['username'])){
	header("location: index.php");
}

include "conexion.inc.php";
$sql ="select * from seguimiento ";
$sql.="where usuario='".$_GET["codUsuario"]."' ";
$sql.="and fechafin is null";
$resultado = mysqli_query($conn, $sql);
?>
<div>
        <?php include('includes/header.php')?>
        <?php include('includes/sidebar.php')?>
        <!-- Aqui va el contenido -->
        <div class="main">
			<table border="1px">
				<tr>
					<td>Tramite</td>
					<td>Flujo</td>
					<td>Proceso</td>
					<td>Fecha Inicial</td>
					<td>Operaciones</td>
				</tr>
				<?php
while ($fila = mysqli_fetch_row($resultado))
{
	echo "<tr>";
	echo "<td>".$fila[0]."</td>";
	echo "<td>".$fila[1]."</td>";
	echo "<td>".$fila[2]."</td>";
	echo "<td>".$fila[4]."</td>";
	echo "<td><a href='flujo.php?cf=".$fila[1]."&cp=".$fila[2]."'>Ver</a></td>";
	echo "<tr>";
}
?>
</table>
</div>
</div>
</body>
<html>