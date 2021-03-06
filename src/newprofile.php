<!DOCTYPE html>
<html>
<head>
	<title>Create New Profile</title>
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
<?php include "navbar.php" ?>
<h1>Create Account</h1>
<form onsubmit="submitForm()" method="POST" action="registration_status.php">
	<label for="netid">Net ID: </label>
	<input type="text" step="1" id="netid" name="netid" size="20" maxlength="15"><br>
	<label for="fname">First Name: </label>
	<input type="text" id="fname" name="fname" size="20" maxlength="50"><br>
	<label for="lname">Last Name: </label>
	<input type="text" id="lname" name="lname" size="20" maxlength="50"><br>
	<label for="email">Email: </label>
	<input type="text" id="email" name="email" size="20" maxlength="70"><br>
	<label for="classyear">Class Year: </label>
	<input type="number" step="1" id="classyear" name="classyear" size="20" maxlength="4"><br>
	<label for="outfit">Outfit: </label>
	<select id="outfit" name="outfit">
		<option value="Corps Staff" selected>Corps Staff</option>
		<option value="First Wing Staff">First Wing Staff</option>
		<option value="SQ-3">SQ-3</option>
		<option value="SQ-4">SQ-4</option>
		<option value="SQ-8">SQ-8</option>
		<option value="SQ-11">SQ-11</option>
		<option value="SQ-17">SQ-17</option>
	</select><br>
	<label for="careerpath">Career Path: </label>
	<input type="text" id="careerpath" name="careerpath" size="20" maxlength="50"><br>
	
	<label for="major">Major: </label>
	<select id="major" name="major">
		<option value="Accounting, ACCT" selected>Accounting, ACCT</option>
		<option value="Aerospace Engineering, AERO">Aerospace Engineering, AERO</option>
		<option value="Agribusiness, AGBU">Agribusiness, AGBU</option>
		<option value="Agricultural Communications & Journalism, AGCJ">Agricultural Communications & Journalism, AGCJ</option>
		<option value="Agricultural Economics, AGEC">Agricultural Economics, AGEC</option>
		<option value="Agricultural Leadership & Development, ALED">Agricultural Leadership & Development, ALED</option>
		<option value="Agricultural Science, AGSC">Agricultural Science, AGSC</option>
		<option value="Agricultural Systems Management, AGSM">Agricultural Systems Management, AGSM</option>
		<option value="Animal Science, ANSC">Animal Science, ANSC</option>
		<option value="Anthropology, ANTH">Anthropology, ANTH</option>
		<option value="Applied Mathematical Sciences, APMS">Applied Mathematical Sciences, APMS</option>
		<option value="Architectural Engineering, AREN">Architectural Engineering, AREN</option>
		<option value="Biochemistry, BICH">Biochemistry, BICH</option>
		<option value="Bioenvironmental Sciences, BESC">Bioenvironmental Sciences, BESC</option>
		<option value="Biological & Agricultural Engineering, BAEN">Biological & Agricultural Engineering, BAEN</option>
		<option value="Biology, BIOL">Biology, BIOL</option>
		<option value="Biomedical Engineering, BMEN">Biomedical Engineering, BMEN</option>
		<option value="Biomedical Sciences, BIMS">Biomedical Sciences, BIMS</option>
		<option value="Business Honors, BUSN">Business Honors, BUSN</option>
		<option value="Chemical Engineering, CHEN">Chemical Engineering, CHEN</option>
		<option value="Chemistry, CHEM">Chemistry, CHEM</option>
		<option value="Civil Engineering, CVEN">Civil Engineering, CVEN</option>
		<option value="Classics, CLSS">Classics, CLSS</option>
		<option value="Coastal Environmental Science and Society, OCRE">Coastal Environmental Science and Society, OCRE</option>
		<option value="Communication, COMM">Communication, COMM</option>
		<option value="Community Health, CHLT">Community Health, CHLT</option>
		<option value="Computer Engineering, CECN/CEEN">Computer Engineering, CECN/CEEN</option>
		<option value="Computer Science, CPSC">Computer Science, CPSC</option>
		<option value="Computing, COMP">Computing, COMP</option>
		<option value="Construction Science, COSC">Construction Science, COSC</option>
		<option value="Ecological Restoration, ECOR">Ecological Restoration, ECOR</option>
		<option value="Economics, ECON">Economics, ECON</option>
		<option value="Electrical Engineering, ELEN">Electrical Engineering, ELEN</option>
		<option value="Electronic Systems Engineering Technology, ESET">Electronic Systems Engineering Technology, ESET</option>
		<option value="English, ENGL">English, ENGL</option>
		<option value="Entomology, ENTO">Entomology, ENTO</option>
		<option value="Environmental Design, EDAS">Environmental Design, EDAS</option>
		<option value="Environmental Engineering, EVEN">Environmental Engineering, EVEN</option>
		<option value="Environmental Geosciences, ENGS">Environmental Geosciences, ENGS</option>
		<option value="Environmental Studies (COALS), ENST-AG">Environmental Studies (COALS), ENST-AG</option>
		<option value="Environmental Studies (Geosciences), ENST-GEO">Environmental Studies (Geosciences), ENST-GEO</option>
		<option value="Finance, FINC">Finance, FINC</option>
		<option value="Food Science & Technology, FSTC">Food Science & Technology, FSTC</option>
		<option value="Food Systems Industry Management, FSIM">Food Systems Industry Management, FSIM</option>
		<option value="Forensic & Investigative Sciences, FIVS">Forensic & Investigative Sciences, FIVS</option>
		<option value="Forestry, FORS">Forestry, FORS</option>
		<option value="General Studies, GEST">General Studies, GEST</option>
		<option value="Genetics, GENE">Genetics, GENE</option>
		<option value="Geographic Information Science & Technology, GIST">Geographic Information Science & Technology, GIST</option>
		<option value="Geography, GEOG">Geography, GEOG</option>
		<option value="Geology, GEOL">Geology, GEOL</option>
		<option value="Geophysics, GEOP">Geophysics, GEOP</option>
		<option value="Health, HLTH">Health, HLTH</option>
		<option value="History, HIST">History, HIST</option>
		<option value="Horticulture, HORT">Horticulture, HORT</option>
		<option value="Human Resource Development, HRDV">Human Resource Development, HRDV</option>
		<option value="Industrial Distribution, IDIS">Industrial Distribution, IDIS</option>
		<option value="Industrial Engineering, INEN">Industrial Engineering, INEN</option>
		<option value="Interdisciplinary Engineering, ITDE">Interdisciplinary Engineering, ITDE</option>
		<option value="Interdisciplinary Studies - Bilingual Education, BIED">Interdisciplinary Studies - Bilingual Education, BIED</option>
		<option value="Interdisciplinary Studies - Language Arts/Social Studies Middle Grades Certification, INST">Interdisciplinary Studies - Language Arts/Social Studies Middle Grades Certification, INST</option>
		<option value="Interdisciplinary Studies - Math/Science Middle Grades Certification , INST">Interdisciplinary Studies - Math/Science Middle Grades Certification , INST</option>
		<option value="Interdisciplinary Studies - PreK-6 Generalist Certification, INST">Interdisciplinary Studies - PreK-6 Generalist Certification, INST</option>
		<option value="Interdisciplinary Studies - Special Education, SPED">Interdisciplinary Studies - Special Education, SPED</option>
		<option value="International Studies, INTS">International Studies, INTS</option>
		<option value="Kinesiology - Dance Science, KINE">Kinesiology - Dance Science, KINE</option>
		<option value="Kinesiology - Exercise & Sport Science, KINE">Kinesiology - Exercise & Sport Science, KINE</option>
		<option value="Kinesiology - Exercise Science, KINE">Kinesiology - Exercise Science, KINE</option>
		<option value="Landscape Architecture, LAND">Landscape Architecture, LAND</option>
		<option value="Management, MGMT">Management, MGMT</option>
		<option value="Management Information Systems, MISY">Management Information Systems, MISY</option>
		<option value="Manufacturing & Mechanical Engineering Technology, MMET">Manufacturing & Mechanical Engineering Technology, MMET</option>
		<option value="Marine Biology, MARB">Marine Biology, MARB</option>
		<option value="Marine Engineering Technology, MARE">Marine Engineering Technology, MARE</option>
		<option value="Marine Fisheries, MARF">Marine Fisheries, MARF</option>
		<option value="Marine Sciences, MARS">Marine Sciences, MARS</option>
		<option value="Marine Transportation, MART">Marine Transportation, MART</option>
		<option value="Maritime Business Administration, MARA">Maritime Business Administration, MARA</option>
		<option value="Maritime Studies, MAST">Maritime Studies, MAST</option>
		<option value="Marketing, MKTG">Marketing, MKTG</option>
		<option value="Materials Science and Engineering, MSEN">Materials Science and Engineering, MSEN</option>
		<option value="Mathematics, MATH">Mathematics, MATH</option>
		<option value="Mechanical Engineering, MEEN">Mechanical Engineering, MEEN</option>
		<option value="Meteorology, METR">Meteorology, METR</option>
		<option value="Microbiology, MBIO">Microbiology, MBIO</option>
		<option value="Modern Languages (French, German, or Russian), MODL">Modern Languages (French, German, or Russian), MODL</option>
		<option value="Molecular and Cell Biology, BMCB">Molecular and Cell Biology, BMCB</option>
		<option value="Multidisciplinary Engineering Technology, MXET">Multidisciplinary Engineering Technology, MXET</option>
		<option value="Neuroscience - Behavioral and Cognitive Track, NRSC-BCN">Neuroscience - Behavioral and Cognitive Track, NRSC-BCN</option>
		<option value="Neuroscience - Molecular and Cellular Track, NRSC-MCB">Neuroscience - Molecular and Cellular Track, NRSC-MCB</option>
		<option value="Neuroscience - Translational and Preclinical Track, NRSC-TPC">Neuroscience - Translational and Preclinical Track, NRSC-TPC</option>
		<option value="Nuclear Engineering, NUEN">Nuclear Engineering, NUEN</option>
		<option value="Nursing, NURS">Nursing, NURS</option>
		<option value="Nutritional Sciences, NUSC">Nutritional Sciences, NUSC</option>
		<option value="Ocean Engineering, OCEN">Ocean Engineering, OCEN</option>
		<option value="Oceanography, OCNG">Oceanography, OCNG</option>
		<option value="Performance Studies, PERF">Performance Studies, PERF</option>
		<option value="Petroleum Engineering, PETE">Petroleum Engineering, PETE</option>
		<option value="Philosophy, PHIL">Philosophy, PHIL</option>
		<option value="Physics, PHYS">Physics, PHYS</option>
		<option value="Plant & Environmental Soil Science, PSSC">Plant & Environmental Soil Science, PSSC</option>
		<option value="Political Science, POLS">Political Science, POLS</option>
		<option value="Poultry Science, POSC">Poultry Science, POSC</option>
		<option value="Psychology, PSYC">Psychology, PSYC</option>
		<option value="Public Health, PHLT">Public Health, PHLT</option>
		<option value="Rangeland Ecology & Management, RLEM">Rangeland Ecology & Management, RLEM</option>
		<option value="Recreation Park & Tourism Sciences, RPTS">Recreation Park & Tourism Sciences, RPTS</option>
		<option value="Renewable Natural Resources, RENR">Renewable Natural Resources, RENR</option>
		<option value="Sociology, SOCI">Sociology, SOCI</option>
		<option value="Spanish, SPAN">Spanish, SPAN</option>
		<option value="Spatial Sciences, SPSA">Spatial Sciences, SPSA</option>
		<option value="Sport Management, SPMT">Sport Management, SPMT</option>
		<option value="Statistics, STAT">Statistics, STAT</option>
		<option value="Supply Chain Management, SCMT">Supply Chain Management, SCMT</option>
		<option value="Technology Management, TCMG">Technology Management, TCMG</option>
		<option value="Telecommunication Media Studies, TCMS">Telecommunication Media Studies, TCMS</option>
		<option value="Turfgrass Science, TGSC">Turfgrass Science, TGSC</option>
		<option value="University Studies - Arts and Sciences, USSC">University Studies - Arts and Sciences, USSC</option>
		<option value="University Studies - Bioinformatics, USSC">University Studies - Bioinformatics, USSC</option>
		<option value="University Studies - Biomedical Sciences, USVM">University Studies - Biomedical Sciences, USVM</option>
		<option value="University Studies - Business, USBU">University Studies - Business, USBU</option>
		<option value="University Studies - Child Professional Services, USEH">University Studies - Child Professional Services, USEH</option>
		<option value="University Studies - Dance, USEH">University Studies - Dance, USEH</option>
		<option value="University Studies - Environmental Business, USAL ENBS">University Studies - Environmental Business, USAL ENBS</option>
		<option value="University Studies - Geographic Information Sciences & Technology, USGE GIST">University Studies - Geographic Information Sciences & Technology, USGE GIST</option>
		<option value="University Studies - Geography, USGE GEOG">University Studies - Geography, USGE GEOG</option>
		<option value="University Studies - Global Arts, Planning, Design & Construction, USAR">University Studies - Global Arts, Planning, Design & Construction, USAR</option>
		<option value="University Studies - Health Humanities, USLA">University Studies - Health Humanities, USLA</option>
		<option value="University Studies - Journalism Studies, USLA">University Studies - Journalism Studies, USLA</option>
		<option value="University Studies - Leadership Studies, USAL LEAD">University Studies - Leadership Studies, USAL LEAD</option>
		<option value="University Studies - Liberal Arts, USLA">University Studies - Liberal Arts, USLA</option>
		<option value="University Studies - Marine Environmental Law & Policy, MELP">University Studies - Marine Environmental Law & Policy, MELP</option>
		<option value="University Studies - Mathematics for Business, USSC">University Studies - Mathematics for Business, USSC</option>
		<option value="University Studies - Mathematics for Pre-Professionals, USSC">University Studies - Mathematics for Pre-Professionals, USSC</option>
		<option value="University Studies - Mathematics for Secondary Teaching, USSC">University Studies - Mathematics for Secondary Teaching, USSC</option>
		<option value="University Studies - Oceans & One Health, OOH">University Studies - Oceans & One Health, OOH</option>
		<option value="University Studies - Race, Gender, & Ethnicity, USLA">University Studies - Race, Gender, & Ethnicity, USLA</option>
		<option value="University Studies - Religious Thought, Practices & Cultures, USLA">University Studies - Religious Thought, Practices & Cultures, USLA</option>
		<option value="University Studies - Science for Secondary Teaching, USGE">University Studies - Science for Secondary Teaching, USGE</option>
		<option value="University Studies - Society, Ethics, & Law, USLA">University Studies - Society, Ethics, & Law, USLA</option>
		<option value="University Studies - Tourism & Coastal Community Development, TCCD">University Studies - Tourism & Coastal Community Development, TCCD</option>
		<option value="Urban & Regional Planning, URPN">Urban & Regional Planning, URPN</option>
		<option value="Visualization, VIST">Visualization, VIST</option>
		<option value="Wildlife & Fisheries Sciences, WFSC">Wildlife & Fisheries Sciences, WFSC</option>
		<option value="Women's & Gender Studies, WGST">Women's & Gender Studies, WGST</option>
		<option value="Zoology, ZOOL">Zoology, ZOOL</option>
		<option value="Other">Other</option>
	</select><br>
	
	<label for="college">College: </label>
	<select id="college" name="college">
		<option value="Bush School of Government and Public Service" selected>Bush School of Government and Public Service</option>
		<option value="College of Agriculture and Life Sciences">College of Agriculture and Life Sciences</option>
		<option value="College of Architecture">College of Architecture</option>
		<option value="College of Dentistry">College of Dentistry</option>
		<option value="College of Education and Human Development">College of Education and Human Development</option>
		<option value="College of Engineering">College of Engineering</option>
		<option value="College of Liberal Arts">College of Liberal Arts</option>
		<option value="College of Medicine">College of Medicine</option>
		<option value="College of Nursing">College of Nursing</option>
		<option value="College of Science">College of Science</option>
		<option value="College of Veterinary Medicine and Biomedical Sciences">College of Veterinary Medicine and Biomedical Sciences</option>
		<option value="Irma Lerma Rangel College of Pharmacology">Irma Lerma Rangel College of Pharmacology</option>
		<option value="Mays Business School">Mays Business School</option>
		<option value="School of Public Health">School of Public Health</option>
		<option value="The School of Law">The School of Law</option>
		<option value="Other">Other</option>
	</select><br>
	
	<label for="rotc">ROTC: </label>
	<select id="rotc" name="rotc">
		<option value="airspace" selected>Air/Space Force</option>
		<option value="army">Army</option>
		<option value="navy">Navy/Marine</option>
		<option value="dc">Drill and Ceremony</option>
	</select><br>
	
	<input type="submit" value="Register">
	
</form>

</body>
</html>