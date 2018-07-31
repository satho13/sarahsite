<tr>
	<td colspan=3 width=100% valign='center' align='center'><div id='indexcontent'>
		<p>
			<h1 align="center"><font size="+3"><?=$researchTitle ?></font></h1>
		</p>
	</div></td>
</tr>
<tr>
	<td width=100% valign='center' align='justify' colspan=3><div id='indexcontent'>
		<div id="researchSummary">
			<?=$researchSummary ?> 
		</div>
		<br />
	</div></td>
</tr>

<?php for ($i=0; $i<$numTopics; $i++) { ?>

<tr><td width=4%></td>
	<td width=92% valign='center' align='left' onclick="topicSwitch('topic<?=($i+1) ?>')" bgcolor="#cac5bb" style="cursor: pointer;">
		<table cellpadding=0 cellspacing=0 width=100%><tr>
			<td width=90% align='center'>
				<div style="color:#01256e; font-weight: bold;"><font size="+2" ><?=$topicArray[$i][0] ?></font></div>
			</td>
			<td width=2% align='left'>
				<img id="topic<?=($i+1) ?>Arrow" src="images/arrow down.png" width=20px />
			</td>
		</tr></table>
	</td>
<td width=4%></td></tr>
<tr id="topic<?=($i+1) ?>" style="display: none;"><td width=4%></td>
	<td width=92% valign='center' align='center'bgcolor="#f1f1f1">
		<table cellpadding=0 cellspacing=0 width=100% style="border-spacing:0px;">
			<tr>
				<td width=3% bgcolor="#01256e"></td>
				<td width=97% align='left'><div id='researchcontent'>
					<?=$topicArray[$i][1] ?>
					<br /><br />
					<center><img src="research/images/<?=$topicArray[$i][2] ?>" width=80% /></center>
					<div id="figCaption">
						<?=$topicArray[$i][3] ?>
					</div><br />
					<?php for ($j=0; $j<$numPubs[$i]; $j++) {
						include("publications/" . $pubArray[$i][$j]); 
						?><div style="width:100%; height:1px; background: #DDDDDD"></div><br /><?php
					} ?>
				</div></td>
			</tr>
		</table>
	</td>
<td width=4%></td></tr>
<tr><td width=4%></td>
	<td width=92% height=3px bgcolor="#6d0e0e"></td>
<td width=4%></td></tr>
<?php } ?>

<tr><td colspan=3 align='center'>