@extends('layouts.app')
@section('title', "Update $mobile->name")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="card p-4 rounded shadow-none">
                    <h2 class="card-title">Update {{ $mobile->name }}</h2>
                    <form action="{{route('mobiles.update', $mobile->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name: </label>
                            <input type="text" name="name" id="name" placeholder="e.g. Redmi Note 8 Pro" class="form-control w-100" value="{{ old('name') ?? $mobile->name }}" autofocus>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="brand">Brand: </label>
                            <input type="text" name="brand" id="brand" placeholder="e.g. Xiaomi" class="form-control" value="{{ old('brand') ?? $mobile->brand }}">
                            @error('brand')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Price: </label>
                            <input type="text" name="price" id="price" placeholder="e.g. 9999" class="form-control" value="{{ old('price') ?? $mobile->price }}">
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-primary w-25">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
