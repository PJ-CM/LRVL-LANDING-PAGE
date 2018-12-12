@extends('layouts.layout_main')

@section('contenido_css')
    <link rel="stylesheet" href="/assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="/assets/tether/tether.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="/assets/theme/css/style.css">
    <link rel="stylesheet" href="/assets/gallery/style.css">
    <link rel="stylesheet" href="/assets/mobirise/css/mbr-additional.css" type="text/css">
@endsection

@section('contenido_central')

    @isset($accion)
    {{-- Habiendo mensajes de acción :: INI --}}
        @php
            if($accion[0] == 'usu_noOK') {

                $modal_tit = 'Usuario no existe';
                $modal_msg = $accion[1];

            } else {

                $accion_datos = explode('_', $accion);
                switch ($accion_datos[0]) {
                    case 'insertar':
                        $modal_tit = 'Envío satisfactorio';
                        $modal_msg = 'Su mensaje con ID ['.$accion_datos[1].'] fue recibido correctamente.
                        Recibirá la correspondiente respuesta en su dirección de correo a la mayor brevedad.

                        Aloha!!';
                        break;
                }

            }
        @endphp
    <!-- Modal-acción -->
    <div class="modal fade" id="accion-modal" tabindex="-1" role="dialog" aria-labelledby="accion-modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-info text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="accion-modalLabel">{{ $modal_tit }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ $modal_msg }}
                </div>
            </div>
        </div>
    </div>
    {{-- Habiendo mensajes de acción :: INI --}}
    @endisset

    <section class="features18 popup-btn-cards cid-r8KTRKwsGw" id="contacto">
        <div class="container">
            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
                Consulta tus Dudas
            </h2>
            <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light">
                Contacta con nosotros para resolver todas tus dudas
            </h3>
            <div class="media-container-row pt-5 ">
                <div class="form-container">
                    <div class="media-container-column" data-form-type="formoid">
                        <div data-form-alert="" hidden="" class="align-center">
                            ¡Gracias por enviar tu consulta!
                        </div>
                        <form class="mbr-form" action="{{ route('form_recibido') }}" method="post" data-form-title="Contacto Form" id="f_contacto_form" role="form">
                            @csrf
                            <div class="form-group form-inline">
                                <label class="sr-only" for="nombre-id">Nombre</label>
                                <input type="text" name="nombre" class="form-control mb-2 mr-sm-2 mb-sm-0 px-3" id="nombre-id" placeholder="Nombre*">

                                <label class="sr-only" for="apellidos-id">Apellido(s)</label>
                                <input type="text" name="apellidos" class="form-control px-3" id="apellidos-id" placeholder="Apellido(s)*">
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-6 px-5">Género*:</label>
                              <div class="col-sm-6">
                                <div class="form-check">
                                  <label for="genero-id" class="form-check-label px-2">
                                    <input type="radio" name="genero" id="genero-id" class="form-check-input" value="femenino"> Femenino
                                  </label>
                                  <label class="form-check-label px-3">
                                    <input type="radio" name="genero" id="genero-id" class="form-check-input" value="masculino"> Masculino
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group form-inline">
                                <label class="sr-only" for="nif-id">NIF</label>
                                <input type="text" name="nif" class="form-control mb-2 mr-sm-2 mb-sm-0 px-3" id="nif-id" placeholder="NIF">

                                <label class="sr-only" for="email-id">Email</label>
                                <input type="text" name="email" class="form-control px-3" id="email-id" placeholder="Email*">
                            </div>
                            <div data-for="direccion">
                                <div class="form-group">
                                    <input type="direccion" class="form-control px-3" name="direccion" data-form-field="Direccion" placeholder="Dirección" id="direccion-header15-4">
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label class="sr-only" for="cp-id">C.P.</label>
                                <input type="text" name="cp" class="form-control mb-2 mr-sm-2 mb-sm-0 px-3" id="cp-id" placeholder="C.P.*">

                                <label class="sr-only" for="tlfno-id">Teléfono</label>
                                <input type="text" name="tlfno" class="form-control px-3" id="tlfno-id" placeholder="Teléfono">
                            </div>
                            <div class="form-group form-inline">
                                <label class="sr-only" for="municipio-id">Municipio</label>
                                <select class="custom-select" name="municipio" id="municipio-id">
                                    <option selected value="0">Selecciona tu municipio*</option>
                                    <option value="1">Donostia</option>
                                    <option value="2">Irún</option>
                                    <option value="3">Renteria</option>
                                </select>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-6 px-5">¿Suscribirse?:</label>
                              <div class="col-sm-6">
                                <div class="form-check">
                                  <label class="form-check-label px-2" for="newsletter-id">
                                    <input type="checkbox" class="form-check-input" name="newsletter" id="newsletter-id" value="newsletter"> Newsletter
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div data-for="mensaje">
                                <div class="form-group">
                                    <textarea class="form-control px-3" name="mensaje" id="" cols="30" rows="5" placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <span class="input-group-btn text-center">
                                <p>Enviar</p>
                                <button type="submit" class="btn btn-secondary btn-form display-4">ENVIAR</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
                Video Previo
            </h2>
            <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light">
                Contacta con nosotros para resolver todas tus dudas
            </h3>
            <div class="media-container-row text-center">
                <button onclick="playPause();">Play/Pause</button>
                <button onclick="makeBig()">Big</button>
                <button onclick="makeSmall()">Small</button>
                <button onclick="makeNormal()">Normal</button>
                <br><br>
                <video id="video1" width="320" autoplay>
                  <source src="video/video.mp4" type="video/mp4">
                  <!--<source src="mov_bbb.ogg" type="video/ogg">-->
                  Your browser does not support HTML5 video.
                </video>
            </div>
            <div class="media-container-row text-center">
                <h3>SIN Autoplay</h3>
                <iframe width="420" height="315"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            <div class="media-container-row text-center">
                <h3>CON Autoplay</h3>
                <iframe width="420" height="315"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
                </iframe>
            </div>
        </div>
    </section>
