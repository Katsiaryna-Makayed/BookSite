@extends('layouts.app')
<link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">
@section('content')
<div class="row">

<div class="col-md-4">
<img src = "{{asset('/public/uploads/'.$book->photo)}}" alt = "{{$book->name}} картинка" width="336"  height="462">
</div>


<div class="col-md-8">

	<h3>{{$book->name}}</h3>
	<hr>
	<div>Цена: {{$book->price}}</div>
	<div>Автор: <a href="{{url('author/'.$book->authors_id)}}">{{$book->authors->fio}}</a></div>
	<div>Описание: {{$book->description}}</div>
	                    <form method="POST" action="{{url('cart')}}">
                        <input type="hidden" name="product_id" value="{{$book->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-fefault add-to-cart" id="small">
                            <i class="fa fa-shopping-cart"></i> В корзину
                        </button>
                        
                    </form> 
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
	
	<!--КОММЕНТАРИИ-->
	<h3> Комментарии: </h3>
	@if(isset($message))
	<p>$message
	ваоплывапоыэвапы
	</p>
	@endif
	@if(!Auth::guest())
		<form method="POST">
		<input type="hidden" name="user_id" value="{{$user->id}}">
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
		<div class="author"><i class=" fa fa-quote-left"></i>  {{$comment->user->name}}:</div>
		<div class="comment">{{$comment->content}}</div>
		@endforeach


	</div>
	
	
	
	
	
	
	

@endsection
