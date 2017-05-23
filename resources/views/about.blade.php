@extends('layouts.app')

@section('content')

<div class="col-md-9 ">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.5578855165636!2d27.550253615589483!3d53.90406168009969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcfeba0413c91%3A0xe0fb783d2af93747!2z0YPQu9C40YbQsCDQndC10LzQuNCz0LAgMywg0JzQuNC90YHQuiwg0JHQtdC70LDRgNGD0YHRjA!5e0!3m2!1sru!2sru!4v1495557974324" width="820" height="450" frameborder="0" allowfullscreen></iframe>
</div>

<div class="col-md-3 ">
<div class="panel panel-default">
			
			<div class="panel-body">
			<div class="butt-center">
				<img src = "{{asset('public/img/maple.jpg')}}"  width = "150" height = "60">    		
				
				
			</div>
			<hr> 
			<div id = "f14-b" >Адрес:</div>
			<div>  улица Немига 3, Минск, Беларусь</div> 
			<hr> 
			<div id = "f14-b">Режим работы:</div>
			<div >ежедневно с 8:00 до 23:00</div> 
			
			<hr> 
			<div class="btn-group">
				<img src = "{{asset('public/img/contacts/mts.jpg')}}"  width = "20" height = "20" id="ico">    		
				<div id = "f14">  (029) 764-86-45</div>
			</div>
	<div class="btn-group">
				<img src = "{{asset('public/img/contacts/velcom.jpg')}}"  width = "20" height = "20" id="ico">    		
				<div id = "f14">  (044) 890-34-53</div>
			</div>

	<hr> 
				
							
			
			</div>
</div>
</div>



<!--
<address> 


	<strong>Company, Inc.</strong><br> 
	some street<br> 
	some adrress<br> 
	<hr> 
		<abbr title="Phone">P:</abbr> МТС (029) 764-86-45<br> 
		<abbr title="Phone">P:</abbr> VELCOM (044) 890-34-53<br> 
		<abbr title="Phone">P:</abbr> LIFE (025) 742-45-90<br> 
	<hr> 
	<p> 
		Every day 09.00 – 19.00 
	</p> 
	
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.5577076887384!2d27.5502536152653!3d53.904064840490925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcfeba0413c91%3A0xe0fb783d2af93747!2z0YPQu9C40YbQsCDQndC10LzQuNCz0LAgMywg0JzQuNC90YHQuiwg0JHQtdC70LDRgNGD0YHRjA!5e0!3m2!1sru!2sru!4v1495382404694" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>	
</address> -->
@endsection