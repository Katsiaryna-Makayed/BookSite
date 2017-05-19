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
				<link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
	</head>

<body >
	<div class="container" id ="wrap" >   
				 <div class="row">
					<div class="col-md-1 ">
						<img src = "{{asset('public/img/maple.jpg')}}"  width = "200" height = "80">            
					</div>					
					<div class= "col-md-11 ">
						
						<div class="block">
						@if (Auth::guest())
							<i class="fa fa-sign-in"> <a  class = "logging-in" href="{{ url('/login') }}">Вход</a></i>
							<i class="fa fa-pencil"><a  class = "logging-in" href="{{ url('/register') }}">Регистрация</a></i>
						@else
							<i class="fa fa-book"><a class = "logging-in" href="#" >{{ Auth::user()->name }}</a></i>
                            <i class="fa fa-sign-out"><a class = "logging-in" href="{{ url('/logout') }}">Logout</a></i>                                                 
						@endif										
						</div>
						
					<div class="navig-bar">
						<a class = "ref" href="{{ url('/') }}">На главную</a>
				
						<span class="dropdown">
						<a class = "ref" href="{{ url('/#') }}" data-toggle="dropdown" class="dropdown-toggle">Категории
						<b class="caret"></b></a>
						<ul class="dropdown-menu">
							@foreach($catalogs as $one)
								<li><a href="{{url('genre/'.$one->id)}}">{{$one->name}}</a></li>
							@endforeach
						</ul>
						</span>	
				
						<a class = "ref" href="{{ url('/sales') }}">Акции</a>
						<a class = "ref" href="{{ url('/new') }}">Новинки</a>
						<a class = "ref" href="{{ url('/ourcontacts') }}">Контакты</a>
						<a class = "ref" href="{{ url('/cart') }}">Корзина</a>
						
					<form class="search" name="search" action="{{url('/search')}}" method="post">
					{{ csrf_field() }} 
					<input type="text" name="search" placeholder="Поиск...">
					<button type="submit"></button>
					</form>
						
					</div >
					</div>	
			</div> 
			
			<div class="breadcrumbs">
            	<ol class="breadcrumb">
            		<li><a href="{{ url('/') }}">Главная</a></li>
            		
            		@if(isset($second))
	            		<li><a href="{{url('#')}}">{{$second}}</a></li>
	            	@endif


	                @if(isset($book))
	                	<li><a href={{url('genre/'.$book->categories->parent_id.'/'.$book->categories->id)}}>{{$book->categories->name}}</a></li>
	                	<li><a href={{url('author/'.$book->authors->id)}}>{{$book->authors->fio}}</a></li>
	                	
	                	<li><a href={{url('book/'.$book->id) }}>{{$book->name}}</a></li>
	                @endif


	                @if(isset($category))
	                <li class="active">
	                	<a href={{url('genre/'.$category->id)}}>{{$category->name}}</a>
	                </li>
		                @if(isset($category2))
		                <li class="active">
		                	<a href={{url('genre/'.$category->id.'/'.$category2->id)}}>
		                	{{$category2->name}}</a>
		                </li>
		                @endif
	                @endif

	                @if(isset($authorBread))
	                <li class="active">
	                	<a href={{url('author/'.$authorBread->id)}}>{{$authorBread->fio}}</a>
	                </li>
	                @endif
	                


            	</ol>
        	</div>
		@yield('content')		
	</div> 
	<div class="container">   
	<footer> 
		&copy; Maple Bookshop 2017
	<footer>
	</div>		
	
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>



</html>