@extends('admin_layout')

@section('admincontent')

<div class="container-fluid">

    <div >
        <h1>Create Train Schedule</h1>
    
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
                <label for="trainId" class="form-label">Train ID</label>
                <input type="text" class="form-control" id="trainId" name="train_id" {{-- value="{{$data}} --}}">
        </div>

          <div class="mb-3">
            <label for="trainName" class="form-label">Train Name</label>
            <input type="text" class="form-control" id="trainName" name="train_name">
            <span class="text-danger">@error('train_name') {{$message }}@enderror</span>
          </div>
    
          <div class="mb-3">
            <label for="seatCat1" class="form-label"> No Of first class Seat</label>
            <input type="number" class="form-control" id="seatCat1" name="seat_cat_1" min="0" value="0">
          </div>
    
          <div class="mb-3">
            <label for="seatCat2" class="form-label">No Of econd class Seat</label>
            <input type="number" class="form-control" id="seatCat2" name="seat_cat_2"  min="0" value="0">
          </div>
    
          <div class="mb-3">
            <label for="seatCat3" class="form-label">No Of third class Seat</label>
            <input type="number" class="form-control" id="seatCat3" name="seat_cat_3"  min="0" value="0">
          </div>
    
          
          </div>
    
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    


</div>

@endsection