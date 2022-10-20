<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="stylesheet" href="{{asset('/css/articles.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
</head>

<body>
@extends('navbar')

@section('content')

    <section id="articles">

        <div class="article-heading">
            <h3>My Blogs</h3>
        </div>

        <div class="article-container">

            <div class="article-box">

                <div class="img">
                    <img src="{{URL('/images/promise.jpg')}}" alt="Article">
                </div>

                <div class="text">
                    <span>21 June 2022 / Trial Run</span>
                    <a href="" class="article-title">Make a Promise</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi mollitia, officia repellat saepe suscipit animi tempora, placeat
                        necessitatibus nam similique labore tenetur! Natus, eveniet. Neque nobis
                        animi nesciunt quas molestias.</p>
                        <a href="">Continue Reading</a>

                </div>

            </div>

            <div class="article-box">

                <div class="img">
                    <img src="{{URL('/images/lonely.jpg')}}" alt="Article">
                </div>

                <div class="text">
                    <span>21 June 2022 / Trial Run</span>
                    <a href="" class="article-title">Feeling left Out?</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi mollitia, officia repellat saepe suscipit animi tempora, placeat
                        necessitatibus nam similique labore tenetur! Natus, eveniet. Neque nobis
                        animi nesciunt quas molestias.</p>
                    <a href="">Continue Reading</a>
                </div>

            </div>

            <div class="article-box">

                <div class="img">
                    <img src="{{URL('/images/academia.jpg')}}" alt="Article">
                </div>

                <div class="text">
                    <span>21 June 2022 / Trial Run</span>
                    <a href="" class="article-title">Can be Stressful, Right?</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi mollitia, officia repellat saepe suscipit animi tempora, placeat
                        necessitatibus nam similique labore tenetur! Natus, eveniet. Neque nobis
                        animi nesciunt quas molestias.</p>
                    <a href="">Continue Reading</a>
                </div>

            </div>

            <div class="article-box">

                <div class="img">
                    <img src="{{URL('/images/grief.jpg')}}" alt="Article">
                </div>

                <div class="text">
                    <span>21 June 2022 / Trial Run</span>
                    <a href="" class="article-title">Cry, everyone does.</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi mollitia, officia repellat saepe suscipit animi tempora, placeat
                        necessitatibus nam similique labore tenetur! Natus, eveniet. Neque nobis
                        animi nesciunt quas molestias.</p>
                    <a href="">Continue Reading</a>
                </div>

            </div>

            <div class="article-box">

                <div class="img">
                    <img src="{{URL('/images/helping.jpg')}}" alt="Article">
                </div>

                <div class="text">
                    <span>21 June 2022 / Trial Run</span>
                    <a href="" class="article-title">How to be a Helping Hand</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi mollitia, officia repellat saepe suscipit animi tempora, placeat
                        necessitatibus nam similique labore tenetur! Natus, eveniet. Neque nobis
                        animi nesciunt quas molestias.</p>
                    <a href="">Continue Reading</a>
                </div>

            </div>

        </div>

    </section>
</body>
</html>
@endsection
