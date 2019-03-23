<?php $pageNum=3;
include("header.php"); ?>
<title>kagan.seas.upenn.edu/publications.php</title>

	<tr>
		<td width=70% valign='top'>
			<div id='indexcontent'>

				<p>
			  <h1 align="center"><font size="+3">Publications</font></h1>
				</p>


					<table>
						<tr>
						<?php
if(empty($_GET['year'])){
    $year = '';
} else {
    $year=$_GET["year"];
}

if ($year=='2019' || $year==null) { ?>
<h2><name="intro" id="2019"><font color="#6d0e0e">2019</font></a></h2>
		<p>
			<? include("publications/2019_1.php"); ?>
		</p>

<? }

if ($year=='2018' || $year==null) { ?>
<h2><name="intro" id="2018"><font color="#6d0e0e">2018</font></a></h2>
		<p>
			<? include("publications/2018_1.php"); ?>
		</p>

<? } ?>


						</tr>
					</table>


		  </div>
	  </td>
		<td width=30% valign='top'>
			<br /><br />
			<? include("publications_sidebar.php"); ?>
		</td>
	</tr>

	<tr><td colspan=2 align='center'>
		<? include("footer.php"); ?>

