<div class="d-md-flex flex-md-equal w-100 search-img">
    <div class="col-md-4 text-center text-white overflow-hidden">
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 150px;"></div>
        <div class="my-3 py-3">
            <h2 class="display-5">Participe de um torneio</h2>
        </div>
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 150px;"></div>
    </div>
    <div class="col-md-4 text-center text-white overflow-hidden">
    </div>
    <div class="col-md-4 text-center text-white overflow-hidden">
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 130px;"></div>
        <div class="my-3 p-3">
            <h2 class="display-5">Selecione a plataforma</h2>
            <a class="btn {{ $platform == "all" ? "btn-light" : "btn-outline-light" }}"
               href="{{route('play')}}/all">Todas</a>
            @foreach ($platforms as $game)
                <a class="btn {{ $platform == $game->name ? "btn-light" : "btn-outline-light" }}"
                   href="{{route('play')}}/{{$game->name}}">{{$game->name}}</a>
            @endforeach
        </div>
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 170px;"></div>
    </div>
</div>

<div class="container-fluid bg-light">
    <h1>Torneios em destaque</h1>
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
                        <small class="text-muted">Inicia: 01/01/1970</small>
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
                        <small class="text-muted">Inicia: 01/01/1970</small>
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
                        <small class="text-muted">Inicia: 01/01/1970</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Nome do torneio</th>
            <th scope="col">Jogo</th>
            <th scope="col">Data de início</th>
            <th scope="col">Premiação</th>
            @if ($platform == 'all')
                <th scope="col">Plataforma</th>
            @endif
            <th scope="col">Taxa de inscrição</th>
            <th scope="col">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tournaments as $tournament)
            <tr>
                <td scope="row">{{ $tournament->name }}</td>
                <td>{{ $tournament->Game->name }}</td>
                <td>{{ $tournament->getStartDate() }}</td>
                <td>{{ $tournament->prize ? Lang::get('tournament.play_yes') : Lang::get('tournament.play_no') }}</td>
                @if ($platform == 'all')
                    <td>{{ $tournament->Platform->name }}</td>
                @endif
                <td>{{ $tournament->paid ? Lang::get('tournament.entrance_fee') : Lang::get('tournament.no_fee') }}</td>
                <td>
                    <a class="btn btn-light" href="{{ route('play') }}">Visualizar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <nav aria-label="Navegação da pesquisa de torneios.">
        <ul class="pagination justify-content-end">
            <li class="page-item{{ $pagination == 0 ? ' disabled' : ''  }}">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            @for ($i = max(0, $pagination-5), $count = 0;
             $count < min(env('TOURNAMENTS_LIST_PAGE_LIMIT'), $max_result/env('TOURNAMENTS_LIST_PAGE_LIMIT'));
              $count++)
                <li class="page-item{{ $i == $pagination ? ' active' : '' }}">
                    <a class="page-link" href="{{ route('play'). '/' . $platform . '/' . ($i+1) }}">{{++$i}}</a>
                </li>
            @endfor
            <li class="page-item{{ floor($max_result/env('TOURNAMENTS_LIST_PAGE_LIMIT')) == $pagination ? ' disabled' : '' }}">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>