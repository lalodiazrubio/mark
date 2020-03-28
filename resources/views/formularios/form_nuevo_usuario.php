

<div class="row">


<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <h3 class="box-title">Nuevo Usuario del Sistema</h3>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div>



<form  id="f_nuevo_usuario"  method="post"  action="agregar_nuevo_usuario" class="form-horizontal form_entrada" >                
  
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              


<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="nombre">Nombres*</label>
                      <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" >
</div>
<div class="form-group col-xs-6">
                      <label for="apellido">Apellidos</label>
                      <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" >
</div>

<div class="form-group col-xs-6">
                      <label for="pais">Entidad</label>
                      
                     
                       <select id="pais" name="pais" class="form-control">
                                          <option value="0">Oficinas Nacionales</option>
                                          <option value="1">Aguascalientes</option>
                                          <option value="2">Baja California</option>
                                          <option value="3">Baja California Sur</option>
                                          <option value="4">Campeche</option>
                                          <option value="5">Chiapas</option>
                                          <option value="6">Chihuahua</option>
                                          <option value="7">Coahuila</option>
                                          <option value="8">Colima</option>
                                          <option value="9">Distrito Federal</option>
                                          <option value="10">Durango</option>
                                          <option value="11">Guanajuato</option>
                                          <option value="12">Guerrero</option>
                                          <option value="13">Hidalgo</option>
                                          <option value="14">Jalisco</option>
                                          <option value="15">México</option>
                                          <option value="16">Michoacan</option>
                                          <option value="17">Morelos</option>
                                          <option value="18">Nayarit</option>
                                          <option value="19">Nuevo León</option>
                                          <option value="20">Oaxaca</option>
                                          <option value="21">Puebla</option>
                                          <option value="22">Querétaro</option>
                                          <option value="23">Quintana Roo</option>
                                          <option value="24">San Luis Potosí</option>
                                          <option value="25">Sinaloa</option>
                                          <option value="26">Sonora</option>
                                          <option value="27">Tabasco</option>
                                          <option value="28">Tlaxcala</option>
                                          <option value="29">Tamaulipas</option>
                                          <option value="30">Veracruz</option>
                                          <option value="31">Yucatán</option>
                                          <option value="32">Zacatecas</option>
                     
                      </select>
                 
                    
</div>

<div class="form-group col-xs-6">
                      <label for="ciudad">Ciudad</label>
                      <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="ciudad" >
</div>



<div class="form-group col-xs-6">
                      <label for="institucion">Plantel</label>
                      <input type="text" class="form-control" id="institucion" name="institucion" placeholder="Plantel" >
</div>
<div class="form-group col-xs-6">
                      <label for="ocupacion">Cargo</label>
                      <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Cargo" >
</div>


<div class="form-group col-xs-6">
                      <label for="ciudad">Tipo Usuario</label>
                      <select id="tipouduario" name="tipousuario" class="form-control" >
                      <?php  for($i=0;$i<=count($tiposusuario)-1;$i++){   ?>
                      <option value="<?= $tiposusuario[$i]->id  ?>" ><?= $tiposusuario[$i]->nombre ?></option>
                      <?php  } ?>
                      </select>
                   
</div>

<div class="form-group col-xs-6">
                      <label for="email">Email*</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="email" >
</div>

<div class="form-group col-xs-12">
                      <label for="email">password*</label>
                      <input type="password" class="form-control" id="password" name="password" p required >
</div>

</div>




<div class="box-footer col-xs-12 ">
                    <button type="submit" class="btn btn-success">Guardar</button>
</div>


</form>

</div>

</div>
</div>

</div>
</div>


