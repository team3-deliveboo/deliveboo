@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4">

            <h4 class="admin-form"><b>{{ __('Accedi') }}</b></h4>

            <form method="POST" action="{{ route('login') }}">
            @csrf

                {{-- EMAIL --}}
                <div class="form-group row">
                <label for="email">{{ __('Indirizzo email') }}</label>

                    <div class="col">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                {{-- PASSWORD --}}
                <div class="form-group row">
                <label for="password">{{ __('Password') }}</label>

                    <div class="col">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                {{-- REMEMBER PW --}}
                <div class="form-group row">
                    <div class="col">
                        <div class="form-check justify-content-start d-flex align-items-center gap-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                <small class="text-muted align-middle">{{ __('Ricordami') }}</small>
                            </label>
                        </div>
                    </div>
                </div>


                {{-- LOGIN --}}
                <div class="form-group row mb-0">
                    <div class="col">
                        <button type="submit" class="btn login-btn">
                            {{ __('Log In') }}
                        </button>

                        {{-- PW RESET --}}
                        @if (Route::has('password.request'))
                            <div>
                                <a class="forgotten-pw" href="{{ route('password.request') }}">
                                {{ __('Password dimenticata?') }}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>

            </form>
            
        </div>
    </div>

</div>
@endsection
