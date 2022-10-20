<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   
</head>
<body>

@extends('navbar')

@section('content')

    <section class="home">

        <div class="image">
            <img src="{{URL('/images/joyride.svg')}}" alt="">
        </div>

        <div class="content">
            <h3>We are here for you, mental wise</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dolorem ea accusamus, 
               veritatis unde quia sapiente at aliquam pariatur nihil! Ipsum animi eum consequuntur
                perspiciatis provident praesentium est delectus impedit!</p>

                <a href="/chat" class="btn"> Chat Now <span class="bx bx-chevron-right"></span></a>
        </div>
    </section>

    <section class="icons-container">

        <div class="icons">
            <i class='bx bxs-time'></i>
            <h3>Chatbot</h3>
            <p>Chat with our Chatbot and have confidential and helpful conversations.</p>
        </div>

        <div class="icons">
            <i class='bx bxs-user-circle'></i>
            <h3>50+ Approved Therapists and Specialists</h3>
            <p>Recommended Therapist, ready to engage with you. Book your session now at subsidized rates.</p>
        </div>

        <div class="icons">
            <i class='bx bxs-bookmarks'></i>
            <h3>200+ Mental Health Articles</h3>
            <p>Interact with avail Articles on various topics concerning mental health. Recommend as well through our Feedback section.</p>
        </div>

    </section>

    <section class="about" id="about">

        <h1 class="heading"><span>about</span>us</h1>

        <div class="row">

            <div class="image">
                <img src="{{URL('/images/team.svg')}}" alt="">
            </div>

            <div class="content">
                <h3>Here to serve because you are important</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto facilis molestias non 
                   dolorum cupiditate sequi ea, dolor, tempore numquam nesciunt exercitationem quos temporibus 
                   voluptatibus reiciendis voluptatum! Cumque porro aliquid eos.
                </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis velit eius quas magnam,
                    quam illo neque non culpa? Eveniet atque expedita obcaecati libero ullam quibusdam accusantium 
                    beatae, laudantium perspiciatis facilis!
                </p>

            </div>
        </div>

    </section>

    <section class="articles">

        <h1 class="heading">some <span>articles</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class='bx bx-bowl-hot'></i>
                <h3>Eating Disorder</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam itaque accusamus facilis</p>
                <a href="" class="btn">Read More <span class="bx bx-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class='bx bx-sad'></i>
                <h3>Dealing with sadness and grief?</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam itaque accusamus facilis</p>
                <a href="" class="btn">Read More <span class="bx bx-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class='bx bx-angry'></i>
                <h3>Anger!!</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam itaque accusamus facilis</p>
                <a href="" class="btn">Read More <span class="bx bx-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class='bx bx-meh-blank'></i>
                <h3>Feeling lost</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam itaque accusamus facilis</p>
                <a href="" class="btn">Read More <span class="bx bx-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class='bx bx-male-female'></i>
                <h3>Relationships</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam itaque accusamus facilis</p>
                <a href="" class="btn">Read More <span class="bx bx-chevron-right"></span></a>
            </div>

        </div>
    </section>



    <section class="feedback" id="feedback">

        <h1 class="heading"><span>give</span> feedback</h1>

        <div class="row">

            <div class="image">
                <img src="{{URL('/images/feedback.svg')}}" alt="">
            </div>

            <form action="">
                <h3>Share your feedback with us</h3>
                <input type="email" placeholder="Your Email" class="box">
                <input type="text" placeholder="Topic" class="box">
                <input type="text" placeholder="Your Comment/Question" class="box">
                <input type="submit" value="Submit" class="btn">

            </form>
        </div>
    </section>

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>contact info</h3>
                <a href=""><i class='bx bx-phone-call'></i>0711223344</a>
                <a href="{{ URL('https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=mentalvibe@gmail.com') }}"><i class='bx bx-envelope' ></i>mindvibe@gmail.com</a>
                <a href=""><i class='bx bx-current-location'></i>Nairobi, Kenya</a>
            </div>

            <div class="box">
                <h3>created by</h3>
                <p>Created by <span>Brenda & Hafsa</span> | all rights reserved</p>
                <h3>Important links</h3>
                <a href="/regtherapist"><i class='bx bx-clipboard'></i>Register to be a Therapist</a>
                <a href="/logintherapist"><i class='bx bxs-lock-open-alt'></i>Login as Therapist</a>
                <a href="/adminlogin"><i class='bx bxs-lock-open-alt'></i>Admin Login</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href=""><i class='bx bxl-facebook' ></i>Facebook</a>
                <a href=""><i class='bx bxl-twitter' ></i>Twitter</a>
                <a href=""><i class='bx bxl-instagram-alt' ></i>Instagram</a>
            </div>
        </div>
    </section>

    <script src="{{asset('/js/home.js')}}"></script>
</body>
</html>
@endsection