@extends('layouts.app')
<link href="{{asset('public/css/cart.css')}}" type="text/css" rel="stylesheet">
@section('content')  
<section id="cart_items">
    <div class="container">
        <div class="table-responsive cart_info">
            @if(count($cart))
            <table class="table table-condensed">
                <thead>
                     <tr class="cart_menu">
                        <td class="image">Товар</td>
                        <td class="description">Описание</td>
                        <td class="price">Цена</td>
                        <td class="quantity">Количество</td>
                        <td class="total">Общая сумма</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $item)
                    <tr>
                        <td class="cart_product">
                           <img src = "{{asset('public/img/maple.jpg')}}"  width = "100" height = "100">   
                        </td>
                        <td class="cart_description">
                            <a href="">{{$item->name}}</a>                           
                        </td>
                        <td class="cart_price">
                            ${{$item->price}}
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href='{{url("cart?product_id=$item->id&increment=1")}}'>+ </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href='{{url("cart?product_id=$item->id&decrease=1")}}'>-</a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <div class="cart_total_price">${{$item->subtotal}}</div>
                        </td>
                        <td >
                            <a href="{{ url('delete-cart-product/' .$item->rowId) }}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                <p>You have no items in the shopping cart</p>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->
@endsection

