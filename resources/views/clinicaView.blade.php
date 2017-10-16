@extends('layouts.interno-edit')
<style type="text/css">
    .footer{
        position: absolute;
    }
</style>
@section('content')
@if (Route::has('login'))
         @if (Auth::check())
            @if((Auth::user()->tipo) ==0)
        <div class="col-md-12">
            <div class="content">
                <div class="title m-b-md">
                    Dashboard
                </div>
            </div>
        </div>
            @if (Route::has('login'))
                    @if (Auth::check())
					<div class="col-md-12" align="center">
                        <div class="form-group">
                    	@if(($clinica) != '')
                        
                        <table>                       
	                        <tr class="color-input">
	                        	<th>Administrador </th>
	                        	<td>{{$clinica->nome}}</td>
	                        </tr>
	                        <tr class="color-input">
	                        	<th>Nome Fantasia</th>
	                        	<td>{{$clinica->fantasia}}</td>	                        
	                        </tr>
	                        <tr class="color-input">
	                        	<th>Razão Social</th>
	                        	<td>{{$clinica->razao_social}}</td>
	                        </tr>
	                        <tr class="color-input">
	                        	<th>CNPJ</th>
	                        	<td>{{$clinica->cnpj}}</td>
	                        </tr>
	                        <tr class="color-input">
	                        	<th>CEP</th>
	                        	<td>{{$clinica->cep}}</td>
	                        </tr>
	                        <tr class="color-input">
	                        	<th>Endereço</th>
	                        	<td>{{$clinica->endereco}}</td>
	                        </tr>
	                        <tr class="color-input">
	                        	<th>Número</th>
	                        	<td>{{$clinica->numero}}</td>
	                        </tr>
	                        <tr class="color-input">
	                        	<th>Bairro</th>
	                        	<td>{{$clinica->bairro}}</td>
	                        </tr>
	                        <tr class="color-input">
	                        	<th>Cidade</th>
	                        	<td>{{$clinica->cidade}}</td>
	                        </tr>
	                        <tr class="color-input">
	                        	<th>Estado</th>
								<td>{{$clinica->estado}}</td>
	                        </tr>
	                        <tr class="color-input">
	                        	<th>Transporte</th>
	                        	@if(($clinica->transporte)==1)
	                        	<td>Sim</td>
	                        	@else
	                        	<td>Não</td>
	                        	@endif
	                        </tr>
	                        <tr class="color-input">
	                        	<th>Especialidade</th>
	                        	<td>{{$clinica->especialidade}}</td>
	                        </tr>
	                        <tr class="color-input">
	                        	<th>Tratamentos</th>
	                        	<td>{{$clinica->tratamento}}</td>
							</tr>
                        </table>
                        </div>
                        </div>
                        <div class="col-md-12" align="center">
                            <a href="{{ url('/home') }}"><button type="submit" class="btn btn-primary">Voltar</button></a> 
                        </div> 
                        @else
                        <?php
                            $id = Auth::user()->id;
                        ?>
                                <div class="col-md-12">
                                    <div class="col-md-8">
                                    	<a href="{{ url('/clinica/'.$id.'/edit') }}"><button type="submit" class="btn btn-primary">Complete seu cadastro!</button></a>
                                    </div>
                                     <div class="col-md-2">
                                        <a href="{{ url('/home') }}"><button type="submit" class="btn btn-primary button-cel">Voltar</button></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
						@endif   
            @endif  
            @endif

            
        @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Registrar</a>
        @endif
    @endif

@endif     

@endsection
