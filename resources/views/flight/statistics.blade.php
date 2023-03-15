@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container justify-content-center w-25">
    <div class="card">
    <div class="card-body text-center">
        <h5 class="card-title">Statistics</h5>
        <p>Nationals: {{ $viewData['nationals'] }}</p>
        <p>Internationals: {{ $viewData['internationals'] }}</p>
        <p>National mean price: {{ $viewData['avg'] }}</p>
    </div>
    </div>
</div>
@endsection