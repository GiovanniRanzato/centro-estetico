<?php
$title = "index";
include "header.php";
?>
<section id="my-section-hero" style="height:800px; background:#FCCECE">
    <div>
        <h1>CSPA</h1>
        <p>Lorem ipsum</p>
    </div>

</section>
<?php
echo printSection($sectionAbout);
echo printSection($sectionSlogan);
echo printSection($sectionFeatures);
echo printSection($sectionServices);
echo printSection($sectionReviews);
echo printSection($sectionGallery);

?>

<?php include "footer.php"; ?>