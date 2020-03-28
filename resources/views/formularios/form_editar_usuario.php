

<div class="row">  

  <div class="col-md-6">

        <div class="box box-primary">
                        
                        <div class="box-header">
                          <h3 class="box-title">Editar información del Usuario</h3>
                        </div><!-- /.box-header -->

        <div id="notificacion_resul_feu"></div>



        <form  id="f_editar_usuario"  method="post"  action="editar_usuario" class="form-horizontal form_entrada" >                
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
          <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>">              


        <div class="box-body ">
        <div class="form-group col-xs-12">
                              <label for="nombre">Nombres*</label>
                              <input type="text" class="form-control" id="nombres" name="nombres"  value="<?= $usuario->nombres; ?>"  >
        </div>
        <div class="form-group col-xs-12">
                              <label for="apellido">Apellidos</label>
                              <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $usuario->apellidos; ?>" >
        </div>

    

        <div class="form-group col-xs-12">
                              <label for="ciudad">Ciudad</label>
                              <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?= $usuario->ciudad; ?>"  >
        </div>
        <div class="form-group col-xs-12">
                              <label for="institucion">Institucion</label>
                              <input type="text" class="form-control" id="institucion" name="institucion"  value="<?= $usuario->institucion; ?>" >
        </div>
        <div class="form-group col-xs-12">
                              <label for="ocupacion">Ocupacion</label>
                              <input type="text" class="form-control" id="ocupacion" name="ocupacion" value="<?= $usuario->ocupacion; ?>" >
        </div>
              



        </div>



        <div class="box-footer">
             <button type="submit" class="btn btn-primary">Actualizar Datos</button>
        </div>
        </form>
        </div>

  </div> <!-- end col mod 6 -->

  <div class="col-md-6">


      <div class="box box-primary">
                      <div class="box-header">
                        <h3 class="box-title">Cambiar Fotografia</h3>
                      </div><!-- /.box-header -->
     
      <div id="notificacion_resul_fci"></div>

      <form  id="f_subir_imagen" name="f_subir_imagen" method="post"  action="subir_imagen_usuario" class="formarchivo" enctype="multipart/form-data" >                
      
       <input type="hidden" name="id_usuario_foto" value="<?= $usuario->id; ?>"> 
       <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 

      <div class="box-body">

        <div class="form-group col-xs-12" >


          <?php if($usuario->imagenurl==""){ $usuario->imagenurl="imagenes/avatar.jpg"; }  ?>
          <img src="<?=  $usuario->imagenurl;  ?>"  alt="User Image"  style="width:160px;height:160px;" id="fotografia_usuario" >
                <!-- User image -->
          
       </div>


      <div class="form-group col-xs-12"  >
             <label>Agregar Imagen </label>
              <input name="archivo" id="archivo" type="file"   class="archivo form-control"  required/><br /><br />
      </div>

     
      <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Actualizar Imagen</button>
      </div>

       


      </div>

      </form>

      </div>

  </div>    <!-- end col mod 6 -->


    <div class="col-md-6">

<div class="box box-primary">

                <div class="box-header with-border">
                  <h3 class="box-title">Cambiar Password</h3>
                </div><!-- /.box-header -->




                <div id="notificacion_resul_fcp"></div>
                <!-- form start -->
                <form method="post" id="f_cambiar_password" class="form_entrada" action="cambiar_password" >
                     <input type="hidden" name="id_usuario_password" value="<?= $usuario->id; ?>"> 
                   <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email </label>
                      <input type="email" class="form-control" id="email_usuario" name="email_usuario" placeholder="Entrar email" value="<?= $usuario->email; ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="password_usuario" name="password_usuario" placeholder="Password" required>
                    </div>
                  
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Cambiar Datos</button>
                  </div>
                </form>
              </div>

  </div>    <!-- end col mod 6 -->

</div> <!-- end row -->


<script>
 function cargarpais(){
$('#pais option:eq(<?= $usuario->pais; ?>)').prop('selected', true);	
}

cargarpais();

</script>
