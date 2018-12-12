<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Site made with Mobirise Website Builder v4.8.6, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="/assets/images/mbr-122x81.jpg" type="image/x-icon">
    <meta name="description" content="">
    <title>PaNPaS .:. Home</title>
    @yield('contenido_css')
</head>
<body>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="f_login" action="{{ route('iniciar_sesion') }}" method="post">
                    @csrf
                <div class="modal-body">
                        <div class="form-group">
                            <label for="email-id" class="col-form-label">Email:</label>
                            <input type="text" name="email" id="email-id" class="form-control" oninput="verificarEmailOK();">
                        </div>
                        <div class="form-group">
                            <label for="pass-id" class="col-form-label">Contraseña:</label>
                            <input type="password" name="pass" id="pass-id" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" id="btn_ini_sesion" disabled>Iniciar sesión</button>
                    </span>
                </div>
                </form>
            </div>
        </div>
    </div>
    <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="/">
                            <img src="/assets/images/mbr-122x81.png" alt="PaNPaS" title="PaNPaS" style="height: 3.8rem;">
                        </a>
                    </span>
                    <!--<span class="navbar-caption-wrap">
                        <a class="navbar-caption text-white display-4" href="#">
                            PaNPaS
                        </a>
                    </span>-->
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#header15-4">
                            <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#nosotros">
                            <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                            Nosotros
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#gallery3-9">
                            <span class="mbri-photos mbr-iconfont mbr-iconfont-btn"></span>
                            Galería
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#contacto">
                            <span class="mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>
                            Contacto
                        </a>
                    </li>
                </ul>
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-sm btn-primary display-4" href="#" data-toggle="modal" data-target="#loginModal">
                        <span class="mbri-users mbr-iconfont mbr-iconfont-btn "></span>
                        Inicia Sesión
                    </a>
                </div>
            </div>
        </nav>
    </section>

    @yield('contenido_central')

    <section class="cid-qTkAaeaxX5" id="footer1-2">
        <div class="container">
            <div class="media-container-row content text-white">
                <div class="col-12 col-md-3">
                    <div class="media-wrap">
                        @php
                            $enlace_en_logo = '';
                            //echo '[' . Request::path() . ']';
                            if (Request::path() == '/')
                                $enlace_en_logo = '#header15-4';
                            else
                                $enlace_en_logo = '/';
                        @endphp {{----}}
                        <a href="{{ $enlace_en_logo }}">
                            <img src="/assets/images/logo2.png" alt="PaNPaS" width="250">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Dirección
                    </h5>
                    <p class="mbr-text">
                        c/ De tu Panadería/Pastelería
                        <br>CP 20.004, Donostia
                    </p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Contactos
                    </h5>
                    <p class="mbr-text">
                        Email: info@panpas.com
                        <br>Phone: +1 (0) 000 0000 001
                        <br>Fax: +1 (0) 000 0000 002
                    </p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        Enlaces
                    </h5>
                    <p class="mbr-text">
                        <a class="text-primary" href="#nosotros">Nosotros</a>
                        <br><a class="text-primary" href="#gallery3-9">Galería</a>
                        <br><a class="text-primary" href="#login">LogIN</a>
                    </p>
                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <!--<div class="media-container-row mbr-white">
                    <div class="col-sm-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-7">
                            © Copyright @php echo date('Y'); @endphp .:. {{ config('app.name') }} - Todos los derechos reservados
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-list align-right">
                            <div class="soc-item">
                                <a href="https://twitter.com/panpas" target="_blank" title="PaNPaS en Twitter">
                                    <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.facebook.com/pages/PaNPaS" target="_blank" title="PaNPaS en Facebook">
                                    <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.youtube.com/c/panpas" target="_blank" title="PaNPaS en Youtube">
                                    <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://instagram.com/panpas" target="_blank" title="PaNPaS en Instagram">
                                    <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://plus.google.com/u/0/+PaNPaS" target="_blank" title="PaNPaS en +Google">
                                    <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.behance.net/PaNPaS" target="_blank" title="PaNPaS en Behance">
                                    <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="media-container-row mbr-white">
                    <div class="col-sm-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-7">
                            © Copyright @php echo date('Y'); @endphp .:. {{ config('app.name') }} - Todos los derechos reservados
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-list align-right">
                            <div class="soc-item">
                                <a href="https://twitter.com/panpas" target="_blank" title="PaNPaS en Twitter" class="social_img" id="twitter_ico"></a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.facebook.com/pages/PaNPaS" target="_blank" title="PaNPaS en Facebook" class="social_img" id="facebook_ico"></a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.youtube.com/c/panpas" target="_blank" title="PaNPaS en Youtube" class="social_img" id="youtube_ico"></a>
                            </div>
                            <div class="soc-item">
                                <a href="https://instagram.com/panpas" target="_blank" title="PaNPaS en Instagram" class="social_img" id="instagram_ico"></a>
                            </div>
                            <div class="soc-item">
                                <a href="https://plus.google.com/u/0/+PaNPaS" target="_blank" title="PaNPaS en +Google" class="social_img" id="googleplus_ico"></a>
                            </div>
                            <div class="soc-item">
                                <a href="https://www.behance.net/PaNPaS" target="_blank" title="PaNPaS en Behance" class="social_img" id="behance_ico"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @yield('contenido_pie_scripts')
</body>
</html>
