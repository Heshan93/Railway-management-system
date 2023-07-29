@extends('admin_layout')

@section('admincontent')

<div class="container-fluid">

  <div>
    <h1>New Train Schedule</h1>
    <hr>
    <form  action="{{route('new_schedule')}}" method="POST">
      @csrf
      {{-- new use success & fail message --}}
      @if (Session::has('success'))

      <div class="alert alert-success">{{Session::get('success')}} </div>

      @endif

      @if (Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}} </div>
      @endif
      {{-- new use success & fail message --}}
      <div class="mb-3">
        <label for="schedule-date" class="form-label">Schedule Date</label>
        <input class="form-control" required type="date" id="schedule-date" name="schedule_date">
        <span class="text-danger"></span>
      </div>
      

      <div class="mb-3">
        <label for="selectTrain" class="form-label">Select Train Station</label>
        <select class="multi-select" data-reorder="1" required name="stations[]" multiple="multiple" style="width: 100%"
          placeholder="Select Stations">
          @foreach($data['stations'] as $st)
          <option value="{{$st->st_no}}">{{$st->st_name}}</option>
          @endforeach
        </select>

      </div>

      <div class="mb-3">
        <label for="train-name" class="form-label">Train Name</label>
        <select class="form-select" required aria-label="Default select example" id="train-name" name="train_id"
          placeholder="Select Train">
          <option hidden>Select Train</option>
          @foreach($data['trains'] as $tr)
          <option value="{{$tr->train_id}}">{{$tr->train_name}}</option>
          @endforeach
        </select>
        <span class="text-danger"></span>
      </div>


      <div class="mb-3">
        <label for="start_station" class="form-label">Start Station</label>
        <select class="form-select" required aria-label="Default select example" id="start-station" name="start_station">
          <option hidden>Select Start Station</option>
          @foreach($data['stations'] as $st)
          <option value="{{$st->st_no}}">{{$st->st_name}}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="seatCat1" class="form-label"> Start Time</label>
        <input type="time" required class="form-control" id="start_time" name="start_time" min="0" value="0">
      </div>

      <div class="mb-3">
        <label for="end_station" class="form-label"> End Station</label>
        <select class="form-select" required aria-label="Default select example" name="end_station" id="end_station">
          <option hidden>Select End Station</option>
          @foreach($data['stations'] as $st)
          <option value="{{$st->st_no}}">{{$st->st_name}}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="seatCat1" class="form-label"> End Time</label>
        <input type="time" required class="form-control" id="end_time" name="end_time" min="0" value="0">
      </div>

      <div class="mb-3">
        <label for="seatCat1" class="form-label">No. of First Class Seats</label>
        <input type="number" required class="form-control" id="class_1" name="class_1" min="0"  placeholder="Class 01 seats">
      </div>


      <div class="mb-3">
        <label for="seatCat1" class="form-label">No. of Second Class Seats</label>
        <input type="number" required class="form-control" id="class_2" name="class_2" min="0"  placeholder="Class 02 seats">
      </div>

      <div class="mb-3">
        <label for="seatCat1" class="form-label">No. of Third Class Seats</label>
        <input type="number" required class="form-control" id="class_3" name="class_3" min="0"  placeholder="Class 03 seats">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>


</div>




</div>

@endsection