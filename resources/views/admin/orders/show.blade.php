@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Cliente: {{ $order->name . ' ' . $order->surname}}</h3>
        <span class="">Indirizzo: {{ $order->address }}</span>
        <hr>
        <span class="">Totale: {{ $order->total_price }} Bitcoin</span>
        <hr>
        <span class="">Data: {{$order->created_at}}</span>
    </div>
@endsection
