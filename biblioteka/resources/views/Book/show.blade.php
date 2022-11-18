@extends('layouts.app')

@section('content')

<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card category">
                <h1 class="card-title">{{$book->title}}</h1>
                    <h2><b>Category:</b> {{$book->getCategory->name}}</h2>
                    <h3><b>ISBN:</b> {{$book->ISBN}}</h3>
                    <h3><b>Pages:</b> {{$book->pages}}</h3>
                    <h4><b>Description:</b><br> {{$book->description}}</h4>
                <a href="{{url()->previous()}}" class="btn btn-primary m-2">Back</a> 
            </div>
        </div>
    </div>
</div>
         

@endsection