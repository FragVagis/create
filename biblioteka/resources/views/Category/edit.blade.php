@extends('layouts.app')

@section('content')
<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card category">
                <h2 class="card-title">Edit Category {{$category->name}}</h2>
                <form action="{{route('c_update', $category)}}" method="post">

                    @error('name')
                    <div style="color:crimson">{{$message}}</div>
                    @enderror

                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon3">Name</span>
                        <input type="text" class="form-control" name="name" value="{{old('name', $category->name)}}">
                    </div>
                    @csrf
                    @method('put')
                    <div class="button-extra">
                        <button type="submit" class="btn btn-secondary mt-4">Update</button>
                    </div>
                </form>
                <a href="{{route('c_index')}}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
