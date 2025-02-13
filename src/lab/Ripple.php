<!DOCTYPE HTML public "-w3c//dtd//xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Virtual Lab-Dayalbagh Educational Institute</title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/dropdown.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/advanced.css" media="all" rel="stylesheet" type="text/css" />
<script language="javascript">
<!-- 
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
  if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
  function mischandler(){
   return false;
 }
  function mousehandler(e){
 	var myevent = (isNS) ? e : event;
 	var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
 }
 document.oncontextmenu = mischandler;
 document.onmousedown = mousehandler;
 document.onmouseup = mousehandler;
 
window.onload = init; 
function init() {
  disableDraggingFor(document.getElementById("draggingDisabled"));
} 
function disableDraggingFor(element) {
  // this works for FireFox and WebKit in future according to http://help.dottoro.com/lhqsqbtn.php
  element.draggable = false;
  // this works for older web layout engines
  element.onmousedown = function(event) {
                event.preventDefault();
                return false;
};
}
-->
</script>
</head>
<body id="draggingDisabled" bgcolor="#FFFFFF">
<div id="header_main"></div>
<div id="header">
<ul class="dropdown dropdown-horizontal">
<?php
ini_set("display_errors","Off");
echo <<<EOQ
	<li><a href="home.php">Home</a></li>
	<li><a href="Ripple.php">Ripple Process</a></li>
	<li class="dir"><a href="#">Simulations</a>
	<ul>
	<li><a href="RippleSimulation.php?Barshear/TubeRipple.mp4">Ripple Process</a></li>
	<li><a href="RippleSimulation.php?Barshear/StrainRipple.mp4">Ripple Process with Strain</a></li>
	</ul>
	</li>
EOQ;
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:550px;">
<div class="box">
<h2>Ripple Process</h2><br/>
Bellow tubes are elastic vessels that can be compressed when pressure is applied to the outside of the vessel, or extended under vacuum. When the pressure or vacuum is released, the bellows will return to its original shape. They are also called convoluted bellows or sylphons.
Bellows, welded or convoluted (formed) are used in a large number of industrial applications that includes load cells, mechanical seals, valve sealing, exhaust bellows ,piping expansion joint etc. Metal bellows are also used in other products including medical applications like implantable drug pumps, to industrial actuators, to aerospace applications such as altitude sensors and fluid management devices (accumulators, surge arresters, volume compensators, and fluid storage). 
Metal bellows are also found in space applications, providing reservoirs with potable water as well as accumulators to collect wastewater.
There are two main types of metal bellows - formed and welded. Formed bellows are produced by a variety of processes, including cold forming (rolling), electroforming and hydroforming.
Bellows tube or ripples are formed by combined process of bulging and collapsing. Initially the tube is pressed by hydraulic or mechanical press. In the initial step, the tube is bulged at several fixed equidistant locations. In the next step, it is compressed axially to crumple the bulge regions, thus bellows or ripples are formed. The material of the tube should be able to withstand large deformation during collapsing process. So in the simulation of tube ripple process mild steel is used.
</div></div> 
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>
</body>
</html>