@extends('admin_layout')

@section('admincontent')

<h1>View Train Stations</h1>




<table class="table table-hover ">
    <thead>
      <tr>
        <th>Train ID</th>
        <th>Train Name</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($stations as $stations)
      <tr>

        <td>{{$stations['st_no']}}</td>
        <td>{{$stations['st_name']}}</td>
        <td><a href="{{ "edit_stations/".$stations['st_no'] }}" class="btn btn-primary">Edit</a></td>
        <td><a href="{{ "delete_stations/".$stations['st_no'] }}" class="btn btn-danger">Delete</a></td>
        
      </tr>
      @endforeach
    </tbody>
  </table>




@endsection
