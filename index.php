<?php $pageNum=1;
include("header.php"); ?>
	<tr>
		<td width=60% valign='top' align='justify'>
			<div id='indexcontent'>	
				<h1 align="center"><font size="+2">News</font></h1>
				<p></p>
				<? include("news.php"); ?>
			</div>
		</td>
		<td width=40% valign='top' align='justify'>
			<div id='indexcontent'>
				<h1 align="center"><font size="+2">Recent Publications and Preprints</font></h1>
				<p></p>	
				<? include("groupAnnouncements.php"); ?>
			</div>
		</td>
	</tr>

	<tr><td colspan=2 align='center'>
		<? include("footer.php"); ?>
