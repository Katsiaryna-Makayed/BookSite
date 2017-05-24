@extends('layouts.app')

@section('content')
<h3 id = "weight-normal">Новые поступления</h3> 
<hr>

					
				@foreach($new_books as $one)										
					<div class="col-sm-3 ">				
						<a  href="{{url('book/'.$one->id)}}">
							<div class="good-ref-big">						
								
								@if($one->sale == "no_sale")
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="160"  height="220">
								@endif	

								@if($one->sale == "sale_5")
								<div class="sale-line" >
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}"width="160"  height="220">
								<span>-5%</span>
								</div>
								@endif	

								@if($one->sale == "sale_10")
								<div class="sale-line" >
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="160"  height="220">
								<span >-10%</span>
								</div>
								@endif	

								@if($one->sale == "sale_15")
								<div class="sale-line" >
								<img src = "{{asset('/public/uploads/'.$one->photo)}}" alt = "{{$one->name}}" width="160"  height="220">
								<span>-15%</span>
								</div>
								@endif	
								
								<div class = "descr-name">{{$one->name}}</div>
								<div class = "descr-author">{{$one->authors->fio}}</div>
								<div class = "descr-price">{{$one->price}}</div>
						
							</div>
						</a>
					</div>
	      		@endforeach    			
	
	

	

@endsection
