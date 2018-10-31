<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header alert-primary">
                <h5 class="modal-title" id="registerModalTitle">{{Lang::get('navbar.reg_modal_title')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                <div class="modal-body">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="reg_name" class="control-label">{{Lang::get('navbar.reg_modal_username')}}</label>
                        <input id="reg_name" type="text" class="form-control {{ $errors->has('reg_name') ? ' is-invalid' : '' }}"
                               name="reg_name" value="{{ old('reg_name') }}" required
                               autocomplete="off" autofocus>
                        @if ($errors->has('reg_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('reg_name')  }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="reg_email" class="control-label">{{Lang::get('navbar.reg_modal_email')}}</label>
                        <input id="reg_email" type="email" class="form-control{{ $errors->has('reg_email') ? ' is-invalid' : '' }}"
                               name="reg_email" value="{{ old('reg_email') }}" autocomplete="off"
                               required>
                        @if ($errors->has('reg_email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('reg_email')  }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="reg_password" class="control-label">{{Lang::get('navbar.reg_modal_password')}}</label>
                        <input id="reg_password" type="password" class="form-control{{ $errors->has('reg_password') ? ' is-invalid' : '' }}"
                               name="reg_password" required>
                        @if ($errors->has('reg_password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('reg_password')  }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="reg_password-confirm" class="control-label">{{Lang::get('navbar.reg_modal_confirm_pw')}}</label>
                        <input id="reg_password-confirm" type="password" class="form-control{{ $errors->has('reg_password') ? ' is-invalid' : '' }}"
                               name="reg_password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <input id="tos-confirm" type="checkbox" class="form-control" name="agree_tos"
                               required>
                        <label for="tos-confirm" class="control-label">{!! Lang::get('navbar.reg_modal_agreement', [
                            'privacy' => '#',
                            'tos' => '#'
                        ]) !!}</label>
                        @if ($errors->has('tos-confirm'))
                            <div class="invalid-feedback">
                                {{ $errors->first('tos-confirm')  }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{Lang::get('navbar.reg_modal_close_btn')}}</button>
                    <button type="submit" class="btn btn-primary">{{Lang::get('navbar.reg_modal_register_btn')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>