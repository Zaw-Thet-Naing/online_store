@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Detail
                </div>
                <div class="card-body">
                    <form action="" class="form">
                        <div class="form-group">
                            <label for="" class="form-label">Category</label>
                            <input type="text"  name="category" class="form-control" value="{{$item->category_id}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">name</label>
                            <input type="text"  name="name" class="form-control" value="{{$item->name}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Description</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control" readonly>{{$item->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Price</label>
                            <input type="" name="" class="form-control" value="{{$item->price}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Quantity</label>
                            <input type="" name="" class="form-control" value="{{$item->quantity}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Image link</label>
                            <textarea name="" id="" cols="30" rows="2" class="form-control" readonly>{{$item->image}}</textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection