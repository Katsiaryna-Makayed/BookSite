@extends('layouts.app')

@section('content')
<h3 id = "weight-normal">Результаты поиска </h3> 
<hr>
    	@if(isset($categories[0]) || isset($products[0]) || isset($authors[0]))

	    	@if(isset($categories[0]))
				
			<div id = "f14">Совпадения по категории:</div>
	    	<div class="row">	
			@foreach($categories as $category)   		
			<div class="col-sm-3 ">				
			<a  href="#">
			<div class="good-ref-big">	
			<img src = "{{asset('/public/uploads/'.$category->photo)}}" alt = "{{$category->name}}" width="200"  height="200">
			<p class="small-header-center" id = "for-cetegory">{{$category->name}}</p>
			</div>

			</a>
			</div>
	    	@endforeach
			</div>
	    	@endif


	    	@if(isset($products[0]))
	    	<div id = "f14">Совпадения в списке товаров:</div>
	    	<div class="row">	
			@foreach($products as $product)
			<div class="col-sm-3 ">				
						<a  href="{{url('book/'.$product->id)}}">
							<div class="good-ref-big">						
								<img src = "{{asset('/public/uploads/'.$product->photo)}}" alt = "{{$product->name}}" width="160"  height="220">
								<div class = "descr-name">{{$product->name}}</div>
								<div class = "descr-author">{{$product->authors->fio}}</div>
								<div class = "descr-price">{{$product->price}}</div>
						
							</div>
						</a>
					</div>
	    	@endforeach
			</div>
	    	@endif
		<div id = "f14">Совпадения по автору:</div>
	    	@if(isset($authors[0]))
	    	<div class="row">	
			@foreach($authors as $author)
	    	<div class="col-sm-3 ">				
			<a  href="{{url('author/'.$author->id)}}">
			<div class="good-ref-big">					
			<img src = "{{asset('/public/uploads/'.$author->photo)}}"  width="160"  height="220">
			<div class = "descr-name">{{$author->fio}}</div>
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
