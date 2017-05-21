@extends('layouts.app')
<link href="{{asset('public/css/filter.css')}}" type="text/css" rel="stylesheet">
@section('content')

<h3>Все книги категории</h3> 
<hr>
    <div class="col-md-2">
     
		<div class="panel panel-default" >
            <div class="panel-heading">
              <h3 class="panel-title">Фильтры</h3>
            </div>  
            <form name="filter" method="get" action="/filter/{{$category->parent_id}}/{{$category->id}}">
                <div class="panel-body" id="filter-panel"> 
                    
                    <p class="small-header-center">Популярность</p>
                    <div class="radio">   
                        <input id="popular-first" type="radio" name="popularity" value="popular-first">
                        <label for="popular-first">возрастание</label>
                        <input id="popular-last" type="radio" name="popularity" value="popular-last">
                        <label for="popular-last">убывание</label>
                    </div>
                    
                    <p class="small-header-center" >Новизна</p>

                    <div class="radio">
                        <input id="new-first" type="radio" name="year" value="new-first">
                        <label for="new-first">возрастание</label>
                        <input id="new-last" type="radio" name="year" value="new-last">
                        <label for="new-last">убывание</label>
                    </div>
                    
                    <p class="small-header-center">Цена</p>

                    <div class="radio">
                        <input id="price-up" type="radio" name="price" value="price-up">
                        <label for="price-up">возрастание</label>
                        <input id="price-down" type="radio" name="price" value="price-down">
                        <label for="price-down">убывание</label>
                    </div>
                    
                    <p class="small-header-center">Наличие</p>

                    <div class="checkbox">        
                        <input id="storage" type="checkbox" name="availability" value="storage">
                        <label for="storage">на складе</label>        
                        <input id="order" type="checkbox" name="availability" value="order">
                        <label for="order">под заказ</label>
                    </div>   
					<div class = "butt-center">
						<a href=""><button class="btn" id="small">Применить</button></a>
					</div>
                </div>
            </form>
        
		</div>
    </div>
              
    <div class="col-md-10">
 
        @foreach($books as $product) 
            <div class="col-sm-4">
                			
						<a  href="{{url('book/'.$product->id)}}">
							<div class="good-ref-big">						
								<img src = "{{asset('/public/uploads/'.$product->photo)}}" alt = "{{$product->name}}" width="160"  height="220">
								<div class = "descr-name">{{$product->name}}</div>
								<div class = "descr-author">{{$product->authors->fio}}</div>
								<div class = "descr-price">{{$product->price}}</div>
						
							</div>
						</a>
					
               
                      
            </div>
        @endforeach

    </div>  

@endsection

