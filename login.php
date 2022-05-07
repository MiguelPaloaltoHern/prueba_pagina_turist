<?php session_start(); ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preload" href="./style.css">
  <link rel="stylesheet" href="./style.css">
    
    
<title>TuristPeople</title>
</head>
    <style>
* {
	padding: 0;
	margin: 0;
	font-family: 'antipasto pro regular';
	text-align: center;
}
.card{
	padding: 10px 20px;
	background-color: #dbd9d9a6;
	margin-top: 50px;
	padding-top: 28px;
	margin-bottom: 30px;
	border-radius: 10% ;;
}
h1 {
	text-align: center;
	padding: 12px;
	color: rgb(206, 203, 203)
}
input {
	width: calc(100% - 20px);
	margin: auto;
}


header{
    width: 100%;
    color: #fff;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    align-content: space-between;
    background-color: rgba(0, 0, 0,.3);
}
header h1{
    margin-left: 5px;
    align-items: center;
    width: calc(20% - 100px);
    font-family: montez;
    font-size: 55px;
}
header a{
    margin-right: 30px;
    text-align: center;
    text-decoration: none;
    color: #fff;
    font-size: 25px;
    transition: all ease 300ms;
}



.mand{
	color: #1d3557;
}
.cont{
	color: #1d3557;
}




.btn {
            background-color: rgb(123, 154, 212);
            border-radius: 22px;
            font-family: 'antipasto pro extrabold';

        }
.b {
            background-color: #e63946;
            border-radius: 10px;
            font-family: 'antipasto pro extrabold';
            width: calc(87% - 20px);
        }
