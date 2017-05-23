@extends('layouts.app')
<link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
@section('content')
<div class="row">
<div class="col-md-4">
<img src = "{{asset('/public/uploads/'.$author->photo)}}" alt = "{{$author->fio}} картинка" width="336"  height="462">
</div>

<div class="col-md-8">
	<h3>{{$author->fio}}</h3>
	<hr>
	
	<div class = "descr-name" id = "f14">Краткие сведения: </div>
	<div class = "descr-name" >{{$author->description}}</div>
</div>

</div>
<br>
<!--ДРУГИЕ КНИГИ АВТОРА-->	
	<div class="panel panel-default">
			<div class="panel-heading">
				<h5 class="panel-title">Другие книги автора </h5>
			</div>
			<div class="panel-body">
				<div class="row">				
					@foreach($author_books as $one)									
						<div class="col-sm-2 ">				
						<a  href="{{url('book/'.$one->id)}}">
							<div class="good-ref-small">						
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="148"  height="204">
								<div class = "descr-name">{{$one->name}}</div>
							</div>
						</a>
						</div>
	      			@endforeach    			
			</div>
			</div>
	</div>
	
	
	
	
	
	
	

@endsection
