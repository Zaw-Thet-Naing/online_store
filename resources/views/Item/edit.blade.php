@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Item Form
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/items/'.$item->id.'')}}" class="form" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="" class="form-label">Category</label>
                            <input type="text"  name="category" class="form-control" value="{{$item->category_id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">name</label>
                            <input type="text"  name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" required>{{$item->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Price</label>
                            <input type="number"  name="price" class="form-control" value="{{$item->price}}" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Quantity</label>
                            <input type="number"  name="quantity" class="form-control" value="{{$item->quantity}}" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Image link</label>
                            <textarea name="image" id="" cols="30" rows="2" class="form-control" required>{{$item->image}}</textarea>
                        </div>
                        <button type="submit" class="btn-success btn mt-2">Submit</button>
                        <button class="btn-warning btn mt-2" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection