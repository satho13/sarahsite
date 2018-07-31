<?php $pageNum=10;
include("header.php"); 
$researchTitle="Plasmonic Materials";
$researchSummary="Subwavelength metal and highly-doped semiconductor structures support surface plasmons � collective oscillations of the delocalized electrons in the material upon interaction with light. In the Kagan group, we construct plasmonic structures through both top-down nanofabrication from bulk materials and bottom-up assembly from nanocrystal building blocks. We apply plasmonic nanostructures 1) to utilize their strong electromagnetic fields to enhance absorption, charge separation and photoluminescence in organic and inorganic materials and their devices and 2) as building blocks in the construction of large-area, broadband, tunable optical metamaterials.";
$numTopics=3;
$topicArray=array(
	array("Plasmonic Enhancement of Upconversion Nanophosphor Luminescence", "We use self- and templated assembly to place nanocrystal-based phosphors, that upconvert infrared light into the visible, in proximity to plasmonic metal nanostructures. The plasmonic metal nanostructures are designed to be resonant with (case 1) the nanophosphor emission and (case 2) the nanophosphor sensitization to demonstrate large metal-induced enhancement of upconversion luminescence.", "Plasmonics Example 1_2.png", "Nanohole arrays are fabricated by e-beam lithography forming thin 30 nm Au metal films, to maximize the field experienced by single nanophosphors, with holes sized to each accept only a single nanophosphor, and with periodicity to ensure resonance with the sensitization of the nanophosphor after the array is filled. Emission enhancement factors of x30 shown experimentally above are consistent with simulations."),
	array("Nanocrystal Plasmonics", "We construct plasmonic metals from nanocrystal building blocks of 1) Au, 2) Ag and 3) VOx to form the phase change material VO2. Au and Ag nanocrystals synthesized with long organic ligands form electrically and optically insulating thin films. Room temperature chemical exchange processes replace the long capping groups with shorter ones, decreasing the interparticle spacing, increasing their electronic coupling, and transforming the nanocrystal thin films from an insulator to a high conductivity metal. VOx nanocrystals are converted to the phase change material VO2 by thermal annealing. Using these colloidal nanocrystal building blocks, large-area patterning of nanocrystal-based subwavelength nanostructures is realized by imprint lithography to form tunable, broadband and switchable optical metamaterials.", "Plasmonics Example 2_2.png", "The real dielectric permittivity of Au nanocrystal thin films bearing the long organic ligands used in synthesis (blue) and upon exchange with ethanedithiol (green) and thiocyanate (orange). Thiocyanate-exchanged Au nanocrystal thin films form a diluted metal with smaller negative permittivity in contrast to bulk Au (red), giving us a new axis by which to design the optical properties of plasmonic metals. Using colloidal nanocrystal building blocks, large-area patterning of nanocrystal-based nanostructures is realized by imprint lithography. The non-corrosive, room temperature ligand exchange process allows fabrication of metamaterials on low-temperature, flexible plastics. The optical properties are tunable by the geometry of the imprinted nanocrystal-based nanostructure."),
	array("ITO Nanorod Filters", "We use nanoimprint lithography and etching to structure thin films of indium tin oxide (ITO), a highly doped semiconductor, into nanorod arrays. We demonstrate tailorable band-pass and band-stop filters operating in the near-infrared by control of nanorod geometry and the addition of nanocrystals between and metal on top of the ITO nanorods. The optical response agree with both circuit models and full-wave simulations.", "Plasmonics Example 3.png", "Large-area, ITO nanorods fabricated by nanoimprint lithography to form metatronic circuits operating in the near-infrared."));
$numPubs=array(3,4,1);
$pubArray=array(
	array("2012_6.php", "2013_6.php", "2014_6.php"),
	array("2013_1.php", "2014_1.php", "2014_2.php", "2015_8.php"),
	array("2013_7.php", " ", " "));
include("research_body.php");
include("footer.php"); 
?>
