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
                <div class="form-group">
                    @if (Auth::check())
                        <h3>Olá, {{ Auth::user()->name }} </h3>
                        @if((Auth::user()->tipo)== 1)
                        <?php
                            $id = Auth::user()->id;
                        ?>

                        <a href="{{ url('/usuario/'.$id) }}" class="btn btn-warning">Visualizar Cadastro</a>
                        <br><br>
                        <a href="{{ url('/usuario/'.$id.'/edit')}}" class="btn btn-success">Editar Cadastro</a>
                        <br><br>
                        <a href="{{ url('/listarClinicas')}}" class="btn btn-info">Listar Clínicas</a>
                        <br><br>
                        {{ Form::open(array('url' => 'usuario/' . $id)) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Deletar conta', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                       

                        @elseif((Auth::user()->tipo)== 0)
                        <?php
                            $id = Auth::user()->id;
                        ?>

                        <a href="{{ url('/clinica/'.$id.'/edit') }}" class="btn btn-success">Cadastro</a>
                        <br><br>
                        <a href="{{ url('/clinica/'.$id) }}" class="btn btn-info">Visualizar Cadastro</a>
                        <br><br>
                        {{ Form::open(array('url' => 'clinica/' . $id)) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Deletar conta', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}

                        @else   
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Cadastro</a>
                    @endif
                    </div>
                </div>
            @endif   
            @endif  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
