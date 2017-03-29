<!DOCTYPE html>
<html lang="en">
<head>
    <title>Интернет-магазин</title>
  <!-- Styles -->

 <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('/media/bootstrap/css/bootstrap-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('/media/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('/css/general.css')}}" type="text/css" rel="stylesheet">


  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}  -->
</head>

<body >
<div class="container">   
<img src = "public/img/1.jpg" alt = "Картинка">           
          
 <!-- Authentication Links -->
                    @if (Auth::guest())
                         <a href="{{ url('/login') }}">Вход</a>
                        <a href="{{ url('/register') }}">Регистрация</a>
                    @else
                           <a href="#" >
                            {{ Auth::user()->name }} 
                            </a>
                            <a href="{{ url('/logout') }}">Logout</a>                                                    
                    @endif

<form class="form-search">
<input tyoe="text" class="span3 search-query" placeholder="Поиск...">
<button class="btn">Найти</button>
</form>
     
<nav class="navbar navbar-default navbar-static-top">		
	    <ul class="nav navbar-nav">
			<li><a href="{{ url('/') }}">На главную</a></li>
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Категории
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				@foreach($catalogs as $one)
				<li><a href="{{url('genre/'.$one->id)}}">{{$one->name}}</a></li>
				@endforeach
			   
			</ul>
		  </li>
		  
		  <li><a href="{{ url('/sales') }}">Акции</a></li>
		  <li><a href="{{ url('/new') }}">Новинки</a></li>
		  <li><a href="{{ url('/ourcontacts') }}">Контакты</a></li>
		  <li><a href="{{ url('/basket') }}">Корзина</a></li>
		</ul>              
        </div>
    </nav>

    @yield('content')

    <hr>
    <footer>
        <p>&copy; Company 2016</p>
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
