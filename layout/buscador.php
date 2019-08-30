<section id="buscador">
    <div class="container">
        <!--buscador-->
        <form>
            <div class="form-row justify-content-center">
                <div class="col-11 col-md-6 col-lg-3 form-group ">
                    <input type="text" id='codigo_buscar' class="form-control rounded-0" placeholder="Código">
                </div>
                <div class="col-11 col-md-6 col-lg-3 form-group">
                    <select id="ciudad_buscar" class="form-control rounded-0">
                        <option selected value="0">Ciudad</option>
                    </select>
                </div>
                <div class="col-11 col-md-6 col-lg-3 form-group">
                    <select id="barrio_buscar" class="form-control rounded-0">
                        <option selected value="0">Barrio</option>
                    </select>
                </div>
                <div class="col-11 col-md-6 col-lg-3 form-group">
                    <select id="tipo_inmueble_buscar" class="form-control rounded-0">
                        <option selected value="0"> Tipo de Inmueble</option>
                    </select>
                </div>
                <div class="col-11 col-md-6 col-lg-3 form-group">
                    <select id="tipo_gestion_buscar" class="form-control rounded-0">
                        <option selected value="0">Tipo de gestión</option>
                    </select>
                </div>
                <div class="col-11 col-md-6 col-lg-3 form-group">
                    <input type="text" id='precio_minimo_buscar'  onkeyup="format(this)" onchange="format(this)" class="form-control rounded-0" placeholder="Precio Mínimo" autocomplete="off">
                </div>
                <div class="col-11 col-md-6 col-lg-3 form-group">
                    <input type="text" id='precio_maximo_buscar' onkeyup="format(this)" onchange="format(this)" class="form-control rounded-0" placeholder="Precio Máximo" autocomplete="off">
                </div>
                <div class="col-11 col-md-6 col-lg-3 form-group">
                    <button type="button" id="buscar" class="btn btn-color btn-lg btn-block rounded-0">Buscar</button>
                </div>
        </form>
    </div>
</section>