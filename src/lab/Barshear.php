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
	<li><a href="Barshear.php">Bar Shearing</a></li>
	<li class="dir"><a href="#">Simulations</a>
	<ul>
	<li><a href="BarshearSimulation.php?Barshear/BarshearSetup.mp4">Bar Shearing</a></li>
	<li><a href="BarshearSimulation.php?Barshear/BarshearCurve.mp4">Bar Shearing with forging force</a></li>
	</ul>
	</li>
	<li><a href="MCQ_Barshear.php">Self Check Quiz</a></li>
EOQ;
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg);position: relative; margin:auto; width: 1024px; min-height:550px;">
<div class="box">
<h2>Bar Shearing</h2><br />
Shearing process is used to cut off material by using punch, die and blank holder. This process is widely applied to make the billet in forging. Sheared surface has smooth area (sheared surface) which is made by metal flow in punch-die clearance, rough area (fracture surface) which is appeared by crack initiation and propagation at the tip of punch and die, burr and shear drop.
<br /><br /><span class="blue">Bar Shearing Setup</span>: Bar shearing Process uses four dies, two are stationary and two are moving. The purple and the pink dies shown below are stationary ones, whereas the green and yellow are moving.
<br /><br /><center><img src="images/Barshear/Barshear.png" alt="Bar Shearing Setup"><br />Figure 1: Bar Shearing</center>
<br /><span class="blue">Press Used</span>: Hydraulic press is used for the process. The plunger of the press is placed over the green die. The Yellow shear die rests on a hydraulic cushion and moves when force on it reaches 5 tonns or more.
<br /><br /><center><img src="images/Barshear/Press.png" alt="Bar Shearing Press"><br />Figure 2: Bottom shear die rests on a hydraulic cushion and moves<br/>when force on it reaches 5 tonnes or more</center>
<br /><span class="blue">Sheared Billet</span>: The figure below shows the sheared billet. The right portion of bar is the sheared one whereas the bar on the other side is the left over bar for further shearing.
<br /><br /><center><img src="images/Barshear/Billet.png" alt="Bar Sheared Billet"><br />Figure 3: Sheared Billet</center>
</div></div> 
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>
</body>
</html>