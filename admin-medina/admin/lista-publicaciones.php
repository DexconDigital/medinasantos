<?php $page = "Lista de Noticias";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
$id_inmobiliria = 6;
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2 class="text-center">Lista de publicaciones</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                            $con=Conect();
                            $qry="select * from noticias where id_inmobiliaria2 = '$id_inmobiliria' order by id DESC ";
                            $sql=mysqli_query($con,$qry);
                            while($res=  mysqli_fetch_array($sql)){
                            echo '<tr>
                                <td>'.$res["id"].'</td>
                                <td>'.$res["nombre"].'</td>
                                <td><a href="actualizarpublicacion.php?id='.$res["id"].'"><i class="fas fa-pen-square"></i></a></td>
                                <td><a data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-times"></i></a>
                                    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            ¿Estas seguro de que quieres eliminar la Publicacion?
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <a class="btn btn-danger btn-ok" href="eliminar.php?id='.$res["id"].'">Eliminar</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                
                                </td>
                            </tr>';}
                            ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include 'layout/layoutFooter.php'; ?>