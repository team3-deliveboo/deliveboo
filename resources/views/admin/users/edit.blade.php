@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <div class="row justify-content-center">
            {{-- HEADER --}}
            <h3 class="pb-4">Modifica i dati di <b>{{ $user->name }}</b></h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')


            {{-- FILE UPLOAD IMG --}}
            <div class="file-upload">
                <div class="form-group row">
                    <div class="col-12 col-xl-6 offset-xl-3">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <img class="img-thumbnail d-none d-md-block" style="width: 100px;" src="{{ asset('storage/' . $user->img) }}">
                            
                            <input type="file" name="img" class="form-control-file @error('img') is-invalid @enderror" id="img" value="{{ old('img', $user->img) }}">

                            @error('img')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                </div>
            </div>


            {{-- NAME --}}
            <div class="form-group row">
                <div class="col-12 col-xl-3">
                    <label><b>Nome del ristorante:</b></label>
                </div>

                <div class="col-12 col-xl-6">
                    <input type="text" name="name" class="form-control edit @error('name') is-invalid @enderror" placeholder="Inserisci il nome del ristorante" value="{{ old('name', $user->name) }}" required minlength="5">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            {{-- PHONE --}}
            <div class="form-group row pt-4">
                <div class="col-12 col-xl-3">
                    <label><b>Numero di telefono:</b></label>
                </div>

                <div class="col-12 col-xl-6">
                    <input type="text" name="phone" class="form-control edit @error('phone') is-invalid @enderror" placeholder="Inserisci il numero telefono" value="{{ old('phone', $user->phone) }}" required minlength="6" maxlength="15">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            {{-- VAT --}}
            <div class="form-group row pt-4">
                <div class="col-12 col-xl-3">
                    <label><b>Partita Iva:</b></label>
                </div>

                <div class="col-12 col-xl-6">
                    <input type="text" name="vat" class="form-control edit @error('vat') is-invalid @enderror" placeholder="Inserisci la Partita Iva" value="{{ old('vat', $user->vat) }}" required minlength="11">
                    @error('vat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            {{-- ADDRESS --}}
            <div class="form-group row pt-4">
                <div class="col-12 col-xl-3">
                    <label><b>Indirizzo del ristorante:</b></label>
                </div>

                <div class="col-12 col-xl-6">
                    <input type="text" name="address" class="form-control edit @error('address') is-invalid @enderror" placeholder="Inserisci l'indirizzo" value="{{ old('address', $user->address) }}" required minlength="5">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            {{-- CATEGORY --}}
            <div class="form-group row pt-4">
                <div class="col-12 col-xl-3">
                    <label><b>Seleziona una o più categorie:</b></label>
                </div>

                <div class="col-12 col-xl-6">
                    <select type="text" style="height: 100px" name="categories[]" class="form-control edit @error('categories') is-invalid @enderror" multiple required>

                    @foreach ($categories as $category)
                        <option value="{{ $category['id'] }}"
                            {{ $user->categories->contains($category) ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                    </select>

                    @error('categories')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
                

            {{-- SAVE --}}
            <div class="form-group mt-4 row">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" class="white-btn edit-btn align-items-center justify-content-center">
                        <i class="fa-solid fa-floppy-disk"></i>
                        <b class="text-dark">Salva le modifiche</b>
                    </button>
                </div>
            </div>

        </form>
    </div>
@endsection
