<?php
$title = "index";
$active =  basename(__FILE__); 
include "header.php";
include "data/contattiData.php";

echo printSection($sectionHero);
echo printSection($sectionAbout);
echo printSection($sectionContacts);
include "footer.php"; ?>