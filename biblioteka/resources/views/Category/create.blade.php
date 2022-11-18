@extends('layouts.app')

@section('content')

<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card category">
                <h1 class="card-title">New Category</h1>
                    <form action="{{route('c_store')}}" method="post">
                        @error('name')
                        <div style="color:crimson">{{$message}}</div>
                        @enderror
                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon3">Name</span>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        </div>
                        <div class="button-extra">
                            @csrf
                            <button type="submit" class="btn btn-secondary mt-4">Create</button>
                        </div>
                    </form>
                    <a href="{{route('c_index')}}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
</div>


@endsection
