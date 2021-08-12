<?php
$title = "index";
$active =  basename(__FILE__); 

include "header.php";
include "data/privacyData.php";

echo printSection($sectionPrivacy);

include "footer.php"; ?> 