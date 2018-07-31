<?php $pageNum=1;
include("header.php"); ?>
	<tr>
		<td valign='top' align='justify' colspan=2>
			<div id='indexcontent'>
				<h1 align="center"><font size="+2">Welcome</font></h1>
				The Kagan Group explores the chemical and physical properties of nanostructured and organic materials and integrates these materials in electronic, optoelectronic, optical, thermoelectric and bioelectronic devices. We combine the flexibility of chemistry and bottom-up assembly with top-down fabrication techniques to design novel materials and devices. We explore the structure and function of these materials and devices using spatially- and temporally-resolved optical spectroscopies, AC and DC electrical techniques, electrochemistry, scanning probe and electron microscopies and analytical measurements.
				<p></p>

			</div>
		</td>
	</tr>
	<tr>
		<td width=60% valign='top' align='justify'>
			<div id='indexcontent'>	
				<h1 align="center"><font size="+2">Research Highlights</font></h1>
				<p></p>
				<? include("news.php"); ?>
			</div>
		</td>
		<td width=40% valign='top' align='justify'>
			<div id='indexcontent'>
				<h1 align="center"><font size="+2">Announcements</font></h1>
				<p></p>	
				<? include("groupAnnouncements.php"); ?>
			</div>
		</td>
	</tr>

	<tr><td colspan=2 align='center'>
		<? include("footer.php"); ?>
