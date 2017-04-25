@extends('layouts.app')

@section('content')
<div class="container">
	<h2>{{$book->name}}</h2> <!-- взять из бд-->  

	<div class="row">

		<img src = "{{asset('/public/uploads/'.$book->photo)}}" alt = "{{$book->name}} картинка" width="150"  height="150">
		<p>Цена: {{$book->price}}</p>
		<p>Автор: {{$book->author}}</p>


		<p>Описание: {{$book->description}}</p>


	

  
        
</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Другие книги автора </h3>
			</div>
			<div class="panel-body">
				<div class="row">
				@foreach($author_books as $one)
					<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="150"  height="150">
      			@endforeach
				</div>
			</div>
		</div>





@if(!Auth::guest())

<form method="POST">
<input type="hidden" name="author" value="{{$user->name}}">
<input type="hidden" name="email" value="{{$user->email}}"><br>
Ваше сообщение:<br>
<textarea name="content"></textarea><br>
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="submit" value="Отправить">
</form>
@else 
Чтобы Вы могли оставлять комментарий, зарегистрируйтесь!!
@endif

		<div class="comments">
<ul>
@foreach($comments as $comment)
<li>Автор: {{$comment->author}}<br>{{$comment->content}}</li>
@endforeach
</ul>
</div>
</div>

@endsection
 