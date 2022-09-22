@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Crea il tuo piatto</h1>
                </div>

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

                <form action="{{ route('admin.dishes.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    {{-- File Upload Image --}}
                    <div class="form-group">
                        <label for="img" class="form-label"><b>Immagine di copertina</b></label>

                        <div class="d-flex">
                            {{-- <img class="img-thumbnail" style="width: 150px" src="{{ asset('storage/' . $post->cover_img) }}">

                        <img id="new_cover_img_container" src="" alt=""> --}}
                            <input type="file" name="img"
                                class="form-control-file @error('img') is-invalid @enderror" id="img"
                                value="{{ old('img') }}">
                        </div>
                        @error('img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    {{-- nome piatto --}}
                    <div class="form-group">
                        <label><b>Nome Piatto</b></label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Inserisci il nome del piatto" value="{{ old('name') }}" required minlength="5">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Portata --}}
                    <div class="form-group">
                        <label><b>Portata</b></label>
                        <input type="text" name="course" class="form-control @error('course') is-invalid @enderror"
                            placeholder="Inserisci la portata" value="{{ old('course') }}" required minlength="5">
                        @error('course')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Descrizione --}}
                    <div class="form-group">
                        <label><b>Descrizione</b></label>
                        <input type="text" name="description"
                            class="form-control @error('description') is-invalid @enderror"
                            placeholder="Inserisci una descrizione del piatto" value="{{ old('description') }}" required
                            minlength="5">
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Prezzo --}}
                    <div class="form-group">
                        <label><b>Prezzo</b></label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror "
                            placeholder="Inserisci il prezzo del tuo piatto" value="{{ old('price') }}" required
                            min="0.1">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Vibility --}}
                    <div class="form-group">
                        <label><b>Visibilità</b></label>



                        <div class="form-check">
                            <input class="form-check-input" value='1' type="radio" name="visibility" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Disponibile
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" value='0' type="radio" name="visibility"
                                id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Non Disponibile
                            </label>
                        </div>



                        @error('visibility')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-activity">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                                <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                <polyline points="7 3 7 8 15 8"></polyline>
                            </svg><span class="ml-2"><b>Crea Piatto</b></span>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
