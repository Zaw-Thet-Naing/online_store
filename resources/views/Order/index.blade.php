@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Total amount</th>
                        <th>Remark</th>
                        <th>Related items</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                </thead>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->total_amount}}</td>
                        <td>{{$order->remark}}</td>
                        <td>
                        </td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->updated_at}}</td>
                        <td>
                            <a href="{{url('admin/categories/'.$order->id.'/edit')}}"></a>
                            
                            <a href="{{url('admin/categories/'.$order->id.'')}}"></a>
                            <form action="{{url('admin/categories/'.$order->id.'')}}" method="POST">
                                @csrf
                                @method("DELETE")
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection