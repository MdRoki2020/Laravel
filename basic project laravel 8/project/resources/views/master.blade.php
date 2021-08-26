<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laravel Project</title>
    <style>
        .footer {
            background: darkgray;
            position: absolute;
            width: 100%;
            font-family: cursive;
            padding: 4px 11px;
            margin-top: 15px;
        }
        .profile {
            width: 130px;
            border: 1px solid black;
            margin: auto;
            margin-top: 20px;
        }
        .profileName {
            font-family: cursive;
            margin-top: 10px;
        }
        .post1 {
            margin-top: 40px;
        }
        .like {
            font-size: 30px;
            margin-top: 10px;
        }
        .comment {
            font-size: 30px;
            float: right;
            margin-top: 5px;
        }
        .post1 p {
            font-family: cursive;
        }
        .col-md-6.extra {
            margin-bottom: 311px;
        }
        .login h1 {
            font-family: cursive;
            margin-top: 20px;
        }
        .title h1{
            font-family: cursive;
        }
        .updateBtn {
            margin-bottom: 161px;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Cars Earth <i class="fas fa-car"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            @if(!session('currentUser'))
                <li class="nav-item">
                    <a class="nav-link" href="/signup">Resister<span class="sr-only"></span></a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="/">Home<span class="sr-only"></span></a>
            </li>
            @if(session('currentUser'))
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
            @endif
                @if(session('currentUser'))
                    <li class="nav-item">
                        <a class="nav-link" href="/students">Students</a>
                    </li>
                @endif
            @if(session('currentUser'))
                <li class="nav-item">
                    <a class="nav-link" href="/logout">logout</a>
                </li>
            @endif
            @if(!session('currentUser'))
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            @endif
        </ul>
    </div>
</nav>


<div class="container">
    @yield('content')
</div>

<div class="footer">
    <p>@Copyright 2021</p>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
