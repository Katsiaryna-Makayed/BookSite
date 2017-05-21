@extends('layouts.app')

@section('content')
<p>Результаты поиска: </p>

    	@if(isset($categories[0]) || isset($products[0]) || isset($authors[0]))

	    	@if(isset($categories[0]))
			<p>Совпадения по категории:</p>
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
	    	<div>Совпадения в списке товаров:</div>
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

	    	@if(isset($authors[0]))
	    	<div>Совпадение по автору:</div>
	    	<div class="row">	
			@foreach($authors as $author)
	    	<div class="col-sm-3 ">				
			<a  href="#">
			<div class="good-ref-big">					
			<img src = "{{asset('/public/uploads/'.$author->photo)}}"  width="160"  height="220">
			<div >{{$author->fio}}</div>
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
