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
                Datos Recibidos
            </h2>
            <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light">
                Esta es la información que nos enviaste.
            </h3>
            <div class="media-container-row pt-5 ">
                <div class="form-container">
                    <div class="media-container-column" data-form-type="formoid">
                        <div data-form-alert="" hidden="" class="align-center">
                            ¡Gracias por enviar tu consulta!
                        </div>
                    </div>
                </div>
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

    @isset($accion)
    <!--Mostrando MODAL de acción en la carga de la página-->
    <script type="text/javascript">
        $(window).on('load', function(){
            $('#accion-modal').modal('show');
        });
    </script>
    @endisset
@endsection
