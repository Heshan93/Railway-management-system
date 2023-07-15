@extends('admin_layout')

@section('admincontent')

<div class="container-fluid">

    <div >
        <h1>Update Train Station</h1>

        <form action="{{route('update_station') }}" method="POST">
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
                <input type="text" class="form-control" id="trainId" name="st_no" value="{{$data->st_no}}">
        </div>

          <div class="mb-3">
            <label for="trainName" class="form-label">Train Station Name</label>
            <input type="text" class="form-control" id="trainName" name="st_name"  value="{{$data->st_name}}">
            <span class="text-danger">@error('st_name') {{$message }}@enderror</span>
          </div>
    

    
          
          </div>
    
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    


</div>

@endsection