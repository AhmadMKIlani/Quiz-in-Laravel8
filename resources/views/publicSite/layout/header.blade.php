<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link href="{{asset('https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css')}}" rel="stylesheet">
   <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('public-style/css/style.css')}}">
</head>

<body>
   <!-- Start Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
         <a class="navbar-brand" href="{{asset('/')}}">
            <img src="{{asset('public-style/img/logo.svg')}}" alt="Turtles">
         </a>
         <ul class="navbar-nav me-auto ">
            <li class="nav-item">
               <a class="nav-link" href="{{asset('about')}}">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{asset('pdashboard')}}">Categories</a>
            </li>
         </ul>
         <div>
            @if (Route::has('login'))

                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                       <a  class="btn secondaryBtn me-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      this.closest('form').submit();">
                          {{ __('Log Out') }}</a>
                  </form>
                    @else
                        <a href="{{ route('login') }}" class="btn secondaryBtn me-1">Login</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn primaryBtn">Sign Up</a>
                        @endif
                    @endauth

            @endif
         </div>
      </div>
   </nav>