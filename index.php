<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preload" href="./style.css">
  <link rel="stylesheet" href="./style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


<!--Nombre pagina-->
<title>TuristPeople</title>
</head>

<body class="general">
  
  <div class="container">

    <!--Navar--> <!--tiene que ser fixed top-->
    <div class="section">
        <div class="row">
          <nav class="nav_color navbar fixed-top navbar-expand-lg">
            <div class="container-fluid">
              <!--Logo-->
              <a class="navbar-brand" href="#">
                <img src="./material/Logo_navar.png" alt="" width="26" height="36">
              </a>
              <!--Botones de navar-->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="bot_nav navbar-nav me-auto mb-2 mb-lg-0 justify-content-end col-xxl-9 col-xl-9 col-lg-8 col-md-8 md-justify-content-center col-sm-8">
                  <li class="nav-item">
                    <a class="texto nav-link active  rounded-3" aria-current="page" href="index.php">Publicaciones</a>
                  </li>
                  <li class="nav-item">
                    <a class="texto nav-link rounded-3" href="fotosyvideos.php">Fotos y Videos</a>
                  </li>
                  <li class="nav-item">
                    <a class="texto nav-link rounded-3" href="rutasycircuitos.php">Rutas y Circuitos</a>
                  </li>
                </ul>
                <form class="d-flex mb-3 mb-lg-0 me-lg-3 col-xxl-2 col-xl-2 col-lg-3 col-md-5 col-sm-4 col-xs-4">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <!--Boton dropdown-->
                <div class="texto dropdown text-end rounded">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./material/botondes.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <!--dropdown contenido-->
                
                <ul class="dropdown-menu p-1 bg-info dropdown-menu-end sss text-small" aria-labelledby="dropdownUser1">
                <div class="sss">
                  <li>
                    <h5 class="na text-center text-white">Configuración</h5>
                  </li>
                  <li> <hr class="dropdown-divider"> </li>
                  <li> <hr class="dropdown-divider"> </li>
                  <li class="texto">
                    <a type="button" class="na_li text-decoration-none" data-bs-toggle="modal" data-bs-target="#att_cli">Atención al Cliente</a>
                  </li>
                  <li> <hr class="dropdown-divider"> </li>
                  <li class="texto">
                    <a type="button" class="na_li text-decoration-none editbtn" data-bs-toggle="modal" data-bs-target="#modal_edit">Editar Información de Perfil</a>
                  </li>
                  <li> <hr class="dropdown-divider"> </li>
                  <li class="texto">
                    <a type="button" class="na_li text-decoration-none" data-bs-toggle="modal" data-bs-target="#eliminaModal">Eliminar Cuenta</a>
                  </li>
                  <li> <hr class="dropdown-divider"> </li>
                  <li class="texto">
                    <a href="./php/logout.php" class="na_li texto text-decoration-none">Cerrar sesión</a>
                  </li>
                  </div>
                </ul>
                
              </div>
                <!--Fin contenido dropdown-->
              </div>
            </div>
            <!--Fin botones navar-->
          </nav>
        </div>
        <!--Fin de navar-->
    </div>
    <br>
    <br>
    <br>
    <!--Modal eliminar-->
<!--**********************************************************************************************+-->
<div class="modal fade col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header menna text-white">
        <h5 class="modal-title" id="eliminaModalLabel">Eliminar Cuenta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body sss">
        <form action="php/eliminar.php" method="post">

        <div class="form-group text-center">
          <label class="form-label form-group">Contraseña de seguridad</label>
          <input  type="password" class="form-control text_min text-center" id="" name="eli_c" placeholder="Contraseña">
        </div>

        <div class="form-group text-center">
          <label class="form-label form-group">Verificar Contraseña</label>
          <input  type="password" class="form-control text-center" id="" name="eli_cd" placeholder="Contraseña">
        </div>
      </div>

      <div class="modal-footer menna">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Regresar</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
      </form>

    </div>
  </div>
</div>
<!--**********************************************************************************************+-->
<!--Modal actualizar-->
 <!--**********************************************************************************************+-->
   <div class="modal na fade col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 "  id="modal_edit" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                <div class="modal-dialog modal-dialog-centered text-center">
          
                    <div class="modal-content">

                    <div class="modal-header menna">
                        <h3 class="modal-title text-white">Editar Datos</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body sss">
                        <!--formulario -->
                        <?php include "php/editar.php"; ?>
                        </div>
                        
                        <!--fin formulario -->
                    </div>

                </div>
            </div>
 <!--**********************************************************************************************+-->
  <!-- Modal servicio al cliente -->
