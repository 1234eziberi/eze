<?php
include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanzania universities</title>
    <link rel="stylesheet" type="text/css" href="uni.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
        <h3 id="university" style="color: white;">The list of all Tanzania higher learning institutions</h3>
        <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Search your university">
         
     <ul id="myMenu">
    <li><a href="">Abdulrahman Al- Sumait University (SUMAIT), Zanzibar</a> </li>
    <li><a href="">Aga Khan University (AKU), Dar es Salaam</a> </li>
    <li><a href="">Archbishop Mihayo University College of Tabora (AMUCTA), Tabora</a></li>  
    <li><a href="">Ardhi University (ARU), Dar es Salaam</a> </li>
    <li><a href="">Arusha Technical College (ATC), Arusha</a></li>
    <li><a href="">Catholic University College of Mbeya (CUCoM), Mbeya</a></li>
    <li><a href="">Catholic University of Health and Allied Sciences (CUHAS), Mwanza</a></li>
    <li><a href="">College of African Wildlife Management (CAWM), Mweka- Kilimanjaro </a></li>
    <li><a href="">College of Business Education (CBE), Dar es Salaam </a></li>
    <li><a href="">College of Business Education (CBE), Dodoma </a></li>
    <li><a href="">College of Business Education (CBE), Mwanza </a></li>
    <li><a href="">Dar es Salaam Institute of Technology (DIT), Dar es Salaam</a></li>
    <li><a href="">Dar es Salaam Maritime Institute (DMI), Dar es Salaam </a></li>
    <li><a href="">Dar es Salaam University College of Education (DUCE), Dar es Salaam </a></li>
    <li><a href="">Eastern Africa Statistical Training Centre (EASTC), Dar es Salaam </a></li>
    <li><a href="">Hubert Kairuki Memorial University (HKMU), Dar es Salaam </a></li>
    <li><a href="">Institute of Accountancy Arusha (IAA), Arusha</a></li> 
    <li><a href="">Institute of Accountancy Arusha (IAA), Dar es Salaam Campus </a></li>
    <li><a href="">Institute of Adult Education (IAE), Dar es Salaam</a></li>
    <li><a href="">Institute of Finance Management (IFM), Dar es Salaam </a></li>
    <li><a href="">Institute of Finance Management (IFM), Dodoma</a></li> 
    <li><a href="">Institute of Finance Management (IFM), Mwanza</a></li> 
    <li><a href="">Institute of Finance Management (IFS), Simiyu</a></li> 
    <li><a href="">Institute of Public Administration (IPA), Zanzibar</a></li>
    <li><a href="">Institute of Rural Development Planning (IRDP), Dodoma</a></li>
    <li><a href="">Institute of Rural Development Planning (IRDP), Mwanza</a></li> 
    <li><a href="">Institute of Social Work (ISW), Dar es Salaam </a></li>
    <li><a href="">Institute of Tax Administration (ITA), Dar es Salaam </a></li>
    <li><a href="">Jordan University College (JUCo), Morogoro </a></li>
    <li><a href="">Kampala International University in Tanzania (KIUT)</a></li>
    <li><a href="">Kilimanjaro Christian Medical University College (KCMUCo), Kilimanjaro</a></li>
    <li><a href="">Kizumbi Institute of Co-operative and Business Education (KICoB), Shinyanga </a></li>
    <li><a href="">Local Government Training Institute (LGTI), Dodoma </a></li>
    <li><a href="">Marian University College (MARUCo), Bagamoyo</a></li>
     <li><a href="">Mbeya University of Science and Technology (MUST), Mbeya</a></li>  
    <li><a href="">Mbeya University of Science and Technology (MUST)– Rukwa Campus College</a></li>
    <li><a href="">Mkwawa University College of Education (MUCE), Iringa</a></li>
    <li><a href="">Moshi Co-operative University (MoCU), Kilimanjaro </a></li>
    <li><a href="">MS Training Centre for Development Cooperation (MS-TCDC), Arusha</a></li> 
    <li><a href="">Muhimbili University of Health and Allied Sciences (MUHAS), Dar es Salaam</a></li>
    <li><a href="">Muslim University of Morogoro (MUM), Morogoro </a></li>
    <li><a href="">Mwalimu Nyerere Memorial Academy (MNMA), Dar es Salaam</a></li> 
    <li><a href="">Mwalimu Nyerere Memorial Academy (MNMA), Zanzibar Campus</a></li>
    <li><a href="">Mwalimu Julius K. Nyerere University of Agriculture and Technology 
        (MJNUAT), Musoma</a></li> 
    <li><a href="">Mwanza University (MzU), Mwanza </a></li>
    <li><a href="">Mwenge Catholic University (MWECAU), Kilimanjaro</a></li>
    <li><a href="">Mzumbe University (MU), Morogoro</a></li> 
    <li><a href="">Mzumbe University Dar es Salaam Campus College (MUDCCo), Dar es Salaam</a></li>
    <li><a href="">National Institute of Transport (NIT), Dar es Salaam  </a></li>
    <li><a href="">Open University of Tanzania (OUT), Dar es Salaam </a></li>
    <li><a href="RUCU.html">Ruaha Catholic University (RUCU), Iringa </a></li>
    <li><a href="">Sokoine University of Agriculture (SUA), Morogoro </a></li>
    <li><a href="">Sokoine University of Agriculture - Mizengo Pinda Campus College (SUA-MPCCo), Katavi</a></li>
    <li><a href="">St. Augustine University of Tanzania (SAUT), Mwanza </a></li>
    <li><a href="">St. Augustine University of Tanzania (SAUT) Arusha Centre, Arusha</a></li>
    <li><a href="">St. Francis University College of Health and Allied Sciences (SFUCHAS), Ifakara </a></li>
    <li><a href="">St. John's University of Tanzania (SJUT), Dodoma</a></li>
     <li><a href="">St. Joseph University College of Health and Allied Sciences (SJCHAS), Dar es Salaam </a></li>
    <li><a href="">St. Joseph University College of Engineering and Technology (SJCET), Dar es Salaam </a></li> 
    <li><a href="">State University of Zanzibar (SUZA), Zanzibar </a></li>
    <li><a href="">Stella Maris Mtwara University College (STEMMUCo), Mtwara</a></li> 
    <li><a href="">Tanzania Institute of Accountancy (TIA), Dar es Salaam </a></li>
    <li><a href="">Tanzania Institute of Accountancy (TIA), Mbeya </a></li>
    <li><a href="">Tanzania Institute of Accountancy (TIA), Mwanza</a></li>
    <li><a href="">Tanzania Institute of Accountancy (TIA), Mtwara</a></li>
    <li><a href="">Tanzania Institute of Accountancy (TIA), Singida</a></li> 
    <li><a href="">Tanzania Public Service College (TPSC), Dar es Salaam</a></li>
    <li><a href="">Tengeru Institute of Community Development (TICD), Arusha</a></li>
    <li><a href="">Teofilo Kisanji University (TEKU), Mbeya  </a></li>
    <li><a href="">Tumaini University Dar es Salaam College (TUDARCo), Dar es Salaam </a></li>
    <li><a href="">Tumaini University Makumira (TUMA), Arusha </a></li>
    <li><a href="">Unique Academy Dar es Salaam (UAD)</a></li> 
    <li><a href="">United African University of Tanzania (UAUT), Dar es Salaam</a></li> 
    <li><a href="">University of Arusha (UoA), Arusha </a></li>
    <li><a href="">University of Dar es Salaam (UDSM), Dar es Salaam </a></li>
    <li><a href="">University of Dodoma (UDOM) ,Dodoma</a></li>
    <li><a href="">University of Iringa (UoI), Iringa</a></li> 
    <li><a href="">Water Institute (WI), Dar es Salaam</a></li>
    <li><a href="paymentform.php">Zanzibar University (ZU), Zanzibar </a></li> 
     
</ul>
    

    <script src="uni.js"></script>

</body>
</html>