@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="container">
            <a href="{{ url('admin/items/create')}}">
                <button class=" btn btn-success">Create</button>
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>category_id</th>
                        <th>name</th>
                        <th>description</th>
                        <th>price</th>
                        <th>quantity</th>
                        <th>image</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>operation</th>
                    </tr>
                </thead>
                @foreach($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->category_id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->image}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            <a href="{{url('admin/items/'.$item->id.'/edit')}}"><button class="btn btn-warning">Edit</button></a>
                            
                            <a href="{{url('admin/items/'.$item->id.'')}}"><button class="btn btn-primary">Detail</button></a>
                            <form action="{{url('admin/items/'.$item->id.'')}}" method="POST">
                                @csrf
                                @method("DELETE")
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection