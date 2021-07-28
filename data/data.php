<?php
// ABOUT
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
                    // "class" => "mb-4",
                    "heading" => 2,
                    "decoration" => "cs-title-line"
                ),
                "media" => array(
                    "id" => "img-1",
                    "title" => "img-1",
                    "src" => "img/about.jpg",
                ),
                "text" => [
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
                ],
                "action" => array(
                    "url" => "#",
                    "label" => "prenota",
                )
            )
        ]
    ),
);

// SLOGAN
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


// FEATURES
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
                    "icon" => "hand-holding-heart",
                ),
                array(
                    "title" => "beauty",
                    "icon" => "palette",
                ),
                array(
                    "title" => "comfort",
                    "icon" => "couch",
                ),
            ]
        )
    )
);
// SERVICES
$sectionServices =  array(
    "id" => "my-section-services",
    "class" => "cs-section-services cs-section-waves-bottom cs-section-waves-up",
    "addContainer" => "container",
    "data" =>  array(
        "class" => "cs-card cs-move-up-4",
        "contents" => [
            array(
                "layoutFunction" => "printTitle",
                "class" => "cs-card-header",
                "title" => "Scopri i nostri servizi",
                "caption" => "services",
                "heading" => 2,
                "decoration" => "cs-title-line"
            ),
            array(
                "class" => "cs-section-services-contents",
                "layoutFunction" => "printMainArticle",
                "title" => array(
                    "title" => "<span>Massaggi</span> e cura del corpo",
                    //"class" => "mb-4",
                    "heading" => 3,
                ),
                "media" => array(
                    "id" => "img-1",
                    "title" => "img-1",
                    "src" => "img/about.jpg",
                ),
                "text" => [
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
                ],
                "action" => array(
                    "url" => "#",
                    "label" => "prenota",
                )
            ),
            array(
                "class" => "cs-section-services-contents",
                "layoutFunction" => "printMainArticle",
                "title" => array(
                    "title" => "Makeover & <span>Beauty</span>",
                    //"class" => "mb-4",
                    "heading" => 3,
                ),
                "media" => array(
                    "id" => "img-1",
                    "title" => "img-1",
                    "src" => "img/about.jpg",
                ),
                "text" => [
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? ",
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
                ],
                "action" => array(
                    "url" => "#",
                    "label" => "prenota",
                )
            ),
            array(
                "class" => "cs-section-services-contents",
                "layoutFunction" => "printMainArticle",
                "title" => array(
                    "title" => "Zona <span>relax</span>",
                    //"class" => "mb-4",
                    "heading" => 3,
                ),
                "media" => array(
                    "id" => "img-1",
                    "title" => "img-1",
                    "src" => "img/about.jpg",
                ),
                "text" => [
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus.",
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
                ],
                "action" => array(
                    "url" => "#",
                    "label" => "prenota",
                )
            )
        ]
    ),
);

// REVIEWS
$sectionReviews =  array(
    "id" => "my-section-reviews",
    "class" => "cs-section-reviews",
    "addContainer" => "container",
    "data" =>  array(
        "class" => "cs-section-reviews-contents",
        "contents" => [
            array(
                "class" => "gg",
                "layoutFunction" => "printCard",
                "header" => "ff",
                "body" => "ff",
                "footer" => "ff",
            ),
            array(
                "class" => "gg",
                "layoutFunction" => "printCard",
                "header" => "ff",
                "body" => "ff",
                "footer" => "ff",
            ),
            array(
                "class" => "gg",
                "layoutFunction" => "printCard",
                "header" => "ff",
                "body" => "ff",
                "footer" => "ff",
            ),
        ]
       
    )
);


// NAV
$mainNav =  array(
    "id" => "my-nav",
    "class" => "cs-nav",
    "addContainer" => "container",
    "data" =>  array(
        "class" => "cs-nav-contents",
        "contents" => [
            array(
                "class" => "cs-nav",
                "layoutFunction" => "printNav",
                "navitems" => [
                    array(
                        "id" => "navitem_1",
                        "class" => "",
                        "link" => array (
                            "url" => "#",
                            "label" => "menu 1",
                        )
                    ),
                    array(
                        "id" => "navitem_2",
                        "class" => "",
                        "link" => array (
                            "url" => "#",
                            "label" => "menu 2",
                        )
                    ),
                    array(
                        "id" => "navitem_3",
                        "class" => "",
                        "link" => array (
                            "url" => "#",
                            "label" => "menu 3",
                        ),
                        "submenu" => array(
                            "class" => "cs-nav-sub",
                            "navitems" => [
                                array(
                                    "id" => "navitem_sub_1",
                                    "class" => "",
                                    "link" => array (
                                        "url" => "#",
                                        "label" => "sub menu 1",
                                    )
                                ),
                                array(
                                    "id" => "navitem_sub_2",
                                    "class" => "",
                                    "link" => array (
                                        "url" => "#",
                                        "label" => "sub menu 2",
                                    )
                                ),
                                array(
                                    "id" => "navitem_sub_3",
                                    "class" => "",
                                    "link" => array (
                                        "url" => "#",
                                        "label" => "sub menu 3",
                                    ),
                                ),
                            ] 
                        ),
                    ),
                ] 
            ),
        ]
       
    )
);