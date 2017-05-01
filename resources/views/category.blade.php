@extends('layouts.app')

@section('content')

  
<h2>{{$category_one->name}}</h2> <!-- взять из бд-->  

	
	
	
	<div class="row">	
	@foreach($category as $one)
	<div class="col-sm-2 col-xs-3">
		<a class = "border" href="{{url('genre/'.$one->parent_id.'/'.$one->id)}}">
		<div class="good-ref">							
		<img src = "{{asset('public/img/category/novel.jpg')}}"   width="150"  height="150">
		<p>{{$one->name}}</p>
		</div>
		</a>
	</div>
    @endforeach
	</div>
	
	
	



@endsection

<!--<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}} картинка" width="150"  height="150">
			
			
			добавить в бд поле для иллюстрации
			НЕ РАБОТАЮТ СТРАНИЦЫ С КАТЕГОРИЯМИ-->