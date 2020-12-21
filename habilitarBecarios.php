<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/consulta.css"></link>
    <title>postulantesBecarios</title>
</head>
<?php
    include('conexion.inc.php');
    // si la session no existe entondes redirecciona añ index caso contrario deja pasar y se carga la pagina
    if (!isset($_SESSION['username'])){
        header("location: index.php");
    }
?>
    <div>
<?php 
$sqlf ="select * from postulacion.usuario u, postulacion.postulantebecario p where p.codUsuario= u.codUsuario";
$resultadof = mysqli_query($conn, $sqlf);
?>

    <!-- <div class="main"> -->
        <!-- Aqui va el contenido -->
        <table>
            <thead>
                <td>NOMBRE</td>
                <td>APELLIDO</td>
                <td>PROMEDIO</td>
                <td>PAPELES AL DIA</td>
                <td>Seleccionar</td>
            </thead>
        <?php
        while($filaf = mysqli_fetch_row($resultadof))
        {
            echo "<tr>";
            echo "<td>".$filaf[3]."</td>";
            echo "<td>".$filaf[4]."</td>";
            echo "<td>".$filaf[10]."</td>";
            echo "<td>".$filaf[9]."</td>";
        ?>
            <td>
                <input type="checkbox">
            </td>
        </tr>
        <?php
        };
        ?>
        </tr>
        </table>
        <select name="sino">
	        <option>Si</option>
	        <option>No</option>
        </select>
    </div>