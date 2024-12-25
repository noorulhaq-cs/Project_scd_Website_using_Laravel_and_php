<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoldWare</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .carousel-item {
            height: 60vh;
            min-height: 300px;
        }
        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>
 
    <header class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('frontend/pictures/logo.png')}}" alt="Brand logo " style="width: 120px;"></a>

        {{-- <div class="search-bar">
            <input 
                type="text" 
                class="form-control" 
                id="product-search" 
                name="query" 
                placeholder="Search for products...">
            
            <div id="product-results" class="row mt-0">
                <!-- Results will be loaded dynamically here -->
            </div>
        </div>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="search-bar">
            <input 
                type="text" 
                id="product-search" 
                name="query" 
                placeholder="Search for products..." 
                class="form-control">
            <button class="search-button">Search</button>
        </div>
        
        <div id="product-results" class="row mt-0">
            <!-- Results will be loaded dynamically here -->
        </div>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/Shirts')}}" >SHIRTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/Men')}}">MEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/Women')}}">WOMEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/About')}}">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/Contact')}}">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">LOG IN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">SIGN UP</a>
                </li>
            </ul>
        </div>
    </header>
    