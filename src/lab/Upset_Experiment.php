<?php session_start();
ini_set("display_errors","Off"); ?>
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
echo <<<EOQ
	<li><a href="home.php">Home</a></li>
	<li><a href="upsetting_process.php">Upsetting</a></li>
	<li><a href="upsetting_simulation.php">Simulations</a></li>
	<li class="dir"><a href="#">Simulation Bench</a>
	<ul>
	<li><a href="Hydraulic.php">SIMULATION BENCH FOR HYDRAULIC PRESS</a></li>
	<li><a href="Mechanical.php">SIMULATION BENCH FOR MECHANICAL PRESS</a></li>		
	</ul> 
	</li>
	<li><a href="upsetcomp.php">Comparative Simulations</a></li>
	<li class="dir"><a href="#">Applications</a>
	<ul>
	<li class="dir"><a href="#">ALLOY WHEEL</a>
	<ul>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/AlloyWheelGraph.mp4">Alloy wheel</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/AlloyWheelStrain.mp4">Alloy wheel with strain</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">BRASS FORGED PART</a>
	<ul>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/BrassForgedGraph.mp4">Brass forged part</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/BrassForgedStrain.mp4">Brass forged part with strain</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">FORGED PISTON</a>
	<ul>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/ForgedPiston.mp4">Forged piston-Setup</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/ForgedPistonGraph.mp4">Forged piston with graph</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/PistonSectionView.mp4">Forged piston-Section view</a></li>
	</ul>
	</li>
	<li class="dir"><a href="#">MUDGUARD</a>
	<ul>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/MudguardSetup.mp4">Mudguard-Setup</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/MudguardUp.mp4">Mudguard with strain in Upward Direction</a></li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/MudguardDown.mp4">Mudguard with strain in Downward Direction</a></li>
	</ul>
	</li>
	<li><a href="Upset_Experiment.php?UPSETTING/Applications/PatternMaking.mp4">PATTERN MAKING</a></li>
	</ul>
	</li>
	<li><a href="MCQ_Upsetting.php">Self Check Quiz</a></li>
