@extends('layouts.app1')
@section('content')
<div class="body"></div>
<div class="row">
    
    <form  action="/imagen" method="POST" enctype="multipart/form-data" >
  <div class="form-group">{{ csrf_field() }}
    <label for="imagen">Example file input</label>
    <input type="file" class="form-control-file" id="imagen" name="imagen" required>
    <input type="submit" value="Guardar">
  </div>
</form>   
</div>

<div class="row">
    
  
</div>

@endsection