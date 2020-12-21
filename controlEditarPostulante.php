<?php 
    session_start();
    if (!isset($_SESSION['username'])){
        header("location: index.php");
    }
    include('conexion.inc.php');
    // UPDATE Usuarios SET username='{$_POST['username']}' WHERE id={$_POST['id']}"
    $sqlf ="UPDATE postulacion.usuario SET nombre= '{$_POST['nombre']}' where codUsuario='{$_POST["codUsuario"]}'";
    mysqli_query($conn, $sqlf);
    $sqlf ="UPDATE postulacion.usuario SET apellido= '{$_POST['apellido']}' where codUsuario='{$_POST["codUsuario"]}'";
    mysqli_query($conn, $sqlf);
    $sqlf ="UPDATE postulacion.postulantebecario SET RU= '{$_POST['RU']}' where codUsuario='{$_POST["codUsuario"]}'";
    mysqli_query($conn, $sqlf);
    $sqlf ="UPDATE postulacion.postulantebecario SET papelesAlDia= '{$_POST['papelesAlDia']}' where codUsuario='{$_POST["codUsuario"]}'";
    mysqli_query($conn, $sqlf);
    $sqlf ="UPDATE postulacion.postulantebecario SET promedio= '{$_POST['promedio']}' where codUsuario='{$_POST["codUsuario"]}'";
    mysqli_query($conn, $sqlf);
    header("location: flujo.php?cf={$_POST['cf']}&cp={$_POST['cp']}");
?>