<?php
 include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanzania all higher learning institutions</title>
    <link rel="stylesheet" type="text/css" href="uni.css">

</head>

<body>
       <div style="background-color: white;">

       <h3 id="university" style="color: black;">The list of all Tanzania higher learning institutions</h3>
        <input type="text" id="mySearch" onkeyup="myfunction()" placeholder="Search.." title="Search your university">
         
     <ul id="myMenu"  style="background-color: black;">
    <!-- <li><a href="Alsumait.znz.php">Abdulrahman Al- Sumait University (SUMAIT), Zanzibar</a> </li> -->
    <li><a href="Aghakhan.php">Aga Khan University (AKU), Dar es Salaam</a> </li>
    <li><a href="Amucta.TBR.php">Archbishop Mihayo University College of Tabora (AMUCTA), Tabora</a></li>  
    <li><a href="Ardhi.dsm.php">Ardhi University (ARU), Dar es Salaam</a> </li>
    <li><a href="ATC.php">Arusha Technical College (ATC), Arusha</a></li>
    <li><a href="cucom.mbeya.php">Catholic University College of Mbeya (CUCoM), Mbeya</a></li>
    <li><a href="Cuhas.mwanza.php">Catholic University of Health and Allied Sciences (CUHAS), Mwanza</a></li>
    <li><a href="Mweka.moshi.php">College of African Wildlife Management (CAWM), Mweka- Kilimanjaro </a></li>
    <li><a href="cbe.dsm.php">College of Business Education (CBE), Dar es Salaam </a></li>
    <li><a href="cbe.dodoma.php">College of Business Education (CBE), Dodoma </a></li>
    <!-- <li><a href="cbe.mwanza.php">College of Business Education (CBE), Mwanza </a></li> -->
    <li><a href="dit.dsm.php">Dar es Salaam Institute of Technology (DIT), Dar es Salaam</a></li>
    <li><a href="dmi.dsm.php">Dar es Salaam Maritime Institute (DMI), Dar es Salaam </a></li>
    <li><a href="duce.php">Dar es Salaam University College of Education (DUCE), Dar es Salaam </a></li>
    <!-- <li><a href="eastc.php">Eastern Africa Statistical Training Centre (EASTC), Dar es Salaam </a></li> -->
    <li><a href="kairuki.php">Hubert Kairuki Memorial University (HKMU), Dar es Salaam </a></li>
    <li><a href="iaa.arusha.php">Institute of Accountancy Arusha (IAA), Arusha</a></li> 
    <li><a href="iaa.dsm.php">Institute of Accountancy Arusha (IAA), Dar es Salaam Campus </a></li>
    <!-- <li><a href="iae.dsm.php">Institute of Adult Education (IAE), Dar es Salaam</a></li> -->
    <li><a href="ifm.dsm.php">Institute of Finance Management (IFM), Dar es Salaam </a></li>
    <!-- <li><a href="ifm.dodoma.php">Institute of Finance Management (IFM), Dodoma</a></li>  -->
    <!-- <li><a href="ifm.mwanza.php">Institute of Finance Management (IFM), Mwanza</a></li>  -->
    <!-- <li><a href="ifm.simiyu.php">Institute of Finance Management (IFS), Simiyu</a></li>  -->
    <!-- <li><a href="ipa.znz.php">Institute of Public Administration (IPA), Zanzibar</a></li> -->
    <!-- <li><a href="irdp.dodoma.php">Institute of Rural Development Planning (IRDP), Dodoma</a></li> -->
    <!-- <li><a href="irdp.mwanza.php">Institute of Rural Development Planning (IRDP), Mwanza</a></li>  -->
    <li><a href="isw.dsm.php">Institute of Social Work (ISW), Dar es Salaam </a></li>
    <!-- <li><a href="ita.dsm.php">Institute of Tax Administration (ITA), Dar es Salaam </a></li> -->
    <li><a href="jordan.php">Jordan University College (JUCo), Morogoro </a></li>
    <li><a href="kiut.php">Kampala International University in Tanzania (KIUT)</a></li>
    <li><a href="kcmc.php">Kilimanjaro Christian Medical University College (KCMUCo), Kilimanjaro</a></li>
    <!-- <li><a href="kizumbi.shy.php">Kizumbi Institute of Co-operative and Business Education (KICoB), Shinyanga </a></li> -->
    <!-- <li><a href="lgti.dodoma.php">Local Government Training Institute (LGTI), Dodoma </a></li> -->
    <!-- <li><a href="marian.bagamoyo.php">Marian University College (MARUCo), Bagamoyo</a></li> -->
     <li><a href="must.php">Mbeya University of Science and Technology (MUST), Mbeya</a></li>  
    <li><a href="must.rukwa.php">Mbeya University of Science and Technology (MUST)– Rukwa Campus College</a></li>
    <li><a href="mkwawa.php">Mkwawa University College of Education (MUCE), Iringa</a></li>
    <li><a href="mocu.php">Moshi Co-operative University (MoCU), Kilimanjaro </a></li>
    <!-- <li><a href="ms-tcdc.php">MS Training Centre for Development Cooperation (MS-TCDC), Arusha</a></li>  -->
    <!-- <li><a href="muhas.php">Muhimbili University of Health and Allied Sciences (MUHAS), Dar es Salaam</a></li> -->
    <li><a href="mum.php">Muslim University of Morogoro (MUM), Morogoro </a></li>
    <li><a href="nyerere.php">Mwalimu Nyerere Memorial Academy (MNMA), Dar es Salaam</a></li> 
    <!-- <li><a href="nyerere.znz.php">Mwalimu Nyerere Memorial Academy (MNMA), Zanzibar Campus</a></li> -->
    <!-- <li><a href="nyerere.musoma.php">Mwalimu Julius K. Nyerere University of Agriculture and Technology  -->
        <!-- (MJNUAT), Musoma</a></li>  -->
    <li><a href="mzu.mwanza.php">Mwanza University (MzU), Mwanza </a></li>
    <li><a href="mwenge.php">Mwenge Catholic University (MWECAU), Kilimanjaro</a></li>
    <li><a href="mzumbe.moro.php">Mzumbe University (MU), Morogoro</a></li> 
    <li><a href="mzumbe.dsm.php">Mzumbe University Dar es Salaam Campus College (MUDCCo), Dar es Salaam</a></li>
    <li><a href="nit.dsm.php">National Institute of Transport (NIT), Dar es Salaam  </a></li>
    <!-- <li><a href="out.dsm.php">Open University of Tanzania (OUT), Dar es Salaam </a></li> -->
    <li><a href="RUCU.php">Ruaha Catholic University (RUCU), Iringa </a></li>
    <li><a href="sua.moro.php">Sokoine University of Agriculture (SUA), Morogoro </a></li>
    <!-- <li><a href="sua.katavi.php">Sokoine University of Agriculture - Mizengo Pinda Campus College (SUA-MPCCo), Katavi</a></li> -->
    <li><a href="saut.mwanza.php">St. Augustine University of Tanzania (SAUT), Mwanza </a></li>
    <li><a href="saut.arusha.php">St. Augustine University of Tanzania (SAUT) Arusha Centre, Arusha</a></li>
    <li><a href="st.francis.php">St. Francis University College of Health and Allied Sciences (SFUCHAS), Ifakara </a></li>
    <li><a href="st.john.php">St. John's University of Tanzania (SJUT), Dodoma</a></li>
     <li><a href="st.josephafya.php">St. Joseph University College of Health and Allied Sciences (SJCHAS), Dar es Salaam </a></li>
    <li><a href="st.josepheng.php">St. Joseph University College of Engineering and Technology (SJCET), Dar es Salaam </a></li> 
    <li><a href="suza.php">State University of Zanzibar (SUZA), Zanzibar </a></li>
    <!-- <li><a href="stella.php">Stella Maris Mtwara University College (STEMMUCo), Mtwara</a></li>  -->
    <li><a href="tia.dsm.php">Tanzania Institute of Accountancy (TIA), Dar es Salaam </a></li>
    <li><a href="tia.mbeya.php">Tanzania Institute of Accountancy (TIA), Mbeya </a></li>
    <!-- <li><a href="tia.mwanza.php">Tanzania Institute of Accountancy (TIA), Mwanza</a></li> -->
    <li><a href="tia.mtwara.php">Tanzania Institute of Accountancy (TIA), Mtwara</a></li>
    <!-- <li><a href="tia.singida.php">Tanzania Institute of Accountancy (TIA), Singida</a></li>  -->
    <!-- <li><a href="tpsc.dsm.php">Tanzania Public Service College (TPSC), Dar es Salaam</a></li> -->
    <!-- <li><a href="ticd.arusha.php">Tengeru Institute of Community Development (TICD), Arusha</a></li> -->
    <li><a href="teku.mbeya.php">Teofilo Kisanji University (TEKU), Mbeya  </a></li>
    <!-- <li><a href="tudarco.php">Tumaini University Dar es Salaam College (TUDARCo), Dar es Salaam </a></li> -->
    <!-- <li><a href="tumain.makumira.php">Tumaini University Makumira (TUMA), Arusha </a></li> -->
    <li><a href="unique.dsm.php">Unique Academy Dar es Salaam (UAD)</a></li> 
    <li><a href="uaut.dsm.php">United African University of Tanzania (UAUT), Dar es Salaam</a></li> 
    <li><a href="uoa.arusha.php">University of Arusha (UoA), Arusha </a></li>
    <li><a href="udsm.php">University of Dar es Salaam (UDSM), Dar es Salaam </a></li>
    <li><a href="udom.php">University of Dodoma (UDOM), Dodoma</a></li>
    <li><a href="uoi.iringa.php">University of Iringa (UoI), Iringa</a></li> 
    <li><a href="waterinstitute.php">Water Institute (WI), Dar es Salaam</a></li>
    <!-- <li><a href="zu.php">Zanzibar University (ZU), Zanzibar </a></li>  -->
     
    </ul>

    
       </div>


    <script src="uni.js"></script>
</body>
</html>