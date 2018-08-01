@extends('layouts.app')
@section('content')
<div class="body"></div>
<div class="row">
	
	
			
			<div class="panel-body login">
			 <!--<form  method='POST'  action='{{route('login')}}' clas="mx-auto" >-->
			 	<form  method='POST'  action="{{route('login')}}" clas="mx-auto" >
            {{ csrf_field()}}
 			 <div class="form-group ">
    			
   				 <input 
   				 type="text" 
   				 name="user"  
   				 placeholder="Usuario">
   				 <br>
   				 {!!$errors->first('user','<span class="help-block">:message</span>')!!}
 
  			</div>
 			<div class="form-group ">
   			
   				 <input
   				  type="password" 
   				  name="password"
   				  placeholder="Contraseña">
   				  <br>
   				   {!!$errors->first('password','<span class="help-block">:message</span>')!!}
 			</div>
 			 <!--<div class="form-group form-check">
   	         <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
             <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label>
 			 </div>-->
 			 <button type="submit" class="btn btn-primary">Ingresar</button>
			</form>
			</div>
		
		
	
</div>

@endsection