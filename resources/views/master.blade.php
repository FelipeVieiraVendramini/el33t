<?php
/**
 * O projeto el33t não é um projeto de código aberto, sua reprodução ou cópia estão
 * sujeitos as penalidades da lei.
 *
 * Descrição:
 *
 * Criado por Felipe Vieira Vendramini (felipevendramini@live.com)
 * Criado por Rodrigo Teles Correa (Skype: rodrigo762356)
 *
 * Projeto: PhpStorm.
 * Criado por: FELIPEVIEIRAVENDRAMI
 * Criado em: 20/10/2018 16:19
 */
require_once(WEBSITE_ROOT . "../app/Content/IndexCarousel.php");
require_once(WEBSITE_ROOT . "../app/Games.php");

use App\IndexCarousel;
use App\Games;

?>
<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{env("APP_URL")}}/css/bootstrap.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }

        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 26rem;
            background-color: #777;
        }

        .carousel-item > img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 26rem;
        }

        .text-white-50 {
            color: rgba(255, 255, 255, .5);
        }

        .bg-purple {
            background-color: #8480ff;
        }

        .lh-100 {
            line-height: 1;
        }

        .lh-125 {
            line-height: 1.25;
        }

        .lh-150 {
            line-height: 2.5;
        }

        .search-img {
            background: url("{{env('APP_URL')}}/images/search-background.jpg") no-repeat;
            background-size: cover;
        }

        .flex-equal > * {
            -ms-flex: 1;
            flex: 1;
        }
        @media (min-width: 768px) {
            .flex-md-equal > * {
                -ms-flex: 1;
                flex: 1;
            }
        }

        .overflow-hidden { overflow: hidden; }
    </style>
</head>
<body>

@include('layouts.topbarindex')

<div class="container-fluid">
    <div class="d-md-flex flex-md-equal w-100 search-img">
        <div class="col-md-4 text-center text-white overflow-hidden">
            <div class="shadow-sm mx-auto"
                 style="width: 80%; height: 130px;"></div>
            <div class="my-3 py-3">
                <h2 class="display-5">Crie seu torneio</h2>
                <select name="gametype" class="form-control">
                    <option value="0" selected>Selecione o jogo</option>
                    @foreach (Games::all() as $game)
                        <option value="{{$game->id}}">{{$game->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="shadow-sm mx-auto"
                 style="width: 80%; height: 170px;"></div>
        </div>
        <div class="col-md-4 text-center text-white overflow-hidden">
        </div>
        <div class="col-md-4 text-center text-white overflow-hidden">
            <div class="shadow-sm mx-auto"
                 style="width: 80%; height: 130px;"></div>
            <div class="my-3 p-3">
                <h2 class="display-5">Participe de um torneio</h2>
                <select name="gametype" class="form-control">
                    <option value="0" selected>Selecione o jogo</option>
                    @foreach (Games::all() as $game)
                        <option value="{{$game->id}}">{{$game->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="shadow-sm mx-auto"
                 style="width: 80%; height: 170px;"></div>
        </div>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <h1>Torneios em andamento</h1>
            <hr/>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top"
                             src="https://feededigno.com.br/wp-content/uploads/2018/05/clash-18-05-18-img00.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Participar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top"
                             src="https://feededigno.com.br/wp-content/uploads/2018/05/clash-18-05-18-img00.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Participar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top"
                             src="https://feededigno.com.br/wp-content/uploads/2018/05/clash-18-05-18-img00.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Participar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top"
                             src="https://feededigno.com.br/wp-content/uploads/2018/05/clash-18-05-18-img00.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Participar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top"
                             src="https://feededigno.com.br/wp-content/uploads/2018/05/clash-18-05-18-img00.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Participar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top"
                             src="https://feededigno.com.br/wp-content/uploads/2018/05/clash-18-05-18-img00.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Participar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top"
                             src="https://feededigno.com.br/wp-content/uploads/2018/05/clash-18-05-18-img00.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Participar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top"
                             src="https://feededigno.com.br/wp-content/uploads/2018/05/clash-18-05-18-img00.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Participar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top"
                             src="https://feededigno.com.br/wp-content/uploads/2018/05/clash-18-05-18-img00.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Participar</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Atualizações recentes</h6>
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&bg=e83e8c&fg=e83e8c&size=1" alt="" class="mr-2 rounded">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt="" class="mr-2 rounded">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </p>
            </div>
            <small class="d-block text-right mt-3">
                <a href="#">All updates</a>
            </small>
        </div>
    </div>

    <div class="container pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Pricing</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap
            example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Free</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0
                        <small class="text-muted">/ mo</small>
                    </h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15
                        <small class="text-muted">/ mo</small>
                    </h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29
                        <small class="text-muted">/ mo</small>
                    </h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="container-fluid pt-4 pt-md-5 border-top bg-light">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in,
                    egestas
                    eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo,
                    tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </small>
                <small class="d-block mb-3 text-muted">FTW! Programação e Desenvolvimento &copy; 2017-2018</small>
            </div>
            <div class="col-6 col-md">
                <h5>Serviços</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Contato</h5>
                <small class="d-block mb-3 text-muted">
                    Rua Maria Dias dos Reis, 190<br/>
                    Jardim Varan - Suzano/SP<br/>
                    08696-250<br/>
                    (11) 95929-2134<br/>
                    felipevendramini@live.com
                </small>
            </div>
            <div class="col-6 col-md">
                <h5>Sobre</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Equipe</a></li>
                    <li><a class="text-muted" href="#">Privacidade</a></li>
                    <li><a class="text-muted" href="#">Termos</a></li>
                </ul>
            </div>
        </div>
    </footer>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>