<!doctype html>
<html lang="en">
  <head>
    <title>LaraApp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            
        
        <a class="navbar-brand" href="/">LaraApp</a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/create">Create Post</a>
                    </li>
                @endauth
            </ul>
            <ul class="navbar-nav ml-auto">
                    @if (Auth::check())
                    <li class="nav-item navbar">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                    @else
                    <li class="nav-item navbar">
                            <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item navbar">
                            <a class="nav-link" href="/register">Register</a>
                    </li>
                    @endif
            </ul>
        </div>
    </div>
    </nav>
    <br>