@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @if(session()->get("cart"))
                    <form action="{{ url('cart/check/out') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>qty</th>
                                        <th>price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse(session()->get("cart") as $key => $item)
                                    <tr>
                                        <td>{{$item["id"]}}</td>
                                        <td>{{$item["name"]}}</td>
                                        <td><input type="text" name="qty" required></td>
                                        <td>{{$item["price"]}}</td>
                                    </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                            <textarea name="remark" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Checkout</button>
                        </div>
                    </form>
                @else
                    <h1>You have no cart yet.</h1>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection