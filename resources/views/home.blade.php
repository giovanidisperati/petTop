@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            @if (Route::has('login'))
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    
                <div class="top-right links">
                    @if (Auth::check())
                        @if((Auth::user()->tipo)== 1)
                        <?php
                            $id = Auth::user()->id;
                        ?>
                        <h3>Olá, Cliente {{ Auth::user()->name }} </h3>
                        <a href="{{ url('/usuario/'.$id.'/edit')}}">Editar Cadastro</a>
                        <a href="{{ url('/buscarClinicas')}}">Buscar Clínicas</a>
                        <form action="{{ url('UsuarioController@destroy') }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                             <a href="{{ url('/usuario/'.$id)}}">Excluir Conta</a>
                        </form>
                       

                        @elseif((Auth::user()->tipo)== 0)
                        <h3>Olá, Clínica  {{ Auth::user()->name }} </h3>
                        <a href="{{ url('/clinica') }}">Concluir Cadastro</a>

                        @else   
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Registrar</a>
                    @endif
                </div>
            @endif   
            @endif  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
