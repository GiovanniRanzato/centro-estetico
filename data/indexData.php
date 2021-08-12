<?php 
// SECTION HERO
$sectionHero =  array(
    "id" => "my-section-hero-index",
    "class" => "cs-section-hero",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printHero(
        array(
            "class" => "cs-section-hero-contents",
            "title" => array(
                "title" => "Centro benessere",
                "caption" => "spa center",
                "heading" => 1,
                "decoration" => "cs-title-line"
            ),
            "text" => ["Concediti un momento di relax e piacere"],
            "cta1" => array(
                "class" => "cs-btn cs-btn-primary",
                "label" => "prenota",
                "url" => "contatti.php#"
            ),
            "cta2" => array(
                "label" => "regala",
                "url" => "contatti.php"
            ),
        )
    )
);
// SECTION ABOUT
$sectionAbout =  array(
    "id" => "my-section-about",
    "class" => "cs-section-about",
    "addContainer" => "container",
    "data" =>  array(
        "class" => "cs-card cs-move-up-4",
        "contents" => [
            array(
                "class" => "cs-section-about-contents",
                "layoutFunction" => "printMainArticle",
                "title" => array(
                    "title" => "Spa center",
                    "caption" => "about",
                    "heading" => 2,
                    "decoration" => "cs-title-line"
                ),
                "media" => $media["about"],
                "text" => [
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
                ],
                "action" => array(
                    "url" => "chi-siamo.php",
                    "label" => "scopri di più ...",
                )
            )
        ]
    ),
);
// SECTION SLOGAN
$sectionSlogan =  array(
    "id" => "my-section-slogan",
    "class" => "cs-z-index-3",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printTitle(
        array(
            "title" => "Ci stanno a <span>cuore</span> la tua <span>salute</span> la tua <span>bellezza</span> e il tuo <span>benessere</span>",
            "caption" => "spa center",
            "heading" => 2,
            "class" => "cs-section cs-section-slogan cs-heart"
        )
    )
);
// SECTION FEATURES
$sectionFeatures =  array(
    "id" => "my-section-features",
    "class" => "cs-section-features",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printFeatures(
        array(
            "class" => "cs-section-features-contents",
            "features" => [
                array(
                    "title" => "welness",
                    "icon" => "fas fa-hand-holding-heart",
                ),
                array(
                    "title" => "beauty",
                    "icon" => "fas fa-palette",
                ),
                array(
                    "title" => "comfort",
                    "icon" => "fas fa-couch",
                ),
            ]
        )
    )
);
// SECTION SERVICES
$sectionServicesContens = [];
$sectionServicesContens[]= array(
    "layoutFunction" => "printTitle",
    "class" => "cs-card-header",
    "title" => "Scopri i nostri servizi",
    "caption" => "services",
    "heading" => 2,
    "decoration" => "cs-title-line"
);
foreach ($servicesSummary as $serviceSummary){
    $sectionServicesContens[]= array(
        "class" => "cs-section-services-contents",
        "layoutFunction" => "printMainArticle",
        "title" => array(
            "title" => $serviceSummary["title"],
            "heading" => 3,
        ),
        "media" => $serviceSummary["media"],
        "text" => $serviceSummary["text"],
        "action" => $serviceSummary["action"]
    );
}

$sectionServices =  array(
    "id" => "my-section-services",
    "class" => "cs-section-services cs-section-waves-bottom cs-section-waves-up",
    "addContainer" => "container",
    "data" =>  array(
        "class" => "cs-card cs-move-up-4",
        "contents" => $sectionServicesContens
    ),
);

// SECTION REVIEWS
$sectionReviewsContents = [];
foreach ($articlesReviews as $review)
    $sectionReviewsContents[] = printCard(array(
        "header" => printAvatarCardHeader(
            array(
                "media" => $review["media"],
                "title" => $review["title"],
            )
        ),
        "body" => $review["text"],
        "footer" => printStars($review["score"],),
        "type" => "sm",
    ));
$sectionReviews =  array(
    "id" => "my-section-reviews",
    "class" => "cs-section-reviews",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printContents(
        array(
            "class" => "cs-section-reviews-contents",
            "contents" => $sectionReviewsContents,
        )
    )
);