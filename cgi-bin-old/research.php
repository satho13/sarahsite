<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Kagan Group Research</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<META name="description" content="Group page for Professor Cherie R. Kagan.">

	<META name="keywords" content="cherie kagan, cherie, kagan, cherie r kagan, cherie r. kagan, cherie penn, cherie upenn, cherie kaganupenn, kagan penn, kagan upenn, materials science, cherie mit, cherie kagan mit, kagan mit, cherie r kagan mit">

	<link href="style.css" rel="stylesheet" type="text/css" />


</head>

<? include("header.php"); ?>

				<div id="bluecontainer2">
					<div id="bluecontent2">
	<!-- This is the END of the Sidebar and tabs, DO NOT CHANGE-->

				<h1 align='center'><font size="+2">Research Projects</font></h1>

				<p></p><br />

				<div align=center>
					<div id="bluesidebarresearch2">	
					
						<h2 align='center'>Contents</h2>
						<table cellspacing=10>
							<tr>
								<td><a href="http://kagan.seas.upenn.edu/research.php?content=solution">1.  Solution Processable Organic Devices</a></td>
								<td width=60></td>
								<td><a href="http://kagan.seas.upenn.edu/research.php?content=nanoscale">2.  Nanoscale Electronics</a></td>
							</tr>
							<tr>
								<td><a href="http://kagan.seas.upenn.edu/research.php?content=solar">3.  Solar Photovoltaics</a></td>
								<td></td>
								<td><a href="http://kagan.seas.upenn.edu/research.php?content=optical">4.  Optical Metamaterials</a></td>
							</tr>
						</table>
						<p></p>

						
					</div>
				</div>
				<br />

<!-- <? include("research_puzzle.php"); ?> -->

	<!-- This is the RESEARCH Information -->

<?php 
if(empty($_GET['content'])){ 
    $content = ''; 
} else { 
    $content=$_GET["content"];
}
if ($content=='solution') {
	include("research/organic_devices_description.php"); 
} elseif($content=='nanoscale') {
	include("research/nanoscale_electronics_description.php"); 
} elseif($content=='solar') {
	include("research/solar_photovoltaics_description.php"); 
} elseif($content=='optical') {
	include("research/optical_metamaterials_description.php");
} ?>

				
<br />&nbsp;<br />&nbsp;

			</div>

<? include("footer.php"); ?>