<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Kagan Group Members</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<META name="description" content="Group page for Professor Cherie R. Kagan.">

	<META name="keywords" content="cherie kagan, cherie, kagan, cherie r kagan, cherie r. kagan, cherie penn, cherie upenn, cherie kaganupenn, kagan penn, kagan upenn, materials science, cherie mit, cherie kagan mit, kagan mit, cherie r kagan mit">

	<link href="style.css" rel="stylesheet" type="text/css" />


</head>

<? include("header.php"); ?>

				<div id="bluecontainer2">

					<div id="bluecontent">
	<!-- This is the END of the Sidebar and tabs, DO NOT CHANGE-->

	<!-- This is the GROUP MEMBER Information -->
		<h1 align='center'><font size="+2">Group Members</font></h1>
<p></p>

<?php 
if(empty($_GET['member'])){ 
    $member = ''; 
} else { 
    $member=$_GET["member"];
}
if ($member==null) { ?>
			<? include("profiles/cherie.php"); ?>
<?php }
elseif($member=="johnruss") { ?>

			<? include("profiles/john_russell.php"); ?>
<?php }
elseif($member=="zakya") { ?>

			<? include("profiles/zakya_kafafi.php"); ?>	

<?php }
elseif($member=="fafarman") { ?>
				



				<!-- This is Post-doc(s) Information -->


				<? include("profiles/aaron_fafarman.php"); ?>
<?php }
elseif($member=="jihyuk") { ?>
				
				<? include("profiles/jihyuk_choi.php"); ?>


			<!-- This is Ph.D. Student(s) Information -->
<?php }
elseif($member=="marjan") { ?>

				<? include("profiles/marjan_saboktakin.php"); ?>
<?php }
elseif($member=="david") { ?>

				<? include("profiles/david_kim.php"); ?>
<?php }
elseif($member=="soong") { ?>

				<? include("profiles/soongju_oh.php"); ?>
<?php }
elseif($member=="yuming") { ?>

				<? include("profiles/yuming_lai.php"); ?>
<?php }
elseif($member=="edgoodwin") { ?>

				<? include("profiles/ed_goodwin.php"); ?>
<?php }
elseif($member=="ericwong") { ?>

				<? include("profiles/eric_wong.php"); ?>
<?php }
elseif($member=="nathanielberry") { ?>

				<? include("profiles/nathaniel_berry.php"); ?>
<?php }
elseif($member=="wenxiangchen") { ?>

				<? include("profiles/wenxiang_chen.php"); ?>
<?php }
elseif($member=="scottstinner") { ?>

				<? include("profiles/scott_stinner.php"); ?>
<?php }
elseif($member=="nicholasgreybush") { ?>

				<? include("profiles/nicholas_greybush.php"); ?>
<?php }
elseif($member=="danielstraus") { ?>

				<? include("profiles/daniel_straus.php"); ?>
<?php }
elseif($member=="leo") { ?>

				<? include("profiles/leo_zhao.php"); ?>

				<!-- This is Masters Student(s) Information -->

<?php }
elseif($member=="haipeng") { ?>

				<? include("profiles/billie_li.php"); ?>
<?php }
elseif($member=="leo") { ?>

				<? include("profiles/leo_zhao.php"); ?>
<?php }
elseif($member=="sara") { ?>

				<? include("profiles/sara_engberg.php"); ?>
<?php }
elseif($member=="zhenyang") { ?>

				<? include("profiles/zhenyang_xia.php"); ?>
<?php }
elseif($member=="ryan") { ?>

				<? include("profiles/ryan_murray.php"); ?>
<?php }
elseif($member=="zhuqing") { ?>

				<? include("profiles/zhuqing_wang.php"); ?>
<?php }
elseif($member=="hangfei") { ?>

				<? include("profiles/hangfei_lin.php"); ?>
<?php }
elseif($member=="han") { ?>

				<? include("profiles/han_wang.php"); ?>
<?php }
elseif($member=="shangchien") { ?>

				<? include("profiles/shangchien_chen.php"); ?>
<?php }
elseif($member=="li") { ?>

				<? include("profiles/li_xie.php"); ?>
<?php }
elseif($member=="qian") { ?>

				<? include("profiles/qian_gao.php"); ?>
<?php }
elseif($member=="prashanth") { ?>

				<? include("profiles/prashanth_gopalan.php"); ?>
<?php }
elseif($member=="diya") { ?>

				<? include("profiles/diya_li.php"); ?>


				<!-- This is Undegrad Student(s) Information -->

<?php }
elseif($member=="mcrump") { ?>

				<? include("profiles/michael_crump.php"); ?>
<?php }
elseif($member=="tlong") { ?>

				<? include("profiles/tim_long.php"); ?>
<?php }
elseif($member=="kevin") { ?>

				<? include("profiles/kevin_fritz.php"); ?>
<?php }
elseif($member=="devika") { ?>

				<? include("profiles/devika_mehta.php"); ?>
<?php }
elseif($member=="emily") { ?>

				<? include("profiles/emily_gurniak.php"); ?>
<?php }
elseif($member=="fran") { ?>

				<? include("profiles/francisco_lee.php"); ?>
<?php }
elseif($member=="william") { ?>

				<? include("profiles/william_cheng.php"); ?>
<?php }
elseif($member=="carl") { ?>

				<? include("profiles/carl_ruijter.php"); ?>
<?php }
elseif($member=="matt") { ?>

				<? include("profiles/matt_mcphail.php"); ?>
<?php } ?>

				<p></p>  <!-- This is Line break-->

					</div>


<? include("group_sidebar.php"); ?>
<? include("footer.php"); ?>
