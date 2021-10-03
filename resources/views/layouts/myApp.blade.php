<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Fasi FileDrive</title>



    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset("style.css") }}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="{{config('app.middleware')}}" class="nav-brand">FIleDrive</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>

                                    <li><a href="albums-store.html">Utilisateur</a></li>
                                    <li><a href="#">Fichiers</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Audio</a></li>
                                            <li><a href="albums-store.html">Video</a></li>
                                            <li><a href="event.html">Photo</a></li>
                                            <li><a href="blog.html">Document</a></li>
                                        </ul>
                                    </li>
                                   {{-- @auth
                                    <li><a href="{{ route('profile.show') }}">Profile</a></li>
                                   @endauth --}}




                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                        <a href="login.html" id="loginBtn">Auth</a>
                                    </div>


                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script defer src="{{asset("js/jquery/jquery-2.2.4.min.js") }}"></script>
    <!-- Popper js -->
    <script defer src="{{asset("js/bootstrap/popper.min.js") }}"></script>
    <!-- Bootstrap js -->
    <script defer src="{{asset("js/bootstrap/bootstrap.min.js") }}"></script>
    <!-- All Plugins js -->
    <script defer src="{{asset("js/plugins/plugins.js") }}"></script>
    <!-- Active js -->
    <script defer src="{{asset("js/active.js") }}"></script>
</body>

</html>
