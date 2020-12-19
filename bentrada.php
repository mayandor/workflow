<html>
<body>
<?php
session_start();
include "conexion.inc.php";
$sql ="select * from seguimiento ";
$sql.="where usuario='".$_GET["codUsuario"]."' ";
$sql.="and fechafin is null";
echo $sql;
$resultado = mysqli_query($conn, $sql);
?>
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
</body>
<html>