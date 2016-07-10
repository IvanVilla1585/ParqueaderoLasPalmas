<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests;
use App\Reservas;
use Mail;
use \DateTime;

class ReservasController extends Controller
{
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function guardar(Request $request)
  {
    $this->validate($request, [
      'fecha_de_ingreso' => 'required',
      'fecha_salida' => 'required',
      'placa_del_vehiculo' => 'required',
      'nombre' => 'required',
      'email' => 'required'
    ]);
    $reserva = new Reservas();
    $array = explode('-', $request->fecha_de_ingreso);
    $array1 = explode('-', $request->fecha_salida);
    $fecha_ingreso = DateTime::createFromFormat('Y-m-d', $array[2]."-".$array[1]."-".$array[0]);
    $fecha_salida =  DateTime::createFromFormat('Y-m-d', $array1[2]."-".$array1[1]."-".$array1[0]);
    $dif = $fecha_ingreso->diff($fecha_salida);
    $dias = $dif->format('%a');
    $reserva->fecha_ingreso = $fecha_ingreso;
    $reserva->fecha_salida = $fecha_salida;
    $reserva->nombres = $request->nombre;
    $reserva->apellidos = $request->apellido;
    $reserva->email = $request->email;
    $reserva->placa_vehiculo = $request->placa_del_vehiculo;
    $reserva->movil = $request->cell;
    $reserva->remember_token = $request->_token;

    $reserva->save();
    $email = $request->email;
    $codigo = '';
    if (is_numeric($dias)){
      if ($dias < 4){
        $codigo = 'PL'.'-'.$request->placa_del_vehiculo;
      }else if ($dias > 3 && $dias < 9){
        $codigo = 'PQ'.'-'.$request->placa_del_vehiculo;
      }else{
        $codigo = 'PS'.'-'.$request->placa_del_vehiculo;
      }
    }else{
      $codigo = 'No se genero el código';
    }
    $data = array(
      'fechai' => $request->fecha_de_ingreso,
      'fechasa' => $request->fecha_salida,
      'car' => $request->placa_del_vehiculo,
      'codigo' => $codigo,
      'nombre' => $request->nombre.' '.$request->apellido,
      'movil' => $request->cell
    );
    $from = 'infoparqueaderolaspalmas@gmail.com';
    $admin = 'Administrador';
    Mail::queue('emails.template', $data, function ($message) use ($from, $admin, $email){
      $message->subject('Confirmación reserva');
      $message->from($from, $admin);
      $message->to($email)->cc($from);
    });

    return redirect('/Reservas')->with('mensaje', 'Gracias por confiar en nosotros, confirma en tu correo la información de tu reserva');
  }

  public function enviarEmail(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'comentario' => 'required'
    ]);
    $data = array(
      'name' => $request->name,
      'email' => $request->email,
      'comentario' => $request->comentario
    );
    $from = $request->email;
    $nombre = $request->nombre;
    $email = 'infoparqueaderolaspalmas@gmail.com';
    Mail::queue('emails.contacto', $data, function ($message) use ($from, $nombre, $email){
      $message->subject('Contacto');
      $message->from($from, $nombre);
      $message->to($email);
    });

    return redirect('/Contacto')->with('mensaje', 'Te estaremos contactando en la mayor brevedad posible');
  }

  public function enviarEmailNew(Request $request)
  {
    $this->validate($request, [
      'name_contact' => 'required',
      'email_contact' => 'required'
    ]);
    $data = array(
      'name' => $request->name_contact,
      'email' => $request->email_contact,
      'comentario' => ''
    );
    $from = $request->email_contact;
    $nombre = $request->name_contact;
    $email = 'infoparqueaderolaspalmas@gmail.com';
    Mail::queue('emails.contacto', $data, function ($message) use ($from, $nombre, $email){
      $message->subject('Newsletter');
      $message->from($from, $nombre);
      $message->to($email);
    });

    return redirect('/')->with('mensaje', 'Te estaremos contactando en la mayor brevedad posible');
  }
}
