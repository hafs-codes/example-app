@extends('adminlayout')
@section('content')
<div style="top:-30px;">
<table class="table table-striped">
<thead class="">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Email</th>
      <th scope="col">CV</th>
      <th scope="col">Approval</th>
      <th scope="col"></th>
    </tr>
</thead>
<?php $i=1;?>
@foreach( $data as  $data)
  <tbody>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td>{{ $data->firstname}}</td>
      <td>{{ $data->email}}</td>
      @if($data->myfile=="NO CV")
      <td> NO CV</td>
      @else
      <td><a href="{{route('download',$data->myfile) }}"> Download</a></td>
      @endif
      @if($data->approval=="rejected")
      <td>REJECTED</td>
      <td><a href="{{route('delete', $data->id)}}"&nbsp; class="btn btn-danger">Delete</a></td>
      @elseif($data->approval=="approved")
      <td>&nbsp;APPROVED</td>
      @else
      <td><a href="{{route('approve', $data->id)}}"class="btn btn-primary" >Approve</a>&nbsp;</td>
      <td><a href="{{route('reject', $data->id)}}"class="btn btn-primary" >Reject</a></td>
      @endif
      <?php $i=$i+1; ?>
    </tr>
@endforeach
</tbody>
</table>
</div>
@endsection