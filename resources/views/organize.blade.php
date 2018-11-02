<form method="post" action="{{ route('registertournament') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="d-md-flex flex-md-equal w-100">
        <div class="col-md-4 text-center text-white overflow-hidden">
            <div class="shadow-sm mx-auto"
                 style="width: 80%; height: 140px;"></div>
            <div class="my-3 py-3">
                <h2 class="display-5">Crie seu torneio</h2>
            </div>
            <div class="shadow-sm mx-auto"
                 style="width: 80%; height: 160px;"></div>
        </div>
        <div class="col-md-4 text-center text-white overflow-hidden">
        </div>
        <div class="col-md-4 text-center text-white overflow-hidden">
            <div class="shadow-sm mx-auto"
                 style="width: 80%; height: 130px;"></div>
            <div class="my-3 p-3">
                <h2 class="display-5">Selecione o jogo</h2>
                <select name="codGame" id="codGame" url-target="{{route('getPlatformPerGame')}}"
                        csrf="{{ csrf_token() }}" class="form-control">
                    <option value="0">Selecione o jogo...</option>
                    @foreach (Games::all() as $game)
                        <option value="{{$game->id}}"{{ old('codGame') == $game->id ? ' selected' : '' }}>{{$game->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="shadow-sm mx-auto"
                 style="width: 80%; height: 170px;"></div>
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
        <input type="hidden" name="gameIdentity" value="0">
        <div class="row mb-4">
            <div class="col-2">
                <label for="gamePlatform">Plataforma*</label>
            </div>
            <div class="col-10">
                <div class="btn-group btn-group-toggle platform-btn-group" data-toggle="buttons">
                    @if (old('gamePlataform') != 0)
                        @foreach (GamesPlatformRelation::where('game_id', '=', old('gamePlataform'))->get() as $relation)
                            @php
                            $plat = GamePlatform::where('id', $relation->platform_id)->firstOrFail();
                            @endphp
                            <label class="btn btn-secondary{{ old('gamePlataform') == $plat->id ? ' active' : '' }}">
                                <input type="radio" name="gamePlataform" id="platform{{ $relation->platform_id }}" autocomplete="off"
                                    value="{{ $plat->id }}" checked> {{ $plat->name }}
                            </label>
                        @endforeach
                    @endif
                    @if ($errors->has('gamePlataform'))
                        <div class="invalid-feedback">
                            {{ $errors->first('gamePlataform') }}
                        </div>
                    @endif

                </div>
                <small id="gamePlatformHelp" class="form-text text-muted">São exibidas apenas as plataformas existentes
                    para
                    jogo escolhido.
                </small>
            </div>
            <div class="col-md-6">
                <label for="eventEmail">E-mail para contato*</label>
                <input type="email" class="form-control{{ $errors->has('eventEmail') ? " is-invalid" : "" }}"
                       name="eventEmail" id="eventEmail" placeholder="teste@email.com.br"
                       value="{{ old('eventEmail') }}" required>

                @if ($errors->has('eventEmail'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eventEmail') }}
                    </div>
                @endif

                <small id="contactHelp" class="form-text text-muted">
                    Não compartilharemos suas informações de contato com ninguém.
                </small>
            </div>
            <div class="col-md-6">
                <label for="eventPhone">Telefone para contato*</label>
                <input type="tel" class="form-control{{ $errors->has('eventPhone') ? " is-invalid" : "" }}"
                       name="eventPhone" id="eventPhone" placeholder="(11) 4747-4747"
                       value="{{ old('eventPhone') }}" required>

                @if ($errors->has('eventPhone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('eventPhone') }}
                    </div>
                @endif

            </div>
        </div>

        <h2>Sobre o torneio</h2>
        <hr/>

        <div class="row mb-4">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="eventName">Nome do torneio*</label>
                        <input type="text" max="32"
                               class="form-control{{ $errors->has('eventName') ? " is-invalid" : "" }}" name="eventName"
                               id="eventName" placeholder="Liga dos amigos"
                               value="{{ old('eventName') }}"
                               required>

                        @if ($errors->has('eventName'))
                            <div class="invalid-feedback">
                                {{ $errors->first('eventName') }}
                            </div>
                        @endif

                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="eventStartDate">Início do torneio*</label>
                        <input type="datetime-local"
                               class="form-control{{ $errors->has('eventStartDate') ? " is-invalid" : "" }}"
                               name="eventStartDate"
                               value="{{ date('Y-m-d', (strtotime('now') + 60*60*24*7))}}T00:00"
                               min="{{date('Y-m-d', (strtotime('now') + 60*60*24))}}T00:00"/>

                        @if ($errors->has('eventStartDate'))
                            <div class="invalid-feedback">
                                {{ $errors->first('eventStartDate') }}
                            </div>
                        @endif

                    </div>

                    <div class="col-md-6 mb-4">
                        <label for="eventStartInscDate">Início das inscrições*</label>
                        <input type="datetime-local"
                               class="form-control{{ $errors->has('eventStartInscDate') ? " is-invalid" : "" }}"
                               name="eventStartInscDate"
                               value="{{date('Y-m-d', (strtotime('now') + 60*60*24*2))}}T00:00"
                               min="{{date('Y-m-d', (strtotime('now') + 60*60*24))}}T00:00"/>

                        @if ($errors->has('eventStartInscDate'))
                            <div class="invalid-feedback">
                                {{ $errors->first('eventStartInscDate') }}
                            </div>
                        @endif

                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="eventEndInscDate">Encerramento das incrições</label>
                        <input type="datetime-local"
                               class="form-control{{ $errors->has('eventEndInscDate') ? " is-invalid" : "" }}"
                               name="eventEndInscDate"
                               value="{{date('Y-m-d', (strtotime('now') + 60*60*24*6))}}T00:00"
                               min="{{date('Y-m-d', (strtotime('now') + 60*60*24))}}T00:00"/>

                        @if ($errors->has('eventEndInscDate'))
                            <div class="invalid-feedback">
                                {{ $errors->first('eventEndInscDate') }}
                            </div>
                        @endif

                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="eventDescription">Descrição do evento*</label>
                        <textarea id="eventDescription" name="eventDescription"
                                  class="form-control{{ $errors->has('eventDescription') ? " is-invalid" : "" }}">{{ old('eventDescription') }}</textarea>
                        @if ($errors->has('eventDescription'))
                            <div class="invalid-feedback">
                                {{ $errors->first('eventDescription') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="eventPrize">Premiação</label> <br/>
                        <div class="btn-group btn-group-toggle{{ $errors->has('eventPrize') ? " is-invalid" : "" }}"
                             data-toggle="buttons">
                            <label class="btn btn-secondary{{ old('eventPrize') == 0 ? ' active' : '' }}">
                                <input type="radio" name="eventPrize" id="prizes0"
                                       value="0"> Não
                            </label>
                            <label class="btn btn-secondary{{ old('eventPrize') == 1 ? ' active' : '' }}">
                                <input type="radio" name="eventPrize" id="prizes1"
                                       value="1" checked> Sim
                            </label>
                        </div>
                        @if ($errors->has('eventPrize'))
                            <div class="invalid-feedback">
                                {{ $errors->first('eventPrize') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="eventRules">Regras*</label>
                        <textarea id="eventRules" name="eventRules"
                                  class="form-control{{ $errors->has('eventRules') ? " is-invalid" : "" }}"
                        >{{ old('eventRules') }}</textarea>

                        @if ($errors->has('eventRules'))
                            <div class="invalid-feedback">
                                {{ $errors->first('eventRules') }}
                            </div>
                        @endif

                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="eventPaid">Inscrição*</label> <br/>
                        <div class="btn-group btn-group-toggle{{ $errors->has('eventPaid') ? " is-invalid" : "" }}"
                             data-toggle="buttons">
                            <label class="btn btn-secondary{{ old('eventPaid') == 0 ? ' active' : '' }}">
                                <input type="radio" name="eventPaid" id="inscription0"
                                       value="0" onchange="switchInscriptionMode(0)"> Gratuito
                            </label>
                            <label class="btn btn-secondary{{ old('eventPaid') == 1 ? ' active' : '' }}">
                                <input type="radio" name="eventPaid" id="inscription1"
                                       value="1" onchange="switchInscriptionMode(1)"> Pago
                            </label>
                        </div>
                        @if ($errors->has('eventPaid'))
                            <div class="invalid-feedback">
                                {{ $errors->first('eventPaid') }}
                            </div>
                        @endif
                    </div>
                </div>
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
            <div class="col" id="paid-event">

                <div class="row">
                    <div class="col-md-6">
                        <label for="eventPaymentDescription">Instruções para pagamento*</label>
                        <textarea id="eventPaymentDescription" class="form-control" name="eventPaymentDescription">{{old('eventPaymentDescription')}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="eventPaymentValue">Valor da inscrição*</label>
                        <input class="form-control" name="eventPaymentValue" type="text" placeholder="R$ 15,00"
                               id="eventPaymentValue" value="{{old('eventPaymentValue')}}"
                                data-mask="#.##0,00" data-mask-reverse="true">
                    </div>
                </div>

            </div>
        </div>

        <h2>Estrutura</h2>
        <hr/>

        <div class="row">
            <div class="col-md-12 mb-4">
                <label for="eventType">Tipo de torneio*</label><br/>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary{{ old('eventType') == 0 ? ' active' : '' }} button-with-image eliminations-icn">
                        <input type="radio" name="eventType" id="leaguetype0"
                               value="0" checked> <br/>Eliminatórias
                    </label>
                    <label class="btn btn-secondary{{ old('eventType') == 1 ? ' active' : '' }} button-with-image eliminations-icn">
                        <input type="radio" name="eventType" id="leaguetype1"
                               value="1"> <br/>Liga
                    </label>
                    <label class="btn btn-secondary{{ old('eventType') == 2 ? ' active' : '' }} button-with-image eliminations-icn">
                        <input type="radio" name="eventType" id="leaguetype2"
                               value="2"> <br/>Grupo + Eliminatórias
                    </label>
                </div>
            </div>

            <div class="col-md-12 mb-4">
                <label for="eventMode">Modo de torneio*</label><br/>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary{{ old('eventMode') == 0 ? ' active' : '' }}">
                        <input type="radio" name="eventMode" id="leagueusertype0"
                               value="0" onchange="switchRegisterMode(0)"> Equipe
                    </label>
                    <label class="btn btn-secondary{{ old('eventMode') == 1 ? ' active' : '' }}">
                        <input type="radio" name="eventMode" id="leagueusertype1"
                               value="1" onchange="switchRegisterMode(1)"> Individual
                    </label>
                </div>
            </div>

            <div class="col-md-12 mb-4" id="eventModeTeams">
                <div class="row">
                    <div class="col-md-4">
                        <label for="eventModeTeamsAmount">Nº de Equipes*</label>
                        <select name="eventModeTeamsAmount" class="custom-select custom-select-md mb-3">
                            <option value="0" selected>Selecione a quantidade de equipes...</option>
                            @for ($i = 1; $i < 9; $i++)
                                <option value="{{$i}}"{{ old('eventModeTeamsAmount') == $i ? ' selected' : '' }}>{{pow(2, $i)}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="minMemberPerTeam">Nº Mínimo de jogadores por equipe*</label>
                        <input type="number" class="form-control" placeholder="5" name="minMemberPerTeam" value="{{old('minMemberPerTeam')}}"/>
                    </div>
                    <div class="col-md-4">
                        <label for="manMemberPerTeam">Nº Máximo de jogadores por equipe*</label>
                        <input type="number" class="form-control" placeholder="5" name="maxMemberPerTeam" value="{{old('maxMemberPerTeam')}}"/>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-4" id="eventModeSolo">
                <div class="col-md-4">
                    <label for="eventModeSolo">Nº de jogadores*</label>
                    <select name="eventModeSoloAmount" class="custom-select custom-select-md mb-3">
                        <option value="0" selected>Selecione a quantidade de jogadores...</option>
                        @for ($i = 1; $i < 9; $i++)
                            <option value="{{$i}}"{{ old('eventModeSoloAmount') == $i ? ' selected' : '' }}>{{pow(2, $i)}}</option>
                        @endfor
                    </select>
                </div>
            </div>
        </div>
        <hr/>
        <button class="btn btn-success" type="submit">Começar!</button>
    </div>
</form>