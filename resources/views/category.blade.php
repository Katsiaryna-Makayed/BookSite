@extends('layouts.app')

@section('content')

  
<h2>{{$category_one->name}}</h2> <!-- взять из бд-->  

	
	
	
	<div class="row" id = "row0">
	@foreach($category as $one)
		<a href="{{url('genre/'.$one->parent_id.'/'.$one->id)}}" class="good-ref"> 
		<div  id = "row1" >
		<img src = "{{asset('public/img/category/novel.jpg')}}"   width="150"  height="150">
		<p>{{$one->name}}</p>
		</div>
		</a>
    @endforeach
	</div>
	
	



@endsection

<!--<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}} картинка" width="150"  height="150">
			
			
			добавить в бд поле для иллюстрации
			НЕ РАБОТАЮТ СТРАНИЦЫ С КАТЕГОРИЯМИ-->