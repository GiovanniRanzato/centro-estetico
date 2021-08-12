<?php
$title = "chi siamo";
$active =  basename(__FILE__); 

include "header.php";
include "data/chiSiamoData.php";

// cs-section-waves-up 
echo printSection($sectionHero);
echo printSection($sectionAbout);
echo printSection($sectionReviwsTitle);
echo printSection($sectionStaff);

include "footer.php"; ?>