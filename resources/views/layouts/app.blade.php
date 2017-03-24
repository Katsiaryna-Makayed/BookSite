<!DOCTYPE html>
<html lang="en">
<head>
    <title>Интернет-магазин</title>
  <!-- Styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}  
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
		<li class="active"><a href="{{ url('/') }}">На главную</a></li>
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Категории
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('/') }}">Детективы</a></li>
          <li><a href="{{ url('/') }}">Фантастика</a></li>
          <li><a href="{{ url('/') }}">Справочники</a></li>
		  <li><a href="{{ url('/') }}">Религия. Мистика. Эзотерика</a></li>		  
		  <li><a href="{{ url('/') }}">Бизнес-литература</a></li>
		  <li><a href="{{ url('/') }}">Детская литература</a></li>
		  <li><a href="{{ url('/') }}">Ужасы</a></li>
        </ul>
      </li>
      
	  <li><a href="{{ url('/') }}">Акции</a></li>
	  <li><a href="{{ url('/') }}">Новинки</a></li>
	  <li><a href="{{ url('/') }}">Контакты</a></li>
      <li><a href="{{ url('/') }}">Корзина</a></li>
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
