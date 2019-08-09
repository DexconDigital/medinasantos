<nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
    <div style="margin-left:10px;" class="">
        <a class="navbar-brand" href="index.php" style="width: 335px;height: 52px;">
            <?php $r = $logo_empresa;
            echo '
          <img src="' . $r['src'] . '" class="w-100" alt="' . $r['alt'] . '">'; ?>
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse estilo_nav" style="background-color: transparent;">
        <ul class="navbar-nav  mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="quienes_somos.php">Quiénes Somos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="servicios.php">Servicios<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="inmueble.php">Inmuebles<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown"role="button" data-toggle="dropdown"><span class="sr-only">(current)</span>
                    Clientes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=254&tipo=2 ">Arrendatarios</a>
                    <a class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=254&tipo=1  ">Propietarios</a>
                    <a class="dropdown-item" href="#">Consignar inmueble</a>
                    <a class="dropdown-item" href="#">Pagos PSE</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactanos.php">Contáctanos<span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <div class="navbar_info" id="tamaño_pse">
            <i style="font-size: 25px;" class="fa fa-mobile-alt"></i>
            <div class=" navbar_tel">
                <div class="contenedor_pse">Llámanos <br><span><a class="" href="">+57(1) 722 1563</a></span></div>
            </div>
            <div class="container row " style="height: 65px;width: 65px;padding: 0px;">
                <a href="">
                    <?php $r = $pse;
                    echo '
                    <img src="' . $r['src'] . '" class="width: 50%; logo_pse"  alt="' . $r['alt'] . '">'; ?>
                </a>
            </div>

        </div>
    </div>
</nav>