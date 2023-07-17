@extends('admin_layout')

@section('admincontent')

<h1>View Train admin</h1>





<table class="table table-hover ">
    <thead>
      <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>NIC</th>
        <th>Department</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($admin as $admin)

      <tr>

        <td>{{$admin['user_id']}}</td>
        <td>{{$admin['first_name']}} {{$admin['last_name']}}.</td>
        <td>{{$admin['email']}}</td>
        <td>{{$admin['tp_number']}}</td>
        <td>{{$admin['nic']}}</td>
        <td>{{$admin['department']}}</td>
        <td>{{$admin['address']}}</td>
        <td><a href="{{ "edit_admin/".$admin['st_no'] }}" class="btn btn-primary">Edit</a></td>
        <td><a href="{{ "delete_admin/".$admin['st_no'] }}" class="btn btn-danger">Delete</a></td>
        
      </tr>
      @endforeach
    </tbody>
  </table>




@endsection
