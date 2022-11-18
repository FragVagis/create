@extends('layouts.app')

@section('content')

<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card category">
            <h1 class="card-title">Edit Book: {{$book->title}}</h1>
                <form action="{{route('b_update', $book)}}" method="post" enctype="multipart/form-data">

                    @error('title')
                    <div style="color:crimson">{{$message}}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Title</span>
                        <input type="text" class="form-control" name="title" value="{{old('title', $book->title)}}">
                    </div>

                    @error('description')
                    <div style="color:crimson">{{$message}}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Description</span>
                        <input type="text" class="form-control" name="description" value="{{old('description', $book->description)}}">
                    </div>

                    @error('ISBN')
                    <div style="color:crimson">{{$message}}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">ISBN</span>
                        <input type="text" class="form-control" name="ISBN" value="{{old('ISBN', $book->ISBN)}}">
                    </div>

                    @error('pages')
                    <div style="color:crimson">{{$message}}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Pages</span>
                        <input type="text" class="form-control" name="pages" value="{{old('pages', $book->pages)}}">
                    </div>


                    @error('category_id')
                    <div style="color:crimson">{{$message}}</div>
                    @enderror

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Restoran</span>
                        <select name="category_id">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($category->id == old('category_id')) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="button-extra">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-secondary mt-4">Update</button>
                    </div>
                </form>
                <a href="{{route('b_index')}}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection