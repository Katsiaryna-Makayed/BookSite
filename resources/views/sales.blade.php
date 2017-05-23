@extends('layouts.app')

@section('content')

<h3 id = "weight-normal">Акции</h3> 
<hr>

@foreach($sale_15 as $one)										
					<div class="col-sm-3 ">				
						<a  href="{{url('book/'.$one->id)}}">
							<div class="good-ref-big">						
								<div class="sale-line">
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="160"  height="220">
								<span>-15%</span>
								</div>
								<div class = "descr-name">{{$one->name}}</div>
								<div class = "descr-author">{{$one->authors->fio}}</div>
								<div class = "descr-price">{{$one->price}}</div>
						
							</div>
						</a>
					</div>
@endforeach 



@foreach($sale_10 as $one)										
					<div class="col-sm-3 ">				
						<a  href="{{url('book/'.$one->id)}}">
							<div class="good-ref-big">						
								<div class="sale-line">
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="160"  height="220">
								<span>-10%</span>
								</div>
								<div class = "descr-name">{{$one->name}}</div>
								<div class = "descr-author">{{$one->authors->fio}}</div>
								<div class = "descr-price">{{$one->price}}</div>
						
							</div>
						</a>
					</div>
@endforeach 

@foreach($sale_5 as $one)										
					<div class="col-sm-3 ">				
						<a  href="{{url('book/'.$one->id)}}">
							<div class="good-ref-big">						
								<div class="sale-line">
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="160"  height="220">
								<span>-5%</span>
								</div>
								<div class = "descr-name">{{$one->name}}</div>
								<div class = "descr-author">{{$one->authors->fio}}</div>
								<div class = "descr-price">{{$one->price}}</div>
						
							</div>
						</a>
					</div>
@endforeach 
@endsection
