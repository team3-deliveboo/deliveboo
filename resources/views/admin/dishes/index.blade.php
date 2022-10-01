@extends ('layouts.app')

@section('content')
    <div class="dish-index">

        <div class="button-create">
            <a href="{{ route('admin.dishes.create') }}" class="blue-btn">Crea nuovo piatto</a>
        </div>


        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                <p>{{ Session::get('status') }}</p>
            </div>
        @endif


        {{-- DISH CARD --}}
        <div class="row gy-3 justify-content-center gap-5">
            @foreach ($dishes as $dish)
                <div class="col-5">
                    <div class="dish-card position-relative">
                        <div class="text-start pe-1">
                            <div>
                                <b>{{ ucfirst($dish->name) }}</b>
                            </div>
                            <div class="description">{{ ucfirst($dish->description) }}</div>
                            <div>{{ $dish->price }} €</div>
                        </div>
                        <div class="dish-img">
                            <img src="{{ asset('storage/' . $dish->img) }}" alt="{{ 'Immagine del piatto' . $dish->name }}" />
                        </div>

                        <div class="buttons">
                            {{-- EDIT BUTTON --}}
                            <a class="btn" href="{{ route('admin.dishes.edit', $dish->slug) }}">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            {{-- DELETE BUTTON --}}
                            <form class="delete" action="{{ route('admin.dishes.destroy', $dish->slug) }}" method="post">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn" onclick="return confirm('Sei sicuro di voler cancellare questo piatto?')">
                                    <i class="fa-solid fa-ban"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

