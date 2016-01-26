@extends('layout')
@section('title','Inicio')
@section('content')

<section id="hero">
    <div id="owl-main" class="owl-carousel height-md owl-inner-nav owl-ui-lg">

        <div class="item" style="background-image: url(assets/images/slider/1.jpg);">
            <div class="container">
                <div class="caption vertical-center text-center">

                    <h1 class="fadeInDown-1 light-color">Importar es el camino</h1>
                    <p class="fadeInDown-2 light-color">
                        Importa de Estados Unidos, Japón, China y Corea.
                        <br> Compra productos a precio de fábrica y sé tu propio jefe.

                    </p>
                    <div class="fadeInDown-3">
                        <a href="{{url('services/import')}}" class="btn btn-large">Empieza ahora</a>
                    </div>
                    <!-- /.fadeIn -->

                </div>
                <!-- /.caption -->
            </div>
            <!-- /.container -->
        </div>
        

        <div class="item" style="background-image: url(assets/images/slider/2.jpg);">
            <div class="container">
                <div class="caption vertical-center text-center">

                    <h1 class="fadeInLeft-1 light-color">CONQUISTA AL MUNDO EXPORTANDO</h1>
                    <p class="fadeInLeft-2 light-color">Exportamos productos no tradicionales a Estados Unidos,Europa y Asia.</p>
                    <div class="fadeInLeft-3">
                        <a href="{{url('services/export')}}" class="btn btn-large">Empieza ahora</a>
                    </div>
                    <!-- /.fadeIn -->

                </div>
                <!-- /.caption -->
            </div>
            <!-- /.container -->
        </div>
       

        <div class="item" style="background-image: url(assets/images/slider/3.jpg);">
            <div class="container">
                <div class="caption vertical-center text-center">

                    <h1 class="fadeInRight-1  light-color"><span>CAPACITATE CON NOSOTROS Y EMPRENDE</span></h1>
                    <p class="fadeInRight-2 light-color">Brindamos cursos y capacitaciones para emprendedores.</p>
                    <div class="fadeInRight-3">
                        <a href="{{url('services/courses')}}" class="btn btn-large">Empieza ahora</a>
                    </div>
                    <!-- /.fadeIn -->

                </div>
                <!-- /.caption -->
            </div>
            <!-- /.container -->
        </div>
     
    </div>
</section>

<section id="services">
    <div class="container inner">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="icon_container">
                        <i class="fa fa-truck "></i>
                    </div>

                    <h4><a href="#">Importación</a></h4>
                    <p>Importamos productos de Estados Unidos y diferentes paises de Asia.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">

                    <div class="icon_container">
                        <i class="fa fa-globe "></i>
                    </div>
                    <h4><a href="#">Exportación</a></h4>
                    <p>Exportamos productos no tradicionales a Estados Unidos, Europa y Asia.</p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="icon_container">
                        <i class="fa fa-book "></i>
                    </div>
                    <h4><a href="#">Cursos y Capacitaciones</a></h4>
                    <p>Brindamos cursos y capacitaciones para emprendedores.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="we">
    <div class="container inner">

        <div class="row">

            <div class="col-sm-6 inner-right-xs text-right">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Nopu_yjM6iY" frameborder="0" allowfullscreen="">
                </iframe>
            </div>
            <!-- /.col -->

            <div class="col-sm-6 inner-top-xs inner-left-xs">
                <h2>¿POR QUÉ NOSOTROS?</h2>
                <h3>Experiencia, diversidad de productos y precio competitivo</h3>
                <p>Somos una empresa dedicada al comercio exterior con 5 años de experiencia en este rubro. Con nosotros las personas pueden importar diversos tipos de productos de Estados Unidos y países del Asia desde tan solo 150 soles.</p>
                <a href="{{url('about')}}" class="txt-btn btn btn-large">Conócenos</a>

            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->




    </div>
    <!-- /.container -->
</section>

