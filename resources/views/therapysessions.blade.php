@extends('therapistlayout')

@section('content')


<div style="top:-30px;">

<table class="table ">
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
      <td>{{ $data->studentemail}}</td>
    
      @if($data->completion=="rejected")
      <td>REJECTED</td>

      <td><a href="{{route('deletesessions', $data->therapistemail)}}"&nbsp; class="btn btn-danger">Delete</a></td>
      @elseif($data->completion=="approved")
      <td>&nbsp;APPROVED</td>
      @else
      <td><a href="{{route('approvesessions', $data->therapistemail)}}"class="btn btn-primary" >Approve</a>&nbsp;</td>
      <td><a href="{{route('rejectsessions', $data->therapistemail)}}"class="btn btn-primary" >Reject</a></td>
      @endif
      <?php $i=$i+1; ?>
    </tr>
@endforeach
</tbody>
</table>
</div>
@endsection