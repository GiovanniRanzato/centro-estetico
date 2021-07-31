<?php
$title = "index";
include "header.php";
?>
<div style="height:800px; background:#FCCECE"></div>
<?php
echo printSection($sectionAbout);
echo printSection($sectionSlogan);
echo printSection($sectionFeatures);
echo printSection($sectionServices);
echo printSection($sectionReviews);
?>

<?php include "footer.php"; ?>