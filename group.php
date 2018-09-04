<?php $pageNum=4;
include("header.php"); ?>
	<tr>
		<td width=80% valign='top'>
			<div id='indexcontent'>



							<?php
if(empty($_GET['member'])){
    $member = '';
} else {
    $member=$_GET["member"];
}
if ($member==null) { ?>
			<? include("profiles/cherie.php"); ?>
			<? include("profiles/profile_template.php"); ?>





				<!-- This is Post-doc(s) Information -->



<?php }
elseif($member=="youngjae") { ?>

				<? include("profiles/youngjae_shin.php"); ?>
				<? include("profiles/profile_template.php"); ?>

<?php }
elseif($member=="mingliang") { ?>

				<? include("profiles/mingliang_zhang.php"); ?>
				<? include("profiles/profile_template.php"); ?>

<?php }

elseif($member=="pilsung") { ?>

				<? include("profiles/pilsung_jo.php"); ?>
				<? include("profiles/profile_template.php"); ?>

<?php }

elseif($member=="chenjiezeng") { ?>

				<? include("profiles/chenjie_zeng.php"); ?>
				<? include("profiles/profile_template.php"); ?>
				<?php }

elseif($member=="hakjongchoi") { ?>

				<? include("profiles/hakjong_choi.php"); ?>
				<? include("profiles/profile_template.php"); ?>
				<?php }




//<!-- This is Ph.D. Student(s) Information -->


elseif($member=="ericwong") { ?>

				<? include("profiles/eric_wong.php"); ?>
				<? include("profiles/profile_template.php"); ?>

<?php }
elseif($member=="wenxiangchen") { ?>

				<? include("profiles/wenxiang_chen.php"); ?>
				<? include("profiles/profile_template.php"); ?>
<?php }
elseif($member=="danielstraus") { ?>

				<? include("profiles/daniel_straus.php"); ?>
				<? include("profiles/profile_template.php"); ?>
<?php }
elseif($member=="leo") { ?>

				<? include("profiles/leo_zhao.php"); ?>
				<? include("profiles/profile_template.php"); ?>

<?php }
elseif($member=="han") { ?>

				<? include("profiles/han_wang.php"); ?>
				<? include("profiles/profile_template.php"); ?>
<?php }
elseif($member=="jiacen") { ?>

				<? include("profiles/jiacen_guo.php"); ?>
				<? include("profiles/profile_template.php"); ?>
<?php }
elseif($member=="qinghua") { ?>

				<? include("profiles/qinghua_zhao.php"); ?>
				<? include("profiles/profile_template.php"); ?>
<?php }
elseif($member=="stevenneuhaus") { ?>

				<? include("profiles/steven_neuhaus.php"); ?>
				<? include("profiles/profile_template.php"); ?>
<?php }
elseif($member=="austinkeller") { ?>

				<? include("profiles/austin_keller.php"); ?>
				<? include("profiles/profile_template.php"); ?>
				<?php }

elseif($member=="henryshulevitz") { ?>

				<? include("profiles/henry_shulevitz.php"); ?>
				<? include("profiles/profile_template.php"); ?>
				<?php }


//<!-- This is Masters Student(s) Information -->

elseif($member=="martinsarott") { ?>

				<? include("profiles/martin_sarott.php"); ?>
				<? include("profiles/profile_template.php"); ?>
<?php }
elseif($member=="kunxue") { ?>

				<? include("profiles/kun_xue.php"); ?>
				<? include("profiles/profile_template.php"); ?>
<?php }



//<!-- This is Undergrad Student(s) Information -->

elseif($member=="bengrau") { ?>

				<? include("profiles/ben_grau.php"); ?>
				<? include("profiles/profile_template.php"); ?>
<?php }
elseif($member=="carl") { ?>

				<? include("profiles/carl_ruijter.php"); ?>
				<? include("profiles/profile_template.php"); ?>
<?php }
elseif($member=="elizabeth") { ?>

				<? include("profiles/elizabeth_dresselhaus.php"); ?>
				<? include("profiles/profile_template.php"); ?>

<?php }

else { ?>

				<? include("profiles/alumni_redirect.php"); ?>
<?php } ?>



			</div>
		</td>
		<td width=20% valign='top'>
			<? include("group_sidebar.php"); ?>
		</td>
	</tr>

	<tr><td colspan=2 align='center'>
		<? include("footer.php"); ?>
