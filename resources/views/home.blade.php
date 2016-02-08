@extends('layout')
@section('title','Inicio') 
@section('head')
    <link href="{{asset('assets/css/home/services.css')}}" rel="stylesheet" data-skrollr-stylesheet>
    <link href="{{asset('assets/css/home/features.css')}}" rel="stylesheet" data-skrollr-stylesheet>	
@endsection

@section('content')
<section id="hero">
    <div id="owl-main" class="owl-carousel height-md owl-inner-nav owl-ui-lg">

        <div class="item" style="background-image: url(assets/images/slider/1.jpg);">
            <div class="container">
                <div class="caption vertical-center text-center">

                    <h1 class="fadeInDown-1 light-color ">Importar es el camino</h1>
                    <p class="fadeInDown-2 light-color">
                        Importa de Estados Unidos, Japón, China y Corea.
                        <br> Compra productos a precio de fábrica y sé tu propio jefe.

                    </p>
                    <div class="wrap">
                        <a href="{{url('services/import')}}" class="btn-header btn-large">
                            <span>Empieza ahora </span></a>
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
                       <div class="wrap">
                        <a href="{{url('services/import')}}" class="btn-header btn-large">
                            <span>Empieza ahora </span></a>
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
                    <div class="wrap">
                        <a href="{{url('services/import')}}" class="btn-header btn-large">
                            <span>Empieza ahora </span></a>
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
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="icon_wrapper">
                        <span class="icon-truck2"></span>
                    </div>

                    <h4><a href="#">Importación</a></h4>
                    <p>Importamos productos de Estados Unidos y diferentes paises de Asia.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">

                    <div class="icon_wrapper">
                        <span class="icon-world"></span>
                    </div>
                    <h4><a href="#">Exportación</a></h4>
                    <p>Exportamos productos no tradicionales a Estados Unidos, Europa y Asia.</p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="icon_wrapper">
                        <span class="icon-study"></span>
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

            <div class="col-sm-6">
                <div class="media">
                    <iframe src="https://www.youtube.com/embed/Nopu_yjM6iY" width="560" height="315"
                    frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
            <!-- /.col -->

            <div class="col-sm-6 inner-top-xs inner-left-xs">
                <div class="section-title">
                    <h2>¿Por qué nosotros?</h2><span class="divider"><span class="line"></span><span class="circle"></span><span class="line"></span></span>
                </div>
                <h3>Experiencia, diversidad de productos y precio competitivo</h3>
                <p>Somos una empresa dedicada al comercio exterior con 5 años de experiencia en este rubro.
                Con nosotros las personas pueden importar diversos tipos de productos de Estados Unidos y países del Asia desde tan solo 150 soles.</p>
                <a href="{{url('about')}}" class="txt-btn btn">Conócenos</a>

            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->




    </div>
    <!-- /.container -->
</section>

<section id="features" class="section-gray">
    <div class="container inner">

        <div class="row">
            <div class="col-md-8 col-sm-9 center-block text-center">
                <div class="section-title">
                    <h2>Nuestras características</h2><span class="divider"><span class="line"></span><span class="circle"></span><span class="line"></span></span>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="container">
            <div class="col-sm-6">
                <div class="feature">
                    <dl class="dl-horizontal">
                        <dt><i class="icon-params"></i></dt>
                        <dd>
                            <h4>Eficiencia</h4>
                            <p>Brindamos un servicio de logística integral que nos permite que los productos importados lleguen a sus manos.</p>
                        </dd>
                    </dl>
                </div>
                <div class="feature">
                    <dl class="dl-horizontal">
                        <dt><i class="icon-shop"></i></dt>
                        <dd>
                            <h4><a href="#">Diversidad de productos</a></h4>
                            <p>Importamos una gran variedad de productos como ropa, calzados, joyerias, gadgets técnologicos, entre otros.</p>
                        </dd>
                    </dl>
                </div>
                <div class="feature">
                    <dl class="dl-horizontal"> <dt>        <i class="icon-banknote"></i>    </dt>
                        <dd>
                            <h4><a href="#">Precios competitivos</a></h4>
                            <p>Ofrecemos productos a precio de fábrica, siendo este un precio competitivo que el del mercado.</p>
                        </dd>
                    </dl>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="feature">
                    <dl class="dl-horizontal"> <dt>        <i class="icon-user"></i>    </dt>
                        <dd>
                            <h4><a href="#">Equipo profesional</a></h4>
                            <p>Contamos con personal de primer nivel que atenderá todas sus solicitudes.</p>
                        </dd>
                    </dl>
                </div>
                <div class="feature">
                    <dl class="dl-horizontal"> <dt>        <i class="icon-news"></i>    </dt>
                        <dd>
                            <h4><a href="#">Garantía</a></h4>
                            <p>Garantizamos que los productos que usted importe cumpla con todos los requisitos de aduanas.</p>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>

<section id="testimonials">
    <div class="container inner">

        <div class="row">
            <div class="col-md-8 col-sm-9 center-block text-center">
               <div class="section-title">
                    <h2>¿Qué dicen nuestros clientes?</h2><span class="divider"><span class="line"></span><span class="circle"></span><span class="line"></span></span>
                </div>
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

<section id="clients" class="section-gray">
    <div class="container inner">

        <div class="row">
            <div class="col-md-8 col-sm-9 center-block text-center">
                <div class="section-title">
                    <h2>Nuestros auspiciadores</h2>
                    <span class="divider">
                        <span class="line"></span>
                        <span class="circle"></span>
                        <span class="line"></span>
                    </span>
                    <p>Hemos sido entrevistados y promocionados por diferentes organizaciones.</p>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row inner-top-sm">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="col-sm-4">
                    <a href="http://www.capital.com.pe/">
                        <div class="partner">
                            <img src="assets/images/partners/radio-capital.png" alt="Radio Capital">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="http://www.radiosanborja.com/">
                        <div class="partner">
                            <img src="assets/images/partners/radio-san-borja.png" alt="Radio San Borja">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="http://www.sumatealexito.com/">
                        <div class="partner">
                            <img src="assets/images/partners/sumate-al-exito.png" alt="Súmate al éxito">
                        </div>
                    </a>
                </div>
                <!-- /.owl-carousel -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.row -->

    </div>
    <!-- /.container -->
</section>

@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $( "#home" ).addClass( "active" );
    });
</script>
@endsection