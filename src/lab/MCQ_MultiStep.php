<?php session_start();
ini_set("display_errors","Off"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Virtual Lab-Dayalbagh Educational Institute</title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/dropdown.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/advanced.css" media="all" rel="stylesheet" type="text/css" />
<style type="text/css">
b{
font-family:Arial;
font-size:16px;
color:#0000FF;}
p{
font-family:Arial;
font-size:17px;
font-weight:bold;}
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
<div id="header_main"></div>
<div id="header">
<ul class="dropdown dropdown-horizontal">
<?php
echo <<<EOQ
	<li><a href="home.php">Home</a></li>
	<li><a href="MultiStep.php">Multi Step Forging</a></li>
	<li class="dir"><a href="#">Multi Steps</a>
	<ul>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/MSF1.mp4">Multi step forging-1 setup</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/MSF2.mp4">Multi step forging-2 setup</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/MSF3.mp4">Equivalent strain & Forging force-1</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/MSF4.mp4">Equivalent strain & Forging force-2</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/MSF5.mp4">Front & Top view</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Applications</a>
	<ul>
	<li class="dir"><a href="#">Valve Forging-1</a>
	<ul>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/ValveForging/ValveForgingSetup.mp4">Valve forging-Setup</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/ValveForging/ValveForgingCutSection.mp4">Valve forging-Cut section</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/ValveForging/ValveforgingCurve.mp4">Valve forging-Forging force</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Valve Forging-2</a>
	<ul>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/ValveForging/ValveForgingFinal.mp4">Valve forging</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/ValveForging/ValveForgingMesh.mp4">Valve forging step-1</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/ValveForging/ValveForgingStrain.mp4">Valve forging step-2</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/ValveForging/ValveForgingGraph.mp4">Valve forging step-3</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">Hub cap</a>
	<ul>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/HubCap/InitialHubCap.mp4">Hub cap step-1</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/HubCap/InitialSectionView.mp4">Section view step-1</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/HubCap/MiddleHubCap.mp4">Hub cap step-2</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/HubCap/MiddleSectionView.mp4">Section view step-2</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/HubCap/FinalHubCap.mp4">Hub Cap step-3</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/HubCap/FinalSectionView.mp4">Section view step-3</a></li>
	</ul>
	</li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/Heading.mp4">Heading process</a></li>
	<li><a href="MultiStep_Experiment.php?UPSETTING/MultiStep/BallPeen.mp4">Ball peen hammer</a></li>	
	</ul>
	</li>
	<li><a href="MCQ_MultiStep.php">Self Check Quiz</a></li>	
EOQ;
?>
</ul></div>
<div style="background-image:url(images/content_bg.jpg); position: relative; margin:auto; width: 1024px; min-height:550px;">
<div style="padding-left:35px; padding-right:40px">
<center style="font-size:1.7em; font-weight:bold; color:#ff0000; text-decoration:underline; padding-top:10px;">
SELF CHECK QUIZ - MULTI STEP FORGING</center><br>
<form method="post" action="MCQ_MultiStep.php">
  <p>Q1. The number of steps in which designing of forming process can be divided are:</p>
  <p>
   (a)&nbsp;&nbsp;<input name="q1" type="radio" value="5" /><b>5</b>
   (b)&nbsp;&nbsp;<input name="q1" type="radio" value="3" /><b>3</b> 
   (c)&nbsp;&nbsp;<input name="q1" type="radio" value="2" /><b>2</b>
   (d)&nbsp;&nbsp;<input name="q1" type="radio" value="8" /><b>8</b></p><br /><br />
  <p>Q2. Which of the following product is not manufactured by forming operation:</p>
  <p>
  (a)&nbsp;&nbsp;<input name="q2" type="radio" value="Fasteners" /><b>Fasteners</b>&nbsp;&nbsp;
  (b)&nbsp;&nbsp;<input name="q2" type="radio" value="Hand tools" /><b>Hand tools</b>&nbsp;&nbsp;
  (c)&nbsp;&nbsp;<input name="q2" type="radio" value="Crankshaft" /><b>Crankshaft</b>&nbsp;&nbsp;
  (d)&nbsp;&nbsp;<input name="q2" type="radio" value="Lathe bed" /><b>Lathe bed</b></p><br /><br />
  <p>Q3. Which of the following is an advantage of forging:</p>
  <p>
    (a)&nbsp;&nbsp;<input type="radio" name="q3" value="Good surface finish" /><b>Good surface finish</b>
    (b)&nbsp;&nbsp;<input type="radio" name="q3" value="Low tooling cost" /><b>Low tooling cost</b>
    (c)&nbsp;&nbsp;<input type="radio" name="q3" value="Close tolerance" /><b>Close tolerance</b>
    (d)&nbsp;&nbsp;<input type="radio" name="q3" value="Improved physical property" /><b>Improved physical property</b></p><br><br>
  <p>Q4. Which one of the following may not be the variable that affect the metal forming process:</p>
  <p>
    (a)&nbsp;&nbsp;<input type="radio" name="q4" value="Billet material property" /><b>Billet material property</b>&nbsp;&nbsp;
    (b)&nbsp;&nbsp;<input type="radio" name="q4" value="Ram/die velocity" /><b>Ram/die velocity</b>&nbsp;&nbsp;
    (c)&nbsp;&nbsp;<input type="radio" name="q4" value="Interface lubrication" /><b>Interface lubrication</b>&nbsp;&nbsp;
    (d)&nbsp;&nbsp;<input type="radio" name="q4" value="Surface lustre" /><b>Surface lustre</b></p><br><br>
  <p>Q5. In forging operation fullering is done to:</p>
  <p>
    (a)&nbsp;&nbsp;<input type="radio" name="q5" value="Draw out material" /><b>Draw out material</b>
    (b)&nbsp;&nbsp;<input type="radio" name="q5" value="Bend the materials" /><b>Bend the materials</b>
    (c)&nbsp;&nbsp;<input type="radio" name="q5" value="Upset the materials" /><b>Upset the materials</b>
    (d)&nbsp;&nbsp;<input type="radio" name="q5" value="Extrude the material" /><b>Extrude the material</b></p><br /><br />
  <p>Q6. The process of removing the burs or flash from a forged component in drop forging is called:</p>
  <p>
    (a)&nbsp;&nbsp;<input type="radio" name="q6" value="Swaging" /><b>Swaging</b>
    (b)&nbsp;&nbsp;<input type="radio" name="q6" value="Perforating" /><b>Perforating</b>
    (c)&nbsp;&nbsp;<input type="radio" name="q6" value="Trimming" /><b>Trimming</b>
    (d)&nbsp;&nbsp;<input type="radio" name="q6" value="Fetting" /><b>Fetting</b></p><br /><br />
  <p>Q7. Which of the following material cannot be forged:</p>
  <p>
    (a)&nbsp;&nbsp;<input type="radio" name="q7" value="Wrought iron" /><b>Wrought iron</b>
    (b)&nbsp;&nbsp;<input type="radio" name="q7" value="Cast iron" /><b>Cast iron</b>
    (c)&nbsp;&nbsp;<input type="radio" name="q7" value="Mild steel" /><b>Mild steel</b>
    (d)&nbsp;&nbsp;<input type="radio" name="q7" value="High carbon steel" /><b>High carbon steel</b></p><br /><br />
  <p>Q8. The forging defect due to hindrance to smooth flow  of metal in component called lap. It occurred due to:</p>
  <p>
    (a)&nbsp;&nbsp;<input type="radio" name="q8" value="The corner radius provided is too large" />
	<b>The corner radius provided is too large</b><br />
    (b)&nbsp;&nbsp;<input type="radio" name="q8" value="The corner radius provided is too small" />
	<b>The corner radius provided is too small</b><br />
    (c)&nbsp;&nbsp;<input type="radio" name="q8" value="Draft is not provided" />
	<b>Draft is not provided</b><br />
    (d)&nbsp;&nbsp;<input type="radio" name="q8" value="The shrinkage allowance is inadequate" />
	<b>The shrinkage allowance is inadequate</b></p><br><br>
	<p>Q9. In valve forging simulation of multi-step forging ,the number of steps required for valve forging are:</p>
  <p>
    (a)&nbsp;&nbsp;<input type="radio" name="q9" value="2" /><b>2</b>&nbsp;&nbsp;
    (b)&nbsp;&nbsp;<input type="radio" name="q9" value="3" /><b>3</b>&nbsp;&nbsp;
    (c)&nbsp;&nbsp;<input type="radio" name="q9" value="5" /><b>5</b>&nbsp;&nbsp;
    (d)&nbsp;&nbsp;<input type="radio" name="q9" value="4" /><b>4</b></p><br><br>
  <p>Q10. In the valve forging simulation of multi-step forging, the material of the billet is:</p>
  <p>
    (a)&nbsp;&nbsp;<input type="radio" name="q10" value="Steel" /><b>Steel</b>&nbsp;&nbsp;
    (b)&nbsp;&nbsp;<input type="radio" name="q10" value="Brass" /><b>Brass</b>&nbsp;&nbsp;
    (c)&nbsp;&nbsp;<input type="radio" name="q10" value="Lead" /><b>Lead</b>&nbsp;&nbsp;
    (d)&nbsp;&nbsp;<input type="radio" name="q10" value="None of these" /><b>None of these</b></p><br>
<center><input name="Send" type="submit" id="Send" value="Submit" />
<input name="Reset" type="reset" id="Reset" value="Reset" />
<?php					
	if(isset($_POST["Send"])){
		$answers = array($_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'], $_POST['q6'],
		$_POST['q7'], $_POST['q8'], $_POST['q9'], $_POST['q10']);
		$_SESSION['answer'] = $answers;
		echo '<script language="javascript">window.location = "Ans_MultiStep.php";</script>';
	}
?>
</center></form>
</div></div>
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)
</div>
</body>
</html>