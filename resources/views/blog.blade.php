
@extends('layouts/base')

@section('tags')

@stop

@section('content')
<section class="container_blog">
  <h2>Blog</h2>
  <article class="info_blog row">
    <div class="images_blog col s12 l6">
      <div class="row">
        <div class="col s12 m10 offset-m1">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="/images/blog/imagenblogmale.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Mi equipaje al viajar</span>
              <p>
                En el presente artículo queremos compartir con ustedes una serie de precauciones
                que debes tener para viajar con respecto a tus maletas y equipaje de mano.
              </p>
              <p><a href="{{ route('show_equipaje_path') }}">Continuar Leyendo...</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="images_blog col s12 l6">
      <div class="row">
        <div class="col s12 m10 offset-m1">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="/images/blog/imagenblogcheck.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Tips que debes de tener en cuenta antes de viajar</span>
              <p>
                En el siguiente artículo queremos compartirles tips realmente importantes, ya que es común que no tengamos
                en cuenta estos y terminamos pasando inconvenientes en nuestros viajes
              </p>
              <p><a href="{{ route('show_tips_path') }}">Continuar Leyendo...</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
  <article class="info_blog row">
    <div class="images_blog col s12 l6">
      <div class="row">
        <div class="col s12 m10 offset-m1">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="/images/blog/imagenblogcar.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">6 consejos para un mejor cuidado de tu carro.</span>
              <p>
                En Parqueadero Las Palmas nos preocupamos por ti, por eso decidimos realizar estos concejos los cuales
                si tienes en cuenta algunos de estos podrás mantener tu auto en mejores condiciones, no solo
                físicamente sino también con un motor fuerte y veloz.
              </p>
              <p><a href="{{ route('show_consejo_path') }}">Continuar Leyendo...</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="images_blog col s12 l6">
      <div class="row">
        <div class="col s12 m10 offset-m1">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="/images/blog/imagenblog.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Como nace el aeropuerto José María Córdova.</span>
              <p>
                En este artículo nuestro parqueadero las Palmas quiere compartir con ustedes un poco sobre el
                nacimiento del aeropuerto de Rionegro, Antioquia.
              </p>
              <p><a href="{{ route('show_aeropuerto_path') }}">Continuar Leyendo...</a></p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </article>
  </section>
  @stop
