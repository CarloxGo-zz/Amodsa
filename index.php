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
  <img alt="" src="tl_curve_white.gif" height="6" width="6" id="tl" /> <img alt="" src="tr_curve_white.gif" height="6" width="6" id="tr" />
  <div id="breadCrumb"> <img src="images/power01.jpg" width="100" height="100" border="0"/><a href="#"><span class="Estilo4"></span>Actualizaci&oacute;n</a> / <a href="#">Mantenimiento</a> / <a href="#">Seguimiento</a> / </div>
  <div id="pageName">
    
    <table width="679" border="0">
      <tr>
        <td width="673" height="40"><h2><span class="Estilo4">A</span>ctualizaci&oacute;n de <span class="Estilo4">M</span>odificaciones en <span class="Estilo4">D</span>istribuci&oacute;n</h2></td>
      </tr>
    </table>
    <span class="Estilo3">S</span><span class="Estilo8">istema de <span class="Estilo9">A</span>poyo  </span></div>
  <div id="pageNav">
    <div id="sectionLinks"> <a href="#">Cuenta</a> <a href="planilla.php">Planilla</a> <a href="#">Reporte</a> <a href="#">Administraci&oacute;n</a> <a href="#">En Construcci&oacute;n </a> <a href="#">En Construcci&oacute;n</a> </div>
    <div class="relatedLinks">
      <h3>Related Link Category</h3>
    <a href="#">En Construcci&oacute;n</a> <a href="#">En Construcci&oacute;n</a> <a href="#">En Construcci&oacute;n</a> <a href="#">En Construcci&oacute;n</a> <a href="#">En Construcci&oacute;n</a> <a href="#"></a> </div>
    <div class="relatedLinks"></div>
    <div id="advert"> 
      <div align="left">
        <p align="center"><img src="images/grafica.JPG" alt="" width="85" height="126" /><a href="#"></a>Advertisement copy goes here. Advertisement copy goes here. </p>
      </div>
    </div>
  </div>
  <div id="content">
    <div class="feature"><img src="images/sala_control.jpg" alt="" width="345" height="281" />
      <h3>Sistema de Control <span class="Estilo11">AMOD*sa</span>:</h3>
      <table width="578" height="136" border="0">
        <tr align="justify">
          <td width="394" ><span class="Estilo18 Estilo29" >AMOD ha sido dise&ntilde;ado, y puesto en funcionamiento, con la idea original de llevar un control en tiempo real, por parte del CODA y su grupo de apoyo, de  las modificaciones  permanentes sobre las redes de Distribuci&oacute;n de la Zona Aragua. Funcionando como <strong>SISTEMA de APOYO</strong>, y de esta forma manejar la informaci&oacute;n a ser analizada y aprovechada por la nueva plataforma de desarrollo y servicios que se vienen adelantando en el Centro de Operaciones y Distribuci&oacute;n Aragua. </span></td>
          <td width="174"><img src="images/cfl_light_bulb.jpg" width="164" height="173" /></td>
        </tr>
      </table>
      <p><img src="images/banner.jpg" width="900" height="57" /></p>
    </div>
    <div class="story">
      <table width="874" border="0">
        <tr>
          <td width="85"><img src="images/agenda.JPG" width="85" height="126" /></td>
          <td width="781"><div align="left">
            <p class="Estilo23 Estilo4 Estilo31">Antecedentes:              </p>
          </div>            <p align="left" class="Estilo19 Estilo27">Previo a este procedimiento, el control para la actualizaci&oacute;n en circuitos de distribuci&oacute;n era pr&aacute;cticamente nulo, es decir, a excepci&oacute;n de las operaciones o modificaciones sobre seccionadores o cortacorrientes, no exist&iacute;a un seguimiento confiable de las mejoras o modificaciones permanentes de las redes de Media Tensi&oacute;n (<strong>M.T.</strong> 13,8 / 24,5 / 34,5 KV). </p></td>
        </tr>
        <tr>
          <td colspan="2"><span class="Estilo19 Estilo27 Estilo30">Bas&aacute;ndose en las planillas normalizadas AP-01 y AP-02, las cuales est&aacute;n validadas por la Direcci&oacute;n Ejecutiva de Normalizaci&oacute;n de CADAFE, y de los datos obtenidos de los <em>Cortes de Servicio</em> solicitados para efectuar modificaciones a las redes de M.T., adem&aacute;s de toda modificaci&oacute;n de capacidad efectuada por el personal de CADAFE - Zona Aragua, se busca entonces recopilar esta informaci&oacute;n en una planilla sobre la cual se tendr&aacute; un control m&aacute;s preciso, auditable y en tiempo real de la data, sirviendo as&iacute; el AMOD*sa como sistema de apoyo para los procedimiento de Actualizaci&oacute;n Digital de los Circuitos de Distribuci&oacute;n que se lleva en el CODA.</span></td>
        </tr>
      </table>
      </div>
    <div class="story">
      <table width="900" cellpadding="0" cellspacing="0" summary="">
        <tr valign="top">
          <td width="50%" class="storyLeft">
          <p> <a href="#" class="capsule"><img src="images/bien.JPG" width="85" height="121" border="0" /><span class="Estilo32">Alcance</span></a> <span class="Estilo34">En su fase inicial, el <span class="Estilo35">AMOD*</span><span class="Estilo4">sa</span> ser&aacute; utilizado por los operadores del COD Aragua, ubicado en Maracay-Aragua, sin embargo a corto y mediano plazo, se tiene programado implementarlo como un procedimiento est&aacute;ndar en los COD's y CAR's de la Zona Aragua, con el fin de informar y controlar las variaciones permanentes en las redes de Distribuci&oacute;n. Inclusive para su implentarlo en los COD's y CAR's de otras Zonas. </span></p>          </td>
          <td width="50%">
          <p> <a href="#" class="capsule"><img src="images/mal.JPG" width="74" height="124" border="0"/><span class="Estilo28 Estilo30">Limitaciones</span></a> <span class="Estilo34">Al ser este un sistema innovador para el control de la informaci&oacute;n referente a modificaciones permanentes de dispositivos instalados en redes de Media Tensi&oacute;n, la principal limitante se base en la veracidad u omisi&oacute;n de la informaci&oacute;n a ser incluida en las bases de datos, sin embargo para disminuir esta limitante, se ha dise&ntilde;ado una metodolog&iacute;a de verificaci&oacute;n de data. </span></p>          </td>
        </tr>
      </table>
    </div>
  </div>
  <div id="siteInfo"> <img src="images/gauge.gif" width="48" height="48" /> <a href="#">Grupo de Apoyo CODA</a> <span class="Estilo26">| </span><a href="#">Mapa del Sitio </a><span class="Estilo26"> |</span> <a href="#">Cuentas</a> | <a href="#">Contact Us</a><span class="Estilo26"> | &copy;2009 LeMax.Systems </span></div>
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
