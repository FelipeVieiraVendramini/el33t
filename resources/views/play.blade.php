@php
    require_once(WEBSITE_ROOT . "../app/GamePlatform.php");

    use App\GamePlatform;
@endphp

<div class="d-md-flex flex-md-equal w-100 search-img">
    <div class="col-md-4 text-center text-white overflow-hidden">
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 130px;"></div>
        <div class="my-3 py-3">
            <h2 class="display-5">Crie seu torneio</h2>
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
            <h2 class="display-5">Selecione a plataforma</h2>
            <button  class="btn btn-outline-light" value="0">Todas</button>
                @foreach (\App\GamePlatform::all() as $game)
                    <button class="btn btn-outline-light" value="{{$game->id}}">{{$game->name}}</button>
                @endforeach
        </div>
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 170px;"></div>
    </div>
</div>

