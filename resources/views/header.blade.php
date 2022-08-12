<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Megaton</title>
    <meta name="description" content="">
    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">

    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">-->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap core CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset("css/style2.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">

</head>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img class="logo-footer" src="storage/images/logo2.svg" width="100"  height="50" alt="logo-footer" data-at2x="assets/img/logo.png"></a>

        @if(auth()->check() && auth()->user()->status == 'admin'): ?>
            <a class="navbar-brand" href="{{route('dashboard')}}">Admin</a>
        @endif


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/contacts">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/about">About</a>
                </li>
            </ul>

            <form class="form-search" action="/search" method="GET">
                <div class="navbar-nav">
                    <input id="ajaxInputSearch" class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="{{ $s ?? '' }}">
                    <div  style="position:absolute;width: 811px;background-color:white;margin-top:42px;max-height:600px;overflow: auto">
                        <table>
                            <tbody id="ajaxSearchListOfItems">
                            </tbody>
                        </table>
                        <div id="ajaxSearchListOfItemsCount">
                        </div>
                    </div>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
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




