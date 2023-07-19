@extends('passenger_layout')

@section('passengercontent')
<div class="container-fluid">
<h1>Profile</h1>

<h2 class="bg-info">Hello {{Session('pName')}}</h2>
</div>

@endsection



