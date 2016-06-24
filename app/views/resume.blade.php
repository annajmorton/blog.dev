<?php 
	
	$guess = mt_rand(1,6);
?>

@extends('layouts.master')
@section('style')
	<link rel="stylesheet" type="text/css" href="/css/resumeR2.css">
	<style type="text/css">
		img{
			width: 100%;	
		}
		#image{
			display: flex;
			justify-content:center;
		}
	</style>

@stop

@section('content')


	<div class="container">
		<div class="row">
		{{-- 	<div class="col-md-2"></div>
			<div class="col-md-8"> --}}
				

				<table class="table table-striped" border=0 cellpadding=0 cellspacing=0 width=1145 style='border-collapse:
				 collapse;table-layout:fixed;width:859pt'>
				 <col class=xl67 width=39 style='mso-width-source:userset;mso-width-alt:1237;
				 width:29pt'>
				 <col class=xl67 width=157 style='mso-width-source:userset;mso-width-alt:5034;
				 width:118pt'>
				 <col class=xl66 width=157 span=3 style='mso-width-source:userset;mso-width-alt:
				 5034;width:118pt'>
				 <col class=xl66 width=125 style='mso-width-source:userset;mso-width-alt:4010;
				 width:94pt'>
				 <col class=xl82 width=39 style='mso-width-source:userset;mso-width-alt:1237;
				 width:29pt'>
				 <col class=xl65 width=101 style='mso-width-source:userset;mso-width-alt:3242;
				 width:76pt'>
				 <col width=71 span=3 style='width:53pt'>
				 <tr class=xl76 height=33 style='mso-height-source:userset;height:25.0pt'>
				  <td colspan=7 height=33 class=xl118 style='height:25.0pt'>Seeking a creative
				  environment focused on solving real-world problems through technology and
				  improving the built environment.<span style='mso-spacerun:yes'>&nbsp;</span></td>
			
				 </tr>
				 <tr class=xl80 height=24 style='mso-height-source:userset;height:18.0pt'>
				  <td height=24 class=xl96 colspan=2 style='height:18.0pt;mso-ignore:colspan'>SKILLS</td>
				  <td class=xl96>&nbsp;</td>
				  <td class=xl96>&nbsp;</td>
				  <td class=xl96>&nbsp;</td>
				  <td class=xl96>&nbsp;</td>
				  <td class=xl97 width=39 style='width:29pt'>&nbsp;</td>
				  <td class=xl79 width=101 style='width:76pt'></td>
				  <td class=xl80></td>
				  <td class=xl80></td>
				  <td class=xl80></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl70 style='height:14.0pt'></td>
				  <td class=xl98 colspan=2 style='mso-ignore:colspan'>DEVELOPMENT TOOLS:</td>
				  <td class=xl78 width=157 style='width:118pt'></td>
				  <td class=xl78 width=157 style='width:118pt'></td>
				  <td class=xl78 width=125 style='width:94pt'></td>
				  <td class=xl99 width=39 style='width:29pt'></td>
				  <td class=xl75 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td class=xl71>- Javascript / jQuery</td>
				  <td class=xl71>- AJAX requests</td>
				  <td class=xl72 width=157 style='width:118pt'>- MySQL<span
				  style='mso-spacerun:yes'>&nbsp;</span></td>
				  <td class=xl71>- Laravel</td>
				  <td class=xl71>- PHP</td>
				  <td class=xl74></td>
				  <td class=xl75 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td class=xl71>- HTML</td>
				  <td class=xl71>- CSS</td>
				  <td class=xl72 width=157 style='width:118pt'>- Git/Github</td>
				  <td class=xl71>- Sublime</td>
				  <td class=xl71>- HTTP</td>
				  <td class=xl74></td>
				  <td class=xl75 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl70 style='height:14.0pt'></td>
				  <td class=xl98 colspan=3 style='mso-ignore:colspan'>BUILDING SYSTEM MODELING
				  SOFTWARE:</td>
				  <td class=xl78 width=157 style='width:118pt'></td>
				  <td class=xl99 width=125 style='width:94pt'></td>
				  <td class=xl74></td>
				  <td class=xl75 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td class=xl71>- TRACE</td>
				  <td class=xl71>- IES</td>
				  <td class=xl71>- TRNSYS<span style='mso-spacerun:yes'>&nbsp;</span></td>
				  <td class=xl72 width=157 style='width:118pt'>- Mat Lab<span
				  style='mso-spacerun:yes'>&nbsp;</span></td>
				  <td class=xl72 width=125 style='width:94pt'>- REVIT</td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td class=xl71>- eQuest</td>
				  <td class=xl71>- EnergyPlus</td>
				  <td class=xl71>- Therm</td>
				  <td class=xl72 width=157 style='width:118pt'>- Excel / Visual Basic</td>
				  <td class=xl71>- AUTOCAD</td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td class=xl71></td>
				  <td class=xl71></td>
				  <td class=xl71></td>
				  <td class=xl72 width=157 style='width:118pt'></td>
				  <td class=xl71></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl80 height=24 style='mso-height-source:userset;height:18.0pt'>
				  <td height=24 class=xl96 colspan=2 style='height:18.0pt;mso-ignore:colspan'>CREDENTIALS<span
				  style='mso-spacerun:yes'>&nbsp;</span></td>
				  <td class=xl102 width=157 style='width:118pt'>&nbsp;</td>
				  <td class=xl102 width=157 style='width:118pt'>&nbsp;</td>
				  <td class=xl102 width=157 style='width:118pt'>&nbsp;</td>
				  <td class=xl102 width=125 style='width:94pt'>&nbsp;</td>
				  <td class=xl103>&nbsp;</td>
				  <td class=xl79 width=101 style='width:76pt'></td>
				  <td class=xl80></td>
				  <td class=xl80></td>
				  <td class=xl80></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl66 style='height:14.0pt'></td>
				  <td class=xl66>Codeup Graduate</td>
				  <td class=xl66></td>
				  <td class=xl66></td>
				  <td class=xl66></td>
				  <td class=xl82>Spring 2016</td>
				  <td class=xl82></td>
				  <td class=xl112 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl66 style='height:14.0pt'></td>
				  <td class=xl66 colspan=4 style='mso-ignore:colspan'>Licensed Professional
				  Engineer- Mechanical HVAC, State of Texas</td>
				  <td class=xl82>2013 to present</td>
				  <td class=xl82></td>
				  <td class=xl112 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl66 style='height:14.0pt'></td>
				  <td class=xl66 colspan=3 style='mso-ignore:colspan'>LEED Project Reviewer,
				  LEED AP BD+C<span style='mso-spacerun:yes'>&nbsp;</span></td>
				  <td class=xl66></td>
				  <td class=xl82>2010 to present</td>
				  <td class=xl82></td>
				  <td class=xl112 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl66 style='height:14.0pt'></td>
				  <td class=xl66 colspan=4 style='mso-ignore:colspan'>Bachelor of Science-
				  Engineering, Baylor University Waco TX</td>
				  <td class=xl82>2008</td>
				  <td class=xl82></td>
				  <td class=xl65 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl66 style='height:14.0pt'></td>
				  <td class=xl114 colspan=3 style='mso-ignore:colspan'>-Honors College and
				  Interdisciplinary Core, 3.75 GPA</td>
				  <td class=xl66></td>
				  <td class=xl113 width=125 style='width:94pt'></td>
				  <td class=xl113 width=39 style='width:29pt'></td>
				  <td class=xl112 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl66 style='height:14.0pt'></td>
				  <td class=xl66></td>
				  <td class=xl66></td>
				  <td class=xl66></td>
				  <td class=xl66></td>
				  <td class=xl113 width=125 style='width:94pt'></td>
				  <td class=xl113 width=39 style='width:29pt'></td>
				  <td class=xl112 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr class=xl80 height=24 style='mso-height-source:userset;height:18.0pt'>
				  <td height=24 class=xl96 colspan=2 style='height:18.0pt;mso-ignore:colspan'>EXPERIENCE</td>
				  <td class=xl96>&nbsp;</td>
				  <td class=xl96>&nbsp;</td>
				  <td class=xl96>&nbsp;</td>
				  <td class=xl97 width=125 style='width:94pt'>&nbsp;</td>
				  <td class=xl97 width=39 style='width:29pt'>&nbsp;</td>
				  <td class=xl79 width=101 style='width:76pt'></td>
				  <td class=xl80></td>
				  <td class=xl80></td>
				  <td class=xl80></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl66 style='height:14.0pt'></td>
				  <td class=xl66 colspan=3 style='mso-ignore:colspan'>Independent Engineering
				  Consultant San Antonio, Tx</td>
				  <td class=xl66></td>
				  <td class=xl82>2015 to Present</td>
				  <td class=xl82></td>
				  <td class=xl112 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl66 style='height:14.0pt'></td>
				  <td class=xl66 colspan=4 style='mso-ignore:colspan'>Energy Analyst and
				  Project Design Engineer at dbHMS Chicago, IL</td>
				  <td class=xl82>2009 to 2015</td>
				  <td class=xl82></td>
				  <td class=xl112 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl66 style='height:14.0pt'></td>
				  <td class=xl66></td>
				  <td class=xl66></td>
				  <td class=xl113 width=157 style='width:118pt'></td>
				  <td class=xl113 width=157 style='width:118pt'></td>
				  <td class=xl113 width=125 style='width:94pt'></td>
				  <td class=xl113 width=39 style='width:29pt'></td>
				  <td class=xl65 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr class=xl80 height=24 style='mso-height-source:userset;height:18.0pt'>
				  <td height=24 class=xl96 colspan=2 style='height:18.0pt;mso-ignore:colspan'>PROJECTS</td>
				  <td class=xl96>&nbsp;</td>
				  <td class=xl96>&nbsp;</td>
				  <td class=xl96>&nbsp;</td>
				  <td class=xl96>&nbsp;</td>
				  <td class=xl100 width=39 style='width:29pt'>&nbsp;</td>
				  <td class=xl79 width=101 style='width:76pt'></td>
				  <td class=xl80></td>
				  <td class=xl80></td>
				  <td class=xl80></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl67 style='height:14.0pt'></td>
				  <td class=xl98 colspan=2 style='mso-ignore:colspan'>WEB-BASED DEVELOPMENT:</td>
				  <td class=xl66></td>
				  <td class=xl66></td>
				  <td class=xl66></td>
				  <td class=xl104 width=39 style='width:29pt'></td>
				  <td class=xl68 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td colspan=2 class=xl117>site</td>
				  <td class=xl109>description</td>
				  <td class=xl109>&nbsp;</td>
				  <td class=xl109>&nbsp;</td>
				  <td class=xl110></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td colspan=2 class=xl115 width=314 style='width:236pt'>Room for
				  Improvement<span style='mso-spacerun:yes'>&nbsp;</span></td>
				  <td colspan=3 class=xl115 width=439 style='border-left:none;width:330pt'>online
				  calculator using AJAX request to estimate energy efficiency measures.<span
				  style='mso-spacerun:yes'>&nbsp;</span></td>
				  <td class=xl108 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td colspan=2 class=xl115 width=314 style='width:236pt'>Personal Website</td>
				  <td colspan=3 class=xl115 width=439 style='border-left:none;width:330pt'>blog
				  style site using Laravel, PHP, and MYSQL to manage information.<span
				  style='mso-spacerun:yes'>&nbsp;</span></td>
				  <td class=xl108 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td colspan=2 class=xl115 width=314 style='width:236pt'>Whackygator</td>
				  <td colspan=3 class=xl115 width=439 style='border-left:none;width:330pt'>online
				  game using Javascript and jQuery.</td>
				  <td class=xl108 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td colspan=2 class=xl115 width=314 style='width:236pt'>Simple Simon</td>
				  <td colspan=3 class=xl115 width=439 style='border-left:none;width:330pt'>online
				  game using Javascript and jQuery.</td>
				  <td class=xl108 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td class=xl101 width=157 style='width:118pt'></td>
				  <td class=xl101 width=157 style='width:118pt'></td>
				  <td class=xl101 width=157 style='width:118pt'></td>
				  <td class=xl101 width=157 style='width:118pt'></td>
				  <td class=xl101 width=125 style='width:94pt'></td>
				  <td class=xl101 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl67 style='height:14.0pt'></td>
				  <td class=xl98 colspan=5 style='mso-ignore:colspan'>BUILDING SYSTEMS DESIGN,
				  COORDINATION, AND PROJECT MANAGEMENT:</td>
				  <td class=xl104 width=39 style='width:29pt'></td>
				  <td class=xl68 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td colspan=2 class=xl117>building</td>
				  <td class=xl109>description</td>
				  <td class=xl109>&nbsp;</td>
				  <td class=xl109>&nbsp;</td>
				  <td class=xl110></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td colspan=2 class=xl115 width=314 style='width:236pt'>AltSchool, Chicago IL</td>
				  <td colspan=3 class=xl115 width=439 style='border-left:none;width:330pt'>12,000sf
				  k-8 charter school, tenant build-out of second level. Under design.<span
				  style='mso-spacerun:yes'>&nbsp;</span></td>
				  <td class=xl108 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=37 style='mso-height-source:userset;height:28.0pt'>
				  <td height=37 class=xl71 style='height:28.0pt'></td>
				  <td colspan=2 class=xl115 width=314 style='width:236pt'>University of Chicago
				  Campus North Residence Hall, Chicago IL</td>
				  <td colspan=3 class=xl115 width=439 style='border-left:none;width:330pt'>389,600sf
				  residence hall with full service dining facility, radiant heating and cooling
				  systems, targeted LEED Gold. Under Construction.</td>
				  <td class=xl108 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=37 style='mso-height-source:userset;height:28.0pt'>
				  <td height=37 class=xl71 style='height:28.0pt'></td>
				  <td colspan=2 class=xl111>PAHC Studio, Chicago IL</td>
				  <td colspan=3 class=xl115 width=439 style='border-left:none;width:330pt'>5,000sf
				  art studio with specialty exhaust and air filtration system, buildout in
				  historic Chicago high-rise, targeted LEED Silver. Completed 2014.<span
				  style='mso-spacerun:yes'>&nbsp;</span></td>
				  <td class=xl108 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=56 style='mso-height-source:userset;height:42.0pt'>
				  <td height=56 class=xl71 style='height:42.0pt'></td>
				  <td class=xl111 style='border-top:none'>WMS Boathouse at <span
				  style='display:none'>Clark Park <br>
				  Chicago IL<br>
				  </span></td>
				  <td class=xl111 style='border-top:none;border-left:none'>&nbsp;</td>
				  <td colspan=3 class=xl115 width=439 style='border-left:none;width:330pt'>22,600sf
				  boat launch and row-tank facility and ground-source heat pumps, ASHRAE IL
				  Chapter Excellence in Engineering Award, targeted LEED Silver. Completed
				  2013.</td>
				  <td class=xl108 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=56 style='mso-height-source:userset;height:42.0pt'>
				  <td height=56 class=xl71 style='height:42.0pt'></td>
				  <td class=xl111 style='border-top:none'>Harmony House for <span
				  style='display:none'>Cats, Chicago IL<span
				  style='mso-spacerun:yes'>&nbsp;</span></span></td>
				  <td class=xl111 style='border-top:none;border-left:none'>&nbsp;</td>
				  <td colspan=3 class=xl115 width=439 style='border-left:none;width:330pt'>7,000sf
				  high-performance cat shelter with solar thermal heating and ground-source
				  heat pumps, ASHRAE IL Chapter Excellence in Engineering award, awarded LEED
				  Platinum. Completed 2011.</td>
				  <td class=xl108 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=37 style='mso-height-source:userset;height:28.0pt'>
				  <td height=37 class=xl71 style='height:28.0pt'></td>
				  <td class=xl111 style='border-top:none'>Environmental Law <span
				  style='display:none'>and <br>
				  Policy Center, Chicago IL</span></td>
				  <td class=xl111 style='border-top:none;border-left:none'>&nbsp;</td>
				  <td colspan=3 class=xl115 width=439 style='border-left:none;width:330pt'>12,000sf
				  Law office renovation in a historic Chicago high-rise, awarded LEED Platinum.
				  Completed 2010.</td>
				  <td class=xl108 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td class=xl92></td>
				  <td class=xl92></td>
				  <td class=xl101 width=157 style='width:118pt'></td>
				  <td class=xl101 width=157 style='width:118pt'></td>
				  <td class=xl101 width=125 style='width:94pt'></td>
				  <td class=xl101 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl67 style='height:14.0pt'></td>
				  <td class=xl98 colspan=2 style='mso-ignore:colspan'>BUILDING SYSTEMS
				  MODELING:</td>
				  <td class=xl67></td>
				  <td class=xl67></td>
				  <td class=xl67></td>
				  <td class=xl105></td>
				  <td class=xl65 width=101 style='width:76pt'></td>
				  <td></td>
				  <td></td>
				  <td></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td class=xl71 colspan=9 style='mso-ignore:colspan'>-Built and proofed over
				  62 building energy models including schools, high-rise apartments,
				  single-family homes, and factories.</td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td class=xl92 colspan=10 style='mso-ignore:colspan'>-Wrote and designed 3
				  post-occupancy energy measurement and verification plans and
				  collected/analyzed energy data for 6 buildings.</td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td class=xl92 colspan=4 style='mso-ignore:colspan'>-Reviewed over 100
				  building energy models submitted for LEED Certification.</td>
				  <td class=xl71></td>
				  <td class=xl72 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl71 style='height:14.0pt'></td>
				  <td class=xl71></td>
				  <td class=xl71></td>
				  <td class=xl72 width=157 style='width:118pt'></td>
				  <td class=xl72 width=157 style='width:118pt'></td>
				  <td class=xl72 width=125 style='width:94pt'></td>
				  <td class=xl81></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl93 style='height:14.0pt'></td>
				  <td class=xl106 colspan=2 style='mso-ignore:colspan'>PRESENTATION/OUTREACH:</td>
				  <td class=xl93></td>
				  <td class=xl93></td>
				  <td class=xl93></td>
				  <td class=xl107></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl93 style='height:14.0pt'></td>
				  <td class=xl92 colspan=8 style='mso-ignore:colspan'>-Presented at over 4
				  professional conferences and guest lectured on energy modeling over 6 times
				  to architecture students.</td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl93 style='height:14.0pt'></td>
				  <td class=xl92 colspan=6 style='mso-ignore:colspan'>-Collaborated with
				  architects and contractors to resolve design questions and address field
				  conditions.</td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=19 style='mso-height-source:userset;height:14.0pt'>
				  <td height=19 class=xl93 style='height:14.0pt'></td>
				  <td class=xl92 colspan=7 style='mso-ignore:colspan'>-Wrote reports and
				  technical design documentation including schematic drawings and system
				  diagrams.</td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				 <tr class=xl74 height=17 style='mso-height-source:userset;height:13.75pt'>
				  <td height=17 class=xl93 style='height:13.75pt'></td>
				  <td class=xl92></td>
				  <td class=xl93></td>
				  <td class=xl93></td>
				  <td class=xl93></td>
				  <td class=xl93></td>
				  <td class=xl94 width=39 style='width:29pt'></td>
				  <td class=xl73 width=101 style='width:76pt'></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				  <td class=xl74></td>
				 </tr>
				</table>
		{{-- 	</div>
			<div class="col-md-2"></div> --}}
		</div>
		
	@section('script')
	<script type="text/javascript" src="js/turn.js"></script>
	<script type="text/javascript">
		"use strict"
			var $tableData = $('td');
			// $tableData.forEach(function(element){
			// 	console.log(element.text());
			// })
		for(var i = 0;i<$tableData.length;i++){

			if (!$tableData[i].innerText) {
				$tableData[i].remove();
			}
		}
		console.log($tableData.length); 
		console.log($tableData[0].innerText); 
		console.log($tableData); 

	</script>

	<div>

@stop