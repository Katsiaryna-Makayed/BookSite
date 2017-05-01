@extends('layouts.app')
<link href="{{asset('public/css/filter.css')}}" type="text/css" rel="stylesheet">
@section('content')


<div class="row">
<h2>Все книги категории </h2>

<div class="col-md-2">
	<div class="panel panel-default" >
				<div class="panel-heading">
					<h4 class="panel-title" id="filter">Фильтры</h4>
				</div>	
				
				<div class="panel-body" id="filter-panel">
				
				<p>Популярность</p>
						
				<div class="radio">
				<input id="popular-first" type="radio" name="popularity" value="popular-first">
				<label for="popular-first">популярные сначала</label>
				<input id="popular-last" type="radio" name="popularity" value="popular-last">
				<label for="popular-last">популярные в конце</label>
				</div>
				
				<p>Обложка</p>				
				<div class="checkbox">				
				<input id="soft-cover" type="checkbox" name="cover" value="soft-cover">
				<label for="soft-cover">мягкая обложка</label>				
				<input id="cardboard" type="checkbox" name="cover" value="cardboard">
				<label for="cardboard">картоная</label>				
				<input id="hard-cover" type="checkbox" name="cover" value="hard-cover">
				<label for="hard-cover">твердая обложка</label>
				</div>
				
				<p>Год выхода</p>
				<div class="radio">
				<input id="new-first" type="radio" name="year" value="new-first">
				<label for="new-first">сначала новые</label>
				<input id="new-last" type="radio" name="year" value="new-last">
				<label for="new-last">сначала старые</label>
				</div>
				
				<p>Цена</p>
				<div class="radio">
				<input id="price-up" type="radio" name="price" value="price-up">
				<label for="price-up">возрастание цены</label>
				<input id="price-down" type="radio" name="price" value="price-down">
				<label for="price-down">убывание цены</label>
				</div>
				
				<p>Наличие</p>
				<div class="checkbox">				
				<input id="storage" type="checkbox" name="availability" value="storage">
				<label for="storage">на складе</label>				
				<input id="order" type="checkbox" name="availability" value="order">
				<label for="order">под заказ</label>				
				</div>				
				<button class="btn" id="small">Применить</button></a>
				
				</div>
	</div>




</div>


<div class="col-md-10">

@foreach($books as $product) 
		<div class="col-sm-4">
			<p>{{$product->authors->fio}} - {{$product->name}}</p>
			<img src = "{{asset('/public/uploads/'.$product->photo)}}" alt = "{{$product->name}} Картинка" width="250"  height="150">
			<div class="btn-group">
			<a href="{{url('book/'.$product->id)}}"><button class="btn" id="small">Просмотр</button></a>
			<form method="POST" action="{{url('cart')}}">
				<input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-fefault add-to-cart" id="small">
                <i class="fa fa-shopping-cart"></i> В корзину</button>
				
            </form>   
			</div> 
			
		</div>
@endforeach

</div>  
  </div> 
@endsection



