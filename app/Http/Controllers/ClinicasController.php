<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinica;
use DB;

class ClinicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clinicaCadastro');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clinicaCadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = auth()->id();
        $clinica = new Clinica;
        $clinica->id            = $id;
        $clinica->fantasia      = $request->fantasia;
        $clinica->razao_social  = $request->razao_social;
        $clinica->cnpj          = $request->cnpj;
        $clinica->endereco      = $request->endereco;
        $clinica->numero        = $request->numero;
        $clinica->bairro        = $request->bairro;
        $clinica->cidade        = $request->cidade;
        $clinica->estado        = $request->estado;
        $clinica->transporte    = $request->transporte;
        $clinica->especialidades = $request->especialidades;
        $clinica->tratamentos   = $request->tratamentos;
        $clinica->exames        = $request->exames;
        $clinica->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
