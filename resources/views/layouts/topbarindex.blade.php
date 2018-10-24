<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">El33t</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Jogue</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Organize</a>
            </li>

        @if (!Auth::guest())
            @if (auth()->user()->isAdministrator())
                <li class="nav-item">
                    <a href="{{env('APP_URL').env('APP_DASHBOARD')}}" class="nav-link"> Admin</a>
                </li>
            @endif
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Sair
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endif
        </ul>
        @if (Auth::guest())
        <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('login') }}">
            {{ csrf_field() }}
            <input class="form-control mr-sm-2 {{$errors->has('email')?"border border-danger":""}}" name="email" type="text" placeholder="E-mail ou Usuário" aria-label="E-mail ou Usuário">
            <input class="form-control mr-sm-2 {{$errors->has('password')?"border border-danger":""}}" name="password" type="password" placeholder="Senha" aria-label="Senha">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Entrar</button>
        </form>
        @endif
    </div>
</nav>