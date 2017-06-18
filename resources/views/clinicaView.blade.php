@extends('layouts.app')

@section('content')
@if (Route::has('login'))
         @if (Auth::check())
            @if((Auth::user()->tipo) ==0)

            
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            @if (Route::has('login'))
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    
                <div class="top-right links">
                    @if (Auth::check())
					<div class="col-md-6">
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
                        <h3><a href="{{ url('/clinica/'.$id.'/edit') }}">Complete seu cadastro!</a></h3>

						@endif
                       </div>
                       <a href="{{ url('/home') }}">Voltar</a>  
                     
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
</div>
@endif     
</div>
@endsection
