<?php session_start();
setcookie("mem103", "MEM103_2014");
ini_set("display_errors","Off");
if($_SESSION['auth']=="MEM103_2014RSSAjayKant")
{
header("location:memHome.php");
}
else
{
?>
<!DOCTYPE HTML public "-w3c//dtd//xhtml 1.0 strict//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Virtual Lab-Dayalbagh Educational Institute</title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.ico">
<link href="css/mem.css" rel="stylesheet" type="text/css">
<style type="text/css">
td{
font-family:Times new roman;
font-size:18px;
text-align:right;
}
</style>
<script language="javascript">
<!--
function validation()
{
	if(document.loginform.rollnumber.value=="")
	{
	alert("Please enter your roll number");
	document.loginform.rollnumber.focus();
	return false;
	} 
	else if(document.loginform.password.value=="")
	{
	alert("Please enter your password");
	document.loginform.password.focus();
	return false;
	}
}
//Google Analytics Code
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38892200-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
-->
</script>
</head>
<body style="background:#FFFFFF; margin:auto; width: 1024px; height:100%;">
<div id="header">
<br/>
<b>MEM-103 Manufacturing Processes-I</b></div>
<div>
<a href="./home.php" title="Metal Forming Virtual Simulation lab">Home</a><br/><br/><br/><br/>
<form name="loginform" method="post" onSubmit="return validation()" action="">
<table width="100%"><tr>
<td width="50%"></td>
<td width="50%"><table width="60%" bgcolor="#7799ff">
<tr><td style="text-align:left; color:#FFFFFF"><b>Sign in</b></td><td style="text-align:right; color:#FFFFFF"><b>MEM-103_2014</b></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td style="text-align:right; color:#FFFFFF"><b>User ID</b></td>
<td><input type="text" name="userID">&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr><td style="text-align:right; color:#FFFFFF"><b>Password</b></td>
<td><input type="password" name="password">&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2" style="text-align:center; color:red; text-decoration:blink;"><span id="message">&nbsp;</span></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"><input type="submit" name="login" value="Sign in">&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
</table></td>
</tr></table>
</form>
</div>
<?php
 	//Opening file to get counter value
	$fp = fopen ("counter.txt", "r");
	$count_number = fread ($fp, filesize ("counter.txt"));
	fclose($fp);
   if(!isset($_COOKIE["mem103"]))
    {
	$counter = (int)($count_number) + 1;
    }
   else
    {
	$counter = (int)($count_number);
	}
	$count_number = (string)($counter);
	$fp = fopen ("counter.txt", "w");
	fwrite ($fp, $count_number);
	fclose($fp);
//Login MEM103	
if($_POST["login"]=="Sign in")
{
	$time=@date('Y-m-d H:i:s');
	include("config.inc.php");
	global $db, $db_host, $db_user, $db_password;
	$conn = mysql_connect($db_host,$db_user,$db_password);
	if (!$conn)
	{
	die("ERROR: " . mysql_error() . "\n");
	}
	mysql_select_db ($db);
	$query = mysql_query("SELECT * FROM `mem103_2014`") or die("MySQL Login Error: ".mysql_error());
	while($dvalue = mysql_fetch_array($query))
	{
	if(($dvalue["Email"]==$_POST["userID"] && $dvalue["Password"]==$_POST["password"]))
		{
		$_SESSION['auth']="MEM103_2014RSSAjayKant";
		$name=$_SESSION['name']=$dvalue["Name"];
		$mail=$_SESSION['mail']=$dvalue["Email"];
		$count=$dvalue["Counter"]+1;
		mysql_query("UPDATE mem103_2014 SET Counter = '$count', Login = '$time' WHERE Email = '$mail'");
		$to="mem103.2014@gmail.com";
		$subject="Login detail";
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: ' . "\r\n";
		$message="Name=".$name."<br>Email ID=".$mail;
		@mail($to,$subject,$message,$headers);
		echo "<script>window.location=\"mem103_14/memHome.php\"</script>";
		exit;
		}
	else $i=0;
	}
	if($i==0)
	{
	echo "<script language=\"javascript\">document.getElementById('message').innerHTML=\"Invalid User ID or Password\"</script>";
	}
} 
?>
<br/><br/><br/><br/><br/><br/>
<div id="footer">
&copy; Metal Forming Virtual Simulation Lab - Dayalbagh Educational Institute (www.dei.ac.in)</div>
</body>
</html>
<?php
}
?>