<?php $page = "Lista de Noticias";
require( "seguridad.php" );
require_once( "conexion.php" );
include 'layout/layout.php';
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;
$con = Conect();
$qry = "SELECT * FROM noticias where id ='$id' and id_inmobiliaria2 = 6";
$result = $con->prepare( $qry );
$result->execute();
$res = $result->fetch( );
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <h2 class="text-center">Editar Noticia</h2>
            <form method="post" action="uptade.php" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?php echo $res[0]; ?>">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Titulo Publicacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $res[1]; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Noticia:</label>
                    <div class="col-sm-10">
                        <textarea name="noticia" id="noticia"><?php echo $res[5];?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Imagen Actual</label>
                    <div class="col-sm-10">
                        <img src="<?php echo $res[3]; ?>" alt="" width="200px" height="auto">
                    </div>
                    <div class="col-sm-10 offset-2">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept="image/*">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Archivo Actual</label>
                    <label for="" class="col-sm-10 col-form-label"><?php echo $res[4];?></label>
                    <div class="col-sm-8 offset-2">
                        <input type="file" class="form-control-file" name="archivo" id="archivo" accept="application/pdf">
                    </div>
                </div>
                <input type="hidden" id="fecha" name="fecha">
                <div class="form-group row">
                    <div class="col-8 offset-2">
                        <button class="btn btn-dark">Actualizar Noticia</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/layoutFooter.php';
?>
