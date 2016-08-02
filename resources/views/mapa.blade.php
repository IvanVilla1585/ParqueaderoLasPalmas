@extends('layouts/base')

@section('tags')

@stop

@section('content')
  <section class="container">
    <div class="row">
      <p class="title">Mapa del sitio</p>
      <div class="col s12 m4 offset-m1">
        <ul>
          <li>
              <a  href="{{ route('show_home_path') }}">
                <i class="material-icons prefix arrows">keyboard_arrow_right</i>
                Home
              </a>
          </li>
          <li>
              <a href="{{ route('show_reserva_path') }}">
                <i class="material-icons prefix arrows">keyboard_arrow_right</i>
                Reservas
              </a>
          </li>
          <li>
              <a href="{{ route('show_nosotros_path') }}" >
                <i class="material-icons prefix arrows">keyboard_arrow_right</i>
                Nosotros
              </a>
          </li>
          <li>
            <a  href="{{ route('show_contacto_path') }}">
              <i class="material-icons prefix arrows">keyboard_arrow_right</i>
              Contacto
            </a>
          </li>
          <li>
            <a href="{{ route('show_blog_path') }}">
              <i class="material-icons prefix arrows">keyboard_arrow_right</i>
              Blog
            </a>
          </li>
        </ul>
      </div>
      <div class="col s12 m6">
        <div id="map" class="map">

        </div>
      </div>
    </div>
  </section>
@stop
