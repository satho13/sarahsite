<?php $pageNum=5;
include("header.php"); ?>
	<tr>
		<td width=100% valign='top'>
			<div id='indexcontent'>

				<p>
					<h1 align="center"><font size="+3">Courses</font></h1>
				</p>

				
					<table>
						<tr>
							<?php 
if(empty($_GET['view'])){ 
    $view = ''; 
} else { 
    $view=$_GET["view"];
}
if ($view=='current') { ?>

		<h1 align='center'><font size="+2">Current Course</font></h1> 
	<br />

	<a style="font-size: 16px;" href="http://www.ese.upenn.edu/courses/#521" target="blank">ESE 521: The Physics of Solid State Energy Devices</a>
	<p></p>
	<b style="font-size: 14px;"><div align='center'>Schedule</div></b>
	<br />Class - Towne 311
	<br /><div style="margin-left: 20px;">Monday 3 - 4:30
	<br />Wednesday 3 - 4:30</div>
	<br />Professor Kagan's Office Hours - Levine 254 
	<br /><div style="margin-left: 20px;">Tuesday 2:30 - 4:00</div>
	<br />TA Office Hours - Skirkanich 508
	<br /><div style="margin-left: 20px;">Monday 10:30AM - 11:30AM
	<br />Thursday 10:30AM - 11:30AM</div>
	<p></p>
	<b style="font-size: 14px;"><div align='center'>TAs</div></b>
	<? include("profiles/scott_stinner.php"); ?>
	<? include("profiles/wenxiang_chen.php"); ?>




<? } else { ?>
		<h1 align='center'><font size="+2">Course List</font></h1>
<p></p>
	<a style="font-size: 16px;" href="https://srfspdf.apps.upenn.edu/srfsPdf/jsp/fast.do?fastStart=courseRegisterBySubject&subject=ese" target="blank">ESE 521: The Physics of Solid State Energy Devices</a>
	<br />
	<div style="margin-left: 20px;">A graduate level course on the fundamental physical principles underlying the operation of traditional semiconducting electronic and optoelectronic devices and extends these concepts to novel nanoscale electronic and optoelectronic devices. The course assumes an undergraduate level understanding of semiconductors physics. The course builds on the physics of solid state semiconductor devices to develop the operation and application of semiconductors and their devices in energy conversion devices such as solar photovoltaics, thermophotovoltaics, and thermoelectrics, to supply energy. The course also considers the importance of the design of modern semiconductor transistor technology to operate at low-power in CMOS.     <b>(Spring)</b></div>
	
	<p></p>
	<a style="font-size: 16px;" href="https://srfspdf.apps.upenn.edu/srfsPdf/jsp/fast.do?fastStart=courseRegisterBySubject&subject=ese" target="blank">ESE 218: Electronic, Photonic, and Electromechanical Devices</a>
	<br />
	<div style="margin-left: 20px;">This first course in electronic, photonic and electromechanical devices introduces students to the design, physics and operation of physical devices found in today's applications. The course describes semiconductor electronic and optoelectronic devices, including light-emitting diodes, photodetectors, photovoltaics, and transistors; optical and electromagnetic devices, such as waveguides, fibers, transmission lines, and antennas; and electromechamical actuators, sensors, transducers, machines and systems. The course is a full lecture and a companion full lab course.     <b>(Fall)</b></div>
	<p></p>



<? } ?>

						</tr>
					</table>

			</div>
		</td>
	</tr>

	<tr><td colspan=1 align='center'>
		<? include("footer.php"); ?>