<div class="modal fade" id="att_cli" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header menna">
        <h5 class="modal-title text-white na" id="exampleModalLabel">Servicio TuristPeople</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
 <div class="modal-body sss">
      <div class="d-flex justify-content-center na">
        <h5>Telefono de servicio</h5>
    </div>
    <div class="d-flex justify-content-center tex_min">
        <p>(01) 800-33-22-56</p>
    </div>

    <div class="d-flex justify-content-center na">
        <h5>Email</h5>
    </div>
    <div class="d-flex justify-content-center tex_min">
        <p>TuristPeopleService@gmail.com</p>
    </div>

    <div class="d-flex justify-content-center na">
        <h5>Asunto</h5>
    </div>
    <div class="card-group justify-content-center mb-3">
        <input type="text" class="rounded-2 border-0 shadow col-8 tex_min" placeholder="Falla en carga de rutas...">
         </div>

         <div class="d-flex justify-content-center na">
        <h5>Descripción</h5>
    </div>
    <div class="d-flex justify-content-center tex_min">
    <textarea name="" id="" cols="50" rows="5" placeholder="Seleccioné mis rutas y se eliminan..."></textarea>
    </div>

      </div>
      <div class="modal-footer menna">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-info">Enviar</button>
      </div>
    </div>
  </div>
</div>
<!--**********************************************************************************************+-->
 <!--Chats-->
    <div class="row justify-content-start">
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-9 col-xs-9 chat_cont rounded">
      <h4 class="text-white text-center">Chats Online</h4>
      <hr class="bg-white">
      <a href="#" class="mb-2"">
        <img src="./material/Chat_Tania_ejemplo4.jpg" alt="chat 1" width="90" height="90" class="rounded-circle img_chat img-fluid">
      </a>
      <br>
      <br>
      <a href="#" class="mb-1"">
        <img src="./material/Chat_richy_ejemplo3.png" alt="chat 2" width="90" height="90" class="rounded-circle img_chat">
      </a>
      <br>
      <br>
      <a href="#" class="mb-1"">
        <img src="./material/Chat_dany_ejemplo2.jpg" alt="chat 2" width="90" height="90" class="rounded-circle img_chat">
      </a>
      <br>
      <br>
      <a href="#" class="mb-1"">
        <img src="./material/Chat_mio_ejemplo1.jpg" alt="chat 2" width="90" height="90" class="rounded-circle img_chat">
      </a>
      <br>
      <br>
      <br>
    </div>
    <!--fin chats-->
<!--**********************************************************************************************+-->
 <!--Publicaciones botones-->
 <div class="col align-self-start col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12">
  <!--Publicar-->
    <div class="row colo_public rounded-2 align-items-start ms-2">
      <div class="mt-3 card-group">
      <!--imagen-->
      <a href="#" class="d-block link-dark text-decoration-none col-1">
        <img src="./material/Chat_mio_ejemplo1.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
      </a>
      <!--Publicacion-->
      <input type="text" class="rounded-2 border-0 shadow col-8" placeholder="Nuevo Viaje...">
    <button type="button" class="col-2 ms-4 btn_es border-0 rounded">publicar</button>
  </div>

    <div class="col-7  col-md-5 col-sm-5 d-flex justify-content-lg-between mt-2 ms-5">
    <p class="me-1 ms-2">video</p> <img src="./material/video-icono.png" alt="mdo" width="32" height="32" class="col-1">
    <p class="me-1 ms-2">picture</p><img src="./material/imagen icono.png" alt="mdo" width="32" height="32" class="col-1">
    <p class="me-1 ms-2">emotion</p><img src="./material/icono-emoticon.png" alt="mdo" width="32" height="32" class="col-1">
    <p class="me-1 ms-4">Recomendar</p><img src="./material/minita-like.png" alt="mdo" width="32" height="32" class="col-1 bot_public"  data-bs-toggle="modal" data-bs-target="#recomendar">
    <p class="me-1 ms-2">Ruto o circuito</p><img src="./material/maps-icon.png" alt="mdo" width="32" height="32" class="col-1 bot_public"  data-bs-toggle="modal" data-bs-target="#rutaocircuito">
    </div>

    </div>
  
  <!--modal recomendar-->
  <div class="modal fade" id="recomendar" tabindex="-1" aria-labelledby="recomendarLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header menna">
          <h5 class="modal-title text-white" id="recomendarLabel">Recomendar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body sss">
        <?php include "complemento/recomendar.php"; ?>
        </div>
        <div class="modal-footer menna">
          <button type="button" class="btn btn-info">Publicar</button>
        </div>
      </div>
    </div>
  </div>
  <!--modal ruta o circuito-->
  <div class="modal fade" id="rutaocircuito" tabindex="-1" aria-labelledby="rutaocircuitoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header menna">
          <h5 class="modal-title text-white" id="rutaocircuitoLabel">Ruta o circuito</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body sss">
        <?php include "complemento/Ruta_circuito.php"; ?>
        </div>
        <div class="modal-footer menna">
          <button type="button" class="btn btn-info">Publicar</button>
        </div>
      </div>
    </div>
  </div>
