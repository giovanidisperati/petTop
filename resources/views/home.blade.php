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
                        {{ Form::open(array('url' => 'usuario/' . $id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Deleter conta', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                       

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
