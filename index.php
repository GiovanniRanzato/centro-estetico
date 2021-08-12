<?php
$title = "index";
$active =  basename(__FILE__); 
include "header.php";
include "data/indexData.php";

echo printSection($sectionHero);
echo printSection($sectionAbout);
echo printSection($sectionSlogan);
echo printSection($sectionFeatures);
echo printSection($sectionServices);
echo printSection($sectionReviews);
echo printSection($sectionGallery);
echo printSection($sectionContacts);
include "footer.php"; ?>