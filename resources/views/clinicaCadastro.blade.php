@extends('layouts.interno-edit')
<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background: url("../../img/bg-pattern.png"), #7b4397;
                /* fallback for old browsers */
                background: url("../../img/bg-pattern.png"), -webkit-linear-gradient(to left, #7b4397, #dc2430);
                /* Chrome 10-25, Safari 5.1-6 */
                background: url("../../img/bg-pattern.png"), linear-gradient(to left, #7b4397, #dc2430);
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff !important;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: #fff !important;           
            }
            .control-label{
                color: #fff !important;
            }
       
            .button-password{
                font-size: 11px !important;
            }
            .container-clinica{
                margin-left: 21%;
                margin-right: 17%;
            }
            .buscar-cep{
                margin-left: -16px;
            }

        </style>
@section('content')
@if (Route::has('login'))
         @if (Auth::check())
            @if((Auth::user()->tipo) ==0)

<br><br>         
 <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                Cadastro da Clínica
                </div>
                <div class="container-clinica">
                <div class="col-md-12" style="text-align: justify;color:white" >
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="numero">CEP</label><br>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control buscar-cep" id="cep" name="numero" value="">
                                            </div>
                                            <div class="col-md-3">
                                                <button onclick="buscarCEP()" class="btn btn-primary">Buscar</button>
                                            </div>
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

                                            <input type="hidden" class="form-control" id="latitude" name="latitude" value="">
                                            <input type="hidden" class="form-control" id="longitude" name="longitude" value="">
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
                                            <label for="transporte">Transporte</label><br>
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
                                <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                                <div class="col-md-6" align="right">
                                <a href="{{ url('/home') }}"> <button type="submit" class="btn btn-primary">Voltar
                                </button></a>       
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<br><br>

            
        @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Registrar</a>
        @endif
    @endif
</div>
@endif     
</div>
@endsection

<script src="/js/jquery.js"></script>
<script src="/js/app.js"></script>
