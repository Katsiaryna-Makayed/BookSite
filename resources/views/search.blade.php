@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<!-- with('category', $category)->with('product', $product)->with('author', $author); -->
    	@if(isset($categories[0]) || isset($products[0]) || isset($authors[0]))

	    	@if(isset($categories[0]))
	    	категории:
	    	@foreach($categories as $category)

	    		{{$category->name}}
	    	@endforeach
	    	@endif



	    	@if(isset($products[0]))
	    	продукты:
	    	@foreach($products as $product)

	    		{{$product->name}}
	    	@endforeach
	    	@endif



	    	@if(isset($authors[0]))
	    	авторы:
	    	@foreach($authors as $author)

	    		{{$author->fio}}
	    	@endforeach
	    	@endif

	    @else
	    	
	    	не найдено

    	@endif
    </div>
</div>
@endsection
