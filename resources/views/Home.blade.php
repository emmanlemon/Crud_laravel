<!-- Header Section -->
@extends('Header.index')
<link rel="stylesheet" href="{{ url('../css/home.css') }}">
@section('title' , 'Home Page')
@section('content')
<!-- Main -->
    <div class="title">
        <P>Hi!</P>
        <p>Good Morning!</p>
        <P>I'm Emmanuel Joshua A. Lemon</p>
        <P>Do you want Create A blog?</p>
        <a href="{{route('create')}}">Click me!</a>
    </div>


@endsection
<!-- Footer -->
@extends('Header.footer')
@section('footer')
@endsection





