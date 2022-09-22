@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">

                    <h1>Modifica Del Piatto "{{ $dishes->name }}"</h1>

                    {{-- <!-- <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-activity">
                        <line x1="20" y1="12" x2="4" y2="12"></line>
                        <polyline points="10 18 4 12 10 6"></polyline>
                    </svg> Tutti i ristoranti
                </a> --> --}}
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

                <form action="{{ route('admin.dishes.update', $dishes->slug) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

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

                    {{-- nome Piatto --}}
                    <div class="form-group">
                        <label><b>Nome Piatto</b></label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Inserisci il titolo" value="{{ old('name', $dishes->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Portata --}}
                    <div class="form-group">
                        <label><b>Portata</b></label>
                        <input type="text" name="course" class="form-control @error('course') is-invalid @enderror"
                            placeholder="Inserisci il titolo" value="{{ old('course', $dishes->course) }}" required>
                        @error('course')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Descrizione --}}
                    <div class="form-group">
                        <label><b>Descrizione</b></label>
                        <input type="text" name="description"
                            class="form-control @error('description') is-invalid @enderror"
                            placeholder="Inserisci il titolo" value="{{ old('description', $dishes->description) }}"
                            required>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Prezzo --}}
                    <div class="form-group">
                        <label><b>Prezzo</b></label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                            placeholder="Inserisci il prezzo" value="{{ old('price', $dishes->price) }}" required>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    {{-- Vibility --}}
                    <!-- <div class="form-group">
                                                    <label>Visibilità</label>
                                                {{-- <input type="radio" name="visibility" class="form-control @error('visibility') is-invalid @enderror" value="{{ old('visibility') }}" required> --}} -->
                    {{-- <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" name="visibility" id='visibility1'></input>
                        <label class="form-check-label" for="visibility1">Disponibile</label>

                        <input class="form-check-input" type="radio" value="0" name="visibility" id='visibility2'></input>
                        <label class="form-check-label" for="visibility2">Non Disponibile</label>
                    </div> --}}


                    <div class="form-check">
                        <input class="form-check-input" value='1' type="radio" name="visibility"
                            id="flexRadioDefault1 " {{ $dishes->visibility == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Disponibile
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value='0' type="radio" name="visibility"
                            id="flexRadioDefault2" {{ $dishes->visibility == 0 ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Non Disponibile
                        </label>
                    </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-activity">
                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                        <polyline points="7 3 7 8 15 8"></polyline>
                    </svg><span class="ml-2"><b>Salva piatto</b></span>
                </button>
            </div>

            </form>
        </div>
    </div>
    </div>

@endsection
