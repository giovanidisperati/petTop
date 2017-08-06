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

                <form action="{{ action('SearchController@busca') }}"method="get">
                <input class="form-control" name="search" type="text" /> 
                <br>
                <button class="btn btn-flat btn-primary" type="submit">Buscar</button>
            </form>
            </div>
        </div>
