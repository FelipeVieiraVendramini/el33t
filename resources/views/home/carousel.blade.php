@php
    require_once(WEBSITE_ROOT . "../app/Content/IndexCarousel.php");
    use App\IndexCarousel;
@endphp
@if(Auth::guest())
<div class="col-md-9">
@else
<div class="col-md-12">
@endif
    <!-- Carousel -->
    <?php
        $carousel = App\IndexCarousel::where('flag', 0)->get();
    ?>
    <div id="idxGamesCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#idxGamesCarousel" data-slide-to="0" class="active"></li>
            @for($i = 1; $i < $carousel->count(); $i++)
            <li data-target="#idxGamesCarousel" data-slide-to="{{$i}}"></li>
            @endfor
        </ol>
        <div class="carousel-inner">
            @for ($i = 0; $i < $carousel->count(); $i++)
                @php
                $item = $carousel[$i];
                @endphp
            <div class="carousel-item {{$i == 0 ? "active": ""}}">
                <img class="first-slide"
                     src="{{$item->getImgUrl()}}"
                     alt="{{$item->getAltText()}}">
                <div class="container">
                    <div class="carousel-caption text-left">

                        <h1 {!! $item->getTitleColor() != null ? "style='color:".$item->getTitleColor()."'" : "" !!}>
                            {{$item->getTitle()}}</h1>

                        <p {!! $item->getDescriptionColor() != null ? "style='color:".$item->getDescriptionColor()."'" : "" !!}>
                            {{$item->getDescription()}}</p>

                        @if ($item->hasButton())
                        <p><a class="btn btn-lg {{$item->getButtonClass()}}" href="{{$item->getUrl()}}"
                              role="button">{{$item->getButtonText()}}</a></p>
                        @endif
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <a class="carousel-control-prev" href="#idxGamesCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#idxGamesCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

@if(Auth::guest())
<div class="col-md-3" style="margin-top: 4rem;">
    <!-- Login -->
    <form method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal text-center">Participe!</h1>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <label for="inputEmail" class="sr-only">Endereço de e-mail</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="E-mail" required autofocus>
        <br/>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Senha" required>
        <div class="checkbox mb-3 col-md-offset-4">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Mantenha-me conectado
            </label>
        </div>
        <a class="btn btn-link" href="{{ route('password.request') }}">
            Esqueceu sua senha?
        </a>
        <button class="btn btn-lg btn-outline-primary" type="submit">Entrar</button>
    </form>
</div>
@endif