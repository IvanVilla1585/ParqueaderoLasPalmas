@extends('layouts/base')

@section('content')
<section class="container_banner">
  <article class="banner row">
    <div class="slider" id="slider">
      <ul class="slides" id="slides">
        <li>
          <img src="/images/banner1.jpg"> <!-- random image -->
        </li>
        <li>
          <img src="/images/banner2.jpg"> <!-- random image -->
        </li>
        <li>
          <img src="/images/banner3.jpg"> <!-- random image -->
        </li>
        <li>
          <img src="/images/banner4.jpg"> <!-- random image -->
        </li>
      </ul>
    </div>
  </article>
</section>
<section class="container_info row">
  <article class="reservation row">
    <p class="title color">Reserva ya con Nosotros</p>
    <div class="row">
      <div class="col s12 l5 offset-l1">
        <figure>
          <img src="/images/reserva-ya.jpg" alt="">
        </figure>
      </div>
      <div class="col s12 l5 text_registre">
        <p class="text_reservation color">
          Aprovecha esta oportunidad de recibir los mejores precios y beneficios,
          reservando de inmediato tu lugar en nuestro parqueadero!
        </p>
        <div class="row">
          <a href="{{ route('show_reserva_path') }}" class="waves-effect waves-light btn">Realiza tu reserva</a>
        </div>
      </div>
    </div>
  </article>
  <article class="images row">
    <p class="title">¡Nuestras Instalaciones!</p>
    <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="/images/instalaciones/parqueadero1.jpg"></a>
      <a class="carousel-item" href="#two!"><img src="/images/instalaciones/parqueadero2.jpg"></a>
      <a class="carousel-item" href="#three!"><img src="/images/instalaciones/parqueadero3.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="/images/instalaciones/parqueadero4.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="/images/instalaciones/parqueadero5.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="/images/instalaciones/parqueadero6.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="/images/instalaciones/parqueadero7.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="/images/instalaciones/parqueadero8.jpg"></a>
    </div>
  </article>
  <article class="times row">
    <div class="row">
      <div class="col s12 m10 offset-m1">
        <p class="title"> Para mayor información de tu vuelo consulta aquí</p>
        <div class="vuelo_img">
          <figure>
            <img src="/images/consulta-tu-vuelo.jpg" alt="">
          </figure>
        </div>
        <div class="row data_time">
          <p class="sub_tittle"> Este es el clima en nuestro aeropuerto </p>
          <div class="col s12 time_info">
            <div class="data_time_info">
              <div class="info_text_time">
                <span id="nombre"></span>
                <figure>
                  <img id="icon" src="" alt="">
                </figure>
                <span id="temp"></span>
                <span id="descripcion"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="consult_fly">
          <a href="{{ route('show_vuelo_path') }}" class="waves-effect waves-light btn">Consultar
            <i class="material-icons prefix">airplanemode_active</i>
          </a>
        </div>
      </div>
      <!--div class="col s12 m10 l6 data_facebook offset-m1">
        <p id="dolar" class="sub_tittle">Siguenos y continua disfrutando de nuestras beneficios</p>
        <div class="info_facebook" id="info_facebook">
        </div>
      </div-->
    </div>
  </article>
  <article class="location">
    <p class="title">¿Que esperas para visitarnos?</p>
    <div id="map" class="map">

    </div>
  </article>
</section>
@stop
@section('js')
@if(session('mensaje'))
  <script type="text/javascript">
    $(document).ready(function(){
      Materialize.toast('Te estaremos contactando con información de tu interés', 10000);
    })
  </script>
@endif
@stop
