@extends('layouts.app')

@section('content')
@if (Route::has('login'))
         @if (Auth::check())
            @if((Auth::user()->tipo) ==0)

            
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro de Clínica</div>
                    <div class="panel-body">
                     @if(($clinica) != '')
                        {{ Form::model($clinica, array('route' => array('clinica.update', $clinica->id), 'method' => 'PUT')) }}
                        @else 
                        <form action="/clinica" method="POST">
                        @endif
                         {{ csrf_field() }}
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="administrador">Administrador</label>
                                            <input type="text" readonly class="form-control" id="nome" value="{{$usuario->name}}" name="nome">
                                        </div>  
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome_fantasia">Nome Fantasia</label>
                                            @if(($clinica) != '')
                                            <input type="text" class="form-control" id="fantasia" name="fantasia" value="{{$clinica->fantasia}}">

                                            @else
                                            <input type="text" class="form-control" id="fantasia" name="fantasia" placeholder="Nome Fantasia">
                                           @endif
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="razao_social">Razão Social</label>

                                            @if(($clinica) == '')
                                            <input type="text" class="form-control required" id="razao_social" name="razao_social">

                                            @else
                                            <input type="text" class="form-control required" id="razao_social" name="razao_social" value="{{$clinica->razao_social}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cnpj">CNPJ</label>
                                            @if(($clinica) == '')
                                            <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">

                                            @else
                                            <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$clinica->cnpj}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="endereco">Endereço</label>
                                            @if(($clinica) == '')
                                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">

                                            @else
                                            <input type="text" class="form-control" id="endereco" name="endereco" value="{{$clinica->endereco}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="numero">Número</label>
                                            @if(($clinica) != '')
                                            <input type="text" class="form-control" id="numero" name="numero" value="{{$clinica->numero}}">

                                            @else
                                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bairro">Bairro</label>
                                            @if(($clinica) != '')
                                            <input type="text" class="form-control" id="bairro" name="bairro" value="{{$clinica->bairro}}">

                                            @else
                                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cidade">Cidade</label>
                                            @if(($clinica) == '')
                                            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">

                                            @else
                                            <input type="text" class="form-control" id="cidade" name="cidade" value="{{$clinica->cidade}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="estado">Estado</label>
                                            @if(($clinica) == '')
                                            <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado">

                                            @else
                                            <input type="text" class="form-control" id="estado" name="estado" value="{{$clinica->estado}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="transporte">Transporte</label>
                                            <input type="radio" id="transporte" name="transporte" value="0">Não
                                            <input type="radio" id="transporte" name="transporte" value="1">Sim
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="especialidades">Especialidades</label>
                                            @if(($clinica) == '')
                                            <textarea class="form-control" rows="5" cols="50" id="especialidade" name="especialidade" placeholder="Especialidade"></textarea>

                                            @else
                                            <textarea class="form-control" rows="5" cols="50" id="especialidade" name="especialidade" value="{{$clinica->especialidade}}">{{$clinica->especialidade}}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tratamento">Tratamento</label>
                                            @if(($clinica) == '')
                                            <textarea class="form-control" rows="5" cols="50" id="tratamento" name="tratamento"></textarea>

                                            @else
                                            <textarea class="form-control" rows="5" cols="50" id="tratamento" name="tratamento" value="{{$clinica->tratamento}}">{{$clinica->tratamento}}</textarea>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <a href="{{ url('/home') }}">Voltar</a>       
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

            
        @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Registrar</a>
        @endif
    @endif
</div>
@endif     
</div>
@endsection