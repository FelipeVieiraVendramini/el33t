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

// $routeName = Route::currentRouteName();
?>
<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ env('APP_URL') . mix('/css/app.css')}}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

@include('register')

@include('navbar')

<div class="container-fluid cont-background">

    @if (!isset($routeName) || $routeName == "" || $routeName == "master")
        @include('home')
    @elseif (str_contains($routeName, "play"))
        @include('play')
    @elseif ($routeName == "organize")
        @include('organize')
    @elseif ($routeName == "tournament")

        @if (!isset($subRoute))

        @elseif ($subRoute == "create")
            @include('tournament.create')
        @endif

    @elseif ($routeName == "login")
        @include('login')
    @endif

</div>

@include('footer')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="{{asset("/js/jquery.mask.min.js")}}"></script>
@if ($errors->has('email') || $errors->has('password'))
    <script type="application/javascript">
        $(document).ready(function(){
            $('#inputUsername').popover('show');
        });
    </script>
@endif
@if ($routeName == "organize")
    <script type="application/javascript">
        /*$(document).ready(function() {
            $('#eventPaymentValue').mask("#.##0,00", {reverse: true});
        });*/
    </script>
    <script src="{{asset("/js/organize.js")}}"></script>
@endif
</body>
</html>