<?php include('variables/variables.php'); ?>
    
    <div id="wrap-preload">
        <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
    </div>
    <script>
       var loader = document.getElementById("wrap-preload");
        window.addEventListener("load", function () {
            loader.style.visibility = "hidden";
        });
    </script>
<header class="main-header sticky-header" id="main-header-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 row contact-information d-none d-md-block">
                <ul>
                    <li class=""> Comunícate: </li>
                    <li class=""><a href="mailto:<?php echo $datos_contacto['correo']['correo']?>"><i class="fas fa-envelope"></i></a></li>
                    <li class=""><a href="tel:<?php echo $datos_contacto['celular']['link']?>"><i class="fas fa-mobile-alt"></i></a></li>
                    <li class=""><a href="<?php echo $datos_contacto['whatsapp']['link']?>" target="blank"><i class="fab fa-whatsapp"></i></a></li>
                    <li class="b-none"><a href="tel:<?php echo $datos_contacto['telefono_fijo']['link']?>"><i class="fas fa-phone mr-3"></i><?php echo $datos_contacto['telefono_fijo']['imprimir']?></a></li>
                </ul>
            </div>
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo navbar-brand d-flex w-50 mr-auto" href="./">
                        <img src="images/Logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto align-items-center">
                            <li class="nav-item dropdown <?php if($page=='inicio'){echo'active';}?>">
                                <a class="nav-link" href="./">
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item <?php if($page=='quienes'){echo'active';}?>">
                                <a class="nav-link" href="./quienes-somos.php">
                                    Quiénes Somos
                                </a>
                            </li>
                            <li class="nav-item <?php if($page=='servicios'){echo'active';}?>">
                                <a class="nav-link" href="./servicios.php">
                                    Servicios
                                </a>
                            </li>
                            <li class="nav-item <?php if($page=='inmuebles'){echo'active';}?>">
                                <a class="nav-link" href="./inmuebles.php?">
                                    Inmuebles
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Clientes
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-item">
                                        <a href="https://simidocs.siminmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=254&tipo=1" target="blank">Propietarios</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="https://simidocs.siminmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=254&tipo=2" target="blank">Arrendatarios</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a data-toggle="modal" data-target="#consigna">Consignar Inmueble</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item <?php if($page=='blog'){echo'active';}?>">
                                <a class="nav-link" href="./blog.php">
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item <?php if($page=='contacto'){echo'active';}?>">
                                <a class="nav-link" href="./contactanos.php">
                                    Contáctanos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://gateway2.tucompra.com.co/sites/organizacionmedinasantos" target="blank">
                                    <img src="images/logopse.png" alt="Logo de PSE" width="auto" height="50px">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="w-100 d-none d-lg-block" id="espacio-menu"></div>