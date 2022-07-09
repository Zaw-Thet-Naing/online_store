@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Create
                </div>
                <div class="card-body">
                    <form action="{{url('admin/categories')}}" class="form" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="" class="form-label">name</label>
                            <input type="text"  name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" required>
                                
                            </textarea>
                        </div>
                        <button type="submit" class="btn-success btn mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection