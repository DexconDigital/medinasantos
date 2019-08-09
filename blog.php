<?php require 'variables/variables.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title>Blog</title>
</head>

<body>
    <section>
        <?php include 'layout/menu.php'; ?>
    </section>
    

    <section>
        <div class="container p-5">
            <div class="row">
                <div class="col-12 row">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/no_image.png" class="card-img-top" alt="...">
                            <span class="span_clientes">D/M/H</span>
                            <div class="card-body">
                                <h5 class="card-title">Titulo_Noticia</h5>
                                <div style="margin: 15px 0;font-size: 14px;">
                                    <span style="margin-right: 20px;"><a href=""></a><i class="fa fa-user mr-2"></i>Persona</span>
                                    <span><a href=""></a><i class="far fa-comment mr-2"></i>Comentarios</span>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/no_image.png" class="card-img-top" alt="...">
                            <span class="span_clientes">D/M/H</span>
                            <div class="card-body">
                                <h5 class="card-title">Titulo_Noticia</h5>
                                <div style="margin: 15px 0;font-size: 14px;">
                                    <span style="margin-right: 20px;"><a href=""></a><i class="fa fa-user mr-2"></i>Persona</span>
                                    <span><a href=""></a><i class="far fa-comment mr-2"></i>Comentarios</span>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/no_image.png" class="card-img-top" alt="...">
                            <span class="span_clientes">D/M/H</span>
                            <div class="card-body">
                                <h5 class="card-title">Titulo_Noticia</h5>
                                <div style="margin: 15px 0;font-size: 14px;">
                                    <span style="margin-right: 20px;"><a href=""></a><i class="fa fa-user mr-2"></i>Persona</span>
                                    <span><a href=""></a><i class="far fa-comment mr-2"></i>Comentarios</span>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
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