@extends('layouts.app')
        <!-- Fonts -->
        

        <!-- Styles -->
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
        </style>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    PetTop
                </div>

                <div class="links">
                    <h3 style="color: #fff;">BUSCAR CLÍNICAS</h3>
                </div>

                
            </div>
        </div>
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