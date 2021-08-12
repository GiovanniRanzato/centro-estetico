<?php
// SECTION HERO
$sectionHero =  array(
    "id" => "my-section-hero-contacts",
    "class" => "cs-section-hero",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printHero(
        array(
            "class" => "cs-section-hero-contents",
            "title" => array(
                "title" => "Contatti",
                "caption" => printLink(["url"=>"index.php","label"=>"home","icon"=>"fas fa-home"]).printIcon("fas fa-chevron-right")."contatti",
                "heading" => 1,
                "decoration" => "cs-title-line"
            ),
            "text" => ["Concediti un momento di relax e piacere"],
        )
    )
);
// SECTION ABOUT
$sectionAbout =  array(
    "id" => "my-section-contacts",
    "class" => "cs-section-about",
    "addContainer" => "container",
    "data" =>  array(
        "class" => "cs-card cs-move-up-4",
        "contents" => [
            array(
                "class" => "cs-section-about-contents cs-text-left",
                "layoutFunction" => "printMainArticle",
                "title" => array(
                    "title" => "Vieni a trovarci",
                    "caption" => "contatti",
                    "heading" => 2,
                    "decoration" => "cs-title-line"
                ),
                "media" => array ("type"=>"iframe", "iframe" => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2804.8123317906175!2d11.78202711555303!3d45.33241197909964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477ede8abf53b653%3A0xb80abd533de446e9!2sEsplanade%20Tergesteo%20-%20Luxury%20Retreat!5e0!3m2!1sit!2sit!4v1628800586589!5m2!1sit!2sit" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>'),
                "text" => [
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium.",
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur adipisicing elit.",
                ],
                "action" => array(
                    "url" => "http://maps.google.com/?q=Via roma 10, Abano terme 350001 (PD)",
                    "label" => "indicazioni",
                    "icon" => "fas fa-map-marker-alt",
                    "htmlOptions" => array ("target" => "_balnk"),
                )
            )
        ]
    ),
);