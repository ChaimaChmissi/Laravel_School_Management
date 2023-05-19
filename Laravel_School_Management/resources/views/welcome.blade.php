<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Management System</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        .button {
            /* COLOR FROM SELECTED ITEMS */
            background: #7963e5;
            border-radius: 99px;
            box-shadow: #7963e5 0 10px 20px -10px;
            box-sizing: border-box;
            color: #ffffff;
            cursor: pointer;
            font-family: Poppins, sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            opacity: 1;
            outline: 0 solid transparent;
            padding: 8px 18px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: fit-content;
            word-break: break-word;
            border: 0;
        }

        .button:hover {
            /* COLOR FROM SELECTED ITEMS */
            color: #7963e5;
            background-color: white;
        }

        .home {
            background: radial-gradient(ellipse at center, hsla(269, 69%, 46%, 0.3), transparent 70%);
            width: 100%;
        }

        .homeImage {
            width: 50%;
            height: auto;
            max-height: 550px;
            left: 50%;
            top: -90px;
            position: relative;
        }

        .homeimage02 {
            width: 50%;
            height: auto;
            max-height: 550px;
            padding-right: -60%;
            bottom: -70px;
            position: relative;
            background: radial-gradient(ellipse at center, hsla(269, 69%, 46%, 0.3), transparent 70%);
            right: 190px;
        }

        .title1 {
            font-family: Poppins, sans-serif;
            font-size: 50px;
            color: #3a3d53;
            position: relative;
            margin-top: -450px;
            bottom: 1px;
            left: 190px;
        }

        .title2 {
            font-family: Poppins, sans-serif;
            font-size: 50px;
            color: #3a3d53;
            position: relative;
            margin-top: -450px;
            bottom: -70px;
            left: 290px;
            padding-left: 50%;
        }

        .descripton1 {
            font-family: Poppins, sans-serif Impact, Haettenschweiler, "Arial Narrow light", sans-serif;
            font-size: 20px;
            color: #3a3d53;
            position: relative;
            left: 190px;
            top: 25px;
            text-align: bottom;
        }

        h3 {
            color: #7963e5;
            font-size: 30px;
            text-align: center;
            top: 100px;
            position: relative;
        }

        .descripton2 {
            font-family: Poppins, sans-serif Impact, Haettenschweiler, "Arial Narrow light", sans-serif;
            font-size: 20px;
            color: #3a3d53;
            position: relative;
            left: 290px;
            padding-left: 50%;
            bottom: -100px;
        }

        @media only screen and (max-width: 768px) {
            .home {
                background: none;
            }

            .homeImage {
                width: 100%;
                max-height: none;
                height: auto;
                top: 0;
                left: 0;
            }

            .homeimage02 {
                width: 100%;
                max-height: none;
                height: auto;
                bottom: 0;
                right: 0;
            }

            .title1,
            .title2,
            .descripton1,
            .descripton2 {
                text-align: center;
                left: 0;
                right: 0;
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .title2 {
                padding-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="home">
        <img src="../images/Saly-19.svg" class="homeImage" />
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <button class="button">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </button>
            @else
            <button class="button">
                <a href="{{ url('login') }}">Log in</a>
            </button>
            @if (Route::has('register'))
            <button class="button">
                <a href="{{ url('register') }}">Register</a>
            </button>
            @endif
            @endauth
        </div>
        @endif
        <h1 class="title1">
            Investing In <br />Your Knowledge <br />
            <span>and</span>
            <span style="color: #7963e5"> Your Future</span>
        </h1>
        <h2 class="descripton1">
            Learn With us anytime, anywhere . Let's hone your skills <br />
            and be professionnal , with certified mentors <br />
            and competitive prices.
            <br />
            <br />
        </h2>
        <h3>We Calloborate With Top Companies</h3>
        <x-PartnersList></x-PartnersList>
        <div class="container2">
            <img src="../images/Saly-32.svg" alt="" class="homeimage02" />
            <h1 class="title2">
                from anywhere <br />
                <span> build your</span> <br />
                <span style="color: #7963e5"> bright career.</span>
            </h1>
            <h2 class="descripton2">
                Learn With us anytime, anywhere . Let's hone your skills <br />
                and be professionnal , with certified mentors <br />
                and competitive prices.
                <br />
                <br />
            </h2>
        </div>
        <Footer></Footer>
    </div>
</body>

</html>
