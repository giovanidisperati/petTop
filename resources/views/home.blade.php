@extends('layouts.app')
<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background: url("../img/bg-pattern.png"), #7b4397;
                /* fallback for old browsers */
                background: url("../img/bg-pattern.png"), -webkit-linear-gradient(to left, #7b4397, #dc2430);
                /* Chrome 10-25, Safari 5.1-6 */
                background: url("../img/bg-pattern.png"), linear-gradient(to left, #7b4397, #dc2430);
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
            .form-login{
                width: 309px;
            }
            .button-password{
                font-size: 11px !important;
            }

        </style>
@section('content')
            @if (Route::has('login'))
             <div class="flex-center position-ref full-height">
                    <div class="content">
                        <div class="title m-b-md">
                             @if (Auth::check())
                        Olá, {{ Auth::user()->name }}
                        @if((Auth::user()->tipo)== 1)
                        <?php
                            $id = Auth::user()->id;
                        ?>
                        </div>       
                       

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
                        <br>
                        <a href="{{ url('/clinica/'.$id.'/edit') }}" class="btn btn-success" style="margin-bottom: -95px;">Cadastro</a>
                        <br>
                        <a href="{{ url('/clinica/'.$id) }}" class="btn btn-info">Visualizar Cadastro</a>
                        <br>
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

@endsection
