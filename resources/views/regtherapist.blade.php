<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register As A Therapist</title>
    <link rel="stylesheet" href="{{asset('/css/regtherapist.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                <a href="/home" class="logo"><i class='bx bx-arrow-back'></i>MindVibe</a>
                    <h2>Therapist Registration</h2>
                  
                    
            

                <form action="{{route('therapists.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="inputBox">
                            <input type="text" name="firstname" placeholder="First Name">
                        </div>
                        <div class="inputBox">
                            <input type="text" name="lastname" placeholder="Last Name">
                        </div>
                        <div class="inputBox">
                          <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="inputBox">
                            <input type="tel" name="phonenumber"placeholder="Enter Your Phone number">
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" placeholder="Your Password">
                        </div>
                        <div class="inputBox">
                            <input type="file" id="myfile" name="myfile" mutliple placeholder="Attach CV">
                        </div>
                        <div class="inputBox">
                            <input type="submit"value="Register">
                        </div>
                        <p class="login">Already Have an Account?<a href="/logintherapist"> Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>