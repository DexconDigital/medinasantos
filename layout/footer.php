<div class="container-fluid">
    <div class=" p-4">
        <div class="footer-wrapper section-padding">
            <div class="row">
                <div class="col-3">
                    <div class="col-12 text-center contacto_footer">
                        <h4 class="titulo_footer"> Datos de Contacto</h4>
                    </div>
                    <div class=" conten_lista_footer">
                        <ul style="list-style: none;margin: 0;">
                            <li>Dirección: <p style="font-size: 11px;"> <?php echo $datos_contacto['direccion']['direccion'] ?> </p></li>
                            <li>Correo: <p style="font-size: 11px;"><?php echo $datos_contacto['correo']['correo'] ?> </p></li>
                            <li>Teléfono fijo: <p style="font-size: 11px;"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?> </p></li>
                            <li>Celular: <p style="font-size: 11px;"><?php echo $datos_contacto['celular']['imprimir'] ?> </p></li>
                            <li>WhatsApp:<p style="font-size: 11px;"><?php echo $datos_contacto['whatsapp']['imprimir'] ?> </p></li>
                        </ul>
                    </div>
                    <div class="col-12 text-center row p-2 iconos_footer">
                        <div class="col-2 "> <i class="fab fa-facebook-f mr-2 " id="estilo_icono_foot"></i></div>
                        <div class="col-2 "> <i class="fab fa-twitter-square mr-2 " id="estilo_icono_foot"></i></div>
                        <div class="col-2 "> <i class="fab fa-instagram mr-2 " id="estilo_icono_foot"></i></div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-12 text-center" style="">
                        <h4>Formularios Aseguradoras</h4>
                        <div class="conten_link">
                            <ul class="style_lista_link">
                                <li>
                                    <a class="style_a" href="">
                                <li class="fa fa-angle-right m-2 style_icono_link"></li>Links aseguradoras</a>
                                </li>
                                <li>
                                    <a class="style_a" href="">
                                <li class="fa fa-angle-right m-2 style_icono_link "></li>Links aseguradoras</a>
                                </li>
                                <li>
                                    <a class="style_a" href="">
                                <li class="fa fa-angle-right m-2 style_icono_link "></li>Links aseguradoras</a>
                                </li>
                                <li>
                                    <a class="style_a" href="">
                                <li class="fa fa-angle-right m-2 style_icono_link "></li>Links aseguradoras</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-4  ">
                    <div class="col-12   text-center margen_ubica">
                        <h4> Ubícanos</h4>
                        <div class="container col-12">
                        <iframe style=" object-fit: contain;width: 100%;height: 70%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.1475234434697!2d-74.09465558555334!3d4.744408442598812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f84f6f7429a87%3A0xf7663657c27dfdd0!2sCl.+147+%23101-56%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1565369848699!5m2!1ses-419!2sco" frameborder="0" style="border:0;" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
                <div class="col-3 ">
                    <div class="col-12  text-center">
                        <h4> Formulario de Contacto</h4>
                    </div>
                    <div class="container">
                        <div class="col-12 margen_form"> <input type="text" class="col-12 form-control" placeholder="Nombre y Apellido" id=""></div>
                        <div class="col-12 margen_form"><input class="col-12 form-control" placeholder=" Teléfono/móvil" id="supscrp_foot"></div>
                        <div class="col-12 margen_form"><input type="email" class="col-12 form-control" placeholder="Correo Electrónico" id=""></div>
                        <div class="col-12"><textarea class="form-control col-12 margen_form" placeholder="Mensaje" id="" rows="3"></textarea></div>
                        <div class="col-12 margen_form">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                Confimo que he leído, entendido y acepto la política de tratamiento de datos personales.
                                </label>
                            </div>
                            <div style="margin-bottom: 1rem;">

                            </div>
                            <button id="" type="button" class="btn btn-dark rounded-0 col-12 booton_footer" name=""><span>Enviar</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style=" width: 71%;">
    <div class="container text-center p-4 ">
        <p class="">
            Copyright © 2019 <a href="">Dexcon Digital</a>. Todos los derechos reservados.
        </p>
    </div>
</div>