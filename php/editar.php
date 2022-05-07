<?php
include("conexion.php");
 ?>

<form action="php/actualizar.php" id="cambiar" method="post">

<?php

    $cliente= $_SESSION["user_id"];
    $data = mysqli_query($con, "SELECT * FROM user WHERE id=$cliente");

        while($consulta = mysqli_fetch_array($data)){
?>

    <!--Usuario-->
    <div class="mb-3">
        <label for="usuario" class="col-form-label" >Usuario</label>
        <input type="text" class="form-control tex_min text-center" name="usuario" value="<?php echo $consulta['username'] ?>" disabled>
    </div>
    <!--Nombre-->
    <div class="mb-3">
        <label for="nombre" class="col-form-label" >Nombre completo</label>
        <input type="text" class="form-control tex_min text-center" name="nombre" value="<?php echo $consulta['fullname'] ?>">
    </div>
    <!--Email-->
    <div class="mb-3">
        <label for="correo" class="col-form-label" >Email</label>
        <input type="text" class="form-control tex_min text-center" name="correo" value="<?php echo $consulta['email'] ?>" >
    </div>
    <!--Password-->
    <div class="mb-3">
        <label for="contra" class="col-form-label" >Password</label>
        <input type="password" class="form-control tex_min text-center" name="contra">
    </div>
    <!--Nueva password-->
    <div class="mb-3">
        <label for="contra_nueva" class="col-form-label" >New password</label>
        <input type="password" class="form-control tex_min text-center" name="contra_nueva">
    </div>
    

                        <div class="modal-footer menna">
                                 <!--boton enviar -->
                            <div class="enviar mb pt-3">
                                <button type="submit" class="btn btn-primary bt" >Guardar</button>
                            </div>
                            <br>
                        
                        </div>
</form>


<?php
}
?>