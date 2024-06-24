

@extends('layouts.main')

@section('container')

@foreach ($postingan as $posting)

<article class="mb-5">

<h2> 
    <a href="/posts/{{$posting["slug"]}}">{{ $posting["judul"] }} </a></h2>
<h5>By : {{ $posting["author"] }} </h5>
<p> {{ $posting["body"] }} </p>
    
@endforeach

@endsection
        
