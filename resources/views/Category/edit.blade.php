@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Category Form
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/categories/'.$category->id.'')}}" class="form" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="" class="form-label">name</label>
                            <input type="text" value="{{ $category->name}}" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">
                                {{$category->description}}
                            </textarea>
                        </div>
                        <button type="submit" class="btn-success btn mt-2">Submit</button>
                        <button class="btn-warning btn mt-2" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection