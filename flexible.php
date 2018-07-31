<?php $pageNum=14;
include("header.php"); 
$researchTitle="Flexible Nanocrystal Electronics";

$researchSummary="Colloidal semiconductor nanocrystals present an exciting new class of solution-processable materials for the low-cost, large-area fabrication of flexible, thin film electronics. In the Kagan group, we study the role of surface chemistry on processability and nanocrystal coupling, passivation and doping and develop fabrication methods to construct and tailor the characteristics of electronic devices and circuits from colloidal nanocrystal inks. We design more complex integrated, flexible nanocrystal circuits for a growing number of electronic and bioelectronic applications.";

$numTopics=3;

$topicArray=array(
	array("CMOS-like Electronics",
 "We use ambipolar PbS nanocube transistors to demonstrate CMOS-like circuits. In this first example, the discrete transistors are connected through external wires to form an inverter.", 
"Nanocrystal Electronics Example 1.png", 
"Colloidal PbS nanocubes are deposited by spincoating and exchanged with the compact thiocyanate ligand to form the semiconducting channel of ambipolar transistors. These transistors are connected through external wires, operating one transistor in electron accumulation and one transistor in hole accumulation, to form a CMOS-like inverter with a gain of ~22."),

	array("Nanocrystal Integrated Circuits", 
"We report large area, flexible, photopatterned integrated circuits based on CdSe nanocrystal semiconductors. Our results show high performance devices with transistor mobilities exceeding 10 cm<sup>2</sup>/Vs, amplifiers with ~7 kHz bandwidth, and oscillators with sub-10 &micro;s stage delays as well as NAND and NOR digital logic gates.", 
"Nanocrystal Electronics Example 2.png", 
"(Top) Photograph of completed sample and output characteristics of NAND and NOR logic gates. (Bottom) Optical micrograph and output characteristics of a five-stage nanocrystal ring oscillator with a sixth-stage buffer operating at a supply voltage of 5 V (VDD)."),

	array("Nanocrystal Defect Device Repair", 
"We show that we can repair defects in nanocrystal devices that arise from air and solvent exposure by incorporating indium metal in device electrodes and thermally triggering its diffusion to repair the nanocrystal surface at mild annealing temperatures, below those used in doping. Taking advantage of the in situ repair allows us to fabricate nanocrystal devices in ambient air and use common clean room tooling such as lithography and atomic layer deposition to form large-area and flexible nanocrystal devices that operate stably in air. ", 
"Nanocrystal Electronics Example 3.png", 
"Transfer characteristics of CdSe nanocrystal transistors (red) before and (blue) after annealing to dope the device with indium and (green) after air exposure for 30 min and then (black) re-annealing at milder temperatures to repair the device. Schematic of the effects of air exposure on indium doped nanocrystal devices and upon repair upon annealing. In situ repair allows the fabrication of large-area and flexible devices using clean room techniques such as photolithography and atomic layer deposition."));

$numPubs=array(1,3,1);

$pubArray=array(
	array("2011_7.php", "", ""),
	array("2015_12.php","2012_8.php", "2014_8.php"),
	array("2013_8.php", "", " "));

include("research_body.php");
include("footer.php"); 
?>


