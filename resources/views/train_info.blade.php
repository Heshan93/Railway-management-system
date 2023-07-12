@extends('layout')

@section('content')

<h1>Train Info {{$item[0]->tc_number}}</h1>

<table class="table">
    <th>
        <th>Train Status</th>
        <th>Arrival time</th>
        <th>Departure time</th>
        <th>Train Station</th>
        <th>Current Locations</th>
        <th>Delays Time</th>
        <th>Delays Arrival Time</th>  
    </th>
@foreach ($item as $item)

<tr>
    <td> {{$item->status}}</td>
    <td> {{$item->st_arr_time}}</td>
    <td> {{$item->st_dep_time}}</td>
    <td> {{$item->st_name}}</td>
    <td> {{$item->arrv_in}}</td>
    <td> {{$item->delays}}</td>
    <td> {{$item->end_dly_at}}</td>
</tr>

@endforeach
   

    
    
</table>

@endsection