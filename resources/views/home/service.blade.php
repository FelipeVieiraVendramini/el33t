<div class="d-md-flex flex-md-equal w-100">
    <div class="col-md-4 text-center text-white overflow-hidden">
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 130px;"></div>
        <div class="my-3 py-3">
            <h2 class="display-5">Crie seu torneio</h2>
            <select name="gametype" class="form-control">
                <option value="0" selected>Selecione o jogo</option>
                @foreach ($games as $game)
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
                @foreach ($games as $game)
                    <option value="{{$game->id}}">{{$game->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 170px;"></div>
    </div>
</div>