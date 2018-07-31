<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Kagan Group Publications</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<META name="description" content="Group page for Professor Cherie R. Kagan.">

	<META name="keywords" content="cherie kagan, cherie, kagan, cherie r kagan, cherie r. kagan, cherie penn, cherie upenn, cherie kaganupenn, kagan penn, kagan upenn, materials science, cherie mit, cherie kagan mit, kagan mit, cherie r kagan mit">

	<link href="style.css" rel="stylesheet" type="text/css" />


</head>

<? include("header.php"); ?>

				<div id="bluecontainer2">
					<div id="bluecontent">
	<!-- This is the END of the Sidebar and tabs, DO NOT CHANGE-->

	<!-- This is the PUBLICATIONS Information -->
		<h1 align='center'><font size="+2">Publications</font></h1>
<p></p>

<?php 
if(empty($_GET['year'])){ 
    $year = ''; 
} else { 
    $year=$_GET["year"];
}
if ($year=='2014' || $year==null) { ?>
<h2><name="intro" id="2014"><font color="#6DA6E2">2014</font></a></h2>
		<p> 
			<? include("publications/2014_3.php"); ?> 
			<? include("publications/2014_2.php"); ?> 
			<? include("publications/2014_1.php"); ?> 
		</p>

<? } if ($year=='2013' || $year==null) { ?>
<h2><name="intro" id="2013"><font color="#6DA6E2">2013</font></a></h2>
		<p>
			<? include("publications/2013_10.php"); ?> 
			<? include("publications/2013_9.php"); ?> 
			<? include("publications/2013_8.php"); ?> 
			<? include("publications/2013_7.php"); ?> 
			<? include("publications/2013_6.php"); ?> 
			<? include("publications/2013_5.php"); ?> 
			<? include("publications/2013_4.php"); ?> 
			<? include("publications/2013_3.php"); ?> 
			<? include("publications/2013_2.php"); ?> 
			<? include("publications/2013_1.php"); ?> 
		</p>

<? } if ($year=='2012' || $year==null) { ?>

<h2><name="intro" id="2012"><font color="#6DA6E2">2012</font></a></h2>
		<p>
			<? include("publications/2012_8.php"); ?> 
			<? include("publications/2012_7.php"); ?> 
			<? include("publications/2012_6.php"); ?> 
			<? include("publications/2012_5.php"); ?> 
			<? include("publications/2012_4.php"); ?> 
			<? include("publications/2012_3.php"); ?> 
			<? include("publications/2012_2.php"); ?> 
			<? include("publications/2012_1.php"); ?> 
		</p>

<? } if ($year=='2011' || $year==null) { ?>
<h2><name="intro" id="2011"><font color="#6DA6E2">2011</font></a></h2>
		<p>
			<? include("publications/2011_8.php"); ?> 
			<? include("publications/2011_7.php"); ?>
			<? include("publications/2011_6.php"); ?> 
			<? include("publications/2011_5.php"); ?>
			<? include("publications/2011_4.php"); ?> 
			<? include("publications/2011_3.php"); ?>
			<? include("publications/2011_2.php"); ?> 
			<? include("publications/2011_1.php"); ?> 
		</p>

<? } if ($year=='2010' || $year==null) { ?>
<h2><name="intro" id="2010"><font color="#6DA6E2">2010</font></a></h2>
		<p>
			<? include("publications/2010_3.php"); ?> 
			<? include("publications/2010_2.php"); ?>
			<? include("publications/2010_1.php"); ?>
		</p>

<? } if ($year=='2009' || $year==null) { ?>
<h2><name="intro" id="2009"><font color="#6DA6E2">2009</font></a></h2>
		<p>
			<? include("publications/2009_1.php"); ?>
		</p>

<? } if ($year=='2007' || $year==null) { ?>
<h2><name="intro" id="2007"><font color="#6DA6E2">2007</font></a></h2>
		<p>
			<? include("publications/2007_4.php"); ?>
			<? include("publications/2007_3.php"); ?>
		    	<? include("publications/2007_2.php"); ?>
		    	<? include("publications/2007_1.php"); ?>
		</p>

<? } if ($year=='2006' || $year==null) { ?>
<h2><name="intro" id="2006"><font color="#6DA6E2">2006</font></a></h2>
		<p>
		    	<? include("publications/2006_5.php"); ?>
		    	<? include("publications/2006_4.php"); ?>
			<? include("publications/2006_3.php"); ?>
		    	<? include("publications/2006_2.php"); ?>
		    	<? include("publications/2006_1.php"); ?>
		</p>

<? } if ($year=='2005' || $year==null) { ?>
<h2><name="intro" id="2005"><font color="#6DA6E2">2005</font></a></h2>
		<p>
			<? include("publications/2005_4.php"); ?>
			<? include("publications/2005_3.php"); ?>
		    	<? include("publications/2005_2.php"); ?>
		    	<? include("publications/2005_1.php"); ?>
		</p>
		    
<? } if ($year=='2004' || $year==null) { ?>
<h2><name="intro" id="2004"><font color="#6DA6E2">2004</font></a></h2>
		<p>
			<? include("publications/2004_3.php"); ?>
		    	<? include("publications/2004_2.php"); ?>
		    	<? include("publications/2004_1.php"); ?>
		</p>
		    
<? } if ($year=='2003' || $year==null) { ?>
<h2><name="intro" id="2003"><font color="#6DA6E2">2003</font></a></h2>
		<p>
			<? include("publications/2003_4.php"); ?>
			<? include("publications/2003_3.php"); ?>
		    	<? include("publications/2003_2.php"); ?>
		    	<? include("publications/2003_1.php"); ?>
		</p>

<? } if ($year=='2002' || $year==null) { ?>
<h2><name="intro" id="2002"><font color="#6DA6E2">2002</font></a></h2>
		<p>
			<? include("publications/2002_1.php"); ?>
		</p>
		    
<? } if ($year=='2001' || $year==null) { ?>
<h2><name="intro" id="2001"><font color="#6DA6E2">2001</font></a></h2>
		<p>
			<? include("publications/2001_3.php"); ?>
		    	<? include("publications/2001_2.php"); ?>
		    	<? include("publications/2001_1.php"); ?>
		</p>
		    
<? } if ($year=='2000' || $year==null) { ?>
<h2><name="intro" id="2000"><font color="#6DA6E2">2000</font></a></h2>
		<p>
			<? include("publications/2000_2.php"); ?>
		    	<? include("publications/2000_1.php"); ?>
		</p>

<? } if ($year=='1999' || $year==null) { ?>
<h2><name="intro" id="1999"><font color="#6DA6E2">1999</font></a></h2>
		<p>
			<? include("publications/1999_3.php"); ?>
		    	<? include("publications/1999_2.php"); ?>
		    	<? include("publications/1999_1.php"); ?>
		</p>
		    
<? } if ($year=='1998' || $year==null) { ?>
<h2><name="intro" id="1998"><font color="#6DA6E2">1998</font></a></h2>
		<p>
			<? include("publications/1998_1.php"); ?>
		</p>
		    
<? } if ($year=='1996' || $year==null) { ?>
<h2><name="intro" id="1996"><font color="#6DA6E2">1996</font></a></h2>
		<p>
		    	<? include("publications/1996_2.php"); ?>
		    	<? include("publications/1996_1.php"); ?>
		</p>

<? } if ($year=='1995' || $year==null) { ?>
<h2><name="intro" id="1995"><font color="#6DA6E2">1995</font></a></h2>
		<p>
		    	<? include("publications/1995_2.php"); ?>
		    	<? include("publications/1995_1.php"); ?>
		</p>

<? } if ($year=='1993' || $year==null) { ?>
<h2><name="intro" id="1993"><font color="#6DA6E2">1993</font></a></h2>
		<p>
		    	<? include("publications/1993_1.php"); ?>
		</p>

<? } if ($year=='1992' || $year==null) { ?>
<h2><name="intro" id="1992"><font color="#6DA6E2">1992</font></a></h2>
		<p>
			<? include("publications/1992_1.php"); ?>
		</p>

<? } if ($year=='books' || $year==null) { ?>
<h2><name="intro" id="books"><font color="#6DA6E2">Books and Journals Edited</font></a></h2>
		<p>
			<? include("publications/books_journals.php"); ?>
		</p>
<? } ?>
</div>

<? include("publications_sidebar.php"); ?>		
<? include("footer.php"); ?>