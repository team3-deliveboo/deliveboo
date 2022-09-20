@extends ('layouts.app')

@section('content')
    <a href="{{ route('admin.dishes.create') }}" class="btn btn-primary">Crea nuovo piatto</a>
    <table>
        <thead>
            <th>ID</th>
            <th>Nome Piatto</th>
            <th>Slug</th>
            <th>Descrizione</th>
            <th class="text-center">Azioni</th>
        </thead>
        <tbody>
            @foreach ($dishes as $dish)
                <tr>
                    <td>{{ $dish->id }}</td>
                    <td>{{ $dish->name }}</td>
                    <td>{{ $dish->slug }}</td>
                    <td>{{ $dish->desription }}</td>


                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('admin.dishes.edit', $dish->slug) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-activity">
                                <polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon>
                                <line x1="3" y1="22" x2="21" y2="22">
                                </line>
                            </svg>
                        </a>
                    </td>

                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.dishes.show', $dish->slug) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-activity">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
