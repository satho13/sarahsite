<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Kagan Research Group</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<?php if ($pageNum==1): ?>
		<META name="description" content="Group page for Professor Cherie R. Kagan.">
	<?php elseif ($pageNum==2): ?>
		<META name="description" content="Current research projects in the Kagan Group">
	<?php elseif ($pageNum==3): ?>
		<META name="description" content="Publications in the Kagan Group">
	<?php elseif ($pageNum==4): ?>
		<META name="description" content="Current members of the Kagan Group">
	<?php elseif ($pageNum==5): ?>
		<META name="description" content="Courses offered by Professor Cherie Kagan">
	<?php elseif ($pageNum==6): ?>
		<META name="description" content="Past Kagan Group members">
	<?php elseif ($pageNum==7): ?>
		<META name="description" content="Group photos">
	<?php elseif ($pageNum==8): ?>
		<META name="description" content="Funding sources for the Kagan Lab">
	<?php elseif ($pageNum==9): ?>
		<META name="description" content="Relevant links">
	<?php endif; ?>	

	<META name="keywords" content="cherie kagan, cherie, kagan, cherie r kagan, cherie r. kagan, cherie penn, cherie upenn, cherie kagan upenn, kagan penn, kagan upenn, materials science, cherie mit, cherie kagan mit, kagan mit, cherie r kagan mit">

	<link href="style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    	<link rel="stylesheet" href="nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    	<link rel="stylesheet" href="nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    	<link rel="stylesheet" href="nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    	<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
	<link rel="icon" type="image/png" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/favicon.ico"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<script src="research/topicSwitch.js"></script>

	<script type="text/javascript" src="highslide/highslide.js"></script>
	<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
	<script type="text/javascript">
		hs.graphicsDir = 'highslide/graphics/';
		hs.wrapperClassName = 'wide-border';
	</script>



</head>

<body>

<table style="margin: 0px;" width=100% cellspacing="0" cellpadding="0" >
	<tr><td>
		<table width=100% cellspacing=15 bgcolor='#01256e' ><tr>
			<td width=60% align='left'>
				<span align='left' style="color: #f1f1f1; font-size: 32px; margin-left:20px; "  >Cherie R Kagan Research Group</span>
				<p align='left' style="color: #f1f1f1; font-size: 20px; margin-left:20px;">Electrical and Systems Engineering - Chemistry - Materials Science and Engineering</p>

			<td width=20% align='right'>
          			<a href="http://www.upenn.edu/" id="logo" style="background-color:rgba(255,0,0,0);">
					<img src="images/logo2.png">
				</a>
			</td>
		</tr></table>
	</td></tr>
	<?php if ($pageNum==1) { ?>
		<tr><td>
			<table width=100% cellspacing=15 bgcolor='#4b4b4b' ><tr>
				<td width=59% align='left' valign='center'>
					<em><img src="grouppictures/groupphoto18.jpg" alt="Group Photo 2018" class="intro" align="center" width=100%></em>
				<td width=41% align='center' valign='center' bgcolor='white'>
						<div style='position: absolute; background-color: white; z-index=0;' width=100% height=100%></div>
          				        <div theme-default">
            						<div id="slider" class="nivoSlider">
                						<img src="images/Colloidal Nanowire Electronics Rotating.png" alt="" />
                						<img src="images/Nanocrystal Electronics Rotating_new.png" alt=""/>
                						<img src="images/Nanocrystal Surface Chemistry Rotating.png" alt=""/>
                						<img src="images/Nanocrystal Transport Rotating.png" alt=""/>
                						<img src="images/Optical Metamaterials Rotating.png" alt=""/>
                						<img src="images/Optoelectronic Materials Rotating.png" alt=""/>
                						<img src="images/Organic Semiconductors Rotating.png" alt=""/>
                						<img src="images/Plasmonic Enhancement Rotating.png" alt=""/>
            						</div>
        					</div>

    						<script type="text/javascript" src="nivo-slider/demo/scripts/jquery-1.9.0.min.js"></script>
    						<script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>
    						<script type="text/javascript">
    							$(window).load(function() {
        						$('#slider').nivoSlider();
    							});
    						</script>
				</td>
			</tr></table>
		</td></tr>
	<?php } ?>

	<tr><td>
		<table   width=100% cellpadding=0 cellspacing=0 bgcolor=#6d0e0e><tr>
			<td align='center' >
				<div id="tabs10">
  					<ul >
						<li><a href="index.php" ><span>HOME</span></a></li>
          					<li><a href="research.php"><span>Research</span></a></li>
          					<li><a href="publications.php"><span>Publications</span></a></li>
						<li><a href="group.php"><span>Group</span></a></li>
						<li><a href="courses.php"><span>Courses</span></a></li>
          					<li><a href="alumni.php"><span>Alumni</span></a></li>
						<li><a href="groupphotos.php"><span>Group Photos</span></a></li>
          					<li><a href="funding.php"><span>Funding</span></a></li>
						<li><a href="links.php"><span>Links</span></a></li>
 						
  					</ul>
				</div>
			</td>
		</tr></table>
	</td></tr>
	<tr><td>
		<table  cellpadding=0 cellspacing=0 width=80% align='center' bgcolor='white' style="border-spacing:0px;">
