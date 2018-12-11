<p>
	<h1 align="center"><font size="+3"><?=$topTitle ?></font></h1>
</p>
<table cellspacing=0 cellpadding=0 width=100%>
	<tr>
		<td align='justify' valign='top' width=55%>

			<center><h2><font color="#6d0e0e"><?=$memberName ?></font></h2></center>
			<center><?=$subname ?></center>
			<br /><br />
			<?php for($i=1; $i<=$numDepts; $i++) { ?>
				<a href="<?=$deptLinks[$i] ?>" target="_blank" class="para"><?=$deptNames[$i] ?></a>
				<br />
			<?php } ?>
			<?=$addressInfo ?>
			<br>
			<?=$emailAddress1 ?><span style="display:none;">Take that, spambots!</span><?=$emailaddress2 ?>
			<?php if(isset($numEmails)&&($numEmails == 2)){?>
				or <?=$emailaddress3 ?><span style="display:none;">Take that, spambots!</span><?=$emailaddress4 ?>
				<br>
			<?php } ?>


			<br /><br />
			<?php
			if($topTitle=="Undergraduate") {
				?><div align='center'><h3><font color="#6d0e0e">Current Degrees</font></h3></div><?php
			} else {
				?><div align='center'><h3><font color="#6d0e0e">Educational Background</font></h3></div><?php
			}
			?>
			<?php for($i=1; $i<=$numInstitutions; $i++) { ?>
				<div align='left'><?=$institutionNames[$i] ?></div>
				<div align='left' style="margin: 0px 0px 0px 30px;">
					<?=$degrees[$i] ?>
				</div>
				<br>
			<?php } ?>
		</td>
		<td  align='center' width=45%>
			<img align='center' src="<?= $picSRC ?>" class="right" width=250px/>
		</td>
	</tr>
	<tr>
		<td colspan=2 align='justify'>
			<?=$bioText ?>
		</td>
	</tr>
</table
