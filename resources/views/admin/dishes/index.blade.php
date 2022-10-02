@extends ('layouts.app')

@section('content')
    <div class="dish-index">

        <div class="button-create">
            <a href="{{ route('admin.dishes.create') }}" class="blue-btn m-0 text-center">Crea nuovo piatto</a>
        </div>

        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                <p>{{ Session::get('status') }}</p>
            </div>
        @endif


        {{-- DISH CARD --}}
        <div class="row gy-3 justify-content-center gap-5 m-0">
            @foreach ($dishes as $dish)
                <div class="col-12 col-lg-8 col-xl-5">

                    <div class="dish-card">
                        <div class="text-start pe-1 d-flex flex-column justify-content-between">
                            <div>
                                <span><b>{{ ucfirst($dish->name) }}</b></span>
                            </div>
                            <div class="buttons">
                                {{-- EDIT BUTTON --}}
                                <a href="{{ route('admin.dishes.edit', $dish->slug) }}">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                {{-- DELETE BUTTON --}}
                                <form class="delete d-inline" action="{{ route('admin.dishes.destroy', $dish->slug) }}" method="post">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="border-0 bg-white" onclick="return confirm('Sei sicuro di voler cancellare questo piatto?')">
                                        <i class="fa-solid fa-ban"></i>
                                    </button>
                                </form>
                            </div>
                            <div>{{ $dish->price }} €</div>
                        </div>
                        <div class="dish-img d-none d-sm-block">
                            <img src="{{ asset('storage/' . $dish->img) }}" alt="{{ 'Immagine del piatto' . $dish->name }}" />
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