.bt {
            background-color: #48e;
            border-radius: 10px;
            font-family: 'antipasto pro extrabold';
            width: calc(81% - 20px);
    }

        .btn:hover {
            opacity: 5;
            -moz-opacity: .50;
            filter: alpha (opacity=50);
        }

        h5 {
            color: #101c26;
            font-family: 'antipasto pro extrabold';

        }

        h3 {
            color: #101c26;
            font-family: 'antipasto pro extrabold';

        }
        .modal{
        font-family: 'antipasto pro extrabold';
        }
        .sss{
            background-color: #5b89a6;
        }
        

    </style>
    <body>
        <div id="carouselExampleSlidesOnly" class="carousel slide carr" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="IMG/Salv.jpg" alt="First slide" width="500" height="810">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="IMG/Salva2.jpg" alt="Second slide" width="500" height="810">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="IMG/salva3.jpg" alt="Third slide" width="500" height="810">
        </div>
        </div>
        </div>
    <!----------------------------------------------------------------------------------------------------------------->
    <div class="card-img-overlay">
      <div class="container">
          <div class="row align-items-center justify-content-center">
              <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-8 col-sm-8">
                  <div class="card shadow-lg">
                      <div class="card-body">
                          
                              <div class=" text-center">


                                  <form role="form" name="login" action="php/login.php" method="post">
                                  <img src="IMG/logo turist people 2.png" width="160" height="80">
                                  
                                  <div class="form-group mand">
                                    <label for="username">Usuario</label>
                                  <input class="form-group tex_min" type="text" placeholder="Ingrese su nombre" id="username" name="username">
                                  </div>
                                 
                                  <div class="form-group mand">
                                  <label for="password">Contraseña</label>
                                  <input class="form-group tex_min" type="password" placeholder="Ingrese su contraseña" id="password" name="password">
                                  </div>
                                  <div class="col-lg-12 pt-4"></div>
                                  <button type="submit" class="btn btn-default registro btn-dark bt">Login</button>
                                </div>
                                
                                </form>
                                
                                  <!--------------------Dulce--------------------------------------------------->
    

        <div class="row">


            <!--Boton de registro Abre-->
            <!-- First modal dialog -->

            <div class="modal fade mb-3 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 " id="modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                <div class="modal-dialog mb-3 modal-dialog-centered">
                    <div class="modal-content sss text-center">
                        <div class="modal-header menna">
                        <div class="modal-title mt-3">
                            <h3 class="uno text-white"> Registrarse Como:</h3>
                            
                        </div>
                        </div>

                        <div class="modal-body ">
                            <h5 class="dos mt-1">physical person:</h5>


                            <button class="btn uno btn-primary" data-bs-target="#modal2" data-bs-toggle="modal"
                                data-bs-dismiss="modal">Physical Person </button>
                            <br>
                            <h5 class="dos mt-1">Moral person:</h5>


                            <a class="btn btn-primary" href="PersonaMoral.php" role="button">Moral Person</a>

                        </div>

                        <div class="modal-footer menna ">
                            <!-- Toogle to second dialog -->

                            <a class="btn btn-primary" href="" role="button">Come Back</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- second modal dialog -->
            <div class="modal fade col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 "  id="modal2" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                <div class="modal-dialog modal-dialog-centered text-center">
          
                    <div class="modal-content sss col-lg-12">
                    

                        <br>
                        <h3> New Register</h3>
                        

                        <!--formulario -->
                        <form role="form" name="registro" action="php/registro.php" class="formulario mb-3 m-auto text-center" method="post">
                            <!--Nombre-->
                            <div class="form-group">
                                <label for="username" class="form-label">user</label>
                                <input type="text" class="form-control tex_min" id="username" name="username" placeholder="Nombre de usuario">
                            </div>
                            
                            <!--Apellido -->
                            <div class="form-group">
                                <label for="fullname" class="form-label">All Name</label>
                                <input type="text" class="form-control tex_min" id="fullname" name="fullname" placeholder="Apellidos">
                            </div>
                            
                            <!--apellidos -->
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control tex_min" id="email" name="email" placeholder="Correo electronico">
                            </div>
                        
                            <!--contraseña-->
                            <div class="form-group">

                                <label for="password" class="form-label form-group"> Password</label>
                                <input type="password" class="form-control tex_min" id="password" name="password" placeholder="Contraseña">
                            </div>
                            
                            <!--terminos y condiciones -->
                            <div class="form-group">
		                         <label for="confirm_password">Confirmar Contraseña</label>
		                         <input type="password" class="form-control tex_min" id="confirm_password" name="confirm_password" placeholder="Confirmar Contraseña">
		                    </div>
                                 <!--boton enviar -->
                            <div class="enviar mb pt-3">
                                <button type="submit" class="btn btn-default btn-primary bt">Submit</button>
                            </div>
                            <br>
                        </form>
                        <!--fin formulario -->
                    </div>

                </div>
            </div>
            <!--boton modal -->
            <!-- Open first dialog -->
                             <div class="col-lg-12 pt-2">
                                <button type="button" class="btn registro btn-dark b" data-bs-toggle="modal" data-bs-target="#modal">Register</button>
                                </div>
                            </div>
   


                                  <!---------------------------------------------------------------------------->
                                  <br>
                                  <div class="cont">
                                  <dt><a type="button" class="text-reset" data-bs-toggle="modal" data-bs-target="#olvidecontra"> Olvide mi contraseña </a></dt>
                                  </div>
                                  <br>
                                  <div class="row">
                                  <div class="mand main col-lg-6 col-sm-8 col-md-8">
                                  <dt><a href="login.php" class="text-reset"> TuristPeople </a></dt>
                                  </div>
                                  <div class="main mand col-lg-6 col-md-8 col-sm-12">
                                  <dt><a type="button" class="text-reset" data-bs-toggle="modal" data-bs-target="#politicas"> Politicas </a></dt>
                                  </div>
                                  </div>
                              


                              </div>
                          
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


</div>    
    <!--Modal contraseña olvidada-->
<div class="modal fade col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12" id="olvidecontra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header menna">
        <h5 class="modal-title text-white" id="exampleModalLabel">Recuperar Contraseña</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body sss">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="email" class="form-control tex_min" id="recipient-name">
          </div>
        </form>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Atencion!</strong> Ingresa tu correo electronico y se te mandara una confirmación
  para poder recuperar tu contrseña.
    </div>
      </div>
      <div class="modal-footer menna">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Send email</button>
      </div>
    </div>
  </div>
</div>
    <!--fin contraseña olvidada-->

        <!--Politicas-->
 <div class="modal fade col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12" id="politicas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header menna">
        <h5 class="modal-title text-white" id="staticBackdropLabel">POLITICAS</h5>
        <button type="button" class="btn-close tex_min" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body sss">
      <?php include "complemento/text.php"; ?>
      </div>
      <div class="modal-footer menna">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Entendido</button>
      </div>
    </div>
  </div>
</div>
        <!--fin Politicas-->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
    crossorigin="anonymous"></script>
<!--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
crossorigin="anonymous"></script>
-->
<script src="js/valida_login.js"></script>
<script src="js/valida_registro.js"></script>
<script src="js/bootstrap.min.js"></script>
        </body>
        </html>