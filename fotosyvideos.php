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
<style>
  
  }
  .bt {
            background-color: #1d3557;
            border-radius: 10px;
            font-family: 'antipasto pro extrabold';
            width: calc(100% - 20px);
            justify-content: center;
    }
  .but{
    background-color: #a7bac9;
    border-radius: 100%;
  }

</style>
<body class="general" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" tabindex="0">
  
  <div class="container">

    <!--Navar--> <!--tiene que ser fixed top-->
    <div class="section">
        <div class="row">
          <nav class="nav_color navbar fixed-top navbar-expand-lg d-flex flex-wrap align-items-center justify-content-center">
            <div class="container-fluid">
              <!--Logo-->
              <a class="navbar-brand" href="#">
                <img src="./material/Logo_navar.png" alt="" width="26" height="36">
              </a>
              <!--Botones de navar-->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="bot_nav navbar-nav col-9 me-auto mb-2 mb-lg-0 justify-content-end">
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
                <form class="d-flex col-xxl-2 col-xl-2 col-lg-2 col-md-5 col-sm-4 col-xs-4 mb-3 mb-lg-0 me-lg-3">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <!--Boton dropdown-->
                <div class="texto dropdown text-end rounded">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./material/Chat_mio_ejemplo1.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <!--dropdown contenido-->
                <ul class="dropdown-menu p-2 menna dropdown-menu-end text-small" aria-labelledby="dropdownUser1">
                  <li>
                    <h5 class="na text-center">Configuración</h5>
                  </li>
                  <li> <hr class="dropdown-divider"> </li>
                  <li class="texto">
                    <a href="#" class="na_li text-decoration-none">Cambiar foto de perfil</a>
                  </li>
                  <li> <hr class="dropdown-divider"> </li>
                  <li class="texto">
                    <a href="#" class="na_li text-decoration-none">Atención al Cliente</a>
                  </li>
                  <li> <hr class="dropdown-divider"> </li>
                  <li class="texto">
                    <a href="#" class="na_li text-decoration-none">Editar Información de Perfil</a>
                  </li>
                  <li> <hr class="dropdown-divider"> </li>
                  <li class="texto">
                    <a href="#" class="na_li text-decoration-none">Eliminar Cuenta</a>
                  </li>
                  <li> <hr class="dropdown-divider"> </li>
                  <li class="texto">
                    <a href="#" class="na_li texto text-decoration-none">Cerrar sesión</a>
                  </li>
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
       <!--**********************************************************************************************+-->
 
    <!--Chats-->
    <div class="row justify-content-start">
      <div class="col-3 chat_cont rounded">
      <h4 class="text-white text-center">Chats Online</h4>
      <hr class="bg-white">
      <a href="#" class="mb-2"">
        <img src="./material/Chat_Tania_ejemplo4.jpg" alt="chat 1" width="90" height="90" class="rounded-circle img_chat">
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
 <div class="col align-self-start col-9">
  


<!--fin Publicaciones botones-->
    <!--**********************************************************************************************+-->
<!--Zona de publicacion-->
<div class="col align-self-center col-12">

  <div class="row colo_public rounded-2 align-items-start ms-2">
    <!--Imagenes-->
    <div class="m-3 shadow-lg rounded-2 col-11">
    <div>
      <h3 class="text-center na">Imagenes</h3>
        <div class="card-group">
          <div class="text-center na">
            <img src="./material/viaje1.jpg" alt="foto de viaje" width="150" height="150" class="rounded galery">
          <p>Visita ciudad</p>
          </div>
          <div class="text-center na mx-auto d-block">
            <img src="./material/VIAJE2.jpg" alt="foto de viaje" width="150" height="150" class="rounded galery">
            <p>Viaje junio</p>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus btn-dark but" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <circle cx="12" cy="12" r="9" />
            <line x1="9" y1="12" x2="15" y2="12" />
            <line x1="12" y1="9" x2="12" y2="15" />
          </svg>
        </div>
    </div>
  </div>
    <!--videos-->
    <div class="m-3 shadow-lg rounded-2 col-11">
    <div>
      <h3 class="text-center na">Videos</h3>
        <div class="card-group">
          <div class="text-center na">
            <img src="./material/teqilaa.jpg" alt="foto de viaje" width="150" height="150" class="rounded galery">
          <p>Vistia tequila</p>
          </div>
          <div class="text-center na mx-auto d-block">
            <img src="./material/hotel.jpg" alt="foto de viaje" width="150" height="150" class="rounded galery">
            <p>hotel mazatlan</p>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus btn-dark but" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <circle cx="12" cy="12" r="9" />
            <line x1="9" y1="12" x2="15" y2="12" />
            <line x1="12" y1="9" x2="12" y2="15" />
          </svg>
        </div>
    </div>
  </div>
  <!--Fin galeria-->

  

</div>

</div>
    </div>
    
      
 
    

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
    <script src="form.js"></script>
</body>

</html>