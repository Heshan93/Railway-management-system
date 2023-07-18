@extends('admin_layout')

@section('admincontent')

<div class="container-fluid">

    <div >
      <h1>New Train Schedule</h1>
      <hr>
        <form action="{{route('addtraindb') }}" method="POST">
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
                <label for="selectTrain" class="form-label">Select Train Station</label>
                <select class="form-select" aria-label="Default select example" name="selectTrain">
                  <option selected>Select Station</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>                
         </div>

          <div class="mb-3">
            <label for="trainName" class="form-label">Station Name</label>
            <input type="text" class="form-control" id="train\Name" name="train_name">
            <span class="text-danger">@error('station_name') {{$message }}@enderror</span>
          </div>
    
          <div class="mb-3">
            <label for="start_station" class="form-label">Start Station</label>
            <input type="text" class="form-control" id="start_station" name="start_station" min="0" value="0">
          </div>
    
          <div class="mb-3">
            <label for="seatCat1" class="form-label"> Start Time</label>
            <input type="text" class="form-control" id="start_time" name="start_time" min="0" value="0">
          </div>
          
          <div class="mb-3">
            <label for="start_station" class="form-label"> End Station</label>
            <input type="text" class="form-control" id="start_station" name="start_station" min="0" value="0">
          </div>
    
          <div class="mb-3">
            <label for="seatCat1" class="form-label"> End Time</label>
            <input type="text" class="form-control" id="start_time" name="start_time" min="0" value="0">
          </div>
          
          <div class="mb-3">
            <label for="selectTrain" class="form-label">Select Train Station</label>
            <select class="form-select" aria-label="Default select example" name="selectTrain">
              <option selected>Select Station</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>                
     </div>

         </div>
    
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    



</div>

@endsection