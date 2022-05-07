<?php 
include("conexion.php");
session_start();

$nombre = $_POST["nombre"];
$email = $_POST["correo"];
$pass = $_POST["contra"];
$pass_nueva = $_POST["contra_nueva"] ??null;
$contra = "";
$id = "";


$cliente = $_SESSION["user_id"];
    $data= mysqli_query($con, "SELECT * FROM user WHERE id = $cliente");
    while($consulta = mysqli_fetch_array($data)){
        $contra = $consulta["password"];
        $user = $consulta["username"];
        $id = $consulta["id"];
    }

    if($contra == $pass){

        if($pass_nueva == ""){
            $cambiar = "UPDATE user SET 
            fullname = '$nombre',
            email = '$email' WHERE
            id = $id";

            $resultado = mysqli_query($con, $cambiar);

            print "<script>alert(\"Datos Actualizados\");window.location='../index.php';</script>";

        }else{
            $cambiar = "UPDATE user SET 
            password = '$pass_nueva',
            fullname = '$nombre',
            email = '$email' WHERE
            id = $id";

            $resultado = mysqli_query($con, $cambiar);

            print "<script>alert(\"Password and Datos Actualizados\");window.location='../index.php';</script>";

        }
    }else{
        print "<script>alert(\"Contraseña incorrecta\");window.location='../index.php';</script>";

    }

?>