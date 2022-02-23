@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <a href="/reports" class="btn btn-primary">Go Back</a>
    
    <div>
        <br>
        <h1 class="h3 mb-0 text-gray-800">{{$post->title}}</h1>
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
        <br>
        <br>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}} 
                <a href="/reports/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
   
    </div> 

    
            
</div>


@endsection