<?php 
include("conexion.php");
session_start();

$contra = "";

$nueva = $_POST["eli_c"];
$nueva_pw = $_POST["eli_cd"];

$cliente = $_SESSION["user_id"];
    $data= mysqli_query($con, "SELECT * FROM user WHERE id = $cliente");
    while($consulta = mysqli_fetch_array($data)){
        $contra = $consulta["password"];
        $user = $consulta["username"];
        $id = $consulta["id"];
    }
    if($nueva == $nueva_pw){

        if($nueva == $contra){
            $eliminar = "DELETE FROM user WHERE id = $id";
        $resultado = mysqli_query($con, $eliminar);

        print "<script>alert(\"Cuenta Eliminada\");window.location='../login.php';</script>";
        }else{
            print "<script>alert(\"Contraseña incorrecta\");window.location='../index.php';</script>";
        }

    }else{
        print "<script>alert(\"Contraseña no coinciden\");window.location='../index.php';</script>";
    }

mysqli_close($con);

?>