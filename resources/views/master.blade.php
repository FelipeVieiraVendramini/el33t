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

$routeName = Route::currentRouteName();
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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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

        .overflow-hidden {
            overflow: hidden;
        }
    </style>
</head>
<body>

@include('register')

@include('navbar')

<div class="container-fluid{{$routeName != "" && $routeName != "master" ? " search-img" : ""}}">

    @if ($routeName == "" || $routeName == "master")
        @include('home')
    @elseif ($routeName == "play")
        @include('play')
    @elseif ($routeName == "organize")
        @include('organize')
    @endif

    @include('footer')

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
@if ($errors->has('email') || $errors->has('password'))
    <script type="application/javascript">
        $(document).ready(function(){
            $('#inputUsername').popover('show');
        });
    </script>
@endif
</body>
</html>