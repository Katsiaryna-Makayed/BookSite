<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Интернет-магазин</title>
			<!-- Styles -->

				<link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
				<link href="{{asset('/media/bootstrap/css/bootstrap-responsive.css')}}" rel="stylesheet">
				<link href="{{asset('/media/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
				<link href="{{asset('/css/general.css')}}" type="text/css" rel="stylesheet">
				<link href="{{asset('public/css/general.css')}}" type="text/css" rel="stylesheet">
	</head>

<body >
	<div class="container">   

		<div class="panel panel-default">
			<div class="panel-body">
				 <div class="row">
					<div class="col-md-5">
						<img src = "public/img/maple.jpg"  width = "230" height = "100">            
					</div>
					
					<div class= "col-md-4 col-md-offset-3 ">
						@if (Auth::guest())
							<a  href="{{ url('/login') }}">Вход</a>
							<a  href="{{ url('/register') }}">Регистрация</a>
						@else
                            <a href="#" >
                            {{ Auth::user()->name }} 
							</a>
                            <a href="{{ url('/logout') }}">Logout</a>                                                    
						@endif
						<br>
						<form class="form-search">
				<input type="text" class="span3 search-query" placeholder="Поиск...">
				<button class="btn">Найти</button>
				</form>	
											
					</div>		
				</div>   
				
			
			<div class="row" >
				<a class = "ref" href="{{ url('/') }}">На главную</a>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Категории
						<span class="caret"></span></a>
							<ul class="dropdown-menu">
								@foreach($catalogs as $one)
								<li><a href="{{url('genre/'.$one->id)}}">{{$one->name}}</a></li>
								@endforeach
			   
							</ul>
				</li>
				<a class = "ref" href="{{ url('/sales') }}">Акции</a>
				<a class = "ref" href="{{ url('/new') }}">Новинки</a>
				<a class = "ref" href="{{ url('/ourcontacts') }}">Контакты</a>
				<a class = "ref" href="{{ url('/basket') }}">Корзина</a>
				
				
			            
       </div >
		<DIV class="slider">


				
		 @yield('content')				
			
			</div>
		
			<div class="panel-footer">&copy; Company 2016</div>
		</div>	
	</div>
	
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>
</html>
