@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

	<div class="btn-group">
	<button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Сортировка по цене<span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Возрастание</a></li>
      <li><a href="#">Убывание</a></li>      
	</ul>
	</div>
	<div class="btn-group">
	<button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Сортировка по дате<span class="caret"></span></button>
	<ul class="dropdown-menu">
      <li><a href="#">Сначала новые</a></li>
      <li><a href="#">Сначала старые</a></li>      
	</ul>
	</div> 

  </div> 
  
   <div class="col-sm-3 col-xs-3">
    <p>Книг</p>
	<img src = "public/img/book2.jpg" alt = "Картинка" width="200"  height="100">
	
	<div class="btn-group">
  <button class="btn">Просмотр</button>
  <button class="btn">В корзину</button>
  
</div>
  </div>
  <div class="col-sm-3 col-xs-3">
    <p>Еще одна</p>
	<img src = "public/img/book2.jpg" alt = "Картинка" width="200"  height="100">
	
	<div class="btn-group">
  <button class="btn">Просмотр</button>
  <button class="btn">В корзину</button>
  
</div>
  </div>
  <div class="col-sm-3 col-xs-3">
    <p>И еще одна</p>
	<img src = "public/img/book2.jpg" alt = "Картинка" width="200"  height="100">
	
	<div class="btn-group">
  <button class="btn">Просмотр</button>
  <button class="btn">В корзину</button>
  
</div>
  </div>
  
  
    </div>
  
</div>
@endsection
