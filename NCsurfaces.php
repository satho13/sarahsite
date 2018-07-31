<?php $pageNum=12;
include("header.php"); 
$researchTitle="Surface Chemistry of Nanocrystals";

$researchSummary="The surface chemistry of nanocrystals is key to their synthesis, colloidal dispersion, assembly, and physical properties. As-synthesized many nanocrystal materials are sterically stabilized by long chain organic ligands and in compound materials the nanocrystals are often non-stoichiometric, commonly modeled by a stoichiometric core and a surface enriched in one element. In the Kagan group, we explore the exchange of the long ligands used in synthesis with new, compact ligands and chemical and physical methods to control the composition of atoms at the surface. These compact ligand chemistries allow for strong coupling of nanocrystals in the solid state and the introduction of atoms at the nanocrystal surface is used to control nanocrystal doping and passivation, important for their applications.";

$numTopics=3;

$topicArray=array(
	array("Thiocyanate-based Ligand Exchange",
 "We introduce and use ammonium thiocyanate (NH4SCN), an air-stable and environmentally benign compound, to exchange the long ligands used in synthesis for this more compact surface functionalization. We show thiocyanate may exchange the ligands of many nanocrystal materials and then be dispersed in polar solvents and it may exchange ligands on nanocrystals after their assembly in the solid state. We use the thiocyanate ligand as a unique vibrational reporter of the nanocrystal surface chemistry, as its absorbance is sensitive to binding and to the nature of atoms on the surface.", 
"Nanocrystal Surface Chemistry Example 1.png", 
"Schematic depicting exchange of the long ligands used in synthesis for the compact thiocyanate (SCN). Biphasic mixtures of hexane and DMSO for each pair of nanocrystals (left) as-synthesized and (right) thiocyanate-exchanged. FTIR spectra of thiocyanate-exchange cadmium and lead chalcogenide nanocrystals, showing the specificity of thiocyanate for the chemistry of surface metal atoms."),

	array("Stoichiometric Control of Surface Chemistry", 
"We use thermal evaporation and diffusion to introduce atoms at the nanocrystal surface. These atoms can be used to introduce extrinsic atoms (e.g. indium at the surface of CdSe nanocrystals) or to engineer the nanocrystal stoichiometry (e.g. introduce excess lead or selenium to PbSe nanocrystals). For example below, the lead chalcogenides are non-stoichiometric semiconductors - - as we enrich the nanocrystal thin films in lead, they becomes increasingly n-type, and as we enrich the films in selenium, they becomes increasingly p-type. Tailoring the surface composition of nanocrystals provides a route to control thin film carrier statistics.", 
"Nanocrystal Surface Chemistry Example 2.png", 
"Schematic of lead chalcogenide (PbE) nanocrystal thin films enriched by thermal evaporation and diffusion with excess lead and excess selenium to n- and p-dope the nanocrystal thin films respectively. Example of capacitance-voltage measurements used to extract the carrier type and concentration of lead selenide nanocrystal thin films with increasing amounts of deposited lead or selenium. Tailoring the amount of excess metal or chalcogen allows us to tune the carrier concentration from 1015-1020/cm3, and therefore from intrinsic to degenerately n- or p-doped."),

	array("Post-Synthesis Colloidal ALD Control", 
"We also use solution-based methods to introduce adatoms at the nanocrystal surface to engineer carrier type and concentration and to passivate the nanocrystal surface. In particular, we use a post-synthesis colloidal atomic layer deposition method to tailor the nanocrystal surface after integration in devices. Manipulating the nanocrystal surfaces after deposition avoids possible changes in surface composition upon solution-based deposition and ligand exchange. For example, in lead chalcogenide nanocrystal thin films we exchange the ligands used in synthesis and enrich the surface in chalcogen by treatment with a chalcogenide salt and then enrich the surface in lead and chloride using lead chloride. We showed that the chalcogen-rich nanocrystal surface is structurally, optically and electronically unstable, whereas treatment with lead chloride creates a well-passivated, stable nanocrystal thin film.", 
"Nanocrystal Surface Chemistry Example 3.png", 
"Schematic of stepwise post-synthesis, colloidal atomic layer deposition by treatment with a chalcogenide salt, exchanging the long surface ligands used in synthesis and enriching the surface in chalcogen, and with lead chloride, enriching the surface in lead. Note: a structural change is seen upon exchange from hexagonally-ordered domains to square-ordered domains as the nanocrystals fuse (scale bar: 20 nm). Optical absorption spectra of as-synthesized (black), chalcogen-enriched (blue) and subsequently lead-enriched (red) nanocrystal thin films. Transfer characteristics reflect the change in carrier statistics as chalcogen-enriched nanocrystal thin films are degenerately p-doped (black) and with more lead enrichment (from blue to green to red) become increasingly n-type.
"));

$numPubs=array(1,2,2);

$pubArray=array(
	array("2011_3.php", "", ""),
	array("2012_5.php", "2013_4.php", ""),
	array("2013_10.php", "2014_3.php", " "));

include("research_body.php");
include("footer.php"); 
?>





