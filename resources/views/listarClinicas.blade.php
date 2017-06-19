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
                        <div class="table table-striped">
                        <table>
                            <thead>
	                        <tr>
	                        	<th>Admin</th>
                                <th>Nome Fantasia</th>
                                <th>Endereço</th>
	                        	
	                        </tr>
                            </thead>
                            <tbody>
	                        <tr>
                                <td>{{$clinica->nome}}</td>
	                        	<td>{{$clinica->fantasia}}</td>
                                <td>{{$clinica->endereco}}, {{$clinica->numero}} {{$clinica->bairro}} {{$clinica->cidade}} - {{$clinica->estado}}</td>	                        
	                        </tr>
                            </tbody>
                            </table>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    </div>
                    <a href="{{ url('/home') }}">Voltar</a>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection
