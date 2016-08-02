<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function homeView()
  {

    return view('home');

  }

  public function reservaView()
  {

    return view('reservas');

  }

  public function contactoView()
  {

    return view('contacto');

  }

  public function blogView()
  {

    return view('blog');

  }

  public function nosotrosView()
  {

    return view('nosotros');

  }

  public function consultavueloView()
  {

    return view('consultavuelo');

  }

  public function blogViajeView()
  {

    return view('blogviaje');

  }

  public function blogTipsView()
  {

    return view('blogtips');

  }

  public function blogconsejosView()
  {

    return view('blogconsejos');

  }

  public function blogaeropuertoView()
  {

    return view('blogaeropuerto');

  }

  public function mapaView()
  {

    return view('mapa');

  }
}
