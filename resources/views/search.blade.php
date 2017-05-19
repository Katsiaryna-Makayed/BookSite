@extends('layouts.app')

@section('content')
<p>Результаты поиска: </p>

    	@if(isset($categories[0]) || isset($products[0]) || isset($authors[0]))

	    	@if(isset($categories[0]))
			<p>Совпадения по категории:</p>
	    	<div class="row">	
			@foreach($categories as $category)   		
			<div class="col-sm-2 ">				
			<a  href="#">
			<div class="good-ref">						
			<img src = "{{asset('/public/uploads/'.$category->photo)}}"  width="140"  height="140">
			<div class = "descr-name">{{$category->name}}</div>
	
		
			</div>
			</a>
			</div>
	    	@endforeach
			</div>
	    	@endif


	    	@if(isset($products[0]))
	    	<div>Совпадения в списке товаров:</div>
	    	<div class="row">	
			@foreach($products as $product)
			<div class="col-sm-2 ">				
			<a  href="#">
			<div class="good-ref">						
			<img src = "{{asset('/public/uploads/'.$product->photo)}}"  width="140"  height="140">
			<div class = "descr-name">{{$product->name}}</div>
			<div >{{$product->authors->fio}}</div>
			<div class = "descr-price">{{$product->price}}</div>
			</div>
			</a>
			</div>
	    	@endforeach
			</div>
	    	@endif

	    	@if(isset($authors[0]))
	    	<div>Совпадение по автору:</div>
	    	<div class="row">	
			@foreach($authors as $author)
	    	<div class="col-sm-2 ">				
			<a  href="#">
			<div class="good-ref">						
			<img src = "{{asset('/public/uploads/'.$author->photo)}}"  width="140"  height="140">
			<div class = "descr-name">{{$author->name}}</div>
			<div >{{$author->fio}}</div>
			<div class = "descr-price">{{$author->price}}</div>
			</div>
			</a>
			</div>
	    	@endforeach
			</div>
	    	@endif

	    @else
	    	
	    	Совпадений не найдено :(

    	@endif


@endsection
