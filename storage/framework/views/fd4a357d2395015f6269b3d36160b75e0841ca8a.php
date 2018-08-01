<?php $__env->startSection('content'); ?>
 <form  action="/tipoGasto" method="POST"  >
  <?php echo e(csrf_field()); ?>

<div class="register">
<div class="row">
  <div class="col" style="padding: 32px 0 0 0;">
    <label for="fecha">Fecha:</label>
    <input name="fecha" id="date" type="date">
    </div>
 <div class="col">
  <div class="form-group">
            <label for="tipoGasto">Tipo Gasto</label>
            <select class="form-control" name="tipoGasto">
               <?php $__currentLoopData = $tipoGasto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gasto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option name="tipoGasto"><?php echo e($gasto->Detalle); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </select>
        </div>
    </div>

  
</div>
<div class="row">
     <label for="egreso">Egreso:</label>
      <input type="double" name="egreso">
    </div>
    <div class="row">
      <div class="col">
         <div class="form-group" style="margin-left: -16px;
    margin-top: 21px;">
            <label for="placa">Placa</label>
            <select class="form-control" name="placa">
              
                <option name="placa"><?php echo e('PTC021'); ?></option>
                
              
            </select>
        </div>
      </div>
      <div class="col">
        <label for="transporte">Transporte:</label>
          <input type="text" value="1323" name="transporte" style="border: none;"><br>
          <label for="persona1">Persona1:</label>
          <input type="text" value="Nombre1" name="persona[]" style="border: none;"><br>
           <label for="persona2">Persona2:</label>
          <input type="text" value="Nombre2" name="persona[]" style="border: none;"><br>
           <label for="persona3">Persona3:</label>
          <input type="text" value="Nombre3" name="persona[]" style="border: none;"><br>
          
      </div>
      
    </div>
    <div class="row">
       <label class="form-check-label" for="descuento">Aplica Descuento </label>
      <div >
    <input type="radio" name="descuento" id="descuento" value="SI" checked>
      <label for="descuento"> SI </label>
    </div>
<div >
  <input  type="radio" name="descuento" id="descuento" value="NO">
  <label for="descuento"> No </label>
</div>
    </div>
    <div class="row">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="nombre[]" value="nombre1">
        <label class="form-check-label" for="nombre1">nombre1</label>
    </div>
  </div>  
  <div class="row">
<div class="form-check ">
  <input class="form-check-input" type="checkbox" name="nombre[]" value="nombre2">
  <label class="form-check-label" for="nombre2">nombre2</label>
</div>
</div>
<div class="row">
<div class="form-check ">
  <input class="form-check-input" type="checkbox" name="nombre[]" value="nombre3">
  <label class="form-check-label" for="nombre3">nombre3</label>
</div>
    </div>
    <input type="submit" value="Guardar">
    </div>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>