@extends('layouts.app')

@section('content')
    <table>
        <thead>
            <th>Nome Cognome</th>
            <th>Indirizzo</th>
            <th>Telefono</th>
            <th>Email</th>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
              <td>{{$order->name . ' ' . $order->surname}}</td>
              <td>{{$order->address}}</td>
              <td>{{$order->phone}}</td>
              <td>{{$order->email}}</td>
              <td>
                <a class="btn btn-primary btn-sm" href="{{ route('admin.orders.show', $order->id) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-activity">
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
