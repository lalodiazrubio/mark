<div class="row">  

 <div class="col-md-6">

 	    <div class="box box-primary">
                        
            <div class="box-header">
                <h3 class="box-title">Agregar Trabajos Y Publicaciones</h3>
            </div><!-- /.box-header -->

            <div id="notificacion_resul_fap"></div>

            <form  id="f_agregar_publicacion"  method="post"  action="agregar_publicacion_usuario" class="formarchivo" >                
               
                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                 <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>">   

	             <div class="box-body ">

	             	  <div class="col-xs-12">
                              <label for="pais">Tipo de Publicacion</label>
                               <select id="tipo_publicacion" name="tipo_publicacion" class="form-control" onchange="mostrardiv_publicaciones(this.value);" >
                                <?php foreach($tipopublicaciones as $tipo){  ?>
                                   <option value="<?= $tipo->id; ?>" > <?= $tipo->titulo; ?> </option>
                                
                                <?php } ?>
                                
                               </select>
                       </div>

                        <div class="col-xs-12">
                              <label for="apellido">Nombre del archivo</label>
                              <input type="text" class="form-control" id="titulo_publicacion" name="titulo_publicacion" value="" required>
                         </div>

                           <div class="col-xs-12">
                              <label for="apellido">Autores</label>
                              <input type="text" class="form-control" id="autores_publicacion" name="autores_publicacion" value="" required>
                         </div>  

                         <div class=" col-xs-8">
                              <label for="apellido">Plantel</label>
                              <input type="text" class="form-control" id="universidad_publicacion" name="universidad_publicacion" value="" >
                         </div>  

                         <div class=" col-xs-4">
                              <label for="apellido">Año</label>
                              <input type="text" class="form-control" id="anio_publicacion" name="anio_publicacion" value="" >
                         </div>

                         


                      <div class="form-group col-xs-6">
                      <label for="apellido">Entidad</label>
                      
                       <select id="pais_publicacion" name="pais_publicacion" class="form-control">
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















                       <div class=" col-xs-12" id="info_revista"  style="display:none;" >
                                  <div class=" col-xs-8">
		                              <label for="apellido">Revista</label>
		                              <input type="text" class="form-control" id="revista_publicacion" name="revista_publicacion" value="" >
		                         </div>

		                          <div class=" col-xs-4">
		                              <label for="apellido">Volumen</label>
		                              <input type="text" class="form-control" id="volumen_publicacion" name="volumen_publicacion" value="" >
		                         </div>

		                          <div class=" col-xs-4">
		                              <label for="apellido">Número</label>
		                              <input type="text" class="form-control" id="numero_publicacion" name="numero_publicacion" value="" >
		                         </div>

		                             <div class=" col-xs-4">
		                              <label for="apellido">Pagina Inicial</label>
		                              <input type="text" class="form-control" id="pageI_publicacion" name="pageI_publicacion" value="" >
		                             </div>
		                        
		                            <div class=" col-xs-4">
		                              <label for="apellido">Pagina final</label>
		                              <input type="text" class="form-control" id="pageF_publicacion" name="pageF_publicacion" value="" >
		                            </div>


                       </div>


                       <div class=" col-xs-12" id="info_libro"  style="display:none;" >

		                           <div class=" col-xs-4">
		                              <label for="apellido">Volumen</label>
		                              <input type="text" class="form-control" id="vlibro_publicacion" name="vlibro_publicacion" value="" >
		                         </div>

		                          <div class=" col-xs-4">
		                              <label for="apellido">Número</label>
		                              <input type="text" class="form-control" id="nlibro_publicacion" name="nlibro_publicacion" value="" >
		                         </div>

		                         <div class=" col-xs-4">
		                              <label for="apellido">Ciudad</label>
		                              <input type="text" class="form-control" id="nlibro_publicacion" name="nlibro_publicacion" value="" >
		                         </div>


		                          <div class=" col-xs-4">
		                              <label for="apellido">ISSN - ISBN</label>
		                              <input type="text" class="form-control" id="ISBN_publicacion" name="ISBN_publicacion" value="" >
		                         </div>

		                          <div class=" col-xs-4">
		                              <label for="apellido">Edicion</label>
		                              <input type="text" class="form-control" id="edicion_publicacion" name="edicion_publicacion" value="" >
		                         </div>

		                         <div class=" col-xs-4">
		                              <label for="apellido">Editorial</label>
		                              <input type="text" class="form-control" id="editorial_publicacion" name="editorial_publicacion" value=""  >
		                         </div>
                        </div>    
                            <div class=" col-xs-12" style="background-color:rgb(229, 245, 253);" >
                              <label for="apellido">Archivo a subir (Formato: PDF) </label>
                              <input type="file" class="form-control" id="file" name="file" required >
                            </div>



	             </div>

	             <div class="box-footer">
	             <button type="submit" class="btn btn-success">Agregar Publicacion</button>
	             </div>
             
            </form>
        </div>
        	


 </div>
 
  <div class="col-md-6">

  	    <div class="box box-primary">
                <div class="box-body box-profile">
                	<?php if($usuario->imagenurl==""){ $usuario->imagenurl="imagenes/avatar.jpg"; }  ?>           
                  <img class="profile-user-img img-responsive img-circle" src="<?=  $usuario->imagenurl;  ?>" alt="User profile picture">
                  <h3 class="profile-username text-center"><?= $usuario->nombres." ".$usuario->apellidos; ?></h3>
                  <p class="text-muted text-center"><?= $usuario->ocupacion; ?></p>
                  
                  <div id="notificacion_resul_fapu"></div>
                  <ul class="list-group list-group-unbordered">
                  
                  
                  <?php foreach($tipopublicaciones as $tipo){  ?>
                  <li class="list-group-item">
                  <i class="fa fa-file-pdf-o"></i></i><b>--<?= $tipo->titulo; ?></b> <a class="pull-right"></a>
                  
                  <?php foreach($publicaciones->get() as $archivo){  ?>
                  <?php  if($archivo->idTipopublicacion==$tipo->id){   ?>
                        
                   <br/> <i class="fa fa-circle-o text-yellow"></i> <span class="text-light-blue" >-<?=  $archivo->titulo;  ?></span>
                   <br/> <span><b>autores: </b>-<?=  $archivo->autores;  ?></span>    <span class="tools pull-right" ><a href="javascript:void(0);" onclick="borrarpublicacion(<?= $archivo->id;;  ?> );"  ><i class="fa fa-trash-o"></i></a></span>
                   <br/> <span><b>Plantel: </b>-<?=  $archivo->universidad;  ?></span>
                    <br/> <span><b>Entidad: </b>-<?=  $archivo->pais;  ?></span> <span><b>año: </b>-<?=  $archivo->anio;  ?></span>
                   <br/><a href="<?= $rutaarchivos.$archivo->ruta;  ?>" style="display:block;" target="_blank"><button class="btn btn-block btn-success btn-xs">Descargar</button></a>
                  

                         
                  <?php } ?>
                  <?php } ?>
                   
                  </li>

                   <?php } ?>

                   
                  </ul>

                  <a href="javascript:void(0);" class="btn btn-primary btn-block"><b>-</b></a>
                </div><!-- /.box-body -->
        </div>
  </div>
	



</div>