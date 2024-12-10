<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('persona.inicio');
    }

    public function principal()
    {
        return view('persona.principal');

    }

    public function transferir()
    {
        return view('persona.transferir');
    }

    public function retiro()
    {
        return view('persona.retiro');
    }

    public function credito()
    {
        return view('persona.credito');
    }

    public function credito_detalles()
    {
        return view('persona.credito_detalles');
    }

    public function credito_solicitud()
    {
        return view('persona.credito_solicitud');
    }
}
