<?php 
session_start(); 
ini_set("display_errors","Off");
?>
<!DOCTYPE HTML public "-w3c//dtd//xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Virtual Lab-Dayalbagh Educational Institute</title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/dropdown.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/advanced.css" media="all" rel="stylesheet" type="text/css" />
<style type="text/css">
th{
font-family:Arial;
font-size:1.8em;
color:#FF00FF;
}
</style>
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
<div id="header_main">
<img src="images/header_01.jpg"></div>
<div id="header">
<ul class="dropdown dropdown-horizontal">
<?php
echo <<<EOQ
	<li><a href="home.php">Home</a></li>
	<li><a href="Extrusion.php">Extrusion</a></li>
	<li class="dir"><a href="#">Simulation Bench</a>
	<ul>
	<li><a href="Aluminium.php">Simulation bench for aluminium</a></li>
	<li><a href="Titanium.php">Simulation bench for titanium</a></li>		
	</ul> 
	</li>
	<li><a href="Extrusioncomp.php">Comparative Simulation</a></li>
	<li class="dir"><a href="#">Applications</a>
	<ul>
	<li class="dir"><a href="#">Seamless Pipe</a>
	<ul>	
	<li><a href="Extru_Experiment.php?EXTRUSION/Applications/SeamlessPipe.mp4">Seamless pipe</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/Applications/SeamlessCurvePipe.mp4">Seamless pipe with forging force</a></li>
	</ul>
	</li>
	<li><a href="Extru_Experiment.php?EXTRUSION/Applications/PipeExtrusion.mp4">Pipe Extrusion</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/Applications/TurbineBlade.mp4">Turbine Blade</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/Applications/GolfStick.mp4">Golf Stick</a></li>	
	</ul>
	</li>
	<li class="dir"><a href="#">Special Cases</a>
	<ul>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/Angle.mp4">CASE-1</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX1.mp4">CASE-2</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX2.mp4">CASE-3</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX3.mp4">CASE-4</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX4.mp4">CASE-5</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX5.mp4">CASE-6</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX6.mp4">CASE-7</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EX7.mp4">CASE-8</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EXFin.mp4">CASE-9</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EXSlot1.mp4">CASE-10</a></li>
	<li><a href="Extru_Experiment.php?EXTRUSION/SpecialCases/EXSlot2.mp4">CASE-11</a></li>
	</ul> 
	</li>
	<li><a href="MCQ_Extrusion.php">Self Check Quiz</a></li>
EOQ;
	$answers = $_SESSION['answer'];
	$Curr_answers = array('Europe','4','Re-crystallisation temperature','10','Compressive Force',
	'1 mm/sec & 5 mm/sec','45<sup>o</sup>, 60<sup>o</sup>, 90<sup>o</sup>','Both','Plastic','Vegetable', 
	'F1.png', '211.2 mm', '157.5 mm', '14.9 mm','F5.png', '1111 mm', '533 mm', '11.5 mm');
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg); position: relative; margin:auto; width: 1024px; min-height:550px;">
<div style="padding-left:35px;">
<center><u style="font-size:1.7em; font-weight:bold; color:#ff0000; padding-top:10px;">RESULT SHEET</u><br><br>
<table border=2 cellspacing=5 cellpadding=5>
<tr><th>Question No.</th><th>Your Answers</th><th>Correct Answers</th></tr>
<?php 
	$score=0;
	for($i=0;$i<18;$i++) {
		if($answers[$i]==$Curr_answers[$i]){
		$score++;
		}
	    if($answers[$i] != '')
		{
		$var =$i+1;
?>
<tr>
<td><center> <?php echo($var); ?></center></td>
<td>
<?php 
if($i==10){
echo "<img src=\"images/Extrusion/$answers[$i]\"/>";
}
elseif($i==14)
{
echo "<img src=\"images/Extrusion/$answers[$i]\"/>";
}
else echo $answers[$i];
?>
</td><td>
<?php 
if($i==10){
echo "<img src=\"images/Extrusion/$Curr_answers[$i]\"/>";
}
elseif($i==14)
{
echo "<img src=\"images/Extrusion/$Curr_answers[$i]\"/>";
}
else echo $Curr_answers[$i];
?>
</td></tr>
<?php } } ?>
</table><br><br>
<u style="font-size:1.3em; color:#0000FF; font-weight:bold;">Your Score</u>
&nbsp;=&nbsp;<b style="font-size:1.4em; color:#FF0000;"><?php echo $score ?></b>&nbsp;&nbsp;&nbsp;
<a href="javascript: window.print()"><abbr title="Print">
<img src="images/Print.jpg"></abbr>&nbsp;<u style="font-size:1.2em; color:#FF0000; font-weight:bold;">Print</u></a>
</center>
</div></div>
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>	
</body>
</html>