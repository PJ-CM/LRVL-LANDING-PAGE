@extends('layouts.layout_main')

@section('contenido_css')
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/gallery/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
@endsection

@section('contenido_central')

    @isset($accion)
    {{-- Habiendo mensajes de acción :: INI --}}
        @php
            $accion_datos = explode('_', $accion);
            switch ($accion_datos[0]) {
                case 'insertar':
                    $modal_tit = 'Envío satisfactorio';
                    $modal_msg = 'Su mensaje con ID ['.$accion_datos[1].'] fue recibido correctamente.
                    Recibirá la correspondiente respuesta en su dirección de correo a la mayor brevedad.

                    Aloha!!';
                    break;
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

    <section class="cid-r8KOLO3ev6 mbr-fullscreen mbr-parallax-background" id="header15-4">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>
        <div class="container">

            <div class="row flex-center">
                <div class="col-xs|sm|md|lg|xl-1-12">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="mbr-white col-lg-8 col-md-7 content-container">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                        TU PANADERÍA<br>Y PASTELERÍA<br>DE SIEMPRE
                    </h1>
                    <p class="mbr-text pb-3 mbr-fonts-style display-5">
                        Estamos aquí para darte el mejor servicio, con la tradición del buen pan, una pastelería dulce y sabrosa.<br>
                        Si quieres estar informado, puedes suscribirte a nuestro Newsletter y, así, estarás al día de todos nuestros eventos.
                    </p>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="form-container" style="margin: 100px 0;">
                        <div class="media-container-column" data-form-type="formoid">
                            <div data-form-alert="" hidden="" class="align-center">
                                ¡Gracias por suscribirte!
                            </div>
                            <form class="mbr-form" action="#" method="post" data-form-title="Suscribirse Form">
                                <div data-for="name-sus">
                                    <div class="form-group">
                                        <input type="text" class="form-control px-3" name="name-sus" data-form-field="Name" placeholder="Name" required="" id="name-header15-4">
                                    </div>
                                </div>
                                <div data-for="email-sus">
                                    <div class="form-group">
                                        <input type="email" class="form-control px-3" name="email-sus" data-form-field="Email" placeholder="Email" required="" id="email-header15-4">
                                    </div>
                                </div>

                                <span class="input-group-btn">
                                    <button href="" type="submit" class="btn btn-secondary btn-form display-4">SUSCRIBIRSE</button>
                                </span>
                            </form>
                        </div>
                    </div>{{----}}
                </div>
            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
    </section>

    <section class="features18 popup-btn-cards cid-r8KTRKwsGw" id="nosotros">
        <div class="container">
            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
                Nosotros somos así
            </h2>
            <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light">
                Basado todo nuevo trabajo en su raíz, la Masa Madre
            </h3>
            <div class="media-container-row pt-5 ">
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper ">
                        <div class="card-img">
                            <div class="mbr-overlay"></div>
                            <div class="mbr-section-btn text-center">
                                <a href="#" class="btn btn-primary display-4">Saber más</a>
                            </div>
                            <img src="assets/images/01.jpg" alt="Cariño">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">
                                Amor por la materia prima
                            </h4>
                            <p class="mbr-text mbr-fonts-style align-left display-7">
                                Lorem ipsum an easy tal tal - just drop site elements to your page, add content and style it to look the way you like.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <div class="mbr-overlay"></div>
                            <div class="mbr-section-btn text-center">
                                <a href="#" class="btn btn-primary display-4">Saber más</a>
                            </div>
                            <img src="assets/images/02.jpg" alt="Horno">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">
                                Horno de leña
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                            Aquí lo preparamos todo para darle ese sabor especial a nuestros productos. You make a friend. You don't have to create a version.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <div class="mbr-overlay"></div>
                            <div class="mbr-section-btn text-center"><a href="#" class="btn btn-primary display-4">Saber más</a></div>
                            <img src="assets/images/03.jpg" alt="Tu">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">
                                Te servimos
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Tu eres lo importante offers many site blocks in several themes, and though these blocks are pre-made, they are flexible.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
    </section>

    <section class="mbr-gallery mbr-slider-carousel cid-r8KPNcKK39" id="gallery3-9">
        <div style="padding-top: 80px;">
            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
                Galería de Productos
            </h2>
            <div>
                <!-- Filter --><!-- Gallery -->
                <div class="mbr-gallery-row">
                    <div class="mbr-gallery-layout-default">
                        <div>
                            <div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Increíble">
                                    <div href="#lb-gallery3-9" data-slide-to="0" data-toggle="modal">
                                        <img src="assets/images/gallery00.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Responsive">
                                    <div href="#lb-gallery3-9" data-slide-to="1" data-toggle="modal">
                                        <img src="assets/images/gallery01.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Creativa">
                                    <div href="#lb-gallery3-9" data-slide-to="2" data-toggle="modal">
                                        <img src="assets/images/gallery02.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Animada">
                                    <div href="#lb-gallery3-9" data-slide-to="3" data-toggle="modal">
                                        <img src="assets/images/gallery03.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Increíble">
                                    <div href="#lb-gallery3-9" data-slide-to="4" data-toggle="modal">
                                        <img src="assets/images/gallery04.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Increíble">
                                    <div href="#lb-gallery3-9" data-slide-to="5" data-toggle="modal">
                                        <img src="assets/images/gallery05.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Responsive">
                                    <div href="#lb-gallery3-9" data-slide-to="6" data-toggle="modal">
                                        <img src="assets/images/gallery06.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Animada">
                                    <div href="#lb-gallery3-9" data-slide-to="7" data-toggle="modal">
                                        <img src="assets/images/gallery07.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Increíble">
                                    <div href="#lb-gallery3-9" data-slide-to="0" data-toggle="modal">
                                        <img src="assets/images/gallery08.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Responsive">
                                    <div href="#lb-gallery3-9" data-slide-to="1" data-toggle="modal">
                                        <img src="assets/images/gallery09.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Creativa">
                                    <div href="#lb-gallery3-9" data-slide-to="2" data-toggle="modal">
                                        <img src="assets/images/gallery10.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                                <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false" data-tags="Animada">
                                    <div href="#lb-gallery3-9" data-slide-to="3" data-toggle="modal">
                                        <img src="assets/images/gallery11.jpg" alt="" title="">
                                        <span class="icon-focus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- Lightbox -->
                <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-9">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/images/gallery00.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/gallery01.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/gallery02.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/gallery03.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/gallery04.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/gallery05.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/gallery06.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/gallery07.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/gallery08.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/gallery09.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/gallery10.jpg" alt="" title="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/images/gallery11.jpg" alt="" title="">
                                    </div>
                                </div>
                                <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery3-9">
                                    <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery3-9">
                                    <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <a class="close" href="#" role="button" data-dismiss="modal">
                                    <span class="sr-only">Close</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <form class="mbr-form" action="{{ route('mensajes_insertar') }}" method="post" data-form-title="Contacto Form" role="form">
                            @csrf
                            <div data-for="nombre">
                                <div class="form-group">
                                    <input type="text" class="form-control px-3" name="nombre" data-form-field="Name" placeholder="Name" id="name-header15-4">
                                </div>
                            </div>
                            <div data-for="email">
                                <div class="form-group">
                                    <input type="email" class="form-control px-3" name="email" data-form-field="Email" placeholder="Email" id="email-header15-4">
                                </div>
                            </div>
                            <div data-for="mensaje">
                                <div class="form-group">
                                    <textarea class="form-control px-3" name="mensaje" id="" cols="30" rows="5" placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <span class="input-group-btn text-center">
                                <button type="submit" class="btn btn-secondary btn-form display-4" style="margin-left: 75px;">ENVIAR</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('contenido_pie_scripts')
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/parallax/jarallax.min.js"></script>
    <script src="assets/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
    <script src="assets/mbr-popup-btns/mbr-popup-btns.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/slidervideo/script.js"></script>
    <script src="assets/gallery/player.min.js"></script>
    <script src="assets/gallery/script.js"></script>
    {{--¡¡ATENCIÓN!! ... Este SCRIPT no deja que el formulario se envíe
    <script src="assets/formoid/formoid.min.js"></script>--}}

    @isset($accion)
    <!--Mostrando MODAL de acción en la carga de la página-->
    <script type="text/javascript">
        $(window).on('load', function(){
            $('#accion-modal').modal('show');
        });
    </script>
    @endisset
@endsection
