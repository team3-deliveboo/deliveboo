@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center"></div>
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">

                <h1>Modifica Del Ristorante {{ $user->name }}</h1>

                <!-- <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                                class="feather feather-activity">
                                                                                <line x1="20" y1="12" x2="4" y2="12"></line>
                                                                                <polyline points="10 18 4 12 10 6"></polyline>
                                                                            </svg> Tutti i ristoranti
                                                                        </a> -->
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

            <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="post">

                @csrf
                @method('PUT')

                {{-- nome attivita --}}
                <div class="form-group">
                    <label>Nome Attivita</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Inserisci il titolo" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- telefono --}}
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                        placeholder="Inserisci il telefono" value="{{ old('phone', $user->phone) }}" required>
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- vat --}}
                <div class="form-group">
                    <label>Partita IVA</label>
                    <input type="text" name="vat" class="form-control @error('vat') is-invalid @enderror"
                        placeholder="Inserisci partita IVA" value="{{ old('vat', $user->vat) }}" required>
                    @error('vat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- address --}}
                <div class="form-group">
                    <label>Indirizzo</label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                        placeholder="Inserisci l'indirizzo" value="{{ old('address', $user->address) }}" required>
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label>Categorie</label>
                    <select type="text" name="categories[]"
                        class="form-control @error('categories') is-invalid @enderror" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}"
                                {{ $user->categories->contains($category) ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('categories')
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
                        </svg> Salva ristorante
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
