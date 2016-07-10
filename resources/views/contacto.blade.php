@extends('layouts/base')

@section('content')
<section class="container_contacto">
  <div class="row">
    <article class="contacto_form">
      <div class="section gren">
        <div class="row container">
          <h3 class="header">Contacto</h3>
          <div class="col s12 container_form">
            <div class="contacto row">
              <form action="{{ route('send_email_path') }}" method="post" class="form_contacto row">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="inputs row" id="inputs">
                  <div class="input-field col s12 m8 offset-m2">
                    <span class="nombre">
                      <i class="material-icons prefix nombre">account_circle</i>
                      <input type="text" class="validate" name="name" id="name" >
                      <label for="name">* Nombre Completo</label>
                    </span>
                  </div>
                  <div class="input-field col s12 m8 offset-m2">
                    <span class="email">
                      <i class="material-icons prefix nombre">email</i>
                      <input type="text" class="validate" name="email" id="email" >
                      <label for="email">* Correo Electronico</label>
                    </span>
                  </div>
                  <div class="input-field col s12 m8 offset-m2">
                    <i class="material-icons prefix nombre">comment</i>
                    <textarea id="message" name="comentario" class="materialize-textarea"></textarea>
                    <label for="message">* Mensaje</label>
                  </div>
                  <div class="buttons col s11" id="boton_enviar">
                    <input type="submit" name="enviar" id="enviar_contacto" class="waves-effect waves-light btn" value="Enviar">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>
@stop
@section('js')
@if(session('mensaje'))
  <script type="text/javascript">
    $(document).ready(function(){
      Materialize.toast('Te estaremos contactando en la mayor brevedad posible', 10000);
    })
  </script>
@endif
@stop
