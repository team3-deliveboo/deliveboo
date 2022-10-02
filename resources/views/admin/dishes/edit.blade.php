@extends ('layouts.app')

@section('content')
<div class="container py-5">

    <div class="px-3">
        <div class="row justify-content-center">
            {{-- HEADER --}}
            <h3 class="pb-4">Modifica il piatto: <b>{{ $dishes->name }}</b></h3>

            <div>
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

            <form action="{{ route('admin.dishes.update', $dishes->slug) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                {{-- FILE UPLOAD IMG --}}
                <div class="form-group row pb-4 align-items-center edit-upload">
                    <div class="col-12 col-xl-3">
                        <label for="img" class="form-label"><b>Immagine del piatto:</b></label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="file" name="img" class="form-control-file @error('img') is-invalid @enderror" id="img" value="{{ old('img') }}">
                        @error('img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                {{-- DISH NAME --}}
                <div class="form-group row">
                    <div class="col-12 col-xl-3">
                        <label><b>Nome del piatto:</b></label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="text" name="name" class="form-control dish @error('name') is-invalid @enderror" placeholder="Inserisci il titolo" value="{{ old('name', $dishes->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                {{-- COURSE --}}
                <div class="form-group row pt-4">
                    <div class="col-12 col-xl-3">
                        <label><b>Portata:</b></label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="text" name="course" class="form-control dish @error('course') is-invalid @enderror" placeholder="Inserisci il titolo" value="{{ old('course', $dishes->course) }}" required>
                        @error('course')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                {{-- DESCRIPTION --}}
                <div class="form-group row pt-4">
                    <div class="col-12 col-xl-3">
                        <label><b>Descrizione:</b></label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="text" name="description" class="form-control dish @error('description') is-invalid @enderror" placeholder="Inserisci il titolo" value="{{ old('description', $dishes->description) }}" required>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                {{-- PRICE --}}
                <div class="form-group row pt-4">
                    <div class="col-12 col-xl-3">
                        <label><b>Prezzo:</b></label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="text" name="price" class="form-control dish @error('price') is-invalid @enderror" placeholder="Inserisci il prezzo" value="{{ old('price', $dishes->price) }}" required>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                {{-- AVAILABILITY --}}
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="d-flex pt-4 gap-4 check-availability">
                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input" value='1' type="radio" name="visibility" id="flexRadioDefault1 " {{ $dishes->visibility == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">Disponibile</label>
                            </div>

                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input" value='0' type="radio" name="visibility" id="flexRadioDefault2" {{ $dishes->visibility == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault2">Non disponibile</label>
                            </div>
                        </div>
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
    </div>

@endsection
