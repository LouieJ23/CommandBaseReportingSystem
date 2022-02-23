@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Activity Log and Incident Report</h1>
        <a href="reports/create" class="btn btn-primary"><i
                class="fas fa-download fa-sm text-white-50"></i> Create Report</a>
    </div>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
            <div class="col-md-8 col-sm-8">
                <h3><a href="/reports/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
                <br>
                <br>    
            </div>   
            @endforeach
                {{-- Change design for paginate --}}
                <br>
                {{$posts->links()}}
        @else
            <p> No post found </p>
        @endif
        
</div>

@endsection
