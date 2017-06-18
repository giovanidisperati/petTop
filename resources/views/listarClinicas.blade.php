@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
           
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    
                <div class="top-right links">
                    
					<div class="col-md-6">
                        <div class="form-group">
                    	
                        @foreach($clinicas as $clinica)
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
                            </table>
                            @endforeach
                            </div>
                               </div>
                       <a href="{{ url('/home') }}">Voltar</a>  
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    
</div>
@endsection
