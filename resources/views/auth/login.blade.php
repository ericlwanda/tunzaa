@extends('layout.auth')
@section('page-title')
    {{__('Login')}}
@endsection

@section('content')


    <div class="login-contain">

      
        <div class="login-inner-contain">
         <div class="page-title container-fluid justify-center"><h1>{{__('Ecommerce')}}</h1></div>
            
            <div class="login-form">
                <div class="page-title"><h5>{{__('Login')}}</h5></div>
                <form method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <div class="form-group">
                        <label for="phone" class="form-control-label">{{__('Phone')}}</label>
                        <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text" name="phone" value="{{ old('phone') }}" required  autofocus>
                        @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-control-label">{{__('Password')}}</label>
                        <input class="form-control @error('phone') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password">
                      
                    </div>

                    <div class="custom-control custom-checkbox remember-me-text">
                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">{{__('Remember Me')}}</label>
                    </div>
                    <br>
                    <div>

                        <p>{{__('Don\'t have an accoutnt?')}}<a href="{{ route('register') }}">Register Here</a></p>
                    </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-xs text-primary">{{ __('Forgot Your Password?') }}</a>
                    @endif
                    <button type="submit" class="btn-login">{{__('Login')}}</button>
                </form>
            </div>

           
           
        </div>
    </div>
@endsection
