@extends('layouts.app')
<link href="{{asset('public/css/carousel.css')}}" type="text/css" rel="stylesheet"
@section('content')

<div id="testCarousel" class="carousel slide" data-ride="carousel">
	
	<ol class="carousel-indicators">
		<li data-target="#testCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#testCarousel" data-slide-to="1"></li>
		<li data-target="#testCarousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">
	
		<div class="item active">
			<img src="{{asset('public/img/car1.jpg')}}" alt="...">
			<div class="carousel-caption">
				...
			</div>
		</div>
		
		<div class="item">
			<img src="{{asset('public/img/car2.jpg')}}" alt="...">
			<div class="carousel-caption">
				...
			</div>
		</div>
		
		<div class="item">
			<img src="{{asset('public/img/car3.jpg')}}" alt="...">
			<div class="carousel-caption">
				...
			</div>
		</div>
	</div>

	<a class="left carousel-control" href="#testCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#testCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
	  
	<div class="row">
<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Скидки 5-10%</h3>
				</div>
				
				<div class="panel-body">
					<div class="row" id = "row0">
						@foreach($sale_books as $one)
							<a class="good-ref">
							<div  id = "row1" >
							<div><img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="150"  height="150"></div>
							<div id="row2">{{$one->name}}</div>
							<div id="row2">{{$one->authors->fio}}</div>
							<div id="row2">{{$one->price}}</div>
							</div></a>
						@endforeach
						
					</div>
				</div>
			</div>
		
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Новые поступления</h3>
					</div>
				<div class="panel-body">
					<div class="row" id = "row0">
						@foreach($new_books as $one)
						<a class="good-ref">
							<div  id = "row1" >
							<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="150"  height="150">
							<div id="row2">{{$one->name}}</div>
							<div id="row2">{{$one->authors->fio}}</div>
							<div id="row2">{{$one->price}}</div>
							</div></a>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-4 ">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title">Популярные товары</h5>
				</div>
			<div class="panel-body ">
				<div class="row" id = "row0">
					@foreach($pop_books as $one)
					
					<a class="good-ref">
					<div  id = "row1" >
						<img src = "{{asset('/public/uploads/thumb'.$one->picture)}}" alt = "{{$one->name}}" width="140"  height="140">
						<div id="row2">{{$one->name}}</div>
						<div id="row2">{{$one->authors->fio}}</div>
					<div id="row2">{{$one->price}}</div></div></a>
	      			@endforeach
	      			
				</div>
			</div>
			</div>
		</div>
		</div>  
	  
	  
	  
	  

@endsection