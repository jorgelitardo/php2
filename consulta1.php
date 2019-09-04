<!DOCTYPE HTML>
<html>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
	<script type="text/javascript" src="common/js/form_init.js" id="form_init_script"
    data-name="">
    </script>
    <link rel="stylesheet" type="text/css" href="theme/default/css/default.css"
    id="theme" />
    <title>
      Departamento Médico
    </title>
<script>
$(document).ready(function(){
  $("#tag").autocomplete("php/autocomplete.php", {
		selectFirst: true
	}

  );
 
});
</script>

	</head>
 
  <body><style>#docContainer .fb_cond_applied{ display:none; }</style>
    <noscript>
      <style>#docContainer .fb_cond_applied{ display:inline-block; }</style>
    </noscript>
    <form style=" " id="docContainer" class="fb-toplabel fb-100-item-column selected-object"
      enctype="multipart/form-data" method="post" action="consultar1.php" novalidate="novalidate"
      data-form="preview">
      <div id="fb-form-header1" class="fb-form-header">
        <a style="MAX-WIDTH: 104px" id="fb-link-logo1" class="fb-link-logo" target="_blank"><img style="WIDTH: 100%; DISPLAY: none" id="fb-logo1" class="fb-logo" title="Alternative text" alt="Alternative text" src="common/images/image_default.png"/></a>
      </div>
      <div id="section1" class="section">
        <div id="column1" class="column ui-sortable">
          <div id="item6" class="fb-item fb-100-item-column">
            <div class="fb-grouplabel">
            
              <label style="DISPLAY: inline" id="item6_label_0">Palabra Clave</label>
            </div>
            <div class="fb-input-box">
              <input placeholder="Palabra clave" type="text" name="palabra" id="tag"/>
              
		        </div>
            <div class="fb-input-box">
              <?php 
               $conexion=mysql_connect("localhost","root","") or
               die("Problemas en la conexion");
               mysql_select_db("departamento_medico_ang",$conexion) or
               die("Problemas en la selección de la base de datos");  
              $clavebuscadah=mysql_query("select * from tbl_empleados",$conexion) or
               die("Problemas en el select1:".mysql_error());
               echo '<select  id="codigo_empleado" name="codigo_empleado" class="btn btn-default dropdown-toggle">';
               while($row = mysql_fetch_array($clavebuscadah))
                {
                  //echo $row['nombres_emp'];
                  echo'<OPTION VALUE="'.$row['codigo_emp'].'">'.$row['apellidos_emp'].$B.$row['nombres_emp'].'</OPTION>';
                } ;                           
                echo '</select>';
?>
              
            </div>
          </div>
	      <div id="item8" class="fb-item">
          <div class="fb-sectionbreak">
            <hr style="MAX-WIDTH: 960px">
          </div>
        </div>
        <div id="item9" class="fb-item fb-100-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item9_label_0">Escoja medico</label>
        </div>
        <div class="fb-dropdown">

          <select id="item9_select_1" name="doctor" required data-hint="">
            <option id="item9_0_option" value="" selected>
              Escoja uno	
            </option>
            <option id="item9_1_option" value="mat">
              Dra. Matutina	
            </option>
            <option id="item9_2_option" value="ves">
              Dra. Vespertina
            </option>
            <!--<option id="item9_3_option" value="Option 3">
              Option 3
			  </option>-->
          </select>
        </div>
      </div>
      <div style="FILTER: " id="item2" class="fb-item fb-33-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item2_label_0">Fecha desde...</label>
        </div>
        <div class="fb-input-date">
          <input id="item2_date_1" class="datepicker" name="fecha_inicio" required
          data-hint="" type="date" />
        </div>
      </div>
      <div style="FILTER: ; PADDING-LEFT: 10px; PADDING-RIGHT: 10px" id="item3"
      class="fb-item fb-33-item-column">
        <div class="fb-grouplabel">
          <label style="DISPLAY: inline" id="item3_label_0">Fecha hasta...</label>
        </div>
        <div class="fb-input-date">
          <input id="item3_date_1" class="datepicker" name="fecha_fin" required
          data-hint="" type="date" />
        </div>
      </div>
      
    </div>
  </div>
  <div style="MIN-HEIGHT: 1px" id="fb-submit-button-div" class="fb-item-alignment-left fb-footer">
    <input style="BACKGROUND-IMAGE: url(theme/default/images/btn_submit.png)"
    id="fb-submit-button" class="fb-button-special" type="submit")"
    value="Buscar" />
  </div>
</form>
</body>
</html>