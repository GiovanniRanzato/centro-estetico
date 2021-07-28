<?php
$title = "index";
include "header.php";
include "./data/data.php";
?>

<body id="my-body">
<div style="height:200px; background:#FCCECE"></div>
<?php
echo printSection($mainNav);

echo printSection($sectionAbout);
echo printSection($sectionSlogan);
echo printSection($sectionFeatures);
echo printSection($sectionServices);
echo printSection($sectionReviews);
?>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>