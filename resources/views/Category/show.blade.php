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
                            <label for="" class="form-label">name</label>
                            <input type="text" value="{{ $category->name}}" name="name" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Description</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control" readonly>
                                {{$category->description}}
                            </textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection