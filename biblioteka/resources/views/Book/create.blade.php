@extends('layouts.app')

@section('content')

<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card category">
                <h1 class="card-title">New Book</h1>
                <form action="{{route('b_store')}}" method="post" enctype="multipart/form-data">

                    @error('title')
                    <div style="color:crimson">{{$message}}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Title</span>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    </div>

                    @error('ISBN')
                    <div style="color:crimson">{{$message}}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">ISBN</span>
                        <input type="text" class="form-control" name="ISBN" value="{{old('ISBN')}}">
                    </div>

                    @error('pages')
                    <div style="color:crimson">{{$message}}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Pages</span>
                        <input type="text" class="form-control" name="pages" value="{{old('pages')}}">
                    </div>

                    @error('category_id')
                    <div style="color:crimson">{{$message}}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Category</span>
                        <select name="category_id">
                        @foreach($categories as $category)
                       <option value="{{$category->id}}" @if($category->id == old('category_id')) selected @endif>{{$category->name}}</option>
                        @endforeach
                        </select>
                    </div>

                    @error('description')
                    <div style="color:crimson">{{$message}}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Description</span>
                        <input type="text" class="form-control" name="description" value="{{old('description')}}">
                    </div>
                    <div class="button-extra">
                        @csrf
                        <button type="submit" class="btn btn-secondary mt-4">Create</button>
                    </div>
                </form>
                <a href="{{route('b_index')}}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
</div>


@endsection