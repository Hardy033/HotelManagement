<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"rel="stylesheet">
    <link href="css/jquery.datetimepicker.min.css" rel="stylesheet"/>
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{url('index')}}">HR Hotel</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{url('index')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{url('room')}}" class="nav-link">Rooms</a></li>
	          <li class="nav-item"><a href="{{url('restaurant')}}" class="nav-link">Restaurant</a></li>
	          <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
            
              @if(Route::has('login'))
              
              @auth

              <li class="nav-item"><a href="{{url('myreservation')}}" class="nav-link">My Booking</a></li>
              <x-app-layout></x-app-layout>

              
              @else
              <li class="nav-item"><a href="{{route('login')}}" class="nav-link">login</a></li>
	          <li class="nav-item"><a href="{{route('register')}}" class="nav-link">register</a></li>

              @endauth

              @endif

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->