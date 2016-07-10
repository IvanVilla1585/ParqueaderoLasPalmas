<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
   </head>
   <body>
      <section>
        <div class="">
          <h2>
            Información del contacto
          </h2>
          <p>
            Nombre: {{$name}}
          </p>
          <p>
            Correo: {{$email}}
          </p>
          @if({{$comentario}})
            <p>
              {{$comentario}}
            </p>
          @endif
        </div>
      </section>
   </body>
</html>