<section id="features">
    <div class="container inner">

        <div class="row">
            <div class="col-md-8 col-sm-9 center-block text-center">
                <header>
                    <h2>CARACTERISTICAS</h2>

                </header>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row inner-top-sm">

            <div class="col-md-1">
                <div class="icon pull-right">
                    <i class="fa fa-server fa-2x"></i>
                </div>
                <!-- /.icon -->
            </div>
            <!-- /.col -->

            <div class="col-md-3 inner-bottom-xs">
                <h4>Eficiencia</h4>
                <p class="text-small">Brindamos un servicio de logística integral que nos permite que los productos importados lleguen a sus manos.</p>
            </div>
            <!-- /.col -->

            <div class="col-md-1">
                <div class="icon pull-right">
                    <i class="fa fa-shopping-cart fa-2x"></i>
                </div>
                <!-- /.icon -->
            </div>
            <!-- /.col -->

            <div class="col-md-3 inner-bottom-xs">
                <h4>Diversidad de productos</h4>
                <p class="text-small">Importamos una gran variedad de productos como ropa, calzados, joyerias, gadgets técnologicos, entre otros.</p>
            </div>
            <!-- /.col -->

            <div class="col-md-1">
                <div class="icon pull-right">
                    <i class="fa fa-money fa-2x"></i>
                </div>
                <!-- /.icon -->
            </div>
            <!-- /.col -->

            <div class="col-md-3 inner-bottom-xs">
                <h4>Precios competitivos</h4>
                <p class="text-small">Ofrecemos productos a precio de fábrica, siendo este un precio competitivo que el del mercado.</p>
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
        <div class="row inner-top-sm">

            <div class="col-md-1">
                <div class="icon pull-right">
                    <i class="fa fa-users fa-2x"></i>
                </div>
                <!-- /.icon -->
            </div>
            <!-- /.col -->

            <div class="col-md-3 inner-bottom-xs">
                <h4>Equipo profesional</h4>
                <p class="text-small">Contamos con personal de primer nivel que atenderá todas sus solicitudes.</p>
            </div>
            <!-- /.col -->

            <div class="col-md-1">
                <div class="icon pull-right">
                    <i class="fa fa-file-text fa-2x"></i>
                </div>
                <!-- /.icon -->
            </div>
            <!-- /.col -->

            <div class="col-md-3 inner-bottom-xs">
                <h4>Garantia</h4>
                <p class="text-small">Garantizamos que los productos que usted importe cumpla con todos los requisitos de aduanas.</p>
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</section>

<section id="testimonials" class="light-bg img-bg-softer" style="background-image: url(assets/images/art/pattern-background01.jpg);">
    <div class="container inner">

        <div class="row">
            <div class="col-md-8 col-sm-9 center-block text-center">
                <header>
                    <h2>¿QUE DICEN NUESTROS CLIENTES?</h2>
                </header>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-8 col-sm-9 center-block text-center">
                <div id="owl-testimonials" class="owl-carousel owl-outer-nav owl-ui-md">

                    <div class="item">
                        <blockquote>
                            <p>Buenisimo... Valio la pena la espera, Sigan adelante!!!</p>
                            <footer>
                                <cite>RAÚL CORTEZ</cite>
                            </footer>
                        </blockquote>
                    </div>
                    <!-- /.item -->

                    <div class="item">
                        <blockquote>
                            <p>Importé con CSC y gané dinero!!!</p>
                            <footer>
                                <cite>Ada Lizarraga</cite>
                            </footer>
                        </blockquote>
                    </div>
                    <!-- /.item -->

                    <div class="item">
                        <blockquote>
                            <p>Una empresa que se compromete al 100% y lo mas importante la calidad humana para satisfacer las necesidades de sus clientes, éxitos y a seguir adelante.</p>
                            <footer>
                                <cite>Jose Soriano Vera</cite>
                            </footer>
                        </blockquote>
                    </div>
                    <!-- /.item -->

                </div>
                <!-- /.owl-carousel -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</section>

<section id="clients">
    <div class="container inner">

        <div class="row">
            <div class="col-md-8 col-sm-9 center-block text-center">
                <header>
                    <h2>NUESTROS AUSPICIADORES</h2>
                    <p>Hemos sido entrevistados y promocionados por diferentes organizaciones.</p>
                </header>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row inner-top-sm">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="col-sm-12">

                    <div class="col-sm-4">
                        <div class="partner">
                            <img src="assets/images/partners/radio-capital.png" alt="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="partner">

                            <img src="assets/images/partners/radio-san-borja.png" alt="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="partner">
                            <img src="assets/images/partners/sumate-al-exito.png" alt="">
                        </div>
                    </div>



                </div>
                <!-- /.owl-carousel -->
            </div>
            <!-- /.col -->
        </div>
        <div class="col-sm-2"></div>

    </div>
    <!-- /.row -->

    </div>
    <!-- /.container -->
</section>

@endsection