@extends('layouts.app')

@section('content')
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
                        <table>
                        
                            <tr>
                                <th>Nome</th>
                                <td>{{$usuario->name}}</td>
                            </tr>
                             <tr>
                                <th>E-mail</th>
                                <td>{{$usuario->email}}</td>
                            </tr>
                             <tr>
                                <th>Tipo</th>
                                <td>{{$usuario->tipo}}</td>
                            </tr>
                        </table>

                </div>
                <a href="{{ url('/home') }}">Voltar</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif   
            
            @endif
@endsection