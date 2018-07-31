<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Kagan/Murray Library</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<META name="description" content="">

	<META name="keywords" content=" ">

	<link href="style.css" rel="stylesheet" type="text/css" />


</head>
<body>


<div id="whitecontainer2">
			<div id="bluecontainer">


				<!-- This is header -->
				<table style="margin: -1px;" bgcolor=#2763a5 width=782 cellspacing="2" cellpadding="0" ><tr><td>
					<form class="searchFrm" action="http://www.upenn.edu/cgi-bin/search-fork.pl" method="get">
						<input type="text" name="searchterms" size="10" title="Search"> 
				 		<input class=" button" type="submit" name="Submit" value="Search" />
						<a style="background-color: #2763a5;" href="http://www.upenn.edu/search/advanced-search.html" title="Advanced Search">Advanced Search</a>&nbsp;
						&nbsp;&nbsp;
					</form>
				</td></tr></table>

				<table width=785px style="margin: -1px;" background="banner3.png" cellspacing=0><tr><td align='center' width=600 height=100 >
					<table cellspacing=15><tr><td background="bannermask.png">
						<h1 align="center" style="color: #0500c6;"  >Cherie R. Kagan Research Group</h1>
						<p align="center" style="color: black; font-size: 17px;">Electrical and Systems Engineering | Chemistry | Materials Science and Engineering</p>
					</td></tr></table>
					</td></tr>
					<tr><td>
					<table align='center' cellspacing=3><tr><td>
						<div id="tabs10">
  							<ul >
 								<li><a href="organic_devices.php" title="FETs"><span>Organic Devices</span></a></li>
 								<li><a href="solar_photovoltaics.php" title="Solar"><span>Solar Photovoltaics</span></a></li>
								<li><a href="nanoscale_electronics.php" title="Nanoscale"><span>Nanoscale Electronics</span></a></li>
								<li><a href="optical_metamaterials.php" title="Optical"><span>Optical Metamaterials</span></a></li>
  							</ul>
						</div>
					</table></td></tr>
				</td></tr></table>
				<table style="margin: -1px;" bgcolor=#2763a5 width=782 cellspacing="0" cellpadding="0" ><tr><td><br />
				</td></tr></table>
				<br />
			</div>
</div>


<?php if(!isset($_SESSION['login']) ||  $_SESSION['login']=="false") { ?>
  <?php include("liblogin.php"); ?>
<?php } elseif (!empty($_POST["logout"])) {
  session_destroy();
  header('Location: libindex.php');
  exit();
  } else { ?>
<table background="images/913_banner_2.jpg" width=100% cellspacing=0 cellpadding=0>
	<tr>
		<td width=100><a href="index.php"><img src="images/penndragon_logo_2_small.png" /></a></td>
		<!-- <td background="images/logo_background.png" width=100><a href="index.php"><img src="images/913_logo_small.png" /></a></td> -->
		<td width=80% align='center' class="header_text">Kagan/Murray Library</td>
		<td align='right' valign='top'>
  			<form method="post" action="libindex.php">
    				<input type="submit" name="logout" value="Log Out" />
  			</form>
		</td>
	</tr>
</table>

<?php } ?>