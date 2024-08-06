

@extends('layouts/main')
@section('container')
<h1>About </h1>

<h2> {{ $name }}</h2>
<h2> {{ $email }}</h2>
<img src="<?php echo $picture ?>" width="50px" name="<?php $name ?>">
@endsection


   
