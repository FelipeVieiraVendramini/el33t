<div class="d-md-flex flex-md-equal w-100">
    <div class="col-md-4 text-center text-white overflow-hidden">
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 130px;"></div>
        <div class="my-3 py-3">
            <h2 class="display-5">Criação do torneio</h2>
            <p>Estamos terminando...</p>
        </div>
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 170px;"></div>
    </div>
    <div class="col-md-4 text-center text-white overflow-hidden">
    </div>
    <div class="col-md-4 text-center text-white overflow-hidden">
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 140px;"></div>
        <div class="my-3 p-3">
            <h2 class="display-5">{{ $tournament->name }}</h2>
        </div>
        <div class="shadow-sm mx-auto"
             style="width: 80%; height: 160px;"></div>
    </div>
</div>

<div class="container bg-light">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


</div>