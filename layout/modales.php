<div class="modal fade" id="consigna" tabindex="-1" role="dialog" aria-labelledby="consigna" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Consignar Inmueble</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="email/consignainmueble.php" class="row" method="post">
                        <div class="form-group col-12">
                            <input type="text" placeholder="Nombre" name="nombre" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="mail" placeholder="Correo" name="email" class="form-control" required>
                        </div>
                        <div class="form-group col-12">
                            <input type="Telefono" placeholder="Telefono" name="telefono" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <select class="form-control" name="transaccion" requiered>
                                <option selected disabled>Tipo de Transaccion</option>
                                <option value="arriendo">Arriendo</option>
                                <option value="arriendo/venta">Arriendo/venta</option>
                                <option value="venta">Venta</option>
                                <option value="avaluos">avalúos</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <select class="form-control" id="tipo_inm" name="tipo_inm" requiered>
                                <option selected disabled>Tipo de Inmueble</option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Casa">Casa</option>
                                <option value="Consultorio">Consultorio</option>
                                <option value="Oficina">Oficina</option>
                                <option value="Local">Local</option>
                                <option value="Bodega">Bodega</option>
                                <option value="Lote">Lote</option>
                                <option value="Finca">Finca</option>
                                <option value="Parqueadero">Parqueadero</option>
                                <option value="Edificio">Edificio</option>
                                <option value="Apartaestudio">Apartaestudio</option>
                                <option value="Hotel">Hotel</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <input type="number" placeholder="Valor" name="valor" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="number" placeholder="Areá" name="area" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" placeholder="Ciudad" name="ciudad" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" placeholder="Direccion" name="direccion" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="mensaje" placeholder="Mensajes" name="mensaje" class="form-control" id="mensaje" rows="6" requiered></textarea>
                        </div>
                        <div class="form-group col-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" requiered>
                                <label class="form-check-label" for="exampleCheck1">Acepto <a href="./PROTECCION DE DATOS.pdf" class="a-terminos">la politica y tratamiento de datos</a></label>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-color btn-sm btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>