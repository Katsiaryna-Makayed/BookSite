@extends('layouts.app')

@section('content')

<div class="headline"> Акции</div> 



<div class="sale15">
    <img src="{{asset('public/img/car5.jpg')}}" width = "200", height = "200">
    <span>-15%</span>
</div>

<div class="sale15">
    <img src="{{asset('public/img/car5.jpg')}}" width = "200", height = "200">
    <span>-15%</span>
</div>

<div class="sale15">
    <img src="{{asset('public/img/22.png')}}" width = "200", height = "200">
    <span>-10%</span>
</div>

with('sale_5', $sale_5)->with('sale_10', $sale_10)->with('sale_15', $sale_15);


@endsection
