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

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">{{Lang::get('navbar.reg_modal_username')}}</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                               autocomplete="off" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">{{Lang::get('navbar.reg_modal_email')}}</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' alert-danger' : '' }}"
                               name="email" value="{{ old('email') }}" autocomplete="off"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">{{Lang::get('navbar.reg_modal_password')}}</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' alert-danger' : '' }}"
                               name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="control-label">{{Lang::get('navbar.reg_modal_confirm_pw')}}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required>
                    </div>

                    <div class="form-group">
                        <input id="tos-confirm" type="checkbox" class="form-control" name="agree_tos"
                               required>
                        <label for="tos-confirm" class="control-label">{!! Lang::get('navbar.reg_modal_agreement', [
                            'privacy' => '#',
                            'tos' => '#'
                        ]) !!}</label>
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