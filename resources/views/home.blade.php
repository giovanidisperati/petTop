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

                        <h3>Olá, Cliente {{ Auth::user()->name }} </h3>
                        <a href="{{ url('/cadastroCliente') }}">Concluir Cadastro</a>
                        <a href="{{ url('/buscarClinicas')}}">Buscar Clínicas</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                        @elseif((Auth::user()->tipo)== 0)
                        <h3>Olá, Clínica  {{ Auth::user()->name }} </h3>
                        <a href="{{ url('/clinica') }}">Concluir Cadastro</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
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
