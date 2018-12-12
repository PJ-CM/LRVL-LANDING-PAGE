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

    <section class="features18 popup-btn-cards cid-r8KTRKwsGw" id="contacto">
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
@endsection
