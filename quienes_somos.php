<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title>Quienes somos</title>
</head>

<body>
    <section>
        <?php include 'layout/menu.php'; ?>
    </section>



    <section>
        <div class="container p-5 ">

            <div class="row col-12 ">
                <div class="col-5  height: 100%">

                    <?php $r = $texto_quienes_somos['proyeccion'];
                    echo '
               <img style="object-fit: cover;
               height: 100%;" src="' . $r['imagen'] . '" class="w-100" alt="">'; ?>
                </div>
                <div class="col-7  titulo_publicaciones ">
                    <div>
                        <h3> <?php echo $texto_quienes_somos['proyeccion']['titulo'] ?></h3>
                    </div>
                    <div class="p-2">
                        <b><?php echo $texto_quienes_somos['proyeccion']['subtitulo'] ?></b>
                    </div>
                    <div class="p-2">
                        <p><?php echo $texto_quienes_somos['proyeccion']['parrafos'][0] ?></p>
                        <p><?php echo $texto_quienes_somos['proyeccion']['parrafos'][1] ?></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container   ">
        <div class=" row">
            <div class="col-6 d-flex justify-content-around">
            <div class="card" style="width: 18rem;border: transparent;">
            <h5 class="text-center"><?php echo $texto_quienes_somos['mision']['titulo'] ?></h5>
            
                <img src="images/mision.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    
                    <p style="text-align: justify;" class="card-text"><?php echo $texto_quienes_somos['mision']['parrafo'] ?></p>
                   
                </div>
            </div>
           
            </div>
            <div class="col-6 d-flex justify-content-around">
            <div class="card" style="width: 18rem;border: transparent;">
            <h5 class="text-center"><?php echo $texto_quienes_somos['vision']['titulo'] ?></h5>
                <img src="images/vision.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    
                <p style="text-align: justify;" class="card-text"><?php echo $texto_quienes_somos['vision']['parrafo'] ?></p>
                    
                </div>
            </div>
            </div>
            
           
        </div>
        </div>
        
    </section>

    <section id="banner_estadísticas">
        <div class="banner_estadi ">
            <div class="container  contenedor_banner">
                <div class="row    p-5">
                    <div class="col-3 text-center" style="color: white;">
                        <div>
                            <i class="far fa-address-card tamaño_icono_banner"></i>
                            <h1>100</h1>
                            <h5><?php echo $texto_contador_estadisticas['parrafos'][0] ?></h5>
                        </div>
                    </div>
                    <div class="col-3 text-center" style="color: white;">
                        <div>
                            <i class="far fa-address-card tamaño_icono_banner"></i>
                            <h1>100</h1>
                            <h5><?php echo $texto_contador_estadisticas['parrafos'][1] ?></h5>
                        </div>
                    </div>
                    <div class="col-3 text-center" style="color: white;">
                        <div>
                            <i class="far fa-address-card tamaño_icono_banner"></i>
                            <h1>100</h1>
                            <h5><?php echo $texto_contador_estadisticas['parrafos'][2] ?></h5>
                        </div>
                    </div>
                    <div class="col-3 text-center" style="color: white;">
                        <div>
                            <i class="far fa-address-card tamaño_icono_banner"></i>
                            <h1>100</h1>
                            <h5><?php echo $texto_contador_estadisticas['parrafos'][3] ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    


    <footer>
        <?php include 'layout/footer.php'; ?>
    </footer>

    <!-- scripts -->
    <?php include 'layout/archivosfooter.php'; ?>
</body>

</html>