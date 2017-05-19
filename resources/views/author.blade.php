@extends('layouts.app')
<link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
@section('content')
<div class="row">
<div class="col-md-5">
<img src = "{{asset('/public/uploads/'.$author->photo)}}" alt = "{{$author->fio}} картинка" width="400"  height="400">
</div>


<div class="col-md-7">

	<h2>{{$author->fio}}</h2>
	<div>Краткие сведения: {{$author->description}}</div>
</div>

</div>
<br>
<!--ДРУГИЕ КНИГИ АВТОРА-->	
	<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"> Книги автора: </h3>
			</div>
			<div class="panel-body">
				<div class="row">				
					@foreach($author_books as $one)									
						<div class="col-sm-3 ">				
						<a class = "border" href="{{url('book/'.$one->id)}}">
						<div class="good-ref">						
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="150"  height="150">
								<div>{{$one->name}}</div>						
						</div>
						</a>
						</div>
	      			@endforeach    			
			</div>
			</div>
	</div>
	
	
	
	
	
	
	

@endsection
