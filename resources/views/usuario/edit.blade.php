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
            .form-login{
                width: 309px;
            }
            .button-password{
                font-size: 11px !important;
            }

        </style>
@section('content')
@if (Route::has('login'))
         @if (Auth::check())
            @if((Auth::user()->tipo) ==1)
    <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                Editar
                </div>
                <div style="width: 140%;">
                    {{ Form::model($usuario, array('route' => array('usuario.update', $usuario->id), 'method' => 'PUT')) }}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Nome</label>

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $usuario->name }}" required autofocus>
                            </div>
                             <br><br>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                            <label for="email" class="col-md-3 control-label">E-mail</label>

                            <div class="col-md-9" style="margin-bottom: 6px;">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $usuario->email }}" required>
                            </div>
                           
                        </div>
                        <div class="form-group" >
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Editar
                                </button>
                            </div>
                            <div class="col-md-6 ">
                                <a href="{{ url('/home') }}"><button type="submit" class="btn btn-primary">Voltar</button></a>
                            </div> 
                        </div>
                    </form>
                </div>

                                   
                </div>    
            </div>


            
        @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Registrar</a>
        @endif
    @endif

@endif     

@endsection