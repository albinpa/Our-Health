<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Our-Health') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="{{ asset('css/base.css') }}" rel="stylesheet">
</head>

<body class="antialiased">

   
        <div class="page-hero bg-image overlay-dark" style="background-image: url(images/bg_image_1.jpg);margin-top: -24px">
        <div
        class="relative flex items-top  min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 ">
        @if (Route::has('login'))
        <div class="hidden top-0 right-0 px-6 py-4 sm:block" style="align-items:end;">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

            <div class="hero-section">
              
                <div class="container text-center ">
                    <span class="subhead">Let's make your life happier</span>
                    <h1 class="display-4">Healthy Living</h1>
                    <a href="/home" class="btn btn-primary">Let's Consult</a>
                </div>
            </div>
        </div>


        <div class="bg-light">
            <div class="page-section py-3 mt-md-n5 custom-index">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4 py-3 py-md-0">
                            <div class="card-service wow fadeInUp">
                                <div class="circle-shape bg-secondary text-white">
                                    <span class="mai-chatbubbles-outline"></span>
                                </div>
                                <p><span>Chat</span> with a doctors</p>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 py-md-0">
                            <div class="card-service wow fadeInUp">
                                <div class="circle-shape bg-primary text-white">
                                    <span class="mai-shield-checkmark"></span>
                                </div>
                                <p><span>One</span>-Health Protection</p>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 py-md-0">
                            <div class="card-service wow fadeInUp">
                                <div class="circle-shape bg-accent text-white">
                                    <span class="mai-basket"></span>
                                </div>
                                <p><span>One</span>-Health Pharmacy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .page-section -->

            <div class="page-section pb-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 py-3 wow fadeInUp">
                            <h1>Welcome to Your Health <br> Center</h1>
                            <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam
                                earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo,
                                excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
                            
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                            <div class="img-place custom-img-1">
                                <img src="images/bg-doctor.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .bg-light -->
        </div> <!-- .bg-light -->
        @include('layouts.footer')



    </div>
    </div>
    </div>
</body>

</html>