@endsection

@section('contenido_pie_scripts')
    <script src="/assets/web/assets/jquery/jquery.min.js"></script>
    <script src="/assets/popper/popper.min.js"></script>
    <script src="/assets/tether/tether.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/smoothscroll/smooth-scroll.js"></script>
    <script src="/assets/dropdown/js/script.min.js"></script>
    <script src="/assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="/assets/parallax/jarallax.min.js"></script>
    <script src="/assets/masonry/masonry.pkgd.min.js"></script>
    <script src="/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="/assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
    <script src="/assets/mbr-popup-btns/mbr-popup-btns.js"></script>
    <script src="/assets/theme/js/script.js"></script>
    <script src="/assets/slidervideo/script.js"></script>
    <script src="/assets/gallery/player.min.js"></script>
    <script src="/assets/gallery/script.js"></script>
    {{--¡¡ATENCIÓN!! ... Este SCRIPT no deja que el formulario se envíe
    <script src="/assets/formoid/formoid.min.js"></script>--}}
    {{--Funciones Propias--}}
    <script type="text/javascript" src="/js/main.js"></script>
    {{--jQuery Validation--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>


    <script type="text/javascript">

        var myVideo = document.getElementById('video1');

        function playPause() {
            if (myVideo.paused)
                myVideo.play();
            else
                myVideo.pause();
        }

        function makeBig() {
            myVideo.width = 560;
        }

        function makeSmall() {
            myVideo.width = 320;
        }

        function makeNormal() {
            myVideo.width = 420;
        }

    </script>

    @isset($accion)
    <!--Mostrando MODAL de acción en la carga de la página-->
    <script type="text/javascript">
        $(window).on('load', function(){
            $('#accion-modal').modal('show');
        });
        $(document).ready(function() {
            /*
                jQuery Validation Plugin
                https://jqueryvalidation.org/
                https://jqueryvalidation.org/files/demo/
                https://techeducation.online/posts/como-validar-tus-formularios-con-jquery-validation
            */

            /*$.mockjax({
                url: "emails.action",
                response: function(settings) {
                    var email = settings.data.email,
                        emails = ["glen@marketo.com", "george@bush.gov", "me@god.com", "aboutface@cooper.com", "steam@valve.com", "bill@gates.com"];
                    this.responseText = "true";
                    if ($.inArray(email, emails) !== -1) {
                        this.responseText = "false";
                    }
                },
                responseTime: 500
            });

            $.mockjax({
                url: "users.action",
                response: function(settings) {
                    var user = settings.data.username,
                        users = ["asdf", "Peter", "Peter2", "George"];
                    this.responseText = "true";
                    if ($.inArray(user, users) !== -1) {
                        this.responseText = "false";
                    }
                },
                responseTime: 500
            });*/

            // validate signup form on keyup and submit
            var validator = $("#f_contacto_form").validate({
                rules: {
                    nombre: "required",/*
                    lastname: "required",
                    username: {
                        required: true,
                        minlength: 2,
                        remote: "users.action"
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    password_confirm: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true,
                        remote: "emails.action"
                    },
                    dateformat: "required",
                    terms: "required"*/
                },
                messages: {
                    nombre: "Teclea un nombre",/*
                    lastname: "Enter your lastname",
                    username: {
                        required: "Enter a username",
                        minlength: jQuery.validator.format("Enter at least {0} characters"),
                        remote: jQuery.validator.format("{0} is already in use")
                    },
                    password: {
                        required: "Provide a password",
                        minlength: jQuery.validator.format("Enter at least {0} characters")
                    },
                    password_confirm: {
                        required: "Repeat your password",
                        minlength: jQuery.validator.format("Enter at least {0} characters"),
                        equalTo: "Enter the same password as above"
                    },
                    email: {
                        required: "Please enter a valid email address",
                        minlength: "Please enter a valid email address",
                        remote: jQuery.validator.format("{0} is already in use")
                    },
                    dateformat: "Choose your preferred dateformat",
                    terms: " "*/
                },/*
                // the errorPlacement has to take the table layout into account
                errorPlacement: function(error, element) {
                    if (element.is(":radio"))
                        error.appendTo(element.parent().next().next());
                    else if (element.is(":checkbox"))
                        error.appendTo(element.next());
                    else
                        error.appendTo(element.parent().next());
                },
                // specifying a submitHandler prevents the default submit, good for the demo
                submitHandler: function() {
                    alert("submitted!");
                },
                // set this class to error-labels to indicate valid fields
                success: function(label) {
                    // set &nbsp; as text for IE
                    label.html("&nbsp;").addClass("checked");
                },
                highlight: function(element, errorClass) {
                    $(element).parent().next().find("." + errorClass).removeClass("checked");
                }*/
            });

            // propose username by combining first- and lastname
            $("#username").focus(function() {
                var firstname = $("#firstname").val();
                var lastname = $("#lastname").val();
                if (firstname && lastname && !this.value) {
                    this.value = (firstname + "." + lastname).toLowerCase();
                }
            });

        });//$(document).ready

    </script>
    @endisset
@endsection
