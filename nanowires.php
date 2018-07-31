<?php $pageNum=11;
include("header.php"); 
$researchTitle="Colloidal Semiconductor Nanowires";

$researchSummary="Semiconductor nanowires provide interesting systems in which to study the influence of quantum and dielectric confinement on one-dimensional (1D) materials physics and the unique properties that may be realized for a range of devices such as field-effect transistors (FETs), thermoelectrics, energy efficient photovoltaics and photodetectors. In the Kagan group, we explore colloidal semiconductor nanowires, develop methods for their doping, assembly and device integration, probe their temperature dependent optical and electrical properties, and harness the unique properties of these 1D materials to design devices.";

$numTopics=3;

$topicArray=array(
	array("Charge Injection and Transport",
 "We study single semiconductor nanowires to probe charge injection and transport for differently doped semiconductor nanowires. We demonstrate, for example in nanowires of the IV-VI semiconductor PbSe, which has large exciton, electron and hole Bohr radii and a uniquely mirror-like electronic structure, that these nanowires form Schottky-barrier transistors and may be remotely doped at their surface to tune their transport from ambipolar to n-type and p-type. Electron and hole mobilities in these nanowire transistors increase monotonically with decreasing temperature consistent with the single crystalline nature and remote doping of the nanowires.", 
"Nanowire Example 1.png", 
"Schematic and scanning electron microscopy image of a single PbSe nanowire field-effect transistor. These transistors show Schottky-barrier operation, as seen by the decreasing current with decreasing temperature at low voltages (blue region) that is overcome at high voltages as the barriers are thinned and the current increases with decreasing temperature (red regions). Temperature-dependent electron and hole mobilities increase with decreasing temperature, showing electron-phonon scattering at high temperatures and no signatures of impurity scattering at low temperatures, consistent with remote doping of the nanostructures."),

	array("Nanowire Devices", 
"We assemble arrays of semiconductor nanowires by electrophoresis to span the channel of devices. We use doping to control the polarity of charge transport, form nanowire circuitry, and develop processes and select materials to form low-voltage, low-hysteresis, flexible nanowire electronics.", 
"Nanowire Example 2.png", 
"Schematic and photograph of nanowire transistors assembled by electrophoresis and fabricated on flexible Kapton substrates to form, in this example, low-voltage, low-hysteresis nanowire transistors."),

	array("Nanowire Doping", 
"We have developed methods to remotely dope semiconductor nanowires using gas exposure, solution-based atomic layer deposition and physical deposition through thermal evaporation. This allows us to engineer charge transport and form n-type, p-type and ambipolar devices. Our studies of nanowires are often also used to serve as models from which to understand the properties and processes in the design of materials and devices from zero-dimensional nanocrystal analogs.", 
"Nanowire Example 3.png", 
"Schematic of solution-based colloidal atomic layer deposition used to enrich CdSe nanowires with adatoms of the metal Cd or the chalcogens Se or S. Cd acts as a low-lying donor in CdSe and enriching the nanowire surface more highly n-dopes the material. In contrast Se and S are acceptors, compensating the semiconductor and suppressing the electron current. While chalcogen-enriched nanowires show no current, introduction of indium through thermal evaporation and diffusion (upon annealing) dramatically enhances the electron current for Se-rich surfaces, degenerately doping the nanowires. Similarly indium enhances the electron current for S-rich surfaces, but not as significantly, allowing the formation of nanowire transistors with large current modulation. This example shows the chemically specific indium-chalcogen interaction at the nanowire surface."));

$numPubs=array(1,3,1);

$pubArray=array(
	array("2012_4.php", "", " "),
	array("2011_2.php", "2011_8.php", "2015_7.php"),
	array("2013_10.php", " ", " "));

include("research_body.php");
include("footer.php"); 
?>
