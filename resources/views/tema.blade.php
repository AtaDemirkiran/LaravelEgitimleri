<!DOCTYPE html>
<html lang="en">
    
    @yield('head')

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">PHP Türkiye</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Hakkımızda</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Hizmetler</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Galeri</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">İletişim</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       

        @yield('govde')



        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        
        @yield('scripts')

    </body>
</html>