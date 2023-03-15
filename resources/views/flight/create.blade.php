@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
        <div class="card-header">Add a flight</div>
        <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('flight.save') }}">
            @csrf
            <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" />
            <input type="number" class="form-control mb-2" placeholder="Enter price" name="price" value="{{ old('price') }}" />
            <div class="form-group mb-5">
                <label for="type">Type of flight:</label>
                <select class="form-control" name="type">
                    <option value="national">national</option>
                    <option value="international">international</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Send" />
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection