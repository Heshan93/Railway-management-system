@extends('admin_layout')

@section('admincontent')


<div >
    <h1>Add Train Stations</h1>

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

    <div class="mb-3">
            <label for="trainId" class="form-label">Train Station ID</label>
            <input type="number" class="form-control" id="trainId" name="train_id" value="{{$data}}" min="0">
    </div>

      <div class="mb-3">
        <label for="trainName" class="form-label">Train Station Name</label>
        <input type="text" class="form-control" id="trainName" name="train_name">
        <span class="text-danger">@error('train_name') {{$message }}@enderror</span>
      </div>

    

      
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection