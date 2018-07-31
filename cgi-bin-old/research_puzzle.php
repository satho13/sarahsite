<table cellspacing=0 cellpadding=0 align='center' background="research_puzzle_small.png">
  	<?php for ($j=1; $j<=164; $j+=2) { ?>
    		<tr height=6>
      			<?php for ($i=1; $i<=232; $i+=2) { ?>
				<?php if (($j>.552*$i-65.7 && $j<=.707*$i-21.5 && $j>-.577*$i+65.1 && $j<=-.716*$i+150.6 && 8*8<=(($i-140)*($i-140)+($j-12)*($j-12)) && 10*10<=(($i-95)*($i-95)+($j-42)*($j-42))) || 6*6>=(($i-88)*($i-88)+($j-11)*($j-11)) || 10*10>=(($i-150)*($i-150)+($j-47)*($j-47))) { ?>
        				<td width=6><a href="nanoscale.php" title="Nanoscale"><span class="puzzle_link">&nbsp;</span></a></td>
				<?php } else if (($j>.707*$i-21.5 && $j<=.853*$i+65.6 && $j>-.577*$i+65.1 && $j<=-.716*$i+150.6 && 13*13<=(($i-38)*($i-38)+($j-45)*($j-45)) && 13*13<=(($i-82)*($i-82)+($j-82)*($j-82))) || 10*10>=(($i-95)*($i-95)+($j-42)*($j-42)) || 15*15>=(($i-15)*($i-15)+($j-90)*($j-90))) { ?>
        				<td width=6><a href="organic_fet.php" title="FETs"><span class="puzzle_link">&nbsp;</span></a></td>
				<?php } else if (($j>.552*$i-65.7 && $j<=.707*$i-21.5 && $j>-.716*$i+150.6 && $j<=-.862*$i+256.9 && 10*10<=(($i-150)*($i-150)+($j-47)*($j-47)) && 10*10<=(($i-202)*($i-202)+($j-81)*($j-81))) || 12*12>=(($i-204)*($i-204)+($j-46)*($j-46)) || 14*14>=(($i-146)*($i-146)+($j-88)*($j-88))) { ?>
        				<td width=6><a href="optical.php" title="Optical"><span class="puzzle_link">&nbsp;</span></a></td>
				<?php } else if (($j>.707*$i-21.5 && $j<=.853*$i+65.6 && $j>-.716*$i+150.6 && $j<=-.862*$i+256.9 && 14*14<=(($i-89)*($i-89)+($j-130)*($j-130)) && 14*14<=(($i-146)*($i-146)+($j-88)*($j-88))) || 13*13>=(($i-82)*($i-82)+($j-82)*($j-82)) || 16*16>=(($i-160)*($i-160)+($j-139)*($j-139))) { ?>
        				<td width=6><a href="solar.php" title="Solar"><span class="puzzle_link">&nbsp;</span></a></td>
				<?php } else { ?>
        				<td width=1></td>
	      			<?php } ?>
      			<?php } ?>
    		</tr>
  	<?php } ?>
</table>