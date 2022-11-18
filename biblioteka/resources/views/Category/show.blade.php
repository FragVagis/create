@extends('layouts.app')

@section('content')

<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card category">
                <h1 class="card-title">{{$category->name}}</h1>
                <a href="{{url()->previous()}}" class="btn btn-primary m-2">Back to categories</a>
            </div>
        </div>
    </div>
</div>
         

@endsection