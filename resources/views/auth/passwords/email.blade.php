@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">

            <h4 class="admin-form"><b>{{ __('Reimposta Password') }}</b></h4>
            <div class="py-2">Per resettare la tua password dobbiamo prima inviarti un'email.</div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                @csrf

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

                    <div class="form-group row mb-0">
                        <div class="col">
                            <button type="submit" class="btn login-btn mt-3 mb-4">
                                {{ __('Continua') }}
                            </button>
                        </div>
                    </div>
                </form>

        </div>
    </div>
</div>
@endsection
