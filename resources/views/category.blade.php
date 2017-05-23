@extends('layouts.app')

@section('content')

<h3 id = "weight-normal">{{$category_one->name}}</h3> 
<hr>
	<div class="row">	
	@foreach($category as $one)
	<div class="col-sm-3 col-xs-3">
		<a class = "border" href="{{url('genre/'.$one->parent_id.'/'.$one->id)}}">
		<div class="good-ref-big">	
		<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="200"  height="200">

		<p class="small-header-center" id = "for-cetegory">{{$one->name}}</p>
		</div>
		</a>
	</div>
    @endforeach
	</div>
	
	
	



@endsection
