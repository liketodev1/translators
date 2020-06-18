<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal_label"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex flex-column">
                <div class="form-group d-flexjustify-content-end w-100">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="form-group d-flex justify-content-start">
                    <h5 class="modal-title" id="login_modal_label">Log In</h5>
                </div>
            </div>
            <div class="modal-body">
                <form  method="POST" action="{{ route('login') }}" id="loginForm">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                               placeholder="henry.frazier@gmail.com"
                               class="form-control @error('email') is-invalid @enderror">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group d-flex justify-content-between pb-0 mb-0">

                        <label for="remember" class="remember-me d-flex">
                            <input class="form-control" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember Me') }}
                        </label>
                        <a href="{{ route('password.request') }}" class="forget-pass blue-link">Forgot password?</a>
                    </div>
                    <div class="form-group w-100">
                        <button class="btn login-popup-btn w-100">Log In</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex flex-column">
                <div class="form-group w-100">
                    <button class="btn login-popup-btn w-100">Log In</button>
                </div>
                <div class="form-group">
                    <div class="modal-footer-text">
                        <span>Not a member yet? <a href="{{ route('register') }}" class="blue-link">Join now</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
