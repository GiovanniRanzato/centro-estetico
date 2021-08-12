
<?php 
// FOOTER - TOP BAR
$formNewsletter = [
    array(
        "type" => "email",
        "name" => "email",
        "label" => "Email",
        "placeholder" => "severus@piton.com",
        "value" => "",
        "required" => true,
    ),
    array(
        "type" => "submit-btn",
        "label" => printIcon("fas fa-paper-plane"),
        "form" => "newsletter",
        "required" => true,
    ),
];
$footer = array(
    "id" => "my-footer",
    "class" => "cs-section-footer",
    "sectionTag" => "footer",
    "dataType" => "html",
    "data" =>  printFooter(
        array(
            "class" => "cs-footer-contents",
            "logo" => $mediaLogo,
            "nav1" => $contactsnav,
            "nav2" => $socialnav,
            "nav3" => $servicesnav,
            "form" => array(
                "method" => "POST",
                "name" => "newsletter",
                "class" => "cs-form-one-line",
                "title" => array(
                    "title" => "Newsletter",
                    "heading" => 4,
                ),
                "action" => "inviaEmailContaato.php",
                "formFields" => $formNewsletter,
            ),
            "privacyLink" => array(
                "url" => "#",
                "label" => "privacy policy",
            ),
            "cookieLink" => array(
                "url" => "#",
                "label" => "cookie policy",
            ),
            "copyright" => "Copyright 2021"
        )
    )
);

echo printSection($footer); 

?>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/app.js"></script>
<!-- owl carusel -->
<script src="js/owl.carousel.min.js"></script>
<!-- fancyapps -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>
</html>