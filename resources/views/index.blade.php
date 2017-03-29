@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
               <!--  <div class="panel-heading">{{$text->name}}</div>  -->

                
					{!!$text->body!!}

            
    </div>
</div>
@endsection
