<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
   </head>
   <body>
      <section style="width: 90%; margin: 0 auto;">
        <div style="text-align: center; width: 100%; background: #519221;
        padding: 12px 0px; font-size: 18px;">
          <h2 style="margin: 0;"><strong>Reservas:</strong></h2>
          <h2 style="margin: 0;"><strong>Parqueadero las Palmas</strong></h2>
        </div>
        <div style="font-size: 14px; padding: 2em 0;">
          <div style="width: 48%; display: inline-block; vertical-align: top; margin-right: 5px;">
            <p style="margin 1em 0;">
              <strong>Nombre:   </strong> {{$nombre}}
            </p>
            <p style="margin 1em 0;">
              <strong>Celular:   </strong> {{$movil}}
            </p>
            <p style="margin 1em 0;">
              <strong>Placa del Vehículo:   </strong> {{$car}}
            </p>
          </div>
          <div style="width: 48%; display: inline-block; vertical-align: top; margin-left: 5px;">
            <p style="margin 1em 0;">
              <strong>Fecha de Ingreso:   </strong> {{$fechai}}
            </p>
            <p style="margin 1em 0;">
              <strong>Fecha de Salida:   </strong> {{$fechasa}}
            </p>
            <p style="margin 1em 0;">
              <strong>Código Obsequio:   </strong> {{$codigo}}
            </p>
          </div>
        </div>
        <div style="text-align: center; width: 100%; padding: 12px 0px; ">
          <h2 style="font-size: 24px; margin: 0;"><strong>Recuerda reclamar tu obsequio.</strong></h2>
          <h3 style="margin: 0; font-size: 17px;"><strong>¡Gracias por tu reserva, te esperamos!</strong></h3>
        </div>
      </section>
   </body>
</html>
