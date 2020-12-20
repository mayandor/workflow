<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/consulta.css"></link>
    <title>postulantesBecarios</title>
</head>
<?php
    session_start();
    include('conexion.inc.php');
    // si la session no existe entondes redirecciona añ index caso contrario deja pasar y se carga la pagina
    if (!isset($_SESSION['username'])){
        header("location: index.php");
    }
?>
    <div>
        <?php include('includes/header.php')?>
        <?php include('includes/sidebar.php')?>
        <!-- Aqui va el contenido -->
        <div class="main">
<?php 
$sqlf ="select * from postulacion.usuario u, postulacion.postulantebecario p where p.codUsuario= u.codUsuario";
$resultadof = mysqli_query($conn, $sqlf);
?>

    <!-- <div class="main"> -->
        <!-- Aqui va el contenido -->
        <h1>Postulantes a Beca Comedor</h1>
        <table>
            <thead>
                <td>NOMBRE</td>
                <td>APELLIDO</td>
                <td>RU</td>
                <td>PROMEDIO</td>
                <td>Operaciones</td>
            </thead>
        <?php
        while($filaf = mysqli_fetch_row($resultadof))
        {
            echo "<tr>";
            echo "<td>".$filaf[3]."</td>";
            echo "<td>".$filaf[4]."</td>";
            echo "<td>".$filaf[8]."</td>";
            echo "<td>".$filaf[10]."</td>";
        ?>
            <td>
                <a href="bentrada.php?codUsuario=<?php echo urlencode($filaf[0])?>" class="botonmat">Ver seguimiento</a>
            </td>
        </tr>
        <?php
        };
        ?>
        </tr>
        </table>
        </div>
        <!-- </div> -->
    </div>