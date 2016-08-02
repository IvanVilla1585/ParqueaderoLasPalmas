<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Parqueadero</title>
  <meta name="viewport" content=" width=device-width, initial-scale=1 user-scalable=no">
  <style media="screen">
    html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,figure,header,nav,section{display:block}a{background-color:transparent}img{border:0}figure{margin:1em 40px}input{color:inherit;font:inherit;margin:0}input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}*{margin:0;padding:0}html{height:100%}body{font-family:montserrat,arial,verdana}@media screen and (max-width:768px){.header .logo{float:right;margin-right:1em;width:15%}.header .logo figure{width:100%}}@media screen and (max-width:480px){.header .logo{float:right;margin-right:1em}.header .logo figure{width:100%}}body{font-family:'Roboto Condensed',sans-serif;font-size:16px}input{line-height:2em}.color{color:#fff}.color_verde{color:#519221}.modal .modal-content .logo{width:40%;display:inline-block;vertical-align:top}.modal .modal-content .logo figure{margin:0}.modal .modal-content .logo figure img{width:100px}.modal .modal-content .title_modal{display:inline-block;vertical-align:top}.header{margin-bottom:0!important}.header .logo{width:26%;display:inline-block;margin-top:.3em;margin-left:.5em}.header .logo figure{margin:0}.header .logo figure img{height:70px}nav ul li a{color:#519221}nav ul li:first-child{width:100px;position:relative;text-align:center}nav ul li:first-child a{width:100%;padding-left:37px}nav ul li:first-child a .home{position:absolute;left:8px}.title{text-align:center;font-size:2em;margin-bottom:0;font-weight:700px}.container_banner .banner{margin:0}.container_info .reservation{background:#6eb43f;padding-bottom:1em}.container_info .reservation .title{padding-top:1em;margin-top:0;margin-bottom:1.2em}.container_info .reservation .row div figure{margin:0}.container_info .reservation .row div figure img{width:100%}.container_info .reservation .row div .text_reservation{text-align:justify}.container_info .reservation .row .text_registre p{margin-top:4em}.container_info .reservation .row .text_registre .row{text-align:right;margin-top:3em}.container_info .reservation{min-height:500px}
  </style>
  @yield('tags')
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
                  <a href="{{ route('show_mapa_path') }}"  href="">
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
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ URL::asset('js/app.min.js') }}"></script>
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('js')
  </body>
  </html>
