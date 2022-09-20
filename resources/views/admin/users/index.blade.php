@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        @if (Auth::check())
                            <h1>{{ Auth::user()->name }}</h1>
                            <div>{{ Auth::user()->id }}</div>
                            <div>{{ Auth::user()->phone }}</div>
                            <div>{{ Auth::user()->address }}</div>
                            <div>{{ Auth::user()->vat }}</div>
                            <div>{{ Auth::user()->email }}</div>
                            {{-- <div>{{ Auth::user()->category }}</div> --}}
                            {{-- <a href="{{route('admin.users.show', Auth::user()->id)}}">show</a> --}}
                            <a href="{{route('admin.users.edit', Auth::user()->id)}}">edit</a>
                        @endif

                        {{-- <table>
                            <thead>
                                <th>ID</th>
                                <th>Nome Attivita</th>
                                <th>Slug</th>
                                <th>Telefono</th>
                                <th>P.Iva</th>
                                <th class="text-center">Azioni</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->slug }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->vat }}</td>


                                        <td><a class="btn btn-warning btn-sm"
                                                href="{{ route('admin.users.edit', $user->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-activity">
                                                    <polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon>
                                                    <line x1="3" y1="22" x2="21" y2="22">
                                                    </line>
                                                </svg>
                                            </a></td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h6>{{ __('You are logged in!') }}</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
