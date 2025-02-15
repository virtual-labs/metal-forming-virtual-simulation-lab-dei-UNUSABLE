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
if(stristr($value,heading))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Hexagonal bolt is formed by heading operation. Heading process may be defined as an upsetting process, normally performed at the end of a round rod or wire or blank in order to produce a larger cross-section. Heading processes can be carried out cold, warm or hot.
In the given simulation of hexagonal bolt forming, cold heading process is used. In this simulation video only half section of the billet is shown as the billet is symmetric in shape. The hexagonal bolt forming is normally done in three steps but for ease of the simulation ,bolt is made in a single step.
Consider the various parameters of heading simulation. The material of the billet is plain carbon steel. the temperature of the billet is 65<sup>o</sup>C. In the given simulation the billet is divided into small finite elements to have better analysis of the force. The mechanical press is used for deformation.
In the left hand side of the simulation one can see the arrangement of the upper die or punch, the billet and lower die.
In the right hand top side of the video one can depict the variation of strain in the billet during the heading operation. Initially the strain in the billet is zero while during the operation the strain rises due to deformation. It rises up to 1.806. Greater strain indicates more deformation, more grain refinement and hence better mechanical properties. 
Similarly in the right hand bottom side of the video one can depicts the variation of temperature in the billet during the operation. At the end of the operation the temperature rises up to 335<sup>o</sup>C.
</td></tr></table>
<?php
}elseif(stristr($value,ValveForgingFinal))
{
?>
<TEXTAREA NAME="comments" COLS=120 ROWS=7>
Valve is formed by post processing. Which may be defined as an upsetting process, which is normally performed at the end of the cylindrical round rod in order to produce larger cross�section. Post processing can be carried out cold or hot. In the given simulation of valve forming cold forming is used. The valve forming is normally done in the three step.
In the case first 
In the left hand top  side of the video  we can see the case of the billet in different stages. In the left hand side of the video we can see the processing of the billet during in the case first. Similarly in the right hand side  the punch moving along the upward direction then after billet is converted  in the punch shape.
Now in the second step 
In the right hand side we can see the punch moving in the upward direction. When the punch moves then the billet also changes and after it comes in the punch shape. In the left hand top  side of the video,  we can see the case of the billet in different stages. In the left hand side of the video, we can see the processing of the billet during in the case first.
Now in the third step 
In the right hand side we can see the punch moving in the upward direction. When the punch moves then the billet also changes and after it comes in the punch shape. In the left hand top  side of the video  we can see the case of the billet in different stages. In the left hand side of the video, we can see the processing of the billet during in the case first.
Now in  the forth step
In the Right hand side we can see the punch moving in the upward direction .when the punch moves then the billet also changes and after it comes in the punch shape. In the left hand top  side of the video  we can see the case of the billet in different stages. In the left hand side of the video, we can see the processing of the billet during in the case first.
</TEXTAREA>
<?php
}elseif(stristr($value,BallPeen))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The video shows the process of making hammer. In the first operation, the eye of the hammer is forged. The initial billet is shown by red colour and there are four curved dies around the centre of the billet. In the second operation, head face section of hammer is forged. There are two dies with inbuilt cavity which are used for the forging shown in grey. In the final operation, peen section of the hammer is forged using two different set of dies shown in grey with inbuilt cavity. 
The equivalent strain generated during each forging operation can be determined by a scale on extreme left. The final product assembly is shown at the end of video showing each part distinctly.
</td></tr></table>
<?php
}elseif(stristr($value,ValveForgingSetup))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the video, one could see a simple poppet valve being forged. In the first step upsetting of initial billet is done. The arrangement has an upper punch in blue, billet in red, top die in purple, bottom die in green, bottom die insert which is having cavity in yellow and bottom plate in pink which are shown on left side
In the second step, the head of poppet valve is formed. The arrangement is shown in left hand side which shows punch in pink, top die in yellow, bottom die insert in green, work piece after 1st step in red and bottom plate in purple. On top right corner the picture explains about the multiple steps of forming operation where as on bottom right corner shows the billet being deformed.
</td></tr></table>
<?php
}elseif(stristr($value,ValveForgingCutSection))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the video, one could see a simple poppet valve being forged. In the first step, upsetting of initial billet is done filling up the cavity in the bottom die insert. A part of the stem is formed in this step.
In the second step, the head of poppet valve is formed and the stem is formed. The left hand corner shows a scale describing the equivalent strain generated inside the billet during the forming operation.
</td></tr></table>
<?php
}elseif(stristr($value,ValveforgingCurve))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the video, one could see a simple poppet valve being forged. In the first step, upsetting of initial billet is done filling up the cavity in the bottom die insert. A part of the stem is formed in this step. In the second step, the head of poppet valve is formed and the stem is formed.
The left hand corner shows a scale describing the equivalent strain generated inside the billet during the forming operation. At the bottom, the graph of Forging Force vs Pilot Height is shown describing how the forging force is varying during the process.
</td></tr></table>
<?php
}elseif(stristr($value,MSF1))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The video shows the Upset Stage in step 1 followed by Blocker Stage in Step 2 in the multi-step forging. The setup on the left hand side shows the work piece placed between two dies with Upsetting Die in Step 1 followed by Blocker die in Step2 and respective operations taking place in 2 steps. 
On the top right hand side, the picture describes the intermediate steps in which the multi-step forging is done. The dies are shown with yellow and the initial billet, intermediate stage and product are shown with red in the picture. 
On the bottom right side the initial billet can be observed being deformed into the final product in two steps and the scale on extreme left side describing equivalent strain being generated in the billet.
</td></tr></table>
<?php
}elseif(stristr($value,MSF2))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The video shows the Upset Stage in step 1 followed by Blocker Stage in Step 2 in the multi-step forging. The setup on the left hand side shows the work piece placed between two dies with Upsetting Die in Step 1 followed by Blocker die in Step2 and respective operations taking place in 2 steps. 
On the top right hand side, the picture describes the intermediate steps in which the multi-step forging is done. The dies are shown with yellow and the initial billet, intermediate stage and product are shown with red in the picture. 
On the bottom right side the graph between force on upper die vs. pilot height in 2 successive stages is shown describing force variations with change in pilot height and the scale on extreme left side describing equivalent strain being generated in the billet.
</td></tr></table>
<?php
}elseif(stristr($value,MSF3))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The video shows Upset Stage in step 1 followed by Blocker Stage in Step 2 in the multi-step forging. The setup on the left hand side shows the work piece placed between two dies with Upsetting Die in Step 1 followed by Blocker die in Step2 and respective operations taking place in 2 steps. 
A quarter section of dies in operation is shown. On the right side the graph between force on upper die vs. pilot height in 2 successive stages is shown describing force variations with change in pilot height and the scale on extreme left side describing equivalent strain being generated in the billet.
</td></tr></table>
<?php
}elseif(stristr($value,MSF4))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The video shows Upset Stage in step 1 followed by Blocker Stage in Step 2 in the multi-step forging. The setup on the left hand side shows the work piece placed between two dies with Upsetting Die in Step 1 followed by Blocker die in Step2 and respective operations taking place in 2 steps. 
A quarter section of dies in operation is shown from all angles for better understanding. On the right side, the graph between force on upper die vs. pilot height in 2 successive stages is shown describing force variations with change in pilot height and the scale on extreme left side describing equivalent strain being generated in the billet.
</td></tr></table>
<?php
}elseif(stristr($value,MSF5))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The video shows Upset Stage in step 1 followed by Blocker Stage in Step 2 in the multi-step forging. In the Step 1, the front view of the work piece being deformed is shown on the left side and top view is shown on the right. Similarly in the Step 2, the front view of the work piece being deformed 
is shown on the left side and top view is shown on the right The colour change shows the equivalent strain generated in the work piece which is described by the scale on left of each view. The final deformed work piece can be shown in front view and top view at the end of the video.
</td></tr></table>
<?php
}elseif(stristr($value,InitialHubCap))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left  side, one can observe the Step-1 of Hub Cap. In this step, one could observe the circular profile and holes are being formed by the cold forming process. The upper die is moving downwards and one can see the changes in the meshed red sheet. On the right side, the yellow part shows the upper die and 
on the bottom side of the screen the green part shows the lower die. The two red parts in the middle, shows the initial and the final sheet respectively before and after step 1.Generally, we take low alloy steel sheet for making Hub Cap. It undergoes cold forming process to form circular profile in between and holes.
</td></tr></table>
<?php
}elseif(stristr($value,InitialSectionView))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left  side, one can observe the Step-1 of Hub Cap. In this step, one could observe the circular profile and holes are being formed by the cold forming process. The upper die is moving downwards and one can see the changes in the meshed red sheet. On the right hand, top end, one can observe 
the equivalent strains generated on the sheet in isometric view, whereas on the right hand, bottom end, one can observe the equivalent strains generated on sheet when a cut plane cuts the sheet. The different colored contours of equivalent strains generated can be described by the scale on the left.
</td></tr></table>
<?php
}elseif(stristr($value,MiddleHubCap))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left  side, one can observe the Step-2 of Hub Cap. In this step, one could observe the cold shearing of windows of Hub Cap. The upper die is moving downwards and one can see the changes in the red sheet after Step-1.
On the right side, the yellow part shows the upper die and on the bottom side of the screen  the green part shows the lower die. The red and grey parts in the middle, shows the initial and the final sheet respectively before and after step-2.
</td></tr></table>
<?php
}elseif(stristr($value,MiddleSectionView))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left  side, one can observe the Step-2 of Hub Cap. In this step, one could observe the cold shearing of windows of Hub Cap. The upper die is moving downwards and one can see the changes in the red sheet after Step-1.
On the right hand, top end, one can observe the colored contours describing the distance between upper die and lower die is shown. Whereas on the right hand, bottom end, one can observe the equivalent strains generated 
on sheet when a cut plane cuts the sheet. One can easily see the shearing operation taking place in this cut section. The equivalent strains generated can be described by the scale on the left.
</td></tr></table>
<?php
}elseif(stristr($value,FinalHubCap))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left  side, one can observe the Step-3 of Hub Cap. In this step, one could observe the bowling of sheet after Step-2 of Hub Cap. The upper die is moving downwards and one can see the changes in the red sheet after Step-2.
On the right side, the yellow part shows the upper die and on the bottom side of the screen  the green part shows the lower die. The grey and red parts in the middle, shows the initial and the final sheet respectively before and after step-2.
</td></tr></table>
<?php
}elseif(stristr($value,FinalSectionView))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left  side, one can observe the Step-3 of Hub Cap. In this step, one could observe the bowling of sheet after Step-2 of Hub Cap. The upper die is moving downwards and one can see the changes in the red sheet after Step-2.
On the right hand, top end, one can observe the colored contours describing pressure applied on the sheet. The different colored contours of pressure applied can be described by the scale on the left. 
Whereas on the right hand, bottom end, one can observe the equivalent strains generated on sheet when a cut plane cuts the sheet. One can easily see the bowling operation taking place in this cut section. The equivalent strains generated can be described by the scale on the left.
</td></tr></table>
<?php
}elseif(stristr($value,ValveForgingMesh))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the left  hand side we can see variation of the  strain in the billet during the operation. Initially the strain in the billet is zero while during the operation the strain rises due to deformation up to 1.8878. Greater strain indicates more deformation, 
more grain refinement and hence better mechanical properties. In the right hand top  side we can see variation of the  strain with mesh in the billet during the operation. In right hand bottom side we can see the variation in the billet during the operation by the graph.
</td></tr></table>
<?php
}elseif(stristr($value,ValveForgingStrain))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In in the left  hand side we can see variation of the  strain in the billet during the operation. Initially the strain in the billet is zero while during the operation the strain rises due to deformation up to 5.11612. Greater strain indicates more deformation, 
more grain refinement and hence better mechanical properties. In the right hand top  side we can see variation of the  strain with mesh in the billet during the operation. In right hand bottom side we can see the variation in the billet during the operation by the graph.
</td></tr></table>
<?php
}elseif(stristr($value,ValveForgingGraph))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In in the left  hand side we can see variation of the  strain in the billet during the operation. Initially the strain in the billet is zero while during the operation the strain rises due to deformation up to 6.588. Greater strain indicates more deformation, 
more grain refinement and hence better mechanical properties. In the right  hand top side we can see variation of the strain with mesh in the billet during the operation. In right hand bottom side we can see the variation in the billet during the operation by the graph.
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