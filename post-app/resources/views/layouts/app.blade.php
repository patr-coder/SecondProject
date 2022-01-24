<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashbord </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="">post</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    @auth (auth()->user())
                        <li class="nav-item ">
                            <a class="nav-link " href="">patrick </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="">logout</a>
                        </li>
                    @endauth
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('login') }}">login</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{ route('register') }}">register</a>
                        </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="" async defer></script>
</body>

</html>
