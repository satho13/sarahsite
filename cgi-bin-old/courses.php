<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Kagan Group Courses</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<META name="description" content="Group page for Professor Cherie R. Kagan.">

	<META name="keywords" content="cherie kagan, cherie, kagan, cherie r kagan, cherie r. kagan, cherie penn, cherie upenn, cherie kaganupenn, kagan penn, kagan upenn, materials science, cherie mit, cherie kagan mit, kagan mit, cherie r kagan mit">

	<link href="style.css" rel="stylesheet" type="text/css" />


</head>

<? include("header.php"); ?>

				<div id="bluecontainer2">
					<div id="bluecontent">

<?php 
if(empty($_GET['view'])){ 
    $view = ''; 
} else { 
    $view=$_GET["view"];
}
if ($view=='current') { ?>

		<h1 align='center'><font size="+2">Current Course</font></h1>
	<br />

	<a style="font-size: 16px;" href="http://www.ese.upenn.edu/courses/#521" target="blank">ESE 521: The Physics of Solid State Energy Devices</a>
	<p></p>
	<b style="font-size: 14px;"><div align='center'>Schedule</div></b>
	<br />Class - Towne 311
	<br /><div style="margin-left: 20px;">Monday 3 - 4:30
	<br />Wednesday 3 - 4:30</div>
	<br />Professor Kagan's Office Hours - Levine 254 
	<br /><div style="margin-left: 20px;">Tuesday 2:30 - 4:00</div>
	<br />TA Office Hours - Skirkanich 508
	<br /><div style="margin-left: 20px;">Monday 10:30AM - 11:30AM
	<br />Thursday 10:30AM - 11:30AM</div>
	<p></p>
	<b style="font-size: 14px;"><div align='center'>TAs</div></b>
	<? include("profiles/scott_stinner.php"); ?>
	<? include("profiles/wenxiang_chen.php"); ?>




<? } else { ?>
		<h1 align='center'><font size="+2">Course List</font></h1>
<p></p>
	<a style="font-size: 16px;" href="http://www.ese.upenn.edu/courses/#521" target="blank">ESE 521: The Physics of Solid State Energy Devices</a>
	<br />
	<div style="margin-left: 20px;">A graduate level course on the fundamental physical principles underlying the operation of traditional semiconducting electronic and optoelectronic devices and extends these concepts to novel nanoscale electronic and optoelectronic devices. The course assumes an undergraduate level understanding of semiconductors physics. The course builds on the physics of solid state semiconductor devices to develop the operation and application of semiconductors and their devices in energy conversion devices such as solar photovoltaics, thermophotovoltaics, and thermoelectrics, to supply energy. The course also considers the importance of the design of modern semiconductor transistor technology to operate at low-power in CMOS.     <b>(Spring)</b></div>
	
	<p></p>
	<a style="font-size: 16px;" href="http://www.ese.upenn.edu/courses/#525" target="blank">MSE/ESE 525: Nanoscale Science and Engineering</a>
	<br />
	<div style="margin-left: 20px;">Overview of existing device and manufacturing technologies in microelectronics, optoelectronics, magnetic storage, microsystems, and biotechnology. Also covers near- and long-term challenges facing those fields and prospects of nanoscience and related technologies for the evolutionary sustention of current approaches, and for the development of revolutionary designs and applications.     <b>(Fall)</b></div>
	<p></p>



<? } ?>
</div>

<? include("courses_sidebar.php"); ?>		
<? include("footer.php"); ?>