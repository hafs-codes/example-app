<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('/css/logintherapist.css')}}">
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
                    <h2>Therapist Login</h2>
                    <form action="{{route('logintherapist')}}" method='POST'>
                    @csrf
                        <div class="inputBox">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" placeholder="Your Password">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Login">
                        </div>
                        <p class="forget">Forgot Password?<a href=""> Click Here</a></p>
                        <p class="forget">New Here?<a href="/regtherapist"> Create an Account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>