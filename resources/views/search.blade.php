@extends('layouts.app')

@section('content')
    <body>
        <div class="container">
            <div class="well well-sm">
                <div class="form-group">
                    <div class="input-group input-group-md">
                        <div class="icon-addon addon-md">
                           <input type="text" placeholder="What are you looking for?" class="form-control" v-model="query">
                        </div>
                        <span class="input-group-btn">
                            
                            <button class="btn btn-default" type="button" @click="search()" v-if="!loading">Search!</button>

                            <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Searching...</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="alert alert-danger" role="alert" v-if="error">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                @{{ error }}
            </div>
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
    </body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
<script src="/js/app.js"></script>
</html>