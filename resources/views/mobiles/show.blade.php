@extends('layouts.app')
@section('title', $mobile->name)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card rounded shadow w-100 p-5">
                    <h2 class="card-title">{{ $mobile->brand }} {{ $mobile->name }}</h2>
                    <h5 class="card-subtitle text-muted">&#8377;{{ $mobile->price }}</h5>
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <a href="/mobiles/{{ $mobile->id }}/edit" class="btn btn-outline-info w-100">
                                Edit
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <form action="{{ route('mobiles.destroy', $mobile->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
