<?php $pageNum=15;
include("header.php"); 
$researchTitle="Optoelectronic Materials and Devices";

$researchSummary="The interaction of light with matter is of fundamental and technological interest. In the Kagan group we use cw and time- and spatially-resolved optical and optoelectronic spectroscopies and AC and DC electrical spectroscopies to understand the fate of photoexcitations and the processes giving rise to the emission and transfer of excitations and the separation and transport of charge in nanocrystalline and organic semiconductors. Building on our fundamental understanding, we design materials and devices that interconvert light and electricity in the examples of light-emitting diodes, photovoltaics and photodetectors.";

$numTopics=2;

$topicArray=array(
	array("Photoluminescence/Photoconductivity Apparatus",
 "We construct an apparatus to spatially resolve and correlate photoluminescence and photoconductivity in materials and their devices. For examples, we use this apparatus to map photoconductivity in nanocrystalline and organic materials and in fabricated solar photovoltaics to understand inhomogeneities that are intentionally introduced at the material or device level or that develop during device operation.", 
"Optoelectronics Example 1.png", 
"Schematic of the correlative, spatially resolved photoluminescence and photoconductivity apparatus. This apparatus was used to measure (left) photoconductivity in semiconductor nanocrystal thin films with periodic modulations in thickness formed by self-assembly; (middle) the short circuit current in PCBM/P3HT bulk heterojunction solar cells to correlate ageing in organic solar cells with degradation in device performance; the effects of ageing are prevented by introduction of a compatibilizer composed of an oligothiophene tethered fullerene; and (right) photocurrent enhancement in solar cells arising from light trapping in photonic structures introduced by wrinkles and folds in the underlying substrate upon (blue) 488 nm and (red) 750 nm excitation. [scale bar 5 um]."),

	array("Stoichiometric Design of Devices", 
"We use thermal evaporation and diffusion to introduce atoms at the nanocrystal surface. These atoms can be used to introduce extrinsic atoms (e.g. indium at the surface of CdSe nanocrystals) or to engineer the nanocrystal stoichiometry (e.g. introduce excess lead or selenium to PbSe nanocrystals). For example below, the lead chalcogenides are non-stoichiometric semiconductors - - as we enrich the nanocrystal thin films in lead, they becomes increasingly n-type, and as we enrich the films in selenium, they becomes increasingly p-type. Tailoring the surface composition of nanocrystals provides a route to control thin film carrier statistics.", 
"Optoelectronics Example 2.png", 
"Schematic of lead chalcogenide (PbE) nanocrystal thin films enriched by thermal evaporation and diffusion with excess lead and excess selenium to n- and p-dope the nanocrystal thin films respectively. Example of capacitance-voltage measurements used to extract the carrier type and concentration of lead selenide nanocrystal thin films with increasing amounts of deposited lead or selenium. Tailoring the amount of excess metal or chalcogen allows us to tune the carrier concentration from 1015-1020/cm3, and therefore from intrinsic to degenerately n- or p-doped."));

	
$numPubs=array(4,2);

$pubArray=array(
	array("2011_1.php", "2010_1.php", "2011_5.php", "2012_3.php"),
	array("2012_5.php", "2013_4.php"));

include("research_body.php");
include("footer.php"); 
?>


