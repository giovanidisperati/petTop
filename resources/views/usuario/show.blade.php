@extends('layouts.interno')
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
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                Dashboard
                </div>
            @if (Route::has('login'))
                    @if (Auth::check())
					<div class="col-md-12" style="text-align: justify;color:white">
                        <div class="form-group">
                        <h2><strong>Nome: </strong>{{$usuario->name}}</h2>
                        <h2><strong>E-mail: </strong>{{$usuario->email}}</h2>
                        <h2><strong>Tipo: </strong>{{$usuario->tipo}}</h2>                                

                </div>
                <a href="{{ url('/home') }}"><button type="submit" class="btn btn-primary">Voltar</button></a>
                </div>
                </div>
            </div>


@endif   
            
            @endif
@endsection