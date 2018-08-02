<?php $pageNum=2;
include("header.php"); 
	$researchArray=array(array("Plasmonic Materials", "Plasmonics thumbnail2.png", "plasmonics.php"),
	array("Colloidal Semiconductor Nanowires", "nanowire thumbnail.png", "nanowires.php"),
	array("Surface Chemistry of Nanocrystals", "Nanocrystal Surface Chemistry thumbnail.png", "NCsurfaces.php"),
	array("Nanocrystal Transport", "Nanocrystal Transport thumbnail2.png", "NCtransport.php"),
	array("Flexible Nanocrystal Electronics", "Nanocrystal Electronics thumbnail_new.png", "flexible.php"),
	array("Optoelectronic Materials and Devices", "Optoelectronics thumbnail.png", "optoelectronics.php"),
	array("Organic Semiconductor Transport", "organic thumbnail.jpg", "organic.php"));
	$numPages=7;
	$numRows=3;
	$numCols=3;
	for ($i=0; $i<$numPages; $i++) {
		list($imgWidth[$i], $imgHeight[$i], $type, $attr) = getimagesize("research/images/" . $researchArray[$i][1]);
	}
	for ($i=0; $i<$numCols; $i++) {
		$max=0;
		for ($j=0; $j<$numRows; $j++) {
			if (3*$i+$j<($numPages)) {
				if (($imgHeight[3*$i+$j]*250/$imgWidth[3*$i+$j])>$max) {
					$max=($imgHeight[3*$i+$j]*250/$imgWidth[3*$i+$j]);
				}
			}
		}
		$maxImgHeight[$i]=$max;
	}		
?>



	<tr>
		<td width=100% valign='top'>
			<div id='indexcontent'>

				<p>
					<h1 align="center"><font size="+3">Our Research</font></h1>
				</p>

				<table cellspacing=8 align='center' width=100%>
					<?php for ($i=0; $i<$numCols; $i++) {
						?><tr><?php
							for ($j=0; $j<$numRows; $j++) {
								if (3*$i+$j<($numPages)) {
									?><td width=33.3% align='center' bgcolor=#f1f1f1 valign='bottom'><?php
										?><a href="<?=$researchArray[3*$i+$j][2]?>">
											<img src="research/images/<?=$researchArray[3*$i+$j][1]?>" width=200px />
										</a><?php
										?><a href="<?=$researchArray[3*$i+$j][2]?>">
											<?php if (3*$i+$j==2) { ?><br /><br /><br /><?php } ?>
											<br /><font size="+1" ><?=$researchArray[3*$i+$j][0]?></font>
										</a><?php
									?></td><?php
								}
							}
						?></tr><?php
					} ?>
				</table
			></div>
		</td>
	</tr>

	<tr><td colspan=1 align='center'>
		<? include("footer.php"); ?>
