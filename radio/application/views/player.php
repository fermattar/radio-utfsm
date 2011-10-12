<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="generator" content="Geany 0.19.1" />
  <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
		<title>Administracion</title>
		
		
		<?php echo js_asset('/jquery/jquery-1.4.4.min.js');?>
		<?php echo js_asset('jquery.ui.draggable.js');?>
		<?php echo js_asset('jquery.alerts.js');?>

    


		<?php echo css_asset('default.css'); ?>
		<?php echo css_asset('jquery.alerts.css'); ?>
    <?php echo css_asset('jquery-ui-1.8.11.custom.css'); ?>
</head>

 <body>
  		<div id="header">
          <h1 style="color:#F5F5EF"> </h1>
          <div class="app_cba">	
          
          <?php echo anchor('weblogin/logout','|Cerrar Sesion') ?>
          <?php echo anchor('/main','|Home') ?>				
          <?php $user ='Bienvenido '.$this->session->userdata('username');
              echo anchor('/main',$user);?>		 
          </div>

		  </div>
        <div id="wrapper">
            <div id="nav">
                <ul>
                    <li><?php echo anchor('/main','Mi perfil') ?></li>
                    <!--<li><?php echo anchor('/main','') ?></li>-->
                    <li><?php echo anchor('/','Cursos') ?></li>
                    <li class="current"><?php echo anchor('/main','Resultados') ?></li>
                    
                    
                   
                   
                </ul>
            </div>

            <div id="main">
                <div id="sidebar">
                    <h3><a>Cursos</a></h3>
                    <div id="juzgado_div" class="container_left">
                        

                            <table>
                                <tr>
                                    <td>Sigla: </td>
                                    <td>
                                        <select id="idJuzgado"></select>
                                        </td>

                                    </tr>
                                 <tr>
                                    <td>Semestre: </td>
                                    <td>
                                        <select id="idJuzgado"></select>
                                        </td>

                                    </tr>
                                </table>
                           
                        </div>
                        <h3><a>Aprendizajes Claves</a></h3>
                        <div id="inspectores_div" class="container_left" >

                            
                                <table>
                                    <tr>
                                        <td>Unidades: </td>
                                        <td>
                                            <select id="idInspector"></select>
                                        </td>

                                    </tr>
                                </table>
                      

                        </div>

                        <div class="container_left">
                            

                        </div>
                    </div>

                    <div id="content-right-wrapper">
                        <div id="content-right">
                            <div class="content-main">
                                <h3>Resultados Generales</h3>
                                <div class="date_container">
                                    Fecha inicial: <input type="text" id="date_in" title="-- fecha inicial --"/>

                                    Fecha Final: <input type="text" id="date_final" title="-- fecha final --"/>
                                    <input type="submit" value="Buscar" id="buscar" class='ui-button ui-button-text-only ui-widget ui-state-default ui-corner-all'/>
                                </div>
                                <div id="detalle_infracciones">
                                 	<table id="miTabla" class="tablesorter" style="display:none;">
								<CAPTION> </CAPTION>
								<thead>
									<tr>
										<th class="header">Id</th>
										<th class="header">Patente</th>
										<th class="header">Ley</th>
										<th class="header">Descripción</th>
										<th class="header">Vehiculo</th>
										<th class="header">Marca</th>
										<th class="header">Color</th>
										<th class="header">Calle</th>
										<th class="header">Num</th>
										<th class="header">Juzgado</th>
										<th class="header">Imagen</th>
										<th class="header"><img src= "<?php echo base_url(); ?>assets/image/icon-delete.gif" /></th>
								
									</tr>
								</thead>
								<tbody>
                
								</tbody>	
										
							</table>
              <button id='delete' name='boton' type='submit' style='background: #FFFFFF;  border: 0; float: right;'><p> Eliminar Selección<img src='<?php echo base_url(); ?>assets/image/DeleteIcon.jpg'></button></p>			
					

				
                                    
                                    			<p id="idtexto">  </p>
			<form action="<?php echo base_url(); ?>index.php?/infracciones/excel" method="post" target="_blank" id="FormularioExportacion">
			<p>Exportar a Excel  <img src="<?php echo base_url(); ?>assets/image/export_to_excel.gif" class="botonExcel" /></p>
			<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
			</form>
                                </div>
                                <img src="http://www.ingelansistemas.info/eztaxi/assets/image/loading.gif" width="32" style="display:none;float:rigth;" id="loading_main" />                                <div id="vehiculo_sesiones">
                                    <div id="vehiculo_sesiones_tabla"></div>
                                    <div id="vehiculo_sesiones_chart"></div>
                                </div>
                                <div id="session">
                                    <div id="session_tabla"></div>

                                    <div id="session_chart"></div>
                                </div>

                        </div>

                    </div>

                </div>

                <div style="clear: both;"></div>
            </div>

            <div id="footer">
                		<p> <a href="http://telematica.utfsm.cl"> Student's Profile | Ingenieria Civil Telematica · Copyright © 2011</a></p>
            </div>
        </div>
    </body>

</html>

