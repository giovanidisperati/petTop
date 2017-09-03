@extends('layouts.app')
@section('content')
            @if (Route::has('login'))
             <br>
                <div class="col-md-12">
                    <div class="content">
                        <div class="title m-b-md">
                        @if (Auth::check())
                        Olá, {{ Auth::user()->name }}
                        @if((Auth::user()->tipo)== 1)
                        <?php
                            $id = Auth::user()->id;
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4 col-sm-12 button-cel">
                        <a href="{{ url('/usuario/'.$id) }}" class="btn btn-warning">Visualizar Cadastro</a>
                    </div>
                    <div class="col-md-4 col-sm-12 button-cel">
                        <a href="{{ url('/usuario/'.$id.'/edit')}}" class="btn btn-success">Editar Cadastro</a>
                    </div>
                    <div class="col-md-4 col-sm-12 button-cel">
                        <a href="{{ url('/listarClinicas')}}" class="btn btn-info">Listar Clínicas</a>
                    </div>
                    <div class="col-md-4 col-sm-12 button-cel">                 
                        {{ Form::open(array('url' => 'usuario/' . $id)) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Deletar conta', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}

                        @elseif((Auth::user()->tipo)== 0)
                        <?php
                            $id = Auth::user()->id;
                        ?>
                    </div>
                    <div class="col-md-4 col-sm-12 button-cel">
                        <a href="{{ url('/clinica/'.$id.'/edit') }}" class="btn btn-success">Cadastro</a>
                    </div>
                    <div class="col-md-4 col-sm-12 button-cel">
                        <a href="{{ url('/clinica/'.$id) }}" class="btn btn-info">Visualizar Cadastro</a>
                    </div>
                    <div class="col-md-4 col-sm-12 button-cel">
                        {{ Form::open(array('url' => 'clinica/' . $id)) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Deletar conta', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </div>
                        @else
                    <div class="col-md-4 col-sm-12 button-cel">   
                        <a href="{{ url('/login') }}">Login</a>
                    </div>
                    <div class="col-md-4 col-sm-12 button-cel">
                        <a href="{{ url('/register') }}">Cadastro</a>
                    </div>
                    @endif
                    </div>
                </div>
            @endif   
            @endif  

@endsection
