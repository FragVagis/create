@extends('layouts.app')

@section('content')
<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
            @forelse($books as $book)
            <div class="card-body">
                <h1 class="card-title">{{$book->title}}</h2>
                <h2><b>Category:</b> {{$book->getCategory->name}}</h4>
                <h3><b>ISBN:</b> {{$book->ISBN}}</h4>
                <h3><b>Pages:</b> {{$book->pages}}</h4>
                <h4><b>Description:</b><br> {{$book->description}}</h4>
                <div class="buttons">
                <a href="{{route('b_edit', $book)}}" class="btn btn-primary m-2">Edit</a>
                <form action="{{route('b_delete', $book)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-primary m-2">DELETE</button>
                </form>
                <a href="{{route('b_show', $book)}}" class="btn btn-primary m-2">View</a>
                </div>
            </div>
            @empty
            <div class="col-5 turinys">
            <li class="list-group-item">No Books found</li>
            </div>
            @endforelse
        </div> 
        </div>
    </div>
</div>
@endsection