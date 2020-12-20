<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidebar.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="sidenav">
        <h1 class="titulo">Trabajo social</h1>
        <img src="./img/logo.png" alt="" width="60">
        <?php
            if($_SESSION['codRol']=='P'){
        ?>
        <div id="menu">
            <ul>
                <li><a href="bentrada.php?codUsuario=<?php echo $_SESSION['codUsuario'];?>"><span class="material-icons">mail_outline</span>  Bandeja de Entrada</a></li>
            </ul>
        </div>
        <?php
        }
            if($_SESSION['codRol']=='A'){
        ?>
        <div id="menu">
            <ul>
                <li><a href="listar_postulantes.php"><span class="material-icons">groups</span> Seguimiento de Postulantes Auxiliares</a></li>
                <li><a href="flujo.php?cf=F1&cp=P1"><span class="material-icons">arrow_right_alt</span>   Flujo Auxiliares</a></li>
                <li><a href="listarPostulantesBecarios.php"><span class="material-icons">groups</span> Seguimiento de Postulantes Becarios</a></li>
                <li><a href="flujo.php?cf=F2&cp=P1"><span class="material-icons">arrow_right_alt</span>   Flujo Becarios</a></li>
            </ul> 
        </div>
        <?php
        }
        ?>
    </div>