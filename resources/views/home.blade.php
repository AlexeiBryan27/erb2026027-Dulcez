@extends('adminlte::page')

@section('title', 'Bienvenido a Golozitos')

@section('content_header')
    <h1 class="m-0 text-dark">Bienvenido a <span style="color: #007bff;">Golozitos</span></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Encuentra tus golosinas favoritas</h5>
                    <p class="card-text">Explora nuestra amplia selección de golosinas y productos dulces. Desde caramelos y chocolates hasta gomitas y snacks, tenemos algo para todos los gustos.</p>
                    <a href="{{ route('clienteprincipal') }}" class="btn btn-primary">Ver productos</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Únete a nuestra comunidad</h5>
                    <p class="card-text">Regístrate para recibir actualizaciones sobre nuevos productos, ofertas especiales y eventos exclusivos. ¡Únete a nuestra comunidad de amantes de las golosinas!</p>
                    <a href="{{ route('register') }}" class="btn btn-primary">Regístrate ahora</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sección de testimonios -->
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Testimonios de nuestros clientes</h5>
                    <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p class="card-text">"Gracias a Golozitos, encontré mis dulces favoritos. La variedad es increíble y el servicio excelente."</p>
                                <p class="text-muted">- María López</p>
                            </div>
                            <div class="carousel-item">
                                <p class="card-text">"Un lugar fantástico para todos los amantes de las golosinas. Siempre encuentro algo nuevo para probar."</p>
                                <p class="text-muted">- Juan Pérez</p>
                            </div>
                            <div class="carousel-item">
                                <p class="card-text">"La mejor tienda de dulces que he visitado. La calidad y el servicio son excepcionales."</p>
                                <p class="text-muted">- Carla Gómez</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sección de artículos de blog -->
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Artículos de nuestro blog</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Consejos para elegir tus golosinas</h6>
                                    <p class="card-text">Descubre los mejores consejos para elegir tus dulces favoritos y disfrutar al máximo.</p>
                                    <a href="#" class="btn btn-link">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Tendencias en productos de golosinas 2024</h6>
                                    <p class="card-text">Mantente al día con las últimas tendencias y novedades en el mundo de las golosinas.</p>
                                    <a href="#" class="btn btn-link">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Cómo organizar una fiesta de dulces</h6>
                                    <p class="card-text">Aprende a organizar una fiesta temática con los dulces más deliciosos para tus invitados.</p>
                                    <a href="#" class="btn btn-link">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sección de contacto -->
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Contáctanos</h5>
                    <p class="card-text">¿Tienes alguna pregunta o necesitas más información? No dudes en ponerte en contacto con nosotros. Estamos aquí para ayudarte.</p>

                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .card-title {
            font-weight: bold;
        }
        .card-text {
            font-size: 1rem;
        }
        .carousel-item p {
            font-size: 1.1rem;
        }
    </style>
@stop

@section('js')
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>
@stop
