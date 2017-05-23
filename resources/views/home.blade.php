@extends('layouts.app')
<link href="{{asset('public/css/carousel.css')}}" type="text/css" rel="stylesheet">
@section('content')

<div id="testCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#testCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#testCarousel" data-slide-to="1"></li>
		<li data-target="#testCarousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">
		<div class="item active">
			<img src="{{asset('public/img/car5.jpg')}}">
			<div class="carousel-caption">«Люди перестают мыслить, когда перестают читать»<br>Дени Дидро</div>
		</div>
		<div class="item">
			<img src="{{asset('public/img/car2.jpg')}}" alt="...">
			<div class="carousel-caption">
				«Книги рождают мечту, вызывают ее к жизни, заставляют размышлять, воспитывают самостоятельность суждений»<br> 
				С.Г. Струмилин
			</div>
		</div>
		<div class="item">
			<img src="{{asset('public/img/car1.jpg')}}" alt="...">
			<div class="carousel-caption">
				«Чтение – это один из истоков мышления и умственного развития»<br>
				В.А. Сухомлинский
			</div>
		</div>
	</div>

	<a class="left carousel-control" href="#testCarousel" role="button" data-slide="prev" id = "arrows">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#testCarousel" role="button" data-slide="next" id = "arrows">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
	  
<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5 class="panel-title">Скидки 5-15%</h5>
			</div>
				
			<div class="panel-body">
				<div class="row">				
				@foreach($sale_books as $one)										
					<div class="col-sm-3 col-xs-3">				
						<a  href="{{url('book/'.$one->id)}}">
							<div class="good-ref-small">						
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="106"  height="146">
								<div class = "descr-name">{{$one->name}}</div>
								<div class = "descr-author">{{$one->authors->fio}}</div>
								<div class = "descr-price">{{$one->price}} руб.</div>
						
							</div>
						</a>
					</div>
	      		@endforeach    			
				</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5 class="panel-title">Новые поступления</h5>
			</div>
			<div class="panel-body">
				<div class="row">				
				@foreach($new_books as $one)										
					<div class="col-sm-3 col-xs-3">				
						<a  href="{{url('book/'.$one->id)}}">
							<div class="good-ref-small">						
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="106"  height="146">
								<div class = "descr-name">{{$one->name}}</div>
								<div >{{$one->authors->fio}}</div>
								<div class = "descr-price">{{$one->price}} руб.</div>
							</div>
						</a>
					</div>
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
				<div class="row">				
				@foreach($pop_books as $one)										
					<div class="col-sm-6 ">				
						<a  href="{{url('book/'.$one->id)}}">
							<div class="good-ref-small">						
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="106"  height="146">
								<div class = "descr-name">{{$one->name}}</div>
								<div >{{$one->authors->fio}}</div>
								<div class = "descr-price">{{$one->price}} руб.</div>
							</div>
						</a>
					</div>
	      		@endforeach    			
				</div>
			</div>
		</div>
	</div>  
@endsection