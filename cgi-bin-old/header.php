<body>
<!-- This is header -->

	<canvas id="headerCanvas" width="1000" height="246" style="position:absolute; top:0; left:0; z-index:1;"></canvas>
	<script>

		var c=document.getElementById("headerCanvas");
		var ctx=c.getContext("2d");

		// Create gradient
		var grd=ctx.createLinearGradient(0,0,500,400);
		grd.addColorStop(0,"black");
		grd.addColorStop(1,"2851ce");

		// Fill with gradient
		ctx.fillStyle=grd;
		ctx.fillRect(0,0,1000,246);

	</script>
	<div style="z-index: 2; position:absolute; width: 1000px; margin:0 auto; height:246px; top:0; left:0;">
		<table style="margin: -1px;" width=100% cellspacing="2" cellpadding="0" ><tr><td>
			<form action="http://www.upenn.edu/cgi-bin/search-fork.pl" method="get">
				<input type="text" name="searchterms" size="10" title="Search"> 
				 <input class=" button" type="submit" name="Submit" value="Search" />
				<a style="background-color:rgba(255,0,0,0);" href="http://www.upenn.edu/search/advanced-search.html">Advanced Search</a>&nbsp;&nbsp;&nbsp;
			</form>
		</td></tr></table>

		<table width=100% cellpadding=0 cellspacing=0><tr>
			<td width=20% valign='top'>
          			<a href="http://www.upenn.edu/" id="logo" style="background-color:rgba(255,0,0,0);">
					<img src="images/logo2.png">
				</a>
			</td>

			<td width=80% align='left'>
			<div id="whitecontainer3">
			<div id="bluecontainer">
				<table width=100% style="margin: 0px;" background="banner5.png" cellspacing=0 align='center'><tr><td align='center' width=600 height=80 >
					<table cellspacing=19 cellpadding=5><tr><td background="bannermask.png">
						<h1 align="center" style="color: #0500c6;"  >Cherie R. Kagan Research Group</h1>
						<p align="center" style="color: black; font-size: 17px;">Electrical and Systems Engineering | Chemistry | Materials Science and Engineering</p>
					</td></tr></table></div></div></td></tr>
				<tr><td>


				</td></tr></table><br />

			</td>
			</tr>
			<tr>
			<td colspan=2 valign=top>
						<div style="width: 1000px; height:24px; background-color:#900000; position:relative;">
						<div id="tabs10">
  							<ul >
 								<li><a href="organic_devices.php" title="FETs"><span>Organic Devices</span></a></li>
 								<li><a href="solar_photovoltaics.php" title="Solar"><span>Solar Photovoltaics</span></a></li>
								<li><a href="nanoscale_electronics.php" title="Nanoscale"><span>Nanoscale Electronics</span></a></li>
								<li><a href="optical_metamaterials.php" title="Optical"><span>Optical Metamaterials</span></a></li>
  							</ul>
						</div>
						</div>
			</td>
			</tr>
			<tr>
				<td colspan=2>
	</div>

	<div style="position:relative; top:0px; left:0;margin: 0px;">
		<canvas id="sidebarCanvas" width="218" height=1500 style="position:absolute; top:0px; left:0; z-index:1;"></canvas>
		<script>
			var c=document.getElementById("sidebarCanvas");
			var ctx=c.getContext("2d");
			// Create gradient
			var grd=ctx.createLinearGradient(0,0,500,200);
			grd.addColorStop(0,"black");
			grd.addColorStop(1,"2851ce");
			// Fill with gradient
			ctx.fillStyle=grd;
			ctx.fillRect(0,0,218,1500);

		</script>
		<div style="z-index: 2; position:relative; width: 1000px; top:-1px;">
			<table cellspacing="0">
				<tr><td class="leftSideBar" valign="top">

	<!-- This is the BEGINNING of the Sidebar and tabs, DO NOT CHANGE-->


      	<!-- ##### Left Sidebar ##### -->
			<div id="sidecontainer">


				<div id="sidecontainer2">
	    				<!-- Edit navigation on the left side of the page here -->
      				<ul>
          					<li><a href="index.php" title="link 1"><img src="red_arrow.gif" align="left">Home</a></li>
          					<li><a href="research.php" title="link 1"><img src="red_arrow.gif" alt="red_arrow" align="left"></a><a href="research.php" title="Research">Research</a></li>
          					<li><a href="publications.php" title="link 1"><img src="red_arrow.gif" alt="red_arrow" align="left"></a><a href="publications.php" title="Publications">Publications</a></li>
						<li><a href="group.php" title="link 1"><img src="red_arrow.gif" alt="red_arrow" align="left"></a><a href="group.php" title="Group">Group</a></li>
						<li><a href="courses.php" title="link 1"><img src="red_arrow.gif" alt="red_arrow" align="left"></a><a href="courses.php" title="Courses">Courses</a></li>
          					<li><a href="alumni.php" title="link 1"><img src="red_arrow.gif" alt="red_arrow" align="left"></a><a href="alumni.php" title="Alumni">Alumni</a></li>
						<li><a href="groupphotos.php" title="link 1"><img src="red_arrow.gif" alt="red_arrow" align="left"></a><a href="groupphotos.php" title="Group Photos">Group Photos</a></li>
          					<li><a href="funding.php" title="link 1"><img src="red_arrow.gif" alt="red_arrow" align="left"></a><a href="funding.php" title="funding">Funding</a></li>
						<li><a href="links.php" title="link 1"><img src="red_arrow.gif" alt="red_arrow" align="left"></a><a href="links.php" title="Links">Links</a></li>
        			</ul>



				</div>
    			</div>
		</div>
	</td><td class="whitecontainer">

		<div id="whitecontainer2">
			<div id="bluecontainer">

