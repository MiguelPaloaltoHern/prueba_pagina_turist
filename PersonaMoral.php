<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Hola Bootstrap</title>
    <style>

.btn {
            background-color: rgb(123, 154, 212);
            border-radius: 22px;
            font-family: 'antipasto pro extrabold';

        }

        .btn:hover {
            opacity: 0.50;
            -moz-opacity: .50;
            filter: alpha (opacity=50);
        }
        .formulario{
            background-color: #5b89a6;

        }h1{
            text-align: center;
        }
        body{  
    background: -webkit-linear-gradient(to right, #5B89A6, #99D9F2);
    background: linear-gradient(to right, #660909, #2A4359);
    } 

    </style>



</head>

<body>


    <!-- Tabla:
            Los tamaños de Columna en Bootsrap 5 son:
            .col        Extra Pequeño (Extra Small) - Smartphones Vertical                  Menos de 544px
            .col-sm     Pequeño (Small) - Smartphones Vertical                              Mas de 544px y Menos de 768px
            .col-md     Mediano (Medium) - Tablets                                          Mas de 768px y Menos de 992px
            .col-lg     Largo (Large) - Computadoras                                        Mas de 992px y Menos de 1200px
            .col-xl     Extra Largo (Extra Large) - Computadoras                            Mas de 1200px
            .col-xxl    Extra extra Largo (Extra extra Large) - Computadoras y pantallas    Mas de 1400px
             -->

    <!--Primera regla todo va a dentro de un contener-->
    <!--centrar-->
    <!--se maneja por filas y columnas-->
    <!--manejar siempre 12 solumnas -->

    <div class="container">


        <div class="row ">
<!--formulario-->
            <form class="formulario mt-3 mb-3 col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 aling-self-start justify-content-end  needs-validation" novalidate>
            <h1>Registrarse</h1>
                <!--nombre-->
                <div class="nombre">
                    <label for="validationCustom01" class="form-label">Names</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <!--Apellidos-->
                <div class="apellido">
                    <label for="validationCustom02" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="validationCustom02" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>

                </div>
                
                <!--usuaio-->
                <div class="usuario">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername"
                            aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                
                <!--fecha de nacimiento -->
                <div class="fechaNac">
                    <label for="validationCustom03" class="form-label">Date Of Born</label>
                    <input type="date" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid date of born.
                    </div>
                </div>
                
                <!--sexo-->
                <div class="colsexo">
                    <label for="validationCustom04" class="form-label">Sex</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Femine</option>
                        <option>Masculine</option>

                    </select>
                    <div class="invalid-feedback">
                        Please select a valid sex.
                    </div>
                </div>
                
                <!--telefono -->
                <div class="telefono">
                    <label for="validationCustom05" class="form-label">Phone Number</label>
                    <input type="tel" step="10" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a valid phone number.
                    </div>
                </div>
                

<!--email-->
                <div class="mail">
                    <label for="validationCustom06" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationCustom06" required>
                    <div class="invalid-feedback">
                        Please provide a valid email.
                    </div>
                </div>
                
                <!--cpntraseña-->
                <div class="contraseña">

                    <label for="validationCustom07 inputPassword2" class="form-label "> Password</label>
                    <input type="password" class="form-control" id="validationCustom07 inputPassword2" required>
                    <div class="invalid-feedback">
                        Please provide a valid password.

                    </div>
                </div>
                <br>
                <!--terminos y condiciones -->
                <div class="check">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <br>
                <!--boton enviar -->
                <div class="enviar">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
            <!--Carrusel-->

            <div class="carrusel mt-3 mb-3 col-xxl-4 col-xl-4 col-lg-4 col d-none d-lg-block">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="IMG/d4aec1e2-b3e0-4daf-8729-1333612984e6.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="IMG/e602e95f-8156-40cf-8c5f-9ba1d68ec480.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="IMG/d4aec1e2-b3e0-4daf-8729-1333612984e6.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>

            <!--carrusel -->
        </div>

    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <!--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
    crossorigin="anonymous"></script>
    -->
    <script src="js/bootstrap.min.js"></script>
    <script src="vali.js"></script>

</body>

</html>