<?php
$contactsnav = array(
    "title" => array(
        "title" => "Contatti",
        "heading" => 4,
    ),
    "navitems" => [
        array(
            "id" => "navitem_1",
            "link" => array(
                "url" => "mailto:info@spacenter.it",
                "label" => "info@spacenter.it",
                "icon" => "fas fa-envelope"
            )
        ),
        array(
            "id" => "navitem_2",
            "link" => array(
                "url" => "http://maps.google.com/?q=Via roma 10, Abano terme 350001 (PD)",
                "label" => "Via roma 10, Abano terme 350001 (PD)",
                "icon" => "fas fa-map-marker",
                "htmlOptions" => array ("target" => "_balnk"),
            )
        ),
        array(
            "id" => "navitem_3",
            "link" => array(
                "url" => "tel:+39 049 123456789",
                "label" => "+39  049 123456789",
                "icon" => "fas fa-phone"
            ),
        ),
    ]
);
$socialnav = array(
    "class" => "cs-nav cs-social-nav",
    "title" => array(
        "title" => "Social",
        "heading" => 4,
    ),
    "navitems" => [
        array(
            "id" => "social_1",
            "link" => array(
                "url" => "http://www.instagram.it",
                "icon" => "fab fa-instagram",
                "label" => "instagram",
                "htmlOptions" => array ("target" => "_balnk"),
            )
        ),
        array(
            "id" => "social_1",
            "link" => array(
                "url" => "http://www.facebook.it",
                "icon" => "fab fa-facebook-f",
                "label" => "facebook",
                "htmlOptions" => array ("target" => "_balnk"),
            ),
        ),
        array(
            "id" => "social_1",
            "link" => array(
                "url" => "http://www.pinterest.it",
                "icon" => "fab fa-pinterest-p",
                "label" => "pinterest",
                "htmlOptions" => array ("target" => "_balnk"),
            ),
        ),
    ]
);
$mainnav = array(
    "title" => array(
        "title" => "Main",
        "heading" => 4,
    ),
    "navitems" => [
        array(
            "id" => "navitem_1",
            "link" => array(
                "url" => "index.php",
                "label" => "Home",
            )
        ),
        array(
            "id" => "navitem_2",
            "link" => array(
                "url" => "servizi.php",
                "label" => "Servizi",
            )
        ),
        array(
            "id" => "navitem_3",
            "link" => array(
                "url" => "chi-siamo.php",
                "label" => "Chi siamo",
            ),
        ),
        array(
            "id" => "navitem_4",
            "link" => array(
                "url" => "contatti.php",
                "label" => "Contatti",
            ),
        ),
    ]
);
$servicesnav = array(
    "title" => array(
        "title" => "Servizi",
        "heading" => 4,
    ),
    "navitems" => [
        array(
            "id" => "navitem_1",
            "active" => true,
            "link" => array(
                "url" => "servizi.php#my-section-body-care",
                "label" => "Massaggi e cura del corpo",
            )
        ),
        array(
            "id" => "navitem_3",
            "link" => array(
                "url" => "servizi.php#my-section-beauty",
                "label" => "Beauty care",
            ),
        ),
        array(
            "id" => "navitem_4",
            "link" => array(
                "url" => "servizi.php#my-section-relax",
                "label" => "Zona relax",
            ),
        ),
    ]
);