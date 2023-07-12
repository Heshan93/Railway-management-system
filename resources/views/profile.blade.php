@extends('passenger_layout')

@section('passengercontent')

<h1>Profile</h1>

<h2 class="bg-info">Hello {{Session('pName')}}</h2>

<a href="logout"> Logout </a>

@endsection



