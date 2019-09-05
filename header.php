<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Bassett Research Group</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<?php if ($pageNum==1): ?>
		<META name="description" content="Group page for Professor Lee Bassett">
	<?php elseif ($pageNum==2): ?>
		<META name="description" content="Current research projects in the Quantum Engineering Laboratory">
	<?php elseif ($pageNum==3): ?>
		<META name="description" content="Publications in the Quantum Engineering Laboratory">
	<?php elseif ($pageNum==4): ?>
		<META name="description" content="Current members of the Quantum Engineering Laboratory">
	<?php elseif ($pageNum==5): ?>
		<META name="description" content="Job openings in the Quantum Engineering Laboratory">
	<?php elseif ($pageNum==6): ?>
		<META name="description" content="News in the Quantum Engineering Laboratory">
	<?php elseif ($pageNum==7): ?>
		<META name="description" content="Group photos">
	<?php elseif ($pageNum==8): ?>
		<META name="description" content="Education and outreach in the Quantum Engineering Laboratory">
	<?php endif; ?>	

	<META name="keywords" content="lee bassett, lee, bassett, lee penn, lee upenn, lee bassett upenn, bassett penn, bassett upenn, materials science, quantum, quantum engineering, quantum upenn, quantum penn">

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
		<table width=100% align="center" cellspacing=15 bgcolor='#02156e' ><tr>
			<td width=15%><p></p></td>
			<td width=35% align='left'>
				<a href="index.php"><img src="sitepictures/qel_name_only_nobackground.png" alt="" style="height:100px;"/></a>
				<!--<span align='left' style="color: #000000; font-size: 30px; font-weight: bold; margin-left:0px; ">Quantum Engineering Laboratory</span>-->
				<!--<p align='left' style="color: #f1f1f1; font-size: 20px; margin-left:20px;">Electrical and Systems Engineering - Physics</p>-->
			</td>
			<td width=35% align='right'>
          			<a href="http://www.upenn.edu/" id="logo" style="background-color:rgba(255,0,0,0);">
					<img src="images/logo2.png">
				</a>
			</td>
			<td width=15%><p></p></td>
		</tr></table>
	</td></tr>
	<?php if ($pageNum==1) { ?>
		<tr><td>
			<table width=70% cellspacing=15 bgcolor='#ffffff' align='center'><tr>
				<td width=40% align='left' valign='top'>
					<!--<em><img src="sitepictures/bench.jpg" alt="Optics Bench" class="intro" align="center" width=100%></em>-->
					<span align='left' style="color: #000000; font-size: 29px; font-weight: bold; margin-left:0px; ">Embrace the Quantum Limit</span>
<p></p>
<span align='left' style="color: #000000; font-size: 16.5px; margin-left:0px; line-height: 1.8;">Our group studies quantum dynamics in nanoscale materials and devices. We seek to better understand complex quantum mechanical systems with a goal of developing new technologies for communication, computation, and sensing based on quantum physics.</span>
</span>
				</td>
				<td width=60% align='center' valign='center' bgcolor='white'>
						<div style='position: absolute; background-color: white; z-index=0;' width=100% height=100%></div>
          				        <div theme-default">
            						<div id="slider" class="nivoSlider">
                						<img src="images/bassetthopper.jpg" alt="" />
                						<img src="images/bench.jpg" alt=""/>
								<img src="images/materialsday2019.jpg" alt=""/>
								<img src="images/hbn-defects-slides.png" alt=""/>
                						<img src="images/materialsday2019-2.jpg" alt=""/>
                						<img src="images/materialsday.jpg" alt=""/>
                						<img src="images/metalens-slides.png" alt=""/>
                						<img src="images/metalens.png" alt=""/>
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
		<table   width=100% cellpadding=0 cellspacing=0 bgcolor=#02156e><tr>
			<td align='center' >
				<div id="tabs10">
  					<ul >
						<li><a href="index.php" ><span>HOME</span></a></li>
          					<li><a href="research.php"><span>Research</span></a></li>
          					<li><a href="publications.php"><span>Publications</span></a></li>
						<li><a href="group.php"><span>People</span></a></li>
						<li><a href="courses.php"><span>Job Openings</span></a></li>
          					<li><a href="alumni.php"><span>News</span></a></li>
						<li><a href="groupphotos.php"><span>Gallery</span></a></li>
          					<li><a href="funding.php"><span>Education</span></a></li>
 						
  					</ul>
				</div>
			</td>
		</tr></table>
	</td></tr>
	<tr><td>
		<table  cellpadding=0 cellspacing=0 width=80% align='center' bgcolor='white' style="border-spacing:0px;">
