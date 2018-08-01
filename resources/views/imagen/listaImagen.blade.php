@extends('layouts.app1')
@section('content')
<div class="body"></div>
<div class="row">
   

 @foreach($imagen as $img)
  <div clas="col-md-4">
  	<div class="panel panel-default">
  		<div class="panel-body">
  			<!-- <form  action="/imagen" method="POST" enctype="multipart/form-data" >-->
           <form   >
  				<div class="form-group">{{ csrf_field() }}
   				<!--<img src="/{{$img->ruta}}" class="img-responsive">-->
          <a href="/tipoGasto">
   				 <img src="<?php echo asset("storage/$img->ruta")?> "  class="img-fluid img-thumbnail" alt="..."></img>
</a>
                </div>
             </form>   
  			

  		</div>
  		
  	</div>
  	
  </div>
 @endforeach 
  
</div>

@endsection