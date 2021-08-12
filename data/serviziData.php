<?php
$sectionHero =  array(
    "id" => "my-section-hero-servizi",
    "class" => "cs-section-hero",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printHero(
        array(
            "class" => "cs-section-hero-contents cs-z-index-3",
            "title" => array(
                "title" => "I nostri servizi",
                "caption" => printLink(["url"=>"index.php","label"=>"home","icon"=>"fas fa-home"]).printIcon("fas fa-chevron-right")."Servizi",
                "heading" => 1,
                "decoration" => "cs-title-line"
            ),
            "text" => ["Concediti un momento di relax e piacere"],
        )
    )
);
// SECTION BODY CARE TITLE
$sectionSlogan =  array(
    "id" => "my-section-body-care-title",
    "class" => "cs-p-b-4",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printTitle(
        array(
            "title" => "<span>Massaggi</span> e <span>cura</span> del corpo",
            "caption" => "spa center",
            "heading" => 2,
            "class" => "cs-section cs-section-slogan"
        )
    )
);

// SECTION BODY CARE 
$sectionBodyCare =  array(
    "id" => "my-section-body-care",
    "class" => "cs-section-services cs-bg-withe cs-section-waves-bottom",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printContents (
        array(
            "cs-section-services-contents",
            "contents" => [
                array(
                    "class" => "cs-card cs-move-up-4",
                    "layoutFunction" => "printMainArticle",
                    "title" => array(
                        "title" => $servicesBodyCare[0]["title"],
                        "caption" => "servizi",
                        "heading" => 3,
                        "decoration" => "cs-title-line"
                    ),
                    "media" => $servicesBodyCare[0]["media"],
                    "text" => $servicesBodyCare[0]["text"],
                    "action" => $servicesBodyCare[0]["action"]
                ),
                array(
                    "class" => "cs-card",
                    "layoutFunction" => "printMainArticle",
                    "title" => array(
                        "title" => $servicesBodyCare[1]["title"],
                        "caption" => "servizi",
                        "heading" => 3,
                        "decoration" => "cs-title-line"
                    ),
                    "media" => $servicesBodyCare[1]["media"],
                    "text" => $servicesBodyCare[1]["text"],
                    "action" => $servicesBodyCare[1]["action"]
                ),
            ]
        )
    )
);

// SECTION BEAUTY
$sectionBeautyContents = [];
$sectionBeautyContents[]= array(
    "layoutFunction" => "printTitle",
    "class" => "cs-card-header",
    "title" => "Makeover & Beauty",
    "caption" => "services",
    "heading" => 2,
    "decoration" => "cs-title-line"
);
foreach ($servicesBeautyCare as $serviceBeautyCare){
    $sectionBeautyContents[]= array(
        "class" => "cs-section-services-contents",
        "layoutFunction" => "printMainArticle",
        "title" => array(
            "title" => $serviceBeautyCare["title"],
            "heading" => 3,
        ),
        "media" => $serviceBeautyCare["media"],
        "text" => $serviceBeautyCare["text"],
        "action" => $serviceBeautyCare["action"]
    );
}

$sectionBeauty =  array(
    "id" => "my-section-beauty",
    "class" => "cs-section-beauty-care cs-section-waves-bottom cs-section-waves-up",
    "addContainer" => "container",
    "data" =>  array(
        "class" => "cs-card cs-move-up-4",
        "contents" => $sectionBeautyContents
    ),
);

// SECTION RELAX
$sectionRelaxContents = [];
$sectionRelaxContents[]= array(
    "layoutFunction" => "printTitle",
    "class" => "cs-card-header",
    "title" => "Zona Relax",
    "caption" => "services",
    "heading" => 2,
    "decoration" => "cs-title-line"
);
foreach ($servicesRelax as $serviceRelax){
    $sectionRelaxContents[]= array(
        "class" => "cs-section-services-contents",
        "layoutFunction" => "printMainArticle",
        "title" => array(
            "title" => $serviceRelax["title"],
            "heading" => 3,
        ),
        "media" => $serviceRelax["media"],
        "text" => $serviceRelax["text"],
        "action" => $serviceRelax["action"]
    );
}
$sectionRelax =  array(
    "id" => "my-section-relax",
    "class" => "cs-section-relax cs-section-waves-up",
    "addContainer" => "container",
    "data" =>  array(
        "class" => "cs-card cs-move-down-4",
        "contents" => $sectionRelaxContents
    ),
);