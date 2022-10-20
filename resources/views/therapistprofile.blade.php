@extends('therapistlayout')

@section('content')


<style>
  /* body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;} */

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  left      : 50%;
  top       : 50%;
  position  : absolute;
  transform : translate(-50%, -50%);
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: white;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {

  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

  .inf-content {
    border: 1px solid #DDDDDD;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
  }

.uploadimage{
  display:hidden;
}
</style>



@if (Session::has('firstname'))
<?php $email =  session('email')?>
<div class="container bootstrap snippets bootdey">
  <div class="panel-body inf-content">
    <div class="row">
      <div class="col-md-4">

        <div class="form-popup" id="uploadimage">
        <form action="{{route('uploadimage',$email)}}" method="post" enctype="multipart/form-data" >
                @csrf
          <input type="file" name="timage" placeholder="ADD YOUR PICTURE"></input>
          <button type="submit" class="btn btn-primary">Submit</button>
          
        </form>
</div>
@if (Session::has('images'))
<?php $img=session('images')?>
        <img alt="Profile Image Not Available" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="{{url('/storage/timage/'.$img)}}" data-original-title="Usuario">
       @else

       <button onclick="imageForm()" class="btn btn-warning">Add image</button>
        @endif
        <ul title="Ratings" class="list-inline ratings text-center">
          <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
        </ul>
      </div>
      <div class="col-md-6">
        <strong>{{session('firstname')}}'s user information</strong><br>
        <div class="table-responsive">
          <table class="table table-user-information">
            <tbody>

              <tr>
                <td>
                  <strong>
                    <span class="glyphicon glyphicon-user  text-primary"></span>
                    Name
                  </strong>
                </td>
                <td class="text-primary">
                  {{session('firstname')}}
                </td>
              </tr>
              <tr>
                <td>
                  <strong>
                    <span class="glyphicon glyphicon-cloud text-primary"></span>
                    Lastname
                  </strong>
                </td>
                <td class="text-primary">
                  {{session('lastname')}}
                </td>
              </tr>

              <tr>
                <td>
                  <strong>
                    <span class="glyphicon glyphicon-bookmark text-primary"></span>
                    Email
                  </strong>
                </td>
                <td class="text-primary">
                  {{session('email')}}
                </td>
              </tr>


              <tr>
                <td>
                  <strong>
                    <span class="glyphicon glyphicon-eye-open text-primary"></span>
                    Phone number
                  </strong>
                </td>
                <td class="text-primary">
                  {{session('phonenumber')}}
                </td>
              </tr>

              <tr>
                <td>
                  <strong>
                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                    created at
                  </strong>
                </td>
                <td class="text-primary">
                  {{session('created_at')}}
                </td>
              </tr>
              <tr>
                <td>
                  <strong>
                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                    updated at
                  </strong>
                </td>
                <td class="text-primary">
                  {{session('updated_at')}}
                </td>
              </tr>
              <tr>
                <td>
                  <strong>
                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                    Bio
                  </strong>
                </td>
                <td class="text-primary">
                  @if (Session::has('bio'))
                  {{session('bio')}}
                  @else
                  <button onclick="openForm()" class="btn btn-primary">ADD BIO</button>
                  @endif
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="form-popup" id="myForm">
  <form action="{{route('bio')}}" class="form-container" method="post">
    @csrf
    <h1>BIO</h1>
    <input type="text" value="Write down you're achievment/love of mental health etc" readonly>
<br>
    <textarea class="biotextarea"placeholder="I started..."  name="bio"></textarea>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

@else
<h1>USER NOT LOGGED IN</h1>
@endif
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function imageForm() {
  document.getElementById("uploadimage").style.display = "block";
}
</script>
@endsection