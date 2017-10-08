@extends('layouts.app')
@section('content')
<style>
      #map {
        width: 550px;
        height: 400px;
        background-color: grey;
      }
      .exibicaoMap{
        display: none;
      }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCJI4r6BswBZ3b5enW70gWDpsW9khKfkug"></script>
    <br>
        <div class="col-md-12">
            <div class="content">
                <div class="title m-b-md">
                    PetTop
                </div>

                <div class="m-b-md">
                    <h3>BUSCAR CLÍNICAS</h3>                
                    <br>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <div class="input-group input-group-md">
                    <div class="icon-addon addon-md">
                       <input type="text" placeholder="O que procura?" class="form-control input-pesquisar" v-model="query">
                    </div>
                    <span class="input-group-btn">
                        
                        <button class="btn btn-primary" type="button" @click="search()" v-if="!loading">Procurar</button>

                        <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Procurando...</button>
                    </span>
                </div>
            </div>

        </div>
        <div class="col-md-6">
                <div class="form-group">
                    <a onclick="localizarUsuario()"><button type="submit" class="btn btn-primary" >BUSCAR por localização</button></a>                   
                </div>
        </div>
        <div class="col-md-12" align="center">
            <br></br>
            <div id="map" align="center" class="exibicaoMap"></div> 
        </div>
         <div class="col-md-12">
            <div class="alert alert-danger" role="alert" v-if="error">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                @{{ error }}
            </div>
        </div>
        <div class="col-md-12">
            <div id="clinicas" class="row list-group">
                <div class="item col-xs-4 col-lg-4" v-for="clinica in clinicas">
                    <div class="thumbnail">
                        <img class="group list-group-image" :src="product.image" alt="@{{ clinica.nome_fantasia }}" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">@{{ clinica.razao_social }}</h4>
                                <p class="group inner list-group-item-text">@{{ clinica.nome_fantasia }}</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">@{{ clinica.endereco }}</p>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-success" href="#">Entrar em contato</a>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>


<script type="text/javascript">
 function localizarUsuario2(){
        if (window.navigator && window.navigator.geolocation) {
         var geolocation = window.navigator.geolocation;
         geolocation.getCurrentPosition(sucesso, erro);
        } else {
           alert('Geolocalização não suportada em seu navegador.')
        }
        function sucesso(posicao){
          console.log(posicao);
          var latitude = posicao.coords.latitude;
          var longitude = posicao.coords.longitude;
          var uluru = {lat: latitude, lng: longitude};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
    
        }
        function erro(error){
          console.log(error)
        }
      }

function localizarUsuario(){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url : '/mapa',//url para acessar o arquivo
        data: {acao: '1'},//parametros para a funcao
        type : 'POST',//PROTOCOLO DE ENVIO PODE SER GET/POST
        success : function(data){//DATA É O VALOR RETORNADO
            var dadosMapa = data.map(function(cep) {         
            cep;
            maps(cep,'vai');
            });
        }           
    })
    $("#map").removeClass("exibicaoMap");
    $(".footer").addClass("footerMapa");
}      

function maps(cep,nome){
    $(function(){
        //Definir o centro do mapa [endereço + elm div]
        initMap('-23.6523944, -46.6662618','map');
        //Adicionar marcadores  [endereço + descricao html)
        addMarker(cep, nome);
        
    });
}
</script>
@endsection


