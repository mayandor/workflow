<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("location: index.php");
    }
    include('conexion.inc.php');
    include('includes/header.php');
    include('includes/sidebar.php');
    $sqlf ="select * from postulacion.usuario u, postulacion.postulantebecario p where p.codUsuario= u.codUsuario and p.codUsuario= '{$_GET["codUsuario"]}'";
    $resultadof = mysqli_query($conn, $sqlf);
    if($filaf = mysqli_fetch_row($resultadof))
    {
        ?>
    <div class="main">
        <!-- Aqui va el contenido -->
        <form action="controlEditarPostulante.php" method="POST" novalidate >
        <input  name="codUsuario" value="<?php echo $_GET['codUsuario']?>" hidden>
        <input  name="cf" value="<?php echo $_GET['cf']?>" hidden>
        <input  name="cp" value="<?php echo $_GET['cp']?>" hidden>

        <div>
                <label>Nombre*</label>
                <div>
                      <input type="text" name="nombre" value="<?php echo $filaf[3]?>">
                </div>
            </div>
            <div>
                <label>Apellido*</label>
                <div>
                      <input type="text" name="apellido" value="<?php echo $filaf[4]?>">
                </div>
            </div>
            <div>
                <label>RU*</label>
                <div>
                      <input type="text" name="RU" value="<?php echo $filaf[8]?>">
                </div>
            </div>
            <div>
                <label>Papeles al dia*</label>
                <div>
                      <input type="text" name="papelesAlDia" value="<?php echo $filaf[9]?>">
                </div>
            </div>
            <div>
                <label>Promedio*</label>
                <div>
                      <input type="text" name="promedio" value="<?php echo $filaf[10]?>">
                </div>
            </div>
                      <div>
                        <div>
                        <button type="submit" class="formboton">Editar</button>
                      </div>
                      </div>
                    </form>
    </div>
    
<?php
    }
?>
