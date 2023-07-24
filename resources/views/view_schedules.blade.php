@extends('admin_layout')

@section('admincontent')





<div class="container-fluid">
  <h1>View Train Schedules</h1>
  @if (Session::has('success'))

      <div class="alert alert-success">{{Session::get('success')}} </div>

      @endif

      @if (Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}} </div>
      @endif
      {{-- new use success & fail message --}}
  <table class="table table-hover " style="width:100%">
    <thead>
      <tr>
        <th style="width:2%">ID</th>
        <th style="width:5%">Date</th>
        <th style="width:13%">Train</th>
        <th style="width:25%">Seats</th>
        <th style="width:7%">Depature</th>
        <th style="width:7%">Destination</th>
        <th style="width:24%">Stations</th>
        <th style="width:5%">Delay</th>
        <!-- <th style="width:7%">Location</th> -->
        <th style="width:5%">Actions</th>
      </tr>
    </thead>
    <tbody>

      @foreach($data['schedules'] as $key=>$schd)
      <tr style="font-size:15px;">
        <td>{{$schd->schedule_id}}</td>
        <td>{{$schd->schedule_date}}</td>
        <td>{{$schd->train_name}}</td>
        <td>
          1<sup>st</sup> class : {{$schd->booked_class_1_seats}} / {{$schd->class_1_seats}} </br>
          2<sup>nd</sup> class : {{$schd->booked_class_2_seats}} / {{$schd->class_2_seats}}</br>
          3<sup>rd</sup> class : {{$schd->booked_class_3_seats}} / {{$schd->class_3_seats}}
        </td>
        <td>
          @foreach($data['stations'] as $st)
          {{$st->st_no==$schd->start_station?$st->st_name:''}}
          @endforeach
          : {{date("H:i:s", strtotime($schd->start_time))}}
        </td>
        <td>
          @foreach($data['stations'] as $st)
          {{$st->st_no==$schd->end_station?$st->st_name:''}}
          @endforeach
          : {{date("H:i:s", strtotime($schd->end_time))}}
        </td>
        <td>
          <?php 
          $array = explode(',', $schd->stations);
          ?>
          @foreach($array as $arr)
          @foreach($data['stations'] as $st)
          {{$st->st_no==$arr?$st->st_name.',':''}}
          @endforeach
          @endforeach
        </td>
        <td>
          {{date("H:i:s", strtotime($schd->delay))}}
        </td>
        <!-- <td>
          @foreach($data['stations'] as $st)
          {{$st->st_no==$schd->track_station?$st->st_name:''}}
          @endforeach
        </td> -->
        <td>
          <div class="dropdown">
            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{ "update_schedule/".$schd->schedule_id }}">Update</a>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delay-modal">Add Delays</a>
              <a class="dropdown-item" href="{{ "reschedule/".$schd->schedule_id }}">Re-schedule</a>
              <!-- <a class="dropdown-item" href="#">Update Location</a> -->
              <a class="dropdown-item" href="{{ "delete_schedule/".$schd->schedule_id }}">Cancelation</a>
            </div>
          </div>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>

  <div class="modal" tabindex="-1" id="delay-modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form action="{{route('delay_schedule')}}" method="post">
        @csrf
      <div class="modal-header">
        <h5 class="modal-title">Update Train Delay</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" value="{{$schd->schedule_id}}">
        <input class="form-control" type="number" name="time" value="00.00">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


</div>
@endsection