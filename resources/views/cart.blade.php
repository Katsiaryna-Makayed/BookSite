@extends('layouts.app')
<link href="{{asset('public/css/cart.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('public/css/filter.css')}}" type="text/css" rel="stylesheet">
@section('content')  

<section id="cart_items">
	<div class="table-responsive cart_info">
    @if(count($cart))
		<div class="col-md-9 ">		
            <table class="table table-hover">
                <thead>
					<tr class="cart_menu">
                        <td class="image">Товар</td>
                        <td class="description">Описание</td>
                        <td class="price">Цена</td>
                        <td class="quantity">Количество</td>
                        <td class="total">Общая сумма</td>
                    </tr>
                </thead>
				
                <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td class="cart_product">
                           <img src = "{{asset('public/img/maple.jpg')}}"  width="106"  height="146">   
                        </td>
                        <td class="cart_description">
                            <a href="">{{$item->name}}</a>   						
                        </td>
                        <td class="cart_price">
                            ${{$item->price}}
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href='{{url("cart?product_id=$item->id&increment=1")}}'>+</a>
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
                </tbody>
                @endforeach
            </table>
		</div>
		
		<div class="col-md-3 ">
			<div class="panel panel-default">
				<div class="panel-heading">
					<p class="small-header-left" id = "weight-normal">Количество: </p> 
					<p class = "small-header-right">{{$count}}</p>
					<p class="small-header-left" id = "weight-normal">Сумма заказа: </p> 
					<p class = "small-header-right">{{$sum}} руб.</p>
				</div>
				
				<form name="order-info" method="get" action="">
					<div class="panel-body" id="order-panel"> 
                    	<div>
							<p class="small-header-left">Ваше имя: </p>
							<input class = "small-inp" type="text" name="user-name" placeholder=" напр. Виталий">
						</div>
						<div>
							<p class="small-header-left">Номер телефона: </p>
							<input class = "small-inp" type="text" name="user-phone" placeholder=" +375 (29)_ _ _ _ _ _ _">
						</div>
						<div>
							<p class="small-header-center">Способ доставки:</p>
							<div class="radio" id = "deliver">   
								<input id="by-post" type="radio" name="deliver" value="by-post">
								<label for="by-post" id = "deliver">Доставка почтой</label>
								<input id="courier" type="radio" name="deliver" value="courier">
								<label for="courier" id ="deliver" >Доставка курьером</label>
							</div>
						</div>

						<div class = "small-text">Сбор заказа составит 1 день. Подробности доставки уточняются у диспетчера </div>
						<div class = "butt-center">
							<a href=""><button class="btn" id="small">Подтвердить заказ</button></a>
						</div>
					</div>
				</form>
			</div>
		</div>
			
	@else
		<div class = "small-text" id = "bigger">Ваша корзина пуста :( </div>
		<div class = "small-text" id = "bigger">
			Чтобы добавить товар в корзину, воспользуйтесь удобным поиском или выберите книгу из каталога предложенных товаров
		</div>
		<div class = "small-text" id = "bigger">Хороших покупок! </div>
	@endif
	</div>
</section> <!--/#cart_items-->

@endsection