@extends('layouts.app')

@section('content')
<div class="container">
	@foreach($all as $one) 
	<div align='center'> 
		<h3> {{$one->name}}</h2> 
	</div> 
	<div class="row-fluid col-md-12"> 
		<div class="col-md-4"> 
			
		</div> 
		<div class="col-md-8"> 
			<p>
			Категория: {{$one->category_id}}
			<br>Цена: {{$one->price}}
			<br>Добавлено: {{$one->updated_at}}
			<br>Описание: {{$one->body}} 
			</p> 
		</div> 
	</div> 
	<hr> 
	@endforeach 
</div>
@endsection
