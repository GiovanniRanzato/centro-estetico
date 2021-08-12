<?php
$title = "servizi";
$active =  basename(__FILE__); 
include "header.php";
include "data/serviziData.php";
// cs-section-waves-up 
echo printSection($sectionHero);
echo printSection($sectionSlogan);
echo printSection($sectionBodyCare);
echo printSection($sectionBeauty);
echo printSection($sectionGallery);
echo printSection($sectionRelax);

include "footer.php"; ?>