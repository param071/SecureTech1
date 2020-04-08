@extends('layouts.app')
@section('title', 'Phones')
@section('styles')

@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @if(session()->has('status'))
                <div class="alert alert-warning w-100" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <a href="{{ route('mobiles.create') }}" class="btn btn-outline-dark mb-2">Add new Mobile</a>
        </div>
        <div class="row justify-content-center">
            @if($mobiles->count() > 0)

                <quantity-increment mobiles="{{ $mobiles }}"></quantity-increment>
{{--                <tbody>--}}
{{--                    @foreach($mobiles as $mobile)--}}
{{--                        <tr>--}}
{{--                            <td class="text-center">--}}
{{--                                <a href="/mobiles/{{ $mobile->id }}" class="text-decoration-none">{{ $mobile->name }}</a>--}}
{{--                            </td>--}}
{{--                            <td class="text-center">--}}
{{--                                {{ $mobile->brand }}--}}
{{--                            </td>--}}
{{--                            <td class="text-center">--}}
{{--                                &#8377;{{ $mobile->price }}--}}
{{--                            </td>--}}
{{--                            <td class="text-center">--}}
{{--                                <quantity-increment id="{{ $mobile->id }}" mobile_name="{{ $mobile->name }}"></quantity-increment>--}}
{{--                            </td>--}}
{{--                            <td class="text-center">--}}
{{--                                <select name="user" id="" class="form-control">--}}
{{--                                    <option value="Param">Param</option>--}}
{{--                                    <option value="Ankit">Ankit</option>--}}
{{--                                </select>--}}
{{--                            </td>--}}
{{--                            <td class="text-center">--}}
{{--                                <button class="btn btn-outline-dark">Order</button>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                </tbody>--}}
            @else
                <h3 class="text-muted">No Mobile available</h3>
            @endif
        </div>
    </div>
@endsection
<script>
    import QuantityIncrement from "../../js/components/QuantityIncrement";
    export default {
        components: {QuantityIncrement}
    }
</script>
