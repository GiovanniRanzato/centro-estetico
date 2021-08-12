<?php
$sectionHero =  array(
    "id" => "my-section-hero-about-us",
    "class" => "cs-section-hero",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printHero(
        array(
            "class" => "cs-section-hero-contents cs-z-index-3",
            "title" => array(
                "title" => "Chi siamo",
                "caption" => printLink(["url"=>"index.php","label"=>"home","icon"=>"fas fa-home"]).printIcon("fas fa-chevron-right")."chi siamo",
                "heading" => 1,
                "decoration" => "cs-title-line"
            ),
            "text" => ["Concediti un momento di relax e piacere"],
        )
    )
);

// SECTION ABOUT
$sectionAboutContens = [];
$sectionAboutContens[]= array(
    "layoutFunction" => "printTitle",
    "class" => "cs-card-header",
    "title" => "Scopri di più sul nostro centro",
    "caption" => "chi siamo",
    "heading" => 2,
    "decoration" => "cs-title-line"
);
foreach ($aboutUsArticles as $aboutUsArticle){
    $sectionAboutContens[]= array(
        "class" => "cs-section-about-contents",
        "layoutFunction" => "printMainArticle",
        "title" => array(
            "title" => $aboutUsArticle["title"],
            "heading" => 3,
        ),
        "media" => $aboutUsArticle["media"],
        "text" => $aboutUsArticle["text"],
    );
}

$sectionAbout =  array(
    "id" => "my-section-about-us",
    "class" => "cs-section-about",
    "addContainer" => "container",
    "data" =>  array(
        "class" => "cs-card cs-move-up-4",
        "contents" => $sectionAboutContens
    ),
);

// SECTION BODY CARE TITLE
$sectionReviwsTitle =  array(
    "id" => "my-section-reviews-title",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printTitle(
        array(
            "title" => "<span>Scopri</span> di più sul nostro <span>staff</span>",
            "caption" => "chi siamo",
            "heading" => 2,
            "class" => "cs-section cs-section-slogan"
        )
    )
);
// SECTION REVIEWS
$sectionStaffContents = [];
foreach ($staffMembers as $staff)
    $sectionStaffContents[] = printCard(array(
        "header" => printAvatarCardHeader(
            array(
                "media" => $staff["media"],
                "title" => $staff["title"],
            )
        ),
        "body" => $staff["text"],
        "footer" => "<span><span>",
        "type" => "sm",
    ));
$sectionStaff =  array(
    "id" => "my-section-staff",
    "class" => "cs-section-staff",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printContents(
        array(
            "class" => "cs-section-mini-cards cs-move-down-4",
            "contents" => $sectionStaffContents,
        )
    )
);