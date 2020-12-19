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
        <h1 class="titulo">SIA</h1>
        <img src="./img/birrete.png" alt="" width="60">
        <?php
            if($_SESSION['codRol']=='P'){
        ?>
        <div id="menu">
        <ul>
            <li class="parent">
                <a href="#"><span class="material-icons">school</span>  Curso de Verano</a>
                <ul>
                    <li><a href="inscripcion.php">Inscripcion</a></li>
                    <li><a href="materias_inscritas.php">Materias inscritas</a></li>
                </ul>
            </li> 
        </ul>
        </div>
        <?php
        }
            if($_SESSION['codRol']=='A'){
        ?>
        <div id="menu">
            <ul>
                <li><a href="listar_postulantes.php"><span class="material-icons">groups</span>   Postulantes</a></li>
            </ul> 
        </div>
        <?php
        }
        ?>
    </div>