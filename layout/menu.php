<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div style="    margin-left: 24px;">
        <a class="navbar-brand" href="#" style="width: 330px;height: 44px;">
            <?php $r = $logo_empresa;
            echo '
          <img src="' . $r['src'] . '" class="w-100" alt="' . $r['alt'] . '">'; ?>
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" style="margin-right: 73px;" id="">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="quienes_somos.php">Quiénes Somos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="servicios.php">Servicios<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="inmueble.php">Inmuebles<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="clientes.php">Clientes<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="blog.php">Blog<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contactanos.php">Contáctanos<span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <div class="navbar_info" id="tamaño_pse">
            <i style="width: 33px;font-size: 55px;" class="fa fa-mobile-alt"></i>
            <div class=" navbar_tel">
                <div class="contenedor_pse">Llámanos <br><span><a class="" href="">(057) 555555</a></span></div>
            </div>

            <!-- <a href="">
                <?php $r = $pse;
                echo '
                    <img src="' . $r['sr'] . '" class=""  alt="' . $r['alt'] . '">'; ?>
            </a> -->

        </div>
    </div>
</nav>