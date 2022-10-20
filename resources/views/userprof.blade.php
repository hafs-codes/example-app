<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('/css/userprof.css')}}">
</head>

@extends('navbar')

@section('content')
<style>

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
th,
td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
<body class="userprof">
<div class="container">
<table class="table table-striped">
<thead class="">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Therapist Name</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Phone Number</th>
      <th scope="col">Student Email</th>
      <th scope="col">Approval</th>
      <th scope="col"></th>
    </tr>
</thead>
<?php $i=1;?>
@foreach( $data as  $data)

  <tbody>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td>{{ $data->therapistname}}</td>
      <td>{{ $data->studentname}}</td>
      <td>{{ $data->studentphonenumber}}</td>
      <td>{{ $data->therapistphonenumber}}</td>
    
      @if($data->completion=="rejected")
      <td>Your request was rejected</td>

      <td><a href="{{route('deletedsessions', $data->studentemail)}}"&nbsp; class="btn btn-danger">Delete</a></td>
      @elseif($data->completion=="approved")
      <td>&nbsp;Your request was approved, Contact you're therapist via&nbsp;{{$data->therapistphonenumber}}</td>
      @else
      <td>Pending acceptance&nbsp;</td>

      @endif
      <?php $i=$i+1; ?>
    </tr>
@endforeach
</tbody>
</table>
</div>
</body>
</html>
@endsection