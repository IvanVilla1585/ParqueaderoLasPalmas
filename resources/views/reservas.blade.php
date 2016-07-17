@extends('layouts/base')

@section('content')
<section class="container_register">
  <article class="reservation">
    <div class="section gren">
      <div class="row container">
        <h2 class="header">Reservas</h2>
        <div class="registre row">
          @if( $errors->has() )
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

            @foreach( $errors->all() as $error )

            {{ $error }}

            @endforeach
          </div>
          @endif
          <div class="col s12 pasos">
            <ul class="wizard_steps anchor">
              <li>
                <a rel="1" isdone="1" class="selected" href="#step-1">
                  <span class="step_no">1</span>
                  <span class="step_descr">
                    Paso 1<br>
                    <small>Información Basica</small>
                  </span>
                </a>
              </li>
              <li>
                <a rel="2" isdone="0" class="disabled" href="#step-2">
                  <span class="step_no">2</span>
                  <span class="step_descr">
                    Paso 2<br>
                    <small>Información Personal</small>
                  </span>
                </a>
              </li>
              <li>
                <a rel="3" isdone="0" class="disabled" href="#step-3">
                  <span class="step_no">3</span>
                  <span class="step_descr">
                    Paso 3<br>
                    <small>Información Reserva</small>
                  </span>
                </a>
              </li>
            </ul>
          </div>
          <form action="{{ route('save_reserva_path') }}" class="form_registre col s12" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <div id="inputs_fechas" class="row">
              <div class="inputs row" id="inputs">
                <div class="input-field input col s12 l6">
                  <span class="fechai">
                    <i class="material-icons prefix">today</i>
                    <label class="label_fecha" for="icon_fechai">* Fecha de Ingreso</label>
                    <input type="date" class="datepicker" name="fecha_de_ingreso" id="icon_fechai" >
                  </span>
                </div>
                <div class="input-field input col s12 l6">
                  <span class="fechasa">
                    <i class="material-icons prefix">today</i>
                    <label class="label_fecha" for="fechai">* Fecha de Salida</label>
                    <input type="date" class="datepicker" name="fecha_salida" id="fechasa" >
                  </span>
                </div>
              </div>
              <div class="inputs row" id="inputs1">
                <div class="input-field col s12 l6">
                  <span class="carr">
                    <i class="material-icons prefix">directions_car</i>
                    <input type="text" name="placa_del_vehiculo" id="icon_car" >
                    <label for="icon_car">* Placa del Vehículo</label>
                  </span>
                </div>
                <div class="input-field col s12 l6">
                  <div class="row">
                    <div class="col s6">
                      <p>
                        <input class="with-gap" name="vehiculo" type="radio" id="moto" value="moto" />
                        <label for="moto">Moto</label>
                      </p>
                    </div>
                    <div class="col s6">
                      <p>
                        <input class="with-gap" name="vehiculo" type="radio" id="carro" value="carro" />
                        <label for="carro">Carro</label>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="inputs_datos" class="row">
              <div class="inputs_info row" id="inputs_info">
                <div class="input-field col s12 l6">
                  <span class="nombre">
                    <i class="material-icons prefix nombre">account_circle</i>
                    <input type="text" class="validate" name="nombre" id="nombre" >
                    <label for="name">* Nombre Completo</label>
                  </span>
                </div>
                <div class="input-field col s12 l6">
                  <span class="nombre">
                    <i class="material-icons prefix nombre">account_circle</i>
                    <input type="text" class="validate" name="apellido" id="apellido" >
                    <label for="name">Apellido</label>
                  </span>
                </div>
              </div>
              <div class="inputs_info row" id="inputs_info1">
                <div class="input-field col s12 l6">
                  <span class="email">
                    <i class="material-icons prefix">email</i>
                    <input type="text" class="validate" name="email" id="icon_email" >
                    <label for="icon_email">* Correo Electronico</label>
                  </span>
                </div>
                <div class="input-field col s12 l6">
                  <span class="cell">
                    <i class="material-icons prefix">settings_cell</i>
                    <input type="text" name="cell" id="cell" >
                    <label for="cell">Número de Celular</label>
                  </span>
                </div>
              </div>
              <div class="inputs_info row" id="inputs_info1">
                <div class="input-field col s12 l6">
                </div>
              </div>
            </div>
            <div class="content_text col s12 m10 offset-m1" id="content_text">
              <div class="col s12 m6 basica">
                <p id="text_fechai">
                  Fecha de Ingreso:
                </p>
                <p id="text_fechasa">
                  Fecha Salida:
                </p>
                <p id="text_placa">
                  Placa del Vehiculo:
                </p>
                <p id="text_vehiculo">
                  Tipo de Vehiculo:
                </p>
              </div>
              <div class="col s12 m6 personal">
                <p id="text_nombre">
                  Nombres:
                </p>
                <p id="text_apellidos">
                  Apellidos:
                </p>
                <p id="text_correo">
                  Correo Electronico:
                </p>
                <p id="text_tel">
                  Móvil:
                </p>
              </div>
            </div>
            <div id="botons_siguiente" class="buttons col s11">
              <input type="button" name="anterior" id="anterior" class="waves-effect waves-light btn" value="Anterior">
              <input type="button" name="siguiente" id="siguiente" class="waves-effect waves-light btn" value="Siguiente">
            </div>
            <div id="botons_reserva" class="buttons col s11">
              <input type="button" name="anterior" id="anterior_reserva" class="waves-effect waves-light btn" value="Anterior">
              <input type="submit" name="reservar" id="reservar" class="waves-effect waves-light btn" value="Reservar">
            </div>
          </div>
        </form>
      </div>
    </div>
  </article>
</section>
@stop
@section('js')
@if(session('mensaje'))
  <script type="text/javascript">
    $(document).ready(function(){
      Materialize.toast('Gracias por confiar en nosotros, confirma en tu correo la información de tu reserva', 10000);
    })
  </script>
@endif
@stop
