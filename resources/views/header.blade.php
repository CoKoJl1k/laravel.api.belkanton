<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Carousel Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <style>
          /*
          .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              user-select: none;
          }

          @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                  font-size: 3.5rem;
              }
          }*/
          #myCarousel{
              height: 600px;
          }
          .container.marketing{
              margin-top: 20px;
          }

          .container.alert-message{
             position:relative;
              top:80px;
             z-index: 1;
          }
      </style>
 </head>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">

        @if(auth()->check() && auth()->user()->status == 'admin'): ?>
            <a class="navbar-brand" href="{{route('dashboard')}}">ADMIN DASHBOARD</a>
        @endif
        <a class="navbar-brand" href="/">MEGATON</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav me-auto mb-2 mb-md-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contacts">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about">About us</a>
                </li>
                <!--
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="feedback">Feedback</a>
                </li>
-->
                <!--
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Admin</a>
                </li>
                -->
            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            @if(auth()->check())
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                        <a class="nav-link px-3" href="/">{{auth()->user()->email}}</a>
                    </div>
                </div>

                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                        <a class="nav-link px-3" href="{{route('logout')}}">Sign out</a>
                    </div>
                </div>
            @else
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                        <a class="nav-link px-3" href="{{route('registration.index')}}">Registration</a>
                    </div>
                </div>

                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                        <a class="nav-link px-3" href="{{ route('login.index') }}">Sign in</a>
                    </div>
                </div>

            @endif
        </div>
    </div>
</nav>
@include('errors')
@include('success_message')

<body>




