@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Create
                </div>
                <div class="card-body">
                    <form action="{{url('admin/items')}}" class="form" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="" class="form-label">Category</label>
                            <select name="category_id" id="" class="form-control" required>
                                <option value="" class="form-control">Please Select</option>
                                @forelse($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">name</label>
                            <input type="text"  name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Price</label>
                            <input type="float"  name="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Quantity</label>
                            <input type="number"  name="quantity" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Image link</label>
                            <textarea name="image" id="" cols="30" rows="2" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn-success btn mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection