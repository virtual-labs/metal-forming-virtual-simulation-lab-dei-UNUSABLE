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
	<li><a href="Hydroforming.php">Hydroforming</a></li>
	<li class="dir"><a href="#">Simulations</a>
	<ul>
	<li class="dir"><a href="#">Tube Hydroforming</a>
	<ul>
	<li><a href="HydroSimulation.php?Forming/Hydroforming/TubeHydroforming.mp4">Hydroforming</a></li>
	<li><a href="HydroSimulation.php?Forming/Hydroforming/CurveTubeHydroforming.mp4">Hydroforming with curve</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Tube Hydroforming - Single T</a>
	<ul>
	<li><a href="HydroSimulation.php?Forming/Hydroforming/Hydroforming_ST.mp4">Hydroforming - Single T</a></li>
	<li><a href="HydroSimulation.php?Forming/Hydroforming/CurveHydroforming_ST.mp4">Single T with curve</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Tube Hydroforming - Double T</a> 
	<ul>
	<li><a href="HydroSimulation.php?Forming/Hydroforming/Hydroforming_dt_ss.mp4">Double T - Same side</a></li>
	<li><a href="HydroSimulation.php?Forming/Hydroforming/Hydroforming_DT_os.mp4">Double T - Opposite side</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Sheet Hydroforming</a>
	<ul>
	<li><a href="HydroSimulation.php?Forming/Hydroforming/SheetHydroforming.mp4">Sheet Hydroforming</a></li>
	<li><a href="HydroSimulation.php?Forming/Hydroforming/SheetStrainHydroforming.mp4">Sheet Hydroforming with Strain</a></li>
	</ul>
	</li>
	</ul>
	</li>
	<li><a href="MCQ_Hydroforming.php">Self Check Quiz</a></li>
EOQ;
?>
</ul></div>
<div><center>
<?php
	$value = $_SERVER['QUERY_STRING'];
	print <<<EOQ
	   <object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="1020" height="600"> 
		<param name="movie" value="player.swf"/> 
		<param name="allowfullscreen" value="true"/> 
		<param name="wmode" value="transparent"/>
		<param name="allowscriptaccess" value="always"/> 
		<param name="flashvars" value="file=$value&autostart=true&repeat=always&image=images/DEILOGO.jpg"/> 
		<embed 
			wmode="transparent"
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="player.swf" 
			width="1020" 
			height="600"
			allowscriptaccess="always" 
			allowfullscreen="true"
			flashvars="file=$value&autostart=true&repeat=always&image=images/DEILOGO.jpg"/> 
	</object> 
EOQ;
if(stristr($value,TubeHydroforming))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On left hand side, the full in section of hydroforming setup is shown. The tube is shown in red, the die in green and pistons in yellow. As the piston pushes the tube, the tube occupies the cavity under fluid pressure.
On the right hand side, a picture is shown. The top end of the picture shows the full in section of setup of a basic Hydroforming process. The die is a tube shown in green. The tube is shown in red and is placed in the die having a cavity. 
The piston is shown in yellow and it moves in the green die which consists of fluid. On the bottom end of the picture, transformation from initial shape of tube to final shape of tube is shown.
</td></tr></table>
<?php
}elseif(stristr($value,CurveTubeHydroforming))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On left hand side, the full in section of hydroforming setup is shown. The tube is shown in red, the die in green and pistons in yellow. As the piston pushes the tube, the tube occupies the cavity under fluid pressure.
On the right hand, top side, equivalent strains generated in the tube are shown with different colour contours. The contours of strains generated in the tube can be compared with the scale given on left of the section. 
On right hand, bottom end,  Force vs Time graph is shown. The Y axis of graph indicates Force in Tonnes where as the X axis shows Time in seconds.
</td></tr></table>
<?php
}elseif(stristr($value,Hydroforming_DT_ss))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the top left hand corner of screen, one can visualize the tube hydroforming process of Double T on same side. The die is shown in green, tube in red and pistons with yellow colour. As the pistons moves inside the die, deformation of tube on same side, near T can be observed.
Just below this, we have a magnified view of T section describing about the equivalent strains generated on external surface of tube. The different color contours can be compared with the scale on extreme left of screen. The graph in the middle shows the Force vs Pilot Height graph. 
The Pilot height is shown on X axis and Force on Y axis. On top right hand corner, one can view transformation of initial tube in red to final tube in blue with contours at T section. On the bottom right hand corner, the setup is shown.
</td></tr></table>
<?php
}elseif(stristr($value,Hydroforming_DT_os))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the top left hand corner of screen, one can visualize the tube hydroforming process of Double T on opposite side. The die is shown in green, tube in red and pistons with yellow and blue colour. As the piston moves inside the die, deformation of tube on opposite side, near T can be observed
Just below this, we have a magnified view of T section describing about the equivalent strains generated on external surface of tube. The different color contours can be compared with the scale on extreme left of screen. The graph in the middle shows the Force vs Pilot Height graph with 
Pilot height on X axis and Force on Y axis. On top right hand corner, one can view transformation of initial tube in red to final tube in blue with contours at T section. On the bottom right hand corner, the setup is shown.
</td></tr></table>
<?php
}elseif(stristr($value,Hydroforming_ST))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On left hand side, the full in section of Tube Hydroforming-single T setup is shown. The tube is shown in red, the die in green and pistons in yellow. As the piston pushes the tube, the tube starts occupying the T shape under fluid pressure.
On the right hand side, a picture is shown. The top end of the picture shows, transformation from initial shape of tube to final T shape of tube. On the bottom end of the picture, the full  setup of a single T Hydroforming process is described. 
The die is shown in green. The tube is shown in red and is placed in the die having a T. The piston is shown in yellow and it moves in the green die which consists of fluid.
</td></tr></table>
<?php
}elseif(stristr($value,CurveHydroforming_ST))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On left hand side, the full in section of Tube Hydroforming-single T setup is shown. The tube is shown in red, the die in green and pistons in yellow. As the piston pushes the tube, the tube starts occupying the T shape under fluid pressure.
On the right hand, top side, equivalent strains generated in the tube are shown with different colour contours. The contours of strains generated in the tube can be compared with the scale given on left of the section. 
On right hand, bottom end, Force vs Time graph is shown. The Y axis of graph indicates Force in Tonnes where as the X axis shows Time in seconds.
</td></tr></table>
<?php
}elseif(stristr($value,SheetHydroforming))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the given simulation video one can see sheet hydroforming process. In sheet hydro forming process sheet is pressed inside the lower die with the application of fluid pressure and axial feed. 
At left hand side video one can see the arrangement of dies and sheet. The process assembly consists of piston, sheet and lower die. The hydraulic fluid is filled between the piston and sheet which is not shown in video. 
Due to symmetry of shape, only half in section is of die arrangement is shown in simulation for simplicity in calculation. The material of sheet is steel.
The right hand top side of the video shows the strain generated inside the sheet during the process. The left side of the video shows scale where different colors depict different levels of strain. 
More strain depicts more deformation and more deformation gives more strength to the material.  The right hand bottom side of the video shows the various stages of the sheet. Initially the sheet is flat, but with the progress of the process sheet gets deformed and attain the final shape. 
</td></tr></table>
<?php
}elseif(stristr($value,SheetStrainHydroforming))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The given simulation video of sheet hydroforming process shows the variation of strain and temperature generated during the progress of process. In the left hand side of the video show the variation of strain on the inner surface of the sheet. 
The left side of the video shows the scale with different colors that depict different level of strain starting from zero. Initially the strain in the sheet is zero which is shown with blue color of sheet. With the progress of process, the strain 
generated is reached up to 0.920 at different regions of sheet. At the corner of sheet the strain raises up to 1.53.
The right hand top side of the video shows the variation of strain at outer surface of the sheet. The strain varies at different regions of the sheet with time. The maximum strain generated in the sheet is 0.834.
The right hand bottom side of the video shows the variation of temperature on the sheet. The left side of the video shows scale with different color regions starting from blue color with temperature 20�C Initially the temperature of sheet is 20�C.
With the advancement of the process, the temperature increases initially from 20�C to 34�C  and then decreases upto 30�C.
</td></tr></table>
<?php
}
?>
</center></div>
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>	
</body>
</html>