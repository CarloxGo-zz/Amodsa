<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenidos. Sistema de Apoyo AMOD</title>
<link rel="stylesheet" href="emx_nav_left.css" type="text/css" />
<script type="text/javascript">
<!--
var time = 3000;
var numofitems = 7;

//menu constructor
function menu(allitems,thisitem,startstate){ 
  callname= "gl"+thisitem;
  divname="subglobal"+thisitem;  
  this.numberofmenuitems = allitems;
  this.caller = document.getElementById(callname);
  this.thediv = document.getElementById(divname);
  this.thediv.style.visibility = startstate;
}

//menu methods
function ehandler(event,theobj){
  for (var i=1; i<= theobj.numberofmenuitems; i++){
    var shutdiv =eval( "menuitem"+i+".thediv");
    shutdiv.style.visibility="hidden";
  }
  theobj.thediv.style.visibility="visible";
}
				
function closesubnav(event){
  if ((event.clientY <48)||(event.clientY > 107)){
    for (var i=1; i<= numofitems; i++){
      var shutdiv =eval('menuitem'+i+'.thediv');
      shutdiv.style.visibility='hidden';
    }
  }
}
// -->
</script>
<style type="text/css">
<!--
.Estilo3 {
	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
	font-style: italic;
}
.Estilo4 {color: #FF0000}
.Estilo8 {
	font-size: 14px;
	font-style: italic;
}
.Estilo9 {color: #0000FF; font-weight: bold;}
.Estilo11 {
	color: #0000FF;
	font-style: italic;
	font-size: x-large;
}
.Estilo13 {color: #FF0000; font-weight: bold; }
.Estilo15 {font-size: 10px}
.Estilo26 {color: #333333}
.Estilo27 {
	font-size: 14px;
	color: #1D4C82;
}
.Estilo28 {
	color: #FF0000;
	font-size: 14px;
}
.Estilo29 {
	color: #FF6600;
	font-size: 16px;
}
.Estilo30 {font-size: 14px}
.Estilo31 {
	font-size: 16px;
	font-weight: bold;
}
.Estilo32 {color: #FF0000; font-size: 16px; }
.Estilo34 {color: #75262B; font-size: 14px; }
.Estilo35 {color: #0000FF}
.Estilo33 {	color: #FF0000;
	font-size: 24px;
	font-style: italic;
}
-->
</style>
</head>
<body onmousemove="closesubnav(event);">
<div class="skipLinks">skip to: <a href="#content">page content</a> | <a href="#pageNav">links on this page</a> | <a href="#globalNav">site navigation</a> | <a href="#siteInfo">footer (site information)</a> </div>
<div id="masthead">
 
  <table width="345" border="0">
    <tr>
      <td width="133"> <h1 id="siteName">AMOD*sa</h1></td>
      <td width="196"><span class="Estilo15"><span class="Estilo13"><br />
      </span></span><span class="Estilo3 Estilo15">Versi&oacute;n Beta</span><span class="Estilo15"><br />
          <marquee>
        En per&iacute;odo de prueba
          </marquee>
      </span> </td>
    </tr>
  </table>
  <div id="utility"> <a href="#">Utility Link</a> | <a href="#">Utility Link</a> | <a href="#">Utility Link</a> </div>
  <div id="globalNav"><img alt="" src="gblnav_left.gif" height="32" width="4" id="gnl" /> <img alt="" src="glbnav_right.gif" height="32" width="4" id="gnr" />
    <div id="globalLink"> <a href="#" id="gl1" class="glink" onmouseover="ehandler(event,menuitem1);">Cuenta</a><a href="#" id="gl2" class="glink" onmouseover="ehandler(event,menuitem2);">Planilla</a><a href="#" id="gl3" class="glink" onmouseover="ehandler(event,menuitem3);">Reporte</a><a href="#" id="gl4" class="glink" onmouseover="ehandler(event,menuitem4);">Administraci&oacute;n</a><a href="#" id="gl5" class="glink" onmouseover="ehandler(event,menuitem5);">global link</a><a href="#" id="gl6" class="glink" onmouseover="ehandler(event,menuitem6);">global link</a><a href="#" id="gl7" class="glink" onmouseover="ehandler(event,menuitem7);">global link</a> </div>
    <!--end globalLinks-->
    <form id="search" action="">
      <input name="searchFor" type="text" size="10" />
      <a href="">buscar</a>
    </form>
  </div>
  <!-- end globalNav -->
  <div id="subglobal1" class="subglobalNav"> <a href="#">subglobal1 link</a> | <a href="#">subglobal1 link</a> | <a href="#">subglobal1 link</a> | <a href="#">subglobal1 link</a> | <a href="#">subglobal1 link</a> | <a href="#">subglobal1 link</a> | <a href="#">subglobal1 link</a> </div>
  <div id="subglobal2" class="subglobalNav"> <a href="#">subglobal2 link</a> | <a href="#">subglobal2 link</a> | <a href="#">subglobal2 link</a> | <a href="#">subglobal2 link</a> | <a href="#">subglobal2 link</a> | <a href="#">subglobal2 link</a> | <a href="#">subglobal2 link</a> </div>
  <div id="subglobal3" class="subglobalNav"> <a href="#">subglobal3 link</a> | <a href="#">subglobal3 link</a> | <a href="#">subglobal3 link</a> | <a href="#">subglobal3 link</a> | <a href="#">subglobal3 link</a> | <a href="#">subglobal3 link</a> | <a href="#">subglobal3 link</a> </div>
  <div id="subglobal4" class="subglobalNav"> <a href="#">subglobal4 link</a> | <a href="#">subglobal4 link</a> | <a href="#">subglobal4 link</a> | <a href="#">subglobal4 link</a> | <a href="#">subglobal4 link</a> | <a href="#">subglobal4 link</a> | <a href="#">subglobal4 link</a> </div>
  <div id="subglobal5" class="subglobalNav"> <a href="#">subglobal5 link</a> | <a href="#">subglobal5 link</a> | <a href="#">subglobal5 link</a> | <a href="#">subglobal5 link</a> | <a href="#">subglobal5 link</a> | <a href="#">subglobal5 link</a> | <a href="#">subglobal5 link</a> </div>
  <div id="subglobal6" class="subglobalNav"> <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> | <a href="#">subglobal6 link</a> </div>
  <div id="subglobal7" class="subglobalNav"> <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> | <a href="#">subglobal7 link</a> </div>
  <div id="subglobal8" class="subglobalNav"> <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> | <a href="#">subglobal8 link</a> </div>
</div>
<!-- end masthead -->
<div id="pagecell1">
  <!--pagecell1-->
  <img alt="2" src="tl_curve_white.gif" height="6" width="6" id="tl" /> <img alt="1" src="tr_curve_white.gif" height="6" width="6" id="tr" />
  <div id="breadCrumb"> <img src="images/power01.jpg" alt="1" width="100" height="100" border="0"/><a href="#"><span class="Estilo4"></span>Actualizaci&oacute;n</a> / <a href="#">Mantenimiento</a> / <a href="#">Seguimiento</a> / </div>
  <div id="pageName">
    <table width="679" border="0">
      <tr>
        <td width="673" height="40"><h2><span class="Estilo4">A</span>ctualizaci&oacute;n de <span class="Estilo4">M</span>odificaciones en <span class="Estilo4">D</span>istribuci&oacute;n</h2></td>
      </tr>
    </table>
    <span class="Estilo3">S</span><span class="Estilo8">istema de <span class="Estilo9">A</span>poyo </span></div>
  <div id="pageNav">
    <div id="sectionLinks"> <a href="#">Cuenta</a> <a href="planilla.php">Planilla</a> <a href="#">Reporte</a> <a href="#">Administraci&oacute;n</a> <a href="#">En Construcci&oacute;n </a> <a href="#">En Construcci&oacute;n</a> </div>
    <div class="relatedLinks">
      <h3>Related Link Category</h3>
      <a href="#">En Construcci&oacute;n</a> <a href="#">En Construcci&oacute;n</a> <a href="#">En Construcci&oacute;n</a> <a href="#">En Construcci&oacute;n</a> <a href="#">En Construcci&oacute;n</a> <a href="#"></a> </div>
    <div class="relatedLinks"></div>
    <div id="advert">
      <div align="left">
        <p align="center"><img src="images/grafica.JPG" alt="4" width="85" height="126" /><a href="#"></a>Advertisement copy goes here. Advertisement copy goes here. </p>
      </div>
    </div>
  </div>
  <div id="content">
  <p><img src="images/banner.jpg" alt="1" width="900" height="57" /></p>
  <h3><span class="Estilo33">Planilla: </span></h3>
  <form id="form1" name="form1" method="post" action="">
    <table width="898" border="0">
      <tr>
        <th width="727" scope="row"><div align="left"><img src="images/corpoelec.jpg" alt="2" width="257" height="64" /></div></th>
        <td width="161"><div align="right"><img src="images/cadafe.jpg" alt="3" width="160" height="91" /></div>
            <div align="center"></div></td>
      </tr>
      <tr>
        <th ><div align="right">Fecha:</div></th>
        <td ><label>
          <input name="fecha" type="text" id="fecha" />
        </label></td>
      </tr>
      <tr>
        <th ><div align="right">Trabajo Realizado por:</div></th>
        <td ><label>
          <select name="select">
            <option>Distribuci&oacute;n</option>
            <option>Operaciones</option>
            <option>Planificaci&oacute;n</option>
            <option>Desarrollo</option>
          </select>
        </label></td>
      </tr>
    </table>
    <table width="898" border="0">
      <tr>
        <th width="154" height="46" scope="row"><div align="left">Distrito T&eacute;cnico: </div></th>
        <td width="127"><label>
          <select name="distrito" id="distrito">
            <option>Maracay Norte</option>
            <option>Maracay Sur</option>
            <option>Cagua</option>
            <option>La Victoria</option>
            <option>Villa de Cura</option>
            <option>Camatagua</option>
          </select>
        </label></td>
        <td width="107"><div align="right"><strong>Subestaci&oacute;n:</strong></div></td>
        <td width="147"><label>
          <select name="subestacion" id="subestacion">
            <option>San Ignacio</option>
            <option>San Vicente</option>
            <option>San Jacinto</option>
            <option>Delicias</option>
            <option>Centro</option>
            <option>El Lim&oacute;n</option>
            <option>Santa Clara</option>
            <option>Cumboto</option>
            <option>Independencia</option>
            <option>Cata</option>
            <option>Palo Negro</option>
            <option>La Morita</option>
            <option>Macaro</option>
            <option>Cagua</option>
            <option>Corinsa</option>
            <option>Aragua</option>
            <option>La Victoria</option>
            <option>Soco</option>
            <option>Tejerias</option>
            <option>La Mariposa</option>
            <option>Villa de Cura</option>
            <option>Los Tanques</option>
            <option>Tocoron</option>
            <option>Camatagua</option>
            <option>San Juan</option>
            <option>San Sebastian</option>
            <option>San Casimiro</option>
            <option>El Sombrero</option>
          </select>
        </label></td>
        <td width="67">Circuito:</td>
        <td width="270"><input name="circuito" type="text" id="circuito" size="45" />
        </td>
      </tr>
    </table>
    <table width="898" border="0">
      <tr>
        <th width="91" scope="row"><div align="left">Direcci&oacute;n:</div></th>
        <td width="797"><label>
          <input name="direccion" type="text" id="direccion" size="132" maxlength="200" />
        </label></td>
      </tr>
    </table>
    <p><strong>TRANSFORMADORES</strong>
        <label>
        <input type="checkbox" name="checkbox5" value="checkbox" />
        </label>
        <strong>EQUIPOS DE MANIOBRA </strong>
        <input type="checkbox" name="checkbox62" value="checkbox" />
        <strong>CONDUCTOR </strong>
        <input type="checkbox" name="checkbox622" value="checkbox" />
    </p>
    <table width="900" height="73" border="1">
      <tr>
        <td width="890"><table width="291" border="1">
          <tr>
            <th width="142" scope="row"><div align="left">Instalado:</div></th>
            <td width="133"><strong>Retirado:</strong></td>
          </tr>
        </table></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="950" border="1">
      <tr>
        <th width="489" scope="row"><div align="left">Instalado:</div></th>
        <td width="445"><strong>Retirado:</strong></td>
      </tr>
      <tr>
        <th scope="row"><div align="left">
          <p>Capacidad
            <label>
                <select name="capacidad1" id="capacidad1">
                  <option>10</option>
                  <option>15</option>
                  <option>25</option>
                  <option>37.5</option>
                  <option>50</option>
                  <option>75</option>
                  <option>100</option>
                  <option>167.5</option>
                </select>
                </label>
          </p>
          <p>Serial
            <label>
                <input name="serial1" type="text" id="serial1" />
                </label>
          </p>
          <p>Voltaje
            <label>
                <input name="voltaje1" type="text" id="voltaje1" />
                </label>
          </p>
          <p>&nbsp;</p>
        </div></th>
        <td><p>Capacidad
          <label>
                <select name="capacidad2" id="select">
                  <option>10</option>
                  <option>15</option>
                  <option>25</option>
                  <option>37.5</option>
                  <option>50</option>
                  <option>75</option>
                  <option>100</option>
                  <option>167.5</option>
                </select>
                </label>
        </p>
            <p>Serial
              <label>
                <input name="serial2" type="text" id="serial2" />
                </label>
            </p>
          <p>Voltaje
            <label>
                <input name="voltaje2" type="text" id="voltaje2" />
                </label>
          </p></td>
      </tr>
      <tr>
        <th align="left" valign="top" scope="row"><div align="justify">
          <blockquote>
            <label></label>
          </blockquote>
          <p>&nbsp;</p>
        </div></th>
        <th width="445" align="left" valign="top" scope="row"><blockquote>
          <p>&nbsp;</p>
        </blockquote>
            <table width="254" border="0">
              <tr>
                <th width="87" scope="row"><div align="justify">
                    <p>Tipo</p>
                  <p>Calibre</p>
                  <p>Longitud </p>
                </div></th>
                <th width="157" scope="row"> <p>
                  <label>
                    <div align="left">
                    <select name="conductor" id="conductor">
                      <option>Arvidal</option>
                      <option>Cobre</option>
                      <option>TTU</option>
                    </select>
                  </label>
                  <p align="left">
                      <label>
                      <select name="calibre" id="calibre">
                        <option>2</option>
                        <option>1/0</option>
                        <option>2/0</option>
                        <option>4/0</option>
                        <option>266</option>
                        <option>250</option>
                        <option>350</option>
                        <option>500</option>
                      </select>
                      </label>
                    </p>
                  <p align="left">
                      <label>
                      <input name="longitud" type="text" id="longitud" size="10" maxlength="10" />
                      </label>
                    mts.</p></th>
              </tr>
            </table>
          <div align="left">
            <p>&nbsp;</p>
          </div></th>
      </tr>
    </table>
    <div align="left">
      <table width="200" border="1">
        <tr>
          <td><table width="704" border="0">
            <tr>
              <th width="123" scope="row"><div align="justify">Seccionador</div></th>
              <td width="57"><div align="justify">
                <label>
                  <input name="sb_sec" type="checkbox" id="sb_sec" value="checkbox" />
                  </label>
              </div></td>
              <td width="164"><div align="justify"></div></td>
              <td width="342"><div align="justify"></div></td>
            </tr>
            <tr>
              <th scope="row"><div align="justify">Cortacorriente</div></th>
              <td><div align="justify">
                <label>
                  <input name="sb_cc" type="checkbox" id="sb_cc" value="checkbox" />
                  </label>
              </div></td>
              <td><div align="right">Capacidad del Fusible: </div></td>
              <td><div align="justify">
                <label>
                  <input name="cc_fus" type="text" id="cc_fus" />
                  </label>
              </div></td>
            </tr>
            <tr>
              <th scope="row"><div align="justify">Seccionalizador</div></th>
              <td><div align="justify">
                <label>
                  <input name="sb_scz" type="checkbox" id="sb_scz" value="checkbox" />
                  </label>
              </div></td>
              <td><div align="right">Serial</div></td>
              <td><div align="justify">
                <label>
                  <input name="scz_serial" type="text" id="scz_serial" />
                  </label>
              </div></td>
            </tr>
            <tr>
              <th scope="row"><div align="justify">Reconectador</div></th>
              <td><div align="justify">
                <label>
                  <input name="sb_rec" type="checkbox" id="sb_rec" value="checkbox" />
                  </label>
              </div></td>
              <td><div align="right">Serial</div></td>
              <td><div align="justify">
                <label>
                  <input name="rec_serial" type="text" id="rec_serial" />
                  </label>
              </div></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p> </p>
    </div>
  </form>
  <div align="left">
    <p>&nbsp;</p>
  </div>
</div>
<!--end pagecell1-->
<br />
<script type="text/javascript">
    <!--
      var menuitem1 = new menu(7,1,"hidden");
			var menuitem2 = new menu(7,2,"hidden");
			var menuitem3 = new menu(7,3,"hidden");
			var menuitem4 = new menu(7,4,"hidden");
			var menuitem5 = new menu(7,5,"hidden");
			var menuitem6 = new menu(7,6,"hidden");
			var menuitem7 = new menu(7,7,"hidden");
    // -->
    </script>
</body>
</html>
