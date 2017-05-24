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
	<div class = "descr-name" id = "f14"><a href="{{url('author/'.$book->authors_id)}}"> {{$book->authors->fio}}, {{$book->year}}  </a></div>
	<div class = "descr-name" id = "f18">{{$book->price}} руб.</div>
	<div class = "descr-name" id = "f14">Описание: </div>
	<div class = "descr-name" >{{$book->description}}</div>
	                    <form method="POST" action="{{url('cart')}}">
                        <input type="hidden" name="product_id" value="{{$book->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <div class = "butt-center" id = "with-margin">
					   <button type="submit" class="btn btn-fefault add-to-cart" id="big-button">
                            <i class="fa fa-shopping-cart"></i> В корзину
                       </button>
                        </div>
                    </form> 
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
	
	<!--КОММЕНТАРИИ-->
	
	@if(isset($message))
	<p>$message
	</p>
	@endif
	@if(!Auth::guest())
	<h4>Оставить комментарий: </h4>	
	<form method="POST">
		<input type="hidden" name="user_id" value="{{$user->id}}">
			
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
