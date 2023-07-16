@extends('admin_layout')

@section('admincontent')


<div >
    <h1>Add Employee</h1>

    <form action="{{route('add_stationsTo_db') }}" method="POST">
        @csrf
         {{--  new use success  & fail message --}}
        @if (Session::has('success'))

        <div class="alert alert-success">{{Session::get('success')}} </div>
            
        @endif
      
        @if (Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}} </div>
        @endif
      {{--  new use success  & fail message --}}
      <div class="row mb-3">
        <div class="col">
          <label for="signUpAddress" class="form-label">User ID</label>
          <input type="email" class="form-control w-100" id="signUpAddress" placeholder="Enter your first name">
        </div>
        </div>

      <div class="row mt-4 mb-3">
        <div class="col-12 col-sm mb-3 mb-sm-0">
          <label for="firstName" class="form-label" >First name </label>
          <input type="text" class="form-control" id="signUpFirst" placeholder="Enter your first name" name="firstName" value="{{old('firstName')}}">
          <span class="text-danger">@error('firstName') {{ $message }} @enderror</span>
        </div>
        <div class="col-12 col-sm">
          <label for="LastName" class="form-label" >Last Name </label>
          <input type="text" class="form-control" id="signUpLast" placeholder="Enter your last name" name="LastName" value="{{old('LastName')}}">
          <span class="text-danger">@error('LastName') {{$message }}@enderror</span>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-12 col-sm mb-3 mb-sm-0">
          <label for="signUpEmail" class="form-label">Email </label>
          <input type="email" class="form-control" id="signUpEmail" placeholder="Enter your email" name="exampleInputEmail1"  value="{{old('exampleInputEmail1')}}">
          <span class="text-danger">@error('exampleInputEmail1') {{$message }}@enderror</span>
        </div>
              <div class="col-12 col-sm">
          <label for="signUpTel" class="form-label">Telephone</label>
          <div class="input-group">
              <span class="input-group-text" id="basic-addon1">+94</span>
              <input type="text" id="signUpTel" class="form-control" placeholder="Enter your phone number" aria-label="Telephone" aria-describedby="basic-addon1">
            </div>
        </div> 
      </div>

      <div class="row mb-3">
        <div class="col">
          <label for="signUpAddress" class="form-label">NIC</label>
          <input type="email" class="form-control w-100" id="signUpAddress" placeholder="Enter your first name">
        </div>
        </div>

        <div class="row mb-3">
            <div class="col">
              <label for="department" class="form-label">Department</label>
              <input type="email" class="form-control w-100" id="department" name="department" placeholder="Enter Department">
            </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <label for="signUpAddress" class="form-label">Address</label>
            <input type="email" class="form-control w-100" id="signUpAddress" placeholder="Enter your first name">
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-sm mb-3 mb-sm-0">
            <label for="signUpPass" class="form-label">Create Password </label>
            <input type="password" class="form-control" id="signUpPass" placeholder="Create a Password" name="exampleInputPassword2">
            <span class="text-danger">@error('exampleInputPassword2') {{$message }}@enderror</span>
          </div>
          <div class="col-12 col-sm">
            <label for="signUpPass2" class="form-label" >Confirm Password </label>
            <input type="password" class="form-control" id="signUpPass2" placeholder="Confirm the Password" name="confirmInputPassword2">
            <span class="text-danger">@error('confirmInputPassword2') {{$message }}@enderror</span>
          </div>
      </div>
      <div class="row mt-4">
        <div class="col"><button type="submit" class="btn btn-primary w-100">Get started</button></div>
      </div>
      

@endsection