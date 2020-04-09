@extends('layouts.app')
@section('title', 'Welcome')
@section('styles')
    .full-height {
    height: 100vh;
    }

    .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
    }

    .position-ref {
    position: relative;
    }

    .top-right {
    position: absolute;
    right: 10px;
    top: 18px;
    }

    .content {
    text-align: center;
    }

    .title {
    font-size: 84px;
    }

    .links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
    }

    .m-b-md {
    margin-bottom: 30px;
    }
@endsection
@section('content')
    <div class="flex-center position-ref">


        <div class="content">
            <div class="title m-b-md text-secondary">
                Phone Booking
            </div>

            <div class="links">
                <a href="https://www.flipkart.com" target="_blank">Flipkart</a>
                <a href="https://www.amazon.in" target="_blank">Amazon</a>
            </div>
        </div>
    </div>
@endsection

