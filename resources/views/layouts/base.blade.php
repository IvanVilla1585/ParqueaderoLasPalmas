<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Parqueadero</title>
  <link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content=" width=device-width, initial-scale=1 user-scalable=no">
</head>
<body>
  <header class="header row">
    <div class="navbar-fixed">
      <nav class="navbar-fixed">
        <div class="nav-wrapper">
            <div class="logo">
              <figure>
                <a href="{{ route('show_home_path') }}">
                  <img src="/images/logo.jpg" alt="">
                </a>
              </figure>
            </div>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="{{ route('show_home_path') }}" class="">
                <i class="material-icons prefix home">home</i>Home
              </a>
            </li>
            <li>
              <a href="{{ route('show_reserva_path') }}">Reservas</a>
            </li>
            <li>
              <a href="{{ route('show_nosotros_path') }}">Nosotros</a>
            </li>
            <li>
              <a href="{{ route('show_contacto_path') }}">Contacto</a>
            </li>
            <li>
              <a href="{{ route('show_blog_path') }}">Blog</a>
            </li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li>
              <a href="{{ route('show_home_path') }}" class="icon-home3">Home</a>
            </li>
            <li>
              <a href="{{ route('show_reserva_path') }}">Reservas</a>
            </li>
            <li>
              <a href="{{ route('show_nosotros_path') }}">Nosotros</a>
            </li>
            <li>
              <a href="{{ route('show_contacto_path') }}">Contacto</a>
            </li>
            <li>
              <a href="{{ route('show_blog_path') }}">Blog</a>
            </li>
          </ul>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="medium material-icons">menu</i></a
        </div>
      </nav>
    </div>
  </header>
  @yield('content')
  <footer class="footer">
    <div class="row">
      <div class="col s12 l6 contacto">
        <div class="row">
          <div class="col s12 m6">
            <p>Sigue compartiendo información con nosotros</p>
            <p class="text_footer">
              Te contactaremos con información y beneficios de tu interés
            </p>
          </div>
          <div class="col s12 m6">
            <form action="{{ route('send_emailnew_path') }}" class="form_contact" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
              <div class="inputs_footer row">
                <div class="input-field col s12">
                  <span >
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" class="validate" name="name_contact" id="name_contact" >
                    <label for="name_contact">Nombre Completo</label>
                  </span>
                </div>
                <div class="input-field col s12">
                  <span>
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email_contact" id="email_contact" >
                    <label for="email_contact">Correo Electrónico</label>
                  </span>
                </div>
              </div>
              <input type="submit" class="waves-effect waves-light btn" value="Enviar">
            </form>
          </div>
        </div>
      </div>
      <div class="col s12 l6">
        <div class="row">
          <div class="col s6 m4 offset-m2 company">
            <p>Empresa</p>
            <ul>
              <li>
                  <a  href="{{ route('show_nosotros_path') }}">
                    <i class="material-icons prefix arrows">keyboard_arrow_right</i>
                    Nosotros
                  </a>
              </li>
              <li>
                  <a href="{{ route('show_blog_path') }}">
                    <i class="material-icons prefix arrows">keyboard_arrow_right</i>
                    Blog
                  </a>
              </li>
              <li>
                  <a href="#"  href="">
                    <i class="material-icons prefix arrows">keyboard_arrow_right</i>
                    Mapa del sitio
                  </a>
              </li>
              <li>
                <a  href="{{ route('show_contacto_path') }}">
                  <i class="material-icons prefix arrows">keyboard_arrow_right</i>
                  Contacto
                </a>
              </li>
              <li>
                <a href="{{ route('show_reserva_path') }}">
                  <i class="material-icons prefix arrows">keyboard_arrow_right</i>
                  Reserva
                </a>
              </li>
            </ul>
          </div>
          <div class="col s6 m6 redes_footer">
            <div>
              <p>Visitanos en nuestras redes</p>
              <aside class="redes">
                <a href="https://www.facebook.com/Parqueadero-las-palmas-J-M-345236772297223" target="_blanck">
                  <img src="/images/facebook.svg" alt="" />
                </a>
                <a href="https://www.instagram.com/parqueaderolaspalmas/" target="_blanck" >
                  <img src="/images/instagram.svg" alt="" />
                </a>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </div>
    </footer>
    <div id="modal-alert" class="modal modal-alert">
      <div class="modal-content">
        <div class="logo">
          <figure>
            <img src="/images/logo.jpg" alt="">
          </figure>
        </div>
        <div class="title_modal">
          <h2 class="color_verde">Alerta!</h2>
        </div>
        <p id="text-modal"></p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green waves-light btn">Aceptar</a>
      </div>
    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script src="{{ URL::asset('js/materialize.js') }}" type="text/javascript"></script>
    <script>

    $(document).ready(function(){
      $(".button-collapse").sideNav();
      $('.parallax').parallax();
      $('.carousel').carousel();
      $('.slider').slider({
        full_width: true,
        time_constant: 10000
      });
      $('.datepicker').pickadate({
        monthsFull:['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
                    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        weekdaysFull:['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vier', 'Sab'],
        showMonthsFull: true,
        showWeekdaysFull: true,
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
        format: 'dd-mm-yyyy',
        formatSubmit: 'yyyy-mm-dd',
        min: new Date()
      });

    });

    </script>
    @yield('js')
  </body>
  </html>
