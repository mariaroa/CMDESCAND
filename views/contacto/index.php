<?php
require 'views/index/index.php';
require 'views/header/index.php';
?>
<div class="container">
    
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
        <img src="<?php echo constant('URL') ?>public/images/contacto.png" class="img-fluid" alt="Responsive image">
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
  <div class="container">
    <!-- Button trigger modal -->
    <div class="text-center">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#swModal">
        Contacto
      </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="swModal" tabindex="-1" aria-labelledby="swModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog  modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="swModalLabel">Contacto</h5>

            <div class="float-end text-muted ms-5">
              Paso número: <span id="sw-current-step">2</span> de <span id="sw-total-step">4</span>
            </div>

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <!-- SmartWizard html -->
            <div id="smartwizard" dir="" class="sw sw-theme-arrows sw-justified">
                <ul class="nav nav-progress">
                    <li class="nav-item">
                      <a class="nav-link default active" href="#step-1">
                        <div class="num">1</div>
                        Datos personales
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link default done" href="#step-2">
                        <span class="num">2</span>
                        Datos de contacto
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link default done" href="#step-3">
                        <span class="num">3</span>
                        Petición, queja o recurso
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link default done" href="#step-4">
                        <span class="num">4</span>
                        Confirmar
                      </a>
                    </li>
                </ul>

                <div class="tab-content" style="height: 211.188px;">
                  <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1" style="display: block;">
                    <h3>Datos Personales</h3>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre-contacto" placeholder="Nombre">
                        </div>
                        <div class="col-sm-6">
                            <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido-contacto" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 d-flex align-items-end">
                            <select class="form-control" id="documento-contacto">
                                <option>CC</option>
                                <option>DNI</option>
                                <option>VISA</option>
                                <option>OTRO</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="numero-documento" class="col-sm-2 col-form-label">Numero</label>
                            <input type="number" class="form-control" id="numero-documento-contacto" placeholder="Número del documento">
                        </div>
                    </div>
                </div>

                  <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2" style="display: none;">
                    <h3>Datos de contacto</h3>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion-contacto" placeholder="Dirección">
                        </div>
                        <div class="col-sm-6">
                            <label for="email" class="col-sm-2 col-form-label">Correo</label>
                            <input type="email" class="form-control" id="correo-contacto" placeholder="Correo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <div class="col-auto">
                                <label class="sr-only" for="telefono">Teléfono</label>
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">+34</div>
                                  </div>
                                  <input type="number" class="form-control" id="telefono-contacto" placeholder="Teléfono">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-auto">
                                <label class="sr-only" for="movil">Móvil</label>
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">+34</div>
                                  </div>
                                  <input type="number" class="form-control" id="movil-contacto" placeholder="Móvil">
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                    <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3" style="display: none;">
                        <h3>Petición, queja o recurso</h3>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                          </div>
                    </div>
                    <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4" style="display: none;">
                        <h3>Confirmar</h3>
                        <p>
                          De conformidad con lo previsto en la Ley Española “por la cual se dictan las disposiciones generales para la protección de datos personales”, que la reglamentan parcialmente, manifiesto que otorgo mi autorización expresa y clara para que la empresa CMDESCAND pueda hacer tratamiento y uso de mis datos personales, los cuales estarán reportados en la base de datos de la que es responsable dicha organización y que han sido recolectados en las relaciones contractuales que ésta realiza. SI acepta dichas condiciones por favor oprima el botón "FINALIZAR" para enviar los datos.
                        </p>
                    </div>
                </div>

                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" id="prev-btn-modal">Anterior</button>
            <button class="btn btn-primary" id="next-btn-modal">Siguiente</button>
            <button class="btn btn-success" onclick="onFinish()">Finalizar</button>
            <button class="btn btn-secondary" onclick="onCancel()">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

    <br> &nbsp;
</div>

<?php
require 'views/footer/index.php';
?>