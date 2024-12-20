@extends('auth.layout.master')

@section('title', __('Login'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center"><strong>{{ __('Login') }}</strong></h4>
                        <hr>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-3 text-end">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 text-end">
                                    <a href="{{ route('home') }}" class="btn btn-danger">{{ __('Cancel') }}</a>
                                    <button type="reset" class="btn btn-info">{{ __('Reset') }}</button>
                                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
