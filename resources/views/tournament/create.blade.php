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

    <h2>Informações Básicas</h2>
    <hr/>

    <div class="row">
        <label for="staticTournamentName" class="col-sm-2 col-form-label">Nome do torneio</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticTournamentName"
                   value="{{ $tournament->name }}">
        </div>

        <label for="staticTournamentGame" class="col-sm-2 col-form-label">Jogo</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticTournamentGame"
                   value="{{ $tournament->Game->name }}">
        </div>

        <label for="staticTournamentPlatform" class="col-sm-2 col-form-label">Plataforma</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticTournamentPlatform"
                   value="{{ $tournament->Platform->name }}">
        </div>
    </div>

    <h2>Organização</h2>
    <p>Quem está oferecendo o torneio?</p>
    <hr/>

    <div class="row">
        <div class="col">
            <label for="organizationName">Nome da organização*</label>
            <input type="text" max="64"
                   class="form-control{{ $errors->has('organizationName') ? " is-invalid" : "" }}" name="organizationName"
                   id="organizationName" placeholder="Organizacao Ltda"
                   value="{{ old('organizationName') }}"
                   required>
        </div>
        <div class="col">
            <label for="organizationEmail">E-mail da organização*</label>
            <input type="email" max="64"
                   class="form-control{{ $errors->has('organizationEmail') ? " is-invalid" : "" }}" name="organizationEmail"
                   id="organizationEmail" placeholder="nome@organizacao.com"
                   value="{{ old('organizationEmail') }}"
                   required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <label for="organizationSite">Site da organização</label>
            <input type="text" max="64"
                   class="form-control{{ $errors->has('organizationSite') ? " is-invalid" : "" }}" name="organizationSite"
                   id="organizationSite" placeholder="www.organizacao.com"
                   value="{{ old('organizationSite') }}">
        </div>
        <div class="col-md-4">
            <label for="eventLogo">Logo do evento</label>
            <div class="custom-file">
                <input type="file" class="eventLogo custom-file-input" name="eventLogo" id="eventLogo"
                       accept="image/png, image/jpeg, image/gif, image/bmp">
                <label class="custom-file-label" for="eventLogo">Escolha a imagem...</label>
                <input type="hidden" class="image-preview-filename" value="">
                <div class="image-preview"
                     style="width: 240px; height: 240px; margin-left:auto; margin-right: auto; margin-top: 1rem;">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <label for="organizationDescription">Descrição da Organização*</label>
            <textarea class="form-control" name="organizationDescription" id="organizationDescription"></textarea>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>