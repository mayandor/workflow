<?php
session_start();
include "conexion.inc.php";
$codflujo=$_GET["codflujo"];
$codproceso=$_GET["codproceso"];
$pantalla=$_GET["pantalla"];
// $pantalla="controlador.".$pantalla;
$tipo=$_GET["tipo"];
include $pantalla;

$sql1 ="select * from flujocuestionante ";
$sql1.="where codFlujo='$codflujo' ";
$sql1.="and codProcesoSI='$codproceso'";
$resultado1 = mysqli_query($conn, $sql1);
if($fila1 = mysqli_fetch_row($resultado1)){
    $cf= $fila1[0];
    $cp= $fila1[1];
    header("Location: flujo.php?cf=$cf&cp=$cp");
}else{
    if ($tipo!="C")
{	

    if (isset($_GET["Siguiente"]))
    {
        $sql ="select * from proceso ";
        $sql.="where codFlujo='$codflujo' ";
        $sql.="and codProceso='$codproceso'";
        $resultado = mysqli_query($conn, $sql);
        $fila = mysqli_fetch_row($resultado);
        $cf=$fila[0];
        $cp=$fila[2];
    }
    if (isset($_GET["Anterior"]))
    {
        $sql ="select * from proceso ";
        $sql.="where codFlujo='$codflujo' ";
        $sql.="and codProcesoSiguiente='$codproceso'";	
        $resultado = mysqli_query($conn, $sql);
        $fila = mysqli_fetch_row($resultado);
        $cf=$fila[0];
        $cp=$fila[1];
    }
    header("Location: flujo.php?cf=$cf&cp=$cp");    
}else
{
    $sql ="select * from flujocuestionante ";
    $sql.="where codFlujo='$codflujo' ";
    $sql.="and codProceso='$codproceso'";
    $resultado = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_row($resultado);
    // echo $_GET['sino'];
    if($_GET['sino']== 'Si'){
        $cf=$fila[0];
        $cp=$fila[2];
       header("Location: flujo.php?cf=$cf&cp=$cp");
    }else if($_GET['sino']== 'No'){
        $cf=$fila[0];
        $cp=$fila[3];
        echo "NO";
        echo $cp;
        header("Location: notificacion.inc.php?notificacion='fin'");
    }
}

}
// echo "controlar un select del formulario";

