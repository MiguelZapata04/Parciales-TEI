@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
@foreach ($viewData["flights"] as $flight)
<div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
    <div class="card-body text-center">
        <p>ID: {{ $flight->getId() }}</p>
        <p>Name: {{ $flight->getName() }}</p>
        @if ($flight->getType() == "international")
        <strong><p>Type: {{ $flight->getType() }}</p></strong>
        @else
            <p>Type: {{ $flight->getType() }}</p> 
        @endif
        @if ($flight->getType() == "national")
            <p class="text-primary">Price: {{ $flight->getPrice() }}</p> 
        @else
        <p>Price: {{ $flight->getPrice() }}</p> 
        @endif
        <a href="{{ route('flight.show', ['id'=> $flight->getId()]) }}"
        class="btn bg-primary text-white">View flight</a>
    </div>
    </div>
</div>
@endforeach
</div>
@endsection