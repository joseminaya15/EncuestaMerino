<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="Proyecto de desarrollo de un producto wizard online que tenga un quiz y con una unica solucion que es SAP Business One">
    <meta name="keywords"               content="SAP,producto wizard">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="January 25, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
	<title>Encuestas Merino</title>
    <!-- <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/logo_favicon.png"> -->
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>datetimepicker/css/bootstrap-material-datetimepicker.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.indigo.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>engagement.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
</head>
<body>
    <div class="header-body"></div>
	<section class="section">
		<div class="mdl-container">
            <divi id="idEncuesta" class="mdl-card mdl-card-encuesta">
    			<h2 class="title">Encuesta Merino</h2>
                <div class="subtitle-encuesta">
                    <h2 class="subtitle">Datos Personales</h2>   
                </div>
                <div class="preguntas">
                    <p class="title-question"><strong>1.</strong> Informaci&oacute;n b&aacute;sica</p>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="mdl-input">
                            <div class="mdl-icon">
                                <i class="mdi mdi-account_box"></i>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="nombre">
                                <label class="mdl-textfield__label" for="nombre">Nombres</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="mdl-input">
                            <div class="mdl-icon">
                                <i class="mdi mdi-account_box"></i>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="apellido">
                                <label class="mdl-textfield__label" for="apellido">Apellidos</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="mdl-input">
                            <div class="mdl-icon">
                                <i class="mdi mdi-call"></i>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="celular">
                                <label class="mdl-textfield__label" for="celular">Celular</label>
                                <span class="mdl-textfield__error">Tel&eacute;fono incorrecto</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="mdl-input">
                            <div class="mdl-icon">
                                <i class="mdi mdi-email"></i>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="email">
                                <label class="mdl-textfield__label" for="email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="mdl-input mdl-select">
                            <div class="mdl-icon">
                                <i class="mdi mdi-language"></i>
                            </div>
                            <select class="selectpicker">
                                <option>Per&uacute;</option>
                                <option>Panam&aacute;</option>
                                <option>Suiza</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="mdl-input">
                            <div class="mdl-icon">
                                <button class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="mdi mdi-date_range"></i>
                                </button>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input personales" type="text" id="fechaNac" name="fechaNac" maxlength="10" placeholder="dd/mm/aaaa" value="">
                                <label class="mdl-textfield__label" for="fechaNac">Fecha de nacimiento</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subtitle-encuesta">
                    <h2 class="subtitle">Netflix</h2>   
                </div>
                <div class="preguntas">
                    <p class="title-question"><strong>2.</strong> ¿Te gusta ver Netflix?</p>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
                                <span class="mdl-radio__label">si</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                                <span class="mdl-radio__label">No</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="3">
                                <span class="mdl-radio__label">Tal vez</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="preguntas">
                    <p class="title-question"><strong>3.</strong> ¿Que series has visto en Netflix?</p>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                                <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Prision Break</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                                <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Breaking Bad</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="mdl-check-button">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
                                <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Two and a Half Men</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="mdl-check-button">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="otro">
                                <label class="mdl-textfield__label" for="otro">Otras</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdl-card__actions">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="enviarEncuesta()">Enviar</button>
                </div>
            </div>
		</div>
	</section>
	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>moment/moment.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>datetimepicker/js/bootstrap-material-datetimepicker.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>jquery-mask/jquery.mask.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
    	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        	$('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
        initButtonCalendarDaysMaxToday('fechaNac');
        initMaskInputs('fechaNac');
    </script>
</body>
</html>