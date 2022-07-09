@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="container">
            <a href="{{ url('admin/categories/create')}}">
                <button class=" btn btn-success">Create</button>
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>description</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>operation</th>
                    </tr>
                </thead>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td>
                            <a href="{{url('admin/categories/'.$category->id.'/edit')}}"><button class="btn btn-warning">Edit</button></a>
                            
                            <a href="{{url('admin/categories/'.$category->id.'')}}"><button class="btn btn-primary">Detail</button></a>
                            <form action="{{url('admin/categories/'.$category->id.'')}}" method="POST">
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