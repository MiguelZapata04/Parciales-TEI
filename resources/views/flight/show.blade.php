@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-3">
<div class="row g-0">
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
    <div class="card-body">
        <h5 class="card-title">
        {{ $viewData["flight"]->getName() }}
        </h5>
        <p class="card-text">{{ $viewData["flight"]->getType() }}</p>
        <p class="card-text">{{ $viewData["flight"]->getPrice() }}</p>
        <form method="POST" action="{{ route('flight.destroy', ['id' => $viewData['flight']->getId()]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    </div>
</div>
</div>
@endsection