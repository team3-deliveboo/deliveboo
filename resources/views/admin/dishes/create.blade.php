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

                    {{-- nome piatto --}}
                    <div class="form-group">
                        <label>Nome Piatto</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Inserisci il nome del piatto" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Portata --}}
                    <div class="form-group">
                        <label>Portata</label>
                        <input type="text" name="course" class="form-control @error('course') is-invalid @enderror"
                            placeholder="Inserisci la portata" value="{{ old('course') }}" required>
                        @error('course')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Descrizione --}}
                    <div class="form-group">
                        <label>Descrizione</label>
                        <input type="text" name="description"
                            class="form-control @error('description') is-invalid @enderror"
                            placeholder="Inserisci una descrizione del piatto" value="{{ old('description') }}" required>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Prezzo --}}
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="" name="price" class="form-control @error('price') is-invalid @enderror"
                            placeholder="Inserisci una descrizione del piatto" value="{{ old('price') }}" required>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Vibility --}}
                    <div class="form-group">
                        <label>Visibilità</label>

                        <div class="form-radio">
                            <input class="form-radio-input @error('visibility') is-invalid @enderror" type="radio"
                                value="1" name="visibility">Disponibile</input>
                            <input class="form-radio-input @error('visibility') is-invalid @enderror" type="radio"
                                value="0" name="visibility">Non Disponibile</input>
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
                            </svg>Crea Piatto
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
