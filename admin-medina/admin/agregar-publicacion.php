<?php $page = "Agregar Noticia";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <h2 class="text-center">Agregar Publicación</h2>
            <form method="post" action="guardar.php" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Titulo de la publicación</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" aria-describedby="tituloHelp" name="titulo" id="titulo "placeholder="Titulo Publicacion" required>
                        <small id="tituloHepl" class="form-text text-muted">Ingrese el titulo principal de la publicacion</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Contenido de la publicación:</label>
                    <div class="col-sm-10">
                        <textarea name="noticia" id="noticia"></textarea>
                        <small id="tituloHepl" class="form-text text-muted">Ingrese el Contenido de la publicacion</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept="image/*" required>
                        <small id="tituloHepl" class="form-text text-muted">Ingrese una imagen que no supere las 2MB de peso y tamaño de 900 * 360 pixeles  </small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Archivo</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" name="archivo" id="archivo" accept="application/pdf">
                    </div>
                </div>
                <input type="hidden" id="fecha" name="fecha">
                <div class="form-group row">
                    <div class="col-8 offset-2">
                        <button type="submit" class="btn btn-dark">Crear Publicación</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/layoutFooter.php'; ?>