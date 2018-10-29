<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{env('APP_URL')}}">El33t</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{route('play')}}">{{Lang::get('navbar.play')}}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('organize')}}">{{Lang::get('navbar.organize')}}</a>
            </li>
        </ul>

        @auth
            <ul class="navbar-nav navbar-right">
            @if (auth()->user()->isAdministrator())
                <li class="nav-item">
                    <a href="{{env('APP_URL').env('APP_DASHBOARD')}}" class="nav-link">{{Lang::get('navbar.administrator')}}</a>
                </li>
            @endif
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    {{Lang::get('navbar.logout')}}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            </ul>
        @endauth

        @guest
        <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('login') }}">
            {{ csrf_field() }}
            <input class="form-control mr-sm-2 {{$errors->has('email')?"border border-danger":""}}" name="email" autocomplete="off"
                   type="text" placeholder="{{Lang::get('auth.login_username')}}" aria-label="{{Lang::get('auth.login_username')}}" id="inputUsername"
                   @if ($errors->has('email') || $errors->has('password'))
                   data-trigger="focus"  data-toggle="popover" title="{{Lang::get('auth.failed_title')}}"
                   data-content="{{Lang::get('auth.failed')}}" data-placement="bottom"
                   @endif
                >
            <input class="form-control mr-sm-2" name="password" autocomplete="off"
                   type="password" placeholder="{{Lang::get('auth.login_password')}}" aria-label="{{Lang::get('auth.login_password')}}">

            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">{{Lang::get('auth.signin')}}</button>
            <button class="btn btn-outline-light my-2 my-sm-0" type="button" data-toggle="modal" data-target="#registerModal">
                {{Lang::get('auth.login_register')}}
            </button>
        </form>
        @endguest
    </div>
</nav>