EOQ;
?>
</ul></div>
<div><center>
<?php
	$value = $_SERVER['QUERY_STRING'];
	$speech = $_SESSION['speech'];
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
if(!empty($speech)){
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
<?php
echo $speech;
?>
</td></tr></table>
<?php
}
unset($_SESSION['speech']);
//session_destroy();
if(stristr($value,Case_1))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the video one could see four simulations running simultaneously. These simulations describes the comparison between the upsetting process of four different metals Copper, Aluminium, Titanium and Steel while taking L/D as 1 and die velocity as 1mm per second where as the friction is kept high.
On top left hand side, Copper metal is the work piece during upsetting. It shows equivalent strain scale and forging force vs. pilot height graph for 50% reduction in height of work piece. The maximum forging force required is 138 tons. 
On top right hand side, Aluminium metal is the work piece during upsetting. It shows equivalent strain scale and forging force vs pilot height graph for 50% reduction in height of work piece. The maximum forging force required is 116 tons. 
On bottom left hand side, Titanium metal is the work piece during upsetting. It shows equivalent strain scale and forging force vs pilot height graph for 50% reduction in height of work piece. The maximum forging force required is 319 tons. 
On bottom right hand side, Steel metal is the work piece during upsetting. It shows equivalent strain scale and forging force vs pilot height graph for 50% reduction in height of work piece. The maximum forging force required is 397 tons.
</td></tr></table>
<?php
}elseif(stristr($value,Case_2))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the video one could see two simulations running simultaneously. These simulations describes the comparison between the cold upsetting process of Aluminium while taking L/D as 1 and die velocity as 1mm per second while  varying the friction 
On left hand side, Aluminium metal is the work piece during upsetting. It shows temperature scale showing temperature variations during upsetting process and forging force vs pilot height graph for 50% reduction in height of work piece. Friction is kept as zero. The maximum forging force required is 105 tons. 
On right hand side, Aluminium metal is the work piece during upsetting. It shows temperature scale showing temperature variations during upsetting process and forging force vs pilot height graph for 50% reduction in height of work piece. Friction is kept high. The maximum forging force required is 115 tons. 
One could observe that the forging force required is more for case with higher friction when all other parameters are being kept as constant.
</td></tr></table>
<?php
}elseif(stristr($value,Case_3))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the video one could see two simulations running simultaneously. These simulations describe the comparison between the cold and hot upsetting process of Aluminium while taking L/D as 1 and die velocity as 1mm per second and keeping high friction.. 
On left hand side, Aluminium metal is the work piece during cold forming. It shows temperature scale depicting temperature variations during upsetting process with maximum temperature reaching 76<sup>o</sup>C and forging force vs pilot height graph for 50% reduction in height of work piece. Friction is kept high. The maximum forging force required is 115 tons. 
On right hand side, Aluminium metal is the work piece during upsetting. It shows temperature scale depicting temperature variations during upsetting process with maximum temperature reaching 322 degree centigrade and forging force vs pilot height graph for 50% reduction in height of work piece. Friction is kept high. The maximum forging force required is 6.6 tons. 
One could observe that the forging force required is more in case of cold upsetting when all other parameters are being kept as constant.
</td></tr></table>
<?php
}elseif(stristr($value,Case_4))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
In the video one could see two simulations running simultaneously. These simulations describes the comparison between the cold upsetting process of Aluminium while taking L/D as 1 and friction as zero while  varying the velocity of upper die. 
On left hand side, Aluminium metal is the work piece during cold forming. It shows temperature scale depicts temperature variations during upsetting process and forging force vs pilot height graph for 50% reduction in height of work piece. Velocity of upper die is 1 mm per second. The maximum forging force required is 105 tons. 
On right hand side, Aluminium metal is the work piece during cold forming. It shows temperature scale depicts temperature variations during upsetting process and forging force vs pilot height graph for 50% reduction in height of work piece. Velocity of upper die is 10 mm per second. The maximum forging force required is 107 tons. 
One could observe that the forging force required is slightly more for case with higher velocity when all other parameters are being kept as constant.
</td></tr></table>
<?php
}elseif(stristr($value,MudguardSetup))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Mudguard is made from steel sheet by cold sheet metal forming process. In this sheet forming process, the sheet is pressed between two dies and the final mudguard is obtained by bending of sheet.
In the given video of the simulation one can see the upper die, lower die and the sheet. The material of the sheet is stainless steel. The temperature of the billet is 28�C and the friction is sliding in nature. The hammer press is used for pressing the sheet.
The left hand side of the video shows the position and the motion of upper die, lower die and the sheet. The sheet is placed on lower die and the upper die presses the sheet.
On the right hand top side of the video one can see the initial billet and final billet. While on the right hand bottom side of the video one can see the variation in billet during deformation.
</td></tr></table>
<?php
}elseif(stristr($value,MudguardUp))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The left hand side of the video shows the position and the motion of upper die, lower die and the sheet. The sheet is placed on lower die and the upper die presses the sheet. 
On the right hand top side of the video one can see the upper die, lower die. While on the right hand bottom side of the video the variation of strain with mesh generated during deformation.
</td></tr></table>
<?php
}elseif(stristr($value,MudguardDown))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
The left hand side of the video shows the position and the motion of upper die, lower die and the sheet. The sheet is placed on lower die and the upper die presses the sheet. On the right hand top side of the video one can see the variation of strainin the sheet during the bending. 
While on the right hand bottom side of the video the variation of strain with mesh generated during deformation. Initially the equivalent strain in the sheet was 0 and at the end of the deformation average equivalent strain reaches up to 0.13.
</td></tr></table>
<?php
}elseif(stristr($value,BrassForgedGraph))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
This Forming process comprises brass material billet compression and deformation by closed impression die forming process. Upsetting process is shown over here and temperature for brass material billet is maintained as 600<sup>o</sup>C to make hot die forging process. Hydraulic press is used to deform the billet. 
The upper die with hydraulic press compresses the billet with very high force in downward direction and  deforms it. Due to high deforming force and high billet temperature, material starts deforming plastically and moves into the impressions created in the upper and lower die. 
Right hand side shows graph between forces on upper die and pilot height and in the lower right half lower and upper dies are shown. At the final height the billet is deformed into finished product. Final shape is obtained after various heat treatment processes and machining of the forged part. 
</td></tr></table>
<?php
}elseif(stristr($value,BrassForgedStrain))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
This Forming process comprises brass material billet compression and deformation by closed impression die forming process. Upsetting process is shown over here and temperature for brass material billet is maintained as 600oC to make hot die forging process. 
Hydraulic press is used to deform the billet. The upper die with hydraulic press compresses the billet with very high force in downward direction and deforms it. Due to high deforming force and high billet temperature, material starts deforming plastically and moves into the impressions created in the upper and lower die. At the final height the billet is deformed into finished product. 
Final shape is obtained after various heat treatment processes and machining of the forged part. The variation of equivalent strain is shown on the upper right section of the video  and in the lower right half temperature variation is shown in the video
</td></tr></table>
<?php
}elseif(stristr($value,AlloyWheelGraph))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Alloy wheel forming process comprises billet compression and deformation by closed impression die forming process. The upper half and lower half sections of the alloy wheel are impressed on the upper and lower dies respectively and maintaining temperature of billet to 350<sup>o</sup>C the forming of alloy wheel take place. 
Graph between the force and pilot height are shown over here at right hand side in video. Lower right hand side shows dies section. The material of the billet is Aluminum alloy or magnesium alloy. Hydraulic press is used to deform the billet. The upper die with hydraulic press compresses the billet with very high force in downward direction and deforms it. 
Due to high deforming force and high billet temperature, material starts deforming plastically and moves into the impressions created in the upper and lower die. At the final height the billet is deformed into finished alloy wheel. Final shape is obtained after various heat treatment processes and machining of the forged alloy wheel.  Final formed alloy wheel is shown at the end.
</td></tr></table>
<?php
}elseif(stristr($value,AlloyWheelStrain))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Alloy wheel forming process comprises billet compression and deformation by closed impression die forming process. The upper half and lower half sections of the alloy wheel are impressed on the upper and lower dies respectively and maintaining temperature of billet to 350<sup>o</sup>C the forming of alloy wheel take place. 
Right hand side of video shows variation of equivalent strain on billet. The material of the billet is Aluminum alloy or magnesium alloy. Hydraulic press is used to deform the billet. The upper die with hydraulic press compresses the billet with very high force in downward direction and deforms it. 
Due to high deforming force and high billet temperature, material starts deforming plastically and moves into the impressions created in the upper and lower die. At the final height the billet is deformed into finished alloy wheel. Final shape is obtained after various heat treatment processes and machining of the forged alloy wheel. Final formed alloy wheel is shown at the end.
</td></tr></table>
<?php
}elseif(stristr($value,PatternMaking))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
Patterns used in sand casting may be made of wood, metal, plastics or other materials. Patterns are made to exacting standards of construction, so that they can last for a reasonable length of time, and so that they will repeatably provide a dimensionally acceptable casting.
In the video, one could see a picture which has sectioned view explaining about the arrangement to create hollow cavity for casting. The pattern is shown in brown which is placed in the cope and drag.
The video shows the method of making the pattern of 3 way valve. The die having a hollow cavity of the shape of 3 way valve is shown in green. The billet is shown in red and plunger is shown in yellow.
As the plunger proceeds it deforms the billet and fills the cavity inside the hollow die taking the shape of the pattern which is shown at the end of video.
</td></tr></table>
<?php
}elseif(stristr($value,ForgedPiston))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left side, one can observe the setup of hot forging of piston. The meshed cylindrical billet is placed in the green die and the yellow upper die is moving downwards. The change in microstructure can be seen with change in mesh size.
On the right hand side,  the first red part shows the initial billet, the red part in the middle shows the forged piston after forging process and the grey part shows the final piston after machining process.
The green picture at bottom shows the lower die  and the yellow picture shows the upper die. 
</td></tr></table>
<?php
}elseif(stristr($value,ForgedPistonGraph))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left side, one can observe the magnified view of  hot forging of piston setup. The meshed cylindrical billet is placed in the green die and the yellow upper die is moving downwards. The change in microstructure can be seen with change in mesh size.
On the right side,  a graph is shown. It is plotted in between Force versus Pilot Height. The Y axis shows Force in Tons and Y axis shows Pilot Height in millimeters.
</td></tr></table>
<?php
}elseif(stristr($value,PistonSectionView))
{
?>
<table border="2" color="#ffffff" width="1020" style="background-color: white;">
<tr><td style="font-size: 1.2em; padding:5px; line-height:20px;">
On the left side, one can observe the setup of hot forging of piston. The meshed cylindrical billet is placed in the green die and the yellow upper die is moving downwards. The change in microstructure can be seen with change in mesh size.
On the right hand, top side, equivalent strains generated in billet when observed from top  where as on the right hand, bottom end , equivalent strains generated are shown  in billet as a cut plane cuts the  setup. 
One can observe the reverse upsetting process here. The colored contours can be described by the scale on the left of screen.
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