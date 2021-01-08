@extends('frontend')

@section('content')

<style >
    .reg{
        margin-left: 330px;
    }
    .bgcolour{
        background: #d3d3d3;
    }
</style>

<div class="loginregistration-area pt-100 pb-100 bgcolour">
            <div class="container">
                <div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 mb-sm-30 reg">
                        <div class="login-area">
                            <h2>Login</h2>
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <fieldset>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            <div class="form-control-feedback text-danger">
                                                {{$errors->first('email')}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password" class="label">{{ __('Password') }}</label>
                                            <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" data-type="password" name="password" required autocomplete="current-password">

                                            <div class="form-control-feedback text-danger">
                                              {{$errors->first('password')}}
                                        </div>

                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                                <div class="checkbox">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send" type="submit">{{ __('Login') }}</button>
                                            <div class="text-center dont-have">
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif 
                                                <a href="{{ route('user.create') }}">Register</a>
                                            </div>
                                        	</div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection