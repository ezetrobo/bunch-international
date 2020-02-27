@extends('layouts.app')
@section('title', ' | International')
@section('body-clase','landing-page sidebar-collapse')
@section('contenido')
    @include('layouts.menu')

    <div class="container-fluid p-0">

        <div class="container contenedor-logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
        
        <div class="carousel slide carousel-fade carousel-bunch" data-ride="carousel">
            <!-- Imagenes del slide -->

        @if(!empty($oTipoContenidoSlideHeader[0]))
            <div class="carousel-inner">

                <div class="centrar-img overlay">
                    <img src="{{ asset('images/bg-nubes.png') }}" alt="">
                </div>
                @foreach($oTipoContenidoSlideHeader[0]->imagenes as $key => $xImagen)
                    <div class="carousel-item @if($key == 0) active @endif">
                        <div class="centrar-img">
                            <img src="{{$xImagen->path}}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

            @if(!empty($oContenidoHeader))
                @foreach($oContenidoHeader as $key => $xContenidoHeader)
                    <div class="container info-slide pl-0 pr-0">
                        <div class="contenedor-info">
                            <div class="descripcion-slide">
                                <h1>{{$xContenidoHeader->titulo}}</h1>
                                <hr>
                                <p>{{$xContenidoHeader->bajada}}
                                </p>
                            </div>
                            <div class="description-slide mt-5">
                                <h1>{{$xContenidoHeader->subtitulo}}</h1>
                                <hr>
                                {!!$xContenidoHeader->descripcion!!}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>


    <div class="container-fluid bg-main">
        <div class="centrar-img">
            <img src="{{ asset('images/bg-nubes2.png') }}" alt="" class="bg-section">
        </div>
            <div class="row contenedores">
                @if(!empty($oContenidoInfo))
                    @foreach($oContenidoInfo as $key => $xContenidoInfo)
                        <div class="col-md-6 p-0 align-left">
                            <div class="contenedor-texto">
                                <h1> {{$xContenidoInfo->titulo}}</h1>
                                <div class="descripcion-contenedor">    
                                    <h1 class="subtitulo"> {{$xContenidoInfo->subtitulo}}</h1>
                                    <p>{{$xContenidoInfo->bajada}}</p>
                                </div>
                                <div class="icons-contenedor">
                                    {{$xContenidoInfo->printImagenes(5)}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="col-md-6 p-0">
                    <div class="centrar-img">
                        <img src="{{ asset('images/contenedor-1.png') }}" alt="" class="contenedores-pares">
                    </div>
                </div>
                <div class="col-md-6 p-0 align-left">
                    <div class="carousel slide carousel-fade carousel-contenedor" id="carousel-contendor" data-ride="carousel">
                        @if(!empty($oContenido[0]))
                            <div class="carousel-inner">
                                @foreach($oContenido[0]->imagenes as $key => $xImagen)
                                    <div class="carousel-item @if($key == 0) active @endif">
                                        <div class="centrar-img">
                                            <img src="{{$xImagen->path}}" alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <a class="carousel-control-prev" href="#carousel-contendor"" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carousel-contendor"" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                    </div>
                    <div class="centrar-img">
                        <img src="{{ asset('images/contenedor-2.png') }}" alt="" class="bg-carousel">
                    </div>
                </div>
                @if(!empty($oContenido[0]) && !empty($oContenido[1]))
                    <div class="col-md-6 p-0">
                        <div class="info-contenedor">
                            <h1>{{$oContenido[0]->titulo}}</h1>
                            <p>{{$oContenido[0]->bajada}}</p>
                        </div>
                        <div class="centrar-img">
                            <img src="{{ asset('images/contenedor-3.png') }}" alt="" class="contenedores-pares">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8 p-0 align-left">
                        <div class="info-contenedor">
                            <h1>{{$oContenido[1]->titulo}}</h1>
                            <p>{{$oContenido[1]->bajada}}</p>
                        </div>
                        <div class="centrar-img">
                            <img src="{{ asset('images/contenedor-4.png') }}" alt="">
                        </div>
                    </div>
                @endif
                <div class="col-md-6 col-sm-4 p-0">
                    <div class="centrar-img">
                        <img src="{{ asset('images/contenedor-5.png') }}" alt="" class="contenedores-pares">
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 p-0 align-left">
                    <div class="info-contenedor">
                        <h1 class="mt-5">FORMULARIO DE
                            CONTACTO</h1>
                    </div>
                    <div class="centrar-img">
                        <img src="{{ asset('images/contenedor-6.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-4 p-0 d-none d-sm-block">
                    <div class="centrar-img">
                        <img src="{{ asset('images/contenedor-7.png') }}" alt="" class="contenedores-pares">
                    </div>
                </div>
            </div>

    </div>


@endsection