
<DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="favicon.png">
       <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }}</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <head>
    
  </head>
  <body>
   <!--  Bootstrap NavBar -->
    <nav class="navbar navbar-expand-md navbar-dark ">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="{{asset('img/als1.png')}}" width="30" height="30" class="" alt="">
        <span class="sidebar-collapsed" id="menu">
          Alternative Learning System
        </span>
      </a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <!-- This menu is hidden in bigger devices with d-sm-none.
          The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
          <li class="nav-item dropdown d-sm-block d-md-none">
            <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!--   Menu -->
            </a>
            <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
              <a class="dropdown-item" href="{{ url('/home') }}">Dashboard</a>
              <a class="dropdown-item" href="#">Tables</a>
              <a class="dropdown-item" href="#">Form</a>
              <a class="dropdown-item" href="#">About</a>
            </div>
            </li><!-- Smaller devices menu END -->
          </ul>
          <ul class="navbar-nav ml-auto">
            
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">
                {{ __('Login') }}
              </a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">
                {{ __('Register') }}
              </a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
                <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
        </nav><!-- NavBar END -->
<!--         Bootstrap row -->
        <div class="row" id="body-row">
        <!--   Sidebar -->
          <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
      <!--     Bootstrap List Group -->
          <ul class="list-group">
            
          <!--   Menu with submenu -->
            <a href="{{ url('/home') }}" class="bg-dark list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-dashboard fa-fw mr-3"></span>
                <span class="menu-collapsed">Dashboard</span>
              </div>
            </a>
            
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-start align-items-center">
                <span class='fa fa-table fa-fw mr-3'></span>
                <span class="menu-collapsed">Tables</span>
                <span class="submenu-icon ml-auto"></span>
              </div>
            </a>
         <!--    Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
              <a href="{{ url('/enrollees') }}" class="list-group-item list-group-item-action bg-dark text-white">
                <span class="menu-collapsed">Enrollees</span>
              </a>
              <a href="{{ url('/clc') }}" class="list-group-item list-group-item-action bg-dark text-white">
                <span class="menu-collapsed">CLC/Schedule</span>
              </a>
              <a href="{{ url('/graduates') }}" class="list-group-item list-group-item-action bg-dark text-white">
                <span class="menu-collapsed">Passers</span>
              </a>
            </div>
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-wpforms fa-fw mr-3"></span>
                <span class="menu-collapsed">Forms</span>
                <span class="submenu-icon ml-auto"></span>
              </div>
            </a>
            
        <!--     Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
              <a href="{{route('enrollees.enrollee')}}" class="list-group-item list-group-item-action bg-dark text-white">
                <span class="menu-collapsed">Enrollees</span>
              </a>
              <a href="{{route('clcs.clc')}}" class="list-group-item list-group-item-action bg-dark text-white">
                <span class="menu-collapsed">CLC/Schedule</span>
              </a>
              <a href="{{route('graduates.graduate')}}" class="list-group-item list-group-item-action bg-dark text-white">
                <span class="menu-collapsed">Passers</span>
              </a>
              <a href="{{route('module.upload')}}" class="list-group-item list-group-item-action bg-dark text-white">
                <span class="menu-collapsed">Module</span>
              </a>
            </div>
            <a href="{{route('module')}}" class="bg-dark list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-question fa-fw mr-3"></span>
                <span class="menu-collapsed">Module</span>
              </div>
            </a>
            <a href="{{url('/aboutus')}}" class="bg-dark list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-question fa-fw mr-3"></span>
                <span class="menu-collapsed">About Us</span>
              </div>
            </a>
            
            </ul> <!-- List Group END -->
            </div><!-- sidebar-container END -->
        <!--     MAIN -->
            <div class="col">
             
              @yield('content')
            </div>
            </div><!-- Main Col END -->
            <div class="footer">
              <div class="container-fluid">
                <div>
                  <p align="float: left">
                  Copyright © 2019 | All Rights Reserved   |  Powered By: MIC/P SCHOLARS T1     </p>
                </div>
              </div>
            </div>
            </div><!-- body-row END -->
            <!-- <script type="text/javascript">
            Hide submenus
            $('#body-row .collapse').collapse('hide');
            Collapse/Expand icon
            $('#collapse-icon').addClass('fa-angle-double-left');
            Collapse click
            $('[data-toggle=sidebar-colapse]').click(function() {
            SidebarCollapse();
            });
            function SidebarCollapse () {
            $('.menu-collapsed').toggleClass('d-none');
            $('.sidebar-submenu').toggleClass('d-none');
            $('.submenu-icon').toggleClass('d-none');
            $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
            
            Treating d-flex/d-none on separators with title
            var SeparatorTitle = $('.sidebar-separator-title');
            if ( SeparatorTitle.hasClass('d-flex') ) {
            SeparatorTitle.removeClass('d-flex');
            } else {
            SeparatorTitle.addClass('d-flex');
            }
            
            Collapse/Expand icon
            $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
            }
            </script> -->
            <style type="text/css">
            .navbar{
            background-color:    #e6e6e6;
            }
            #navbarDropdown{
            color: black;
            font-family: arial;
            }
            #menu{
            color: black;
            font-family: arial black;
            size:
            }
            #body-row {
            margin-left:0;
            margin-right:0;
            }
            #sidebar-container {
            min-height: 100vh;
            background-color: white;
            padding: 0;
            }
            /* Sidebar sizes when expanded and expanded */
            .sidebar-expanded {
            width: 150px;
            }
            .sidebar-collapsed {
            width: 100px;
            }
          /*   Menu item*/
            #sidebar-container .list-group a {
            height: 50px;
            color: white;
            }
            /* Submenu item*/
            #sidebar-container .list-group .sidebar-submenu a {
            height: 45px;
            padding-left: 30px;
            }
            .sidebar-submenu {
            font-size: 0.9rem;
            }
           /*  Separators */
            .sidebar-separator-title {
            background-color: white;
            height: 35px;
            }
            .sidebar-separator {
            background-color: white;
            height: 25px;
            }
            .logo-separator {
            background-color: white;
            height: 60px;
            }
         /*    Closed submenu icon */
            #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
            content: " \f0d7";
            font-family: FontAwesome;
            display: inline;
            text-align: right;
            padding-left: 10px;
            }
         /*    Opened submenu icon */
            #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
            content: " \f0da";
            font-family: FontAwesome;
            display: inline;
            text-align: right;
            padding-left: 10px;
            }
            .footer{
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: steelblue;
            color: white;
            text-align: center;
            font-family: verdana;
            }
            </style>
          </body>
        </html>

