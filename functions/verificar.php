<?php
include('../conexion.inc.php');
session_start();

$sqlf ="select * from postulacion.usuario ";
$sqlf.="where username= '{$_POST['username']}'and contrasena= '{$_POST["contrasena"]}'";
$resultadof = mysqli_query($conn, $sqlf);
if($filaf = mysqli_fetch_row($resultadof)){
        $_SESSION['codUsuario']= $filaf[0];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['codRol']=$filaf[5];
        if($_SESSION['codRol']== 'A'){
            header("location: ../dashboard_Admin.php");            
        }else{
            if($_SESSION['codRol']== 'P'){
            header("location: ../dashboard.php");            
            }else{
                header("location: ../dashboardBecario.php");            
            }
        }
}else{
    header("location: ../login.php?mesagge='NO'");    
}


?>