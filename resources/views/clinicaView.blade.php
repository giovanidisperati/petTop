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

        </style>
@section('content')
@if (Route::has('login'))
         @if (Auth::check())
            @if((Auth::user()->tipo) ==0)

            
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">Dashboard</div>
            @if (Route::has('login'))
                    
                <div class="">
                    @if (Auth::check())
					<div class="col-md-12">
                        <div class="form-group">
                    	@if(($clinica) != '')
                        
                        <table>
                        
	                        <tr>
	                        	<th>Administrador</th>
	                        	<td>{{$clinica->nome}}</td>
	                        </tr>
	                        <tr>
	                        	<th>Nome Fantasia</th>
	                        	<td>{{$clinica->fantasia}}</td>	                        
	                        </tr>
	                        <tr>
	                        	<th>Razão Social</th>
	                        	<td>{{$clinica->razao_social}}</td>
	                        </tr>
	                        <tr>
	                        	<th>CNPJ</th>
	                        	<td>{{$clinica->cnpj}}</td>
	                        </tr>
	                        <tr>
	                        	<th>Endereço</th>
	                        	<td>{{$clinica->endereco}}</td>
	                        </tr>
	                        <tr>
	                        	<th>Número</th>
	                        	<td>{{$clinica->numero}}</td>
	                        </tr>
	                        <tr>
	                        	<th>Bairro</th>
	                        	<td>{{$clinica->bairro}}</td>
	                        </tr>
	                        <tr>
	                        	<th>Cidade</th>
	                        	<td>{{$clinica->cidade}}</td>
	                        </tr>
	                        <tr>
	                        	<th>Estado</th>
								<td>{{$clinica->estado}}</td>
	                        </tr>
	                        <tr>
	                        	<th>Transporte</th>
	                        	@if(($clinica->transporte)==1)
	                        	<td>Sim</td>
	                        	@else
	                        	<td>Não</td>
	                        	@endif
	                        </tr>
	                        <tr>
	                        	<th>Especialidade</th>
	                        	<td>{{$clinica->especialidade}}</td>
	                        </tr>
	                        <tr>
	                        	<th>Tratamentos</th>
	                        	<td>{{$clinica->tratamento}}</td>
							</tr>
                        </table>
                        </div>
                        </div>
                        @else
                        <?php
                            $id = Auth::user()->id;
                        ?>
                        <div class="col-md-8">
                        	<a href="{{ url('/clinica/'.$id.'/edit') }}"><button type="submit" class="btn btn-primary">Complete seu cadastro!</button></a>
                        </div>
						@endif
						 <div class="col-md-4">
                       	<a href="{{ url('/home') }}"><button type="submit" class="btn btn-primary">Voltar</button></a> 
                       	</div> 
                       </div>

                     
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
            @endif  
            @endif

            
        @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Registrar</a>
        @endif
    @endif

@endif     

@endsection