<!--fin Publicaciones botones-->
    <!--**********************************************************************************************+-->
<!--Zona de publicacion-->
<div class="col align-self-center  mt-4 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

  <div class="row colo_public rounded-2 align-items-start ms-2">
    <div class="m-3 shadow-lg rounded-2 col-11">
    <h2 class="text-center na">Nueva ruta</h2>
      <!--imagen con texto-->
    <div class="col card-group">
    <a href="#" class="d-block link-dark text-decoration-none col-1">
      <img src="./material/Chat_mio_ejemplo1.jpg" alt="mdo" width="42" height="42" class="rounded-circle">
    </a>
    <p class="tex_min">El día de hoy segui esta ruta es muy buena para conocer si eres nuevo por aquí</p>
  </div>
  <!--botones de descarga y me encanta-->
  <div class="card-group">
    <div class="row align-content-end">
    <div class="col-2 mb-2">
    <img src="./material/corazon-icono.png" alt="mdo" width="22" height="22" class="rounded-circle">
    <img src="./material/icono-comentar.png" alt="mdo" width="22" height="22" class="rounded-circle">
    <img src="./material/icono-descargar.png" alt="mdo" width="22" height="22" class="rounded-circle">
  </div>
</div>
  <!--texto e imagen para seleccion-->
    <div class="col-9 card-group mb-2 pub_come">
      <img src="./material/ejemplo ruta.jpg" alt="mdo" width="62" height="62" class="ms-3 mt-1">
      <h4 class="ms-3">Ruta comercial "Centro Historico"</h4>
      <p class="ms-2">se creo una nueva ruta, da clic para poder entrar y revisarla, para asi poder guardar</p>
        <div class="card-group col align-self-end">
          <p>12</p>
          <img src="./material/corazon-icono.png" alt="mdo" width="22" height="22" class="rounded-circle">
        </div>

    </div>
  </div>

  </div>
  <!--**********************************************************************************************+-->
  <!--publicacion 2-->
  <div class="m-3 shadow-lg rounded-2  col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <h2 class="text-center na">Recomendación</h2>
      <!--imagen con texto-->
    <div class="col card-group">
    <a href="#" class="d-block link-dark text-decoration-none col-1">
      <img src="./material/Chat_mio_ejemplo1.jpg" alt="mdo" width="42" height="42" class="rounded-circle">
    </a>
  </div>
  <!--botones de descarga y me encanta-->
  <div class="card-group">
    <div class="row align-content-end">
      <div class="col-2 mb-2">
      <img src="./material/corazon-icono.png" alt="mdo" width="22" height="22" class="rounded-circle">
      <img src="./material/icono-comentar.png" alt="mdo" width="22" height="22" class="rounded-circle">
      <img src="./material/icono-descargar.png" alt="mdo" width="22" height="22" class="rounded-circle">
    </div>
  </div>
  <!--texto e imagen para seleccion-->
    <div class="col-9 mb-2">
      <h4 class="ms-3">Restaurant "GONZALEZ"</h4>
      <img src="./material/restaurant.jpg" alt="mdo" width="200" height="200" class="ms-3 mt-1 rounded-4">
      <img src="./material/restaurant2.jpg" alt="mdo" width="200" height="200" class="ms-3 mt-1 rounded-4">
      <img src="./material/5-estrellas-png.png" alt="mdo" width="400" height="100" class="ms-3 mt-1">

        <div class="card-group">
          <p>12</p>
        <img src="./material/corazon-icono.png" alt="mdo" width="22" height="22" class="rounded-circle">
        </div>

    </div>
  </div>

  </div>
  </div>

</div>

</div>
    </div>
    
      
 
    

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="../js/formulario.js"></script>


</body>
</html>