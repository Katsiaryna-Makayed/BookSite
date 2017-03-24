@extends('layouts.app')

@section('content')
<div class="container">
  <div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
  <li class="active"><a href="#tab1" data-toggle="tab">Детектив</a></li>
  <li><a href="#tab2" data-toggle="tab">Фантастика</a></li>
  <li><a href="#tab2" data-toggle="tab">Справочнки</a></li>
  <li><a href="#tab2" data-toggle="tab">Бизнес-литература</a></li>
  <li><a href="#tab2" data-toggle="tab">Детская литература</a></li>
  </ul>
  <div class="tab-content">
  <div class="tab-pane active" id="tab1">
  <p>Детективы...</p>
	<img src = "public/img/book1.png" alt = "Картинка" width="100" height="100">  
  
  </div>
  <div class="tab-pane" id="tab2">
  <p>Фантастика...</p>
  </div>
  </div>
</div>
        
</div>
@endsection
