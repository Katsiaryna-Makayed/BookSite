@extends('layouts.app')
<link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
@section('content')
<div class="row">
<div class="col-md-5">
<img src = "{{asset('/public/uploads/'.$book->photo)}}" alt = "{{$book->name}} картинка" width="400"  height="400">
</div>


<div class="col-md-7">

	<h2>{{$book->name}}</h2>
	<div>Цена: {{$book->price}}</div>
	<div>Автор: {{$book->authors->fio}}</div>
	<div>Описание: {{$book->description}}</div>
</div>

</div>
<br>
<!--ДРУГИЕ КНИГИ АВТОРА-->	
	<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Другие книги автора </h3>
			</div>
			<div class="panel-body">
				<div class="row">				
					@foreach($author_books as $one)									
						<div class="col-sm-3 ">				
						<a class = "border" href="{{ url('/new') }}">
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
	
	<!--КОММЕНТАРИИ-->
	<h3> Комментарии: </h3>
	
	@if(!Auth::guest())
		<form method="POST">
		<input type="hidden" name="author" value="{{$user->name}}">
		<input type="hidden" name="email" value="{{$user->email}}"><br>
			Ваше сообщение:<br>
		<textarea name="content"></textarea><br>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="submit" class="btn" id="com-btn" value="Отправить">
		</form>
	@else
		<DIV>Для возможности оставлять комментарии необходимо авторизоваться</div>
	@endif
	
	<div class="comments">
		
		@foreach($comments as $comment)	
		<div class="author"><i class=" fa fa-quote-left"></i>  {{$comment->author}}:</div>
		<div class="comment">{{$comment->content}}</div>
		@endforeach


	</div>
	
	
	
	
	
	
	
	

@endsection
 