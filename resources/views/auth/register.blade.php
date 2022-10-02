@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-8 col-lg-5">

            {{-- HEADER --}}
            <div class="text-center pb-3">
                <img src="/img/bag_register.svg" alt="Register Image Bag" class="pb-3">
                <h4 class="admin-form"><b>{{ __('Registra il tuo Ristorante') }}</b></h4>
                <div class="opacity-75">Ti diamo il benvenuto! Iniziamo subito con la registrazione, ci vorranno solo pochi minuti.</div>
                <div class="border-bottom pt-5"></div>
            </div>

            <form method="POST" action="{{ route('register') }}">
            @csrf

                {{-- RESTAURANT NAME --}}
                <div class="form-group row">
                    <label for="name"><b>{{ __('Nome del ristorante') }}</b> <small class="text-danger">*</small></label>

                    <div class="col">
                        <input id="name" type="text"
                            class="form-control register @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                {{-- PHONE NUMBER --}}
                <div class="form-group row">
                    <label for="phone"><b>{{ __('Numero di telefono') }}</b> <small class="text-danger">*</small></label>

                    <div class="col">
                        <input id="phone" type="text"
                            class="form-control register @error('phone') is-invalid @enderror" name="phone"
                            value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                {{-- ADDRESS --}}
                <div class="form-group row">
                    <label for="address"><b>{{ __('Indirizzo del ristorante') }}</b> <small class="text-danger">*</small></label>

                    <div class="col">
                        <input id="address" type="text"
                            class="form-control register @error('address') is-invalid @enderror" name="address"
                            value="{{ old('address') }}" required autocomplete="address" autofocus>

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                {{-- VAT --}}
                <div class="form-group row">
                    <label for="vat"><b>{{ __('Partita Iva') }}</b> <small class="text-danger">*</small></label>

                    <div class="col">
                        <input id="vat" type="text"
                            class="form-control register @error('vat') is-invalid @enderror" name="vat"
                            value="{{ old('vat') }}" required autocomplete="vat" autofocus>

                        @error('vat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                {{-- MAIL --}}
                <div class="form-group row">
                    <label for="email"><b>{{ __('Il tuo indirizzo email') }}</b> <small class="text-danger">*</small></label>

                    <div class="col">
                        <input id="email" type="email"
                            class="form-control register @error('email') is-invalid @enderror" name="email"
                            alue="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                {{-- PASSWORD --}}
                <div class="form-group row">
                    <label for="password"><b>{{ __('Password') }}</b> <small class="text-danger">*</small></label>

                    <div class="col">
                        <input id="password" type="password"
                            class="form-control register @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                {{-- CONFIRM PASSWORD --}}
                <div class="form-group row">
                    <label for="password-confirm"><b>{{ __('Conferma Password') }}</b> <small class="text-danger">*</small></label>

                    <div class="col">
                        <input id="password-confirm" type="password" class="form-control register" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="mt-3">
                    <small class="text-muted">I campi contrassegnati da <small class="text-danger">*</small> sono obbligatori.</small>
                </div>


                {{-- SUBMIT BUTTON --}}
                <div class="form-group row mb-0 mt-3 pb-4">
                    <div class="col">
                        <button type="submit" class="btn register-btn">
                            <b>{{ __('Registrati') }}</b>
                        </button>
                    </div>
                </div>


                {{-- PRIVACY --}}
                <div class="border-bottom pt-2"></div>
                <small class="pt-4 pb-4 text-muted d-block">Per maggiori informazioni sulle modalità in cui trattiamo i tuoi dati personali, consulta la nostra <a href="javascript:void(0)">Informativa sulla privacy.</a></small>

            </form>
        </div>
    </div>

</div>
@endsection
