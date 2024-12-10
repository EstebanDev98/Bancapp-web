<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('empresa.inicio');
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function cuentas (Request $request)
    {
        return view('empresa.cuentas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function gestion_cuentas(Empresa $empresa)
    {
        return view('empresa.gestion_cuenta');
    }

    public function nomina()
    {
        return view('empresa.nomina');
    }

    public function transferir()
    {
        return view('empresa.transferir');
    }

    public function extractos()
    {
        return view('empresa.extracto');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
