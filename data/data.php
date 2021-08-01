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
    "dataType" => "html",
    "data" =>  printContents(
        array(
            "class" => "cs-section-reviews-contents",
            "contents" => [
                printCard(array(
                    "header" => printAvatarCardHeader (
                        array(
                        "media" => array(
                            "id" => "img-1",
                            "title" => "img-1",
                            "src" => "img/about.jpg",
                        ),
                        "title" => array(
                            "title" => "Laura Celeste",
                            "caption" => "makeup artist",
                            "heading" => 4,
                            "decoration" => "cs-title-line"
                        ),
                    )),
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam blanditiis recusandae quam?",
                    "footer" => "2",
                    "type" => "sm",
                )),
                printCard(array(
                    "header" => printAvatarCardHeader (
                        array(
                        "media" => array(
                            "id" => "img-1",
                            "title" => "img-1",
                            "src" => "img/about.jpg",
                        ),
                        "title" => array(
                            "title" => "Laura Celeste",
                            "caption" => "makeup artist",
                            "heading" => 4,
                            "decoration" => "cs-title-line"
                        ),
                    )),
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam blanditiis recusandae quam?",
                    "footer" => "2",
                    "type" => "sm",
                )),
                printCard(array(
                    "header" => printAvatarCardHeader (
                        array(
                        "media" => array(
                            "id" => "img-1",
                            "title" => "img-1",
                            "src" => "img/about.jpg",
                        ),
                        "title" => array(
                            "title" => "Laura Celeste",
                            "caption" => "makeup artist",
                            "heading" => 4,
                            "decoration" => "cs-title-line"
                        ),
                    )),
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam blanditiis recusandae quam?",
                    "footer" => "2",
                    "type" => "sm",
                )), 
            ]

        )
    )
);


// HEADER
$topBar = array(
    "id" => "my-top-bar",
    "class" => "cs-top-bar",
    "sectionTag" => "header",
    "dataType" => "html",
    "data" =>  printTopBar(
        array(
            "class" => "cs-top-bar-contents",
            "logoLink" => array (
                "url" => "#",
                "media" => array(
                    "src" => "img/svg/logo.svg
                    ",
                    "title" => "logo",
                ),
            ),
            "topNav" => array(
                "navitems" => [
                    array(
                        "id" => "navitem_1",
                        "active" => true,
                        "link" => array(
                            "class" => "cs-topnav-link",
                            "url" => "#",
                            "label" => "info@spacenter.it",
                            "icon" => "fas fa-envelope"
                        )
                    ),
                    array(
                        "id" => "navitem_2",
                        "link" => array(
                            "class" => "cs-topnav-link",
                            "url" => "#",
                            "label" => "Via roma 10, Abano terme 350001 (PD)",
                            "icon" => "fas fa-map-marker"
                        )
                    ),
                    array(
                        "id" => "navitem_3",
                        "link" => array(
                            "class" => "cs-topnav-link",
                            "url" => "#",
                            "label" => "+39  049 123456789",
                            "icon" => "fas fa-phone"
                        ),
                    ),
                ]
            ),
            "socialNav" => array(
                "navitems" => [
                    array(
                        "id" => "social_1",
                        "link" => array(
                            "class" => "cs-social-link",
                            "url" => "#",
                            "icon" => "fab fa-instagram",
                        )
                    ),
                    array(
                        "id" => "social_1",
                        "link" => array(
                            "class" => "cs-social-link",
                            "url" => "#",
                            "icon" => "fab fa-facebook-f",
                        ),
                    ),
                    array(
                        "id" => "social_1",
                        "link" => array(
                            "class" => "cs-social-link",
                            "url" => "#",
                            "icon" => "fab fa-pinterest-p",
                        ),
                    ),
                ],
            ),
            "mainNav" => array(
                "navitems" => [
                    array(
                        "id" => "navitem_1",
                        "active" => true,
                        "link" => array(
                            "url" => "#",
                            "label" => "Home",
                        )
                    ),
                    array(
                        "id" => "navitem_2",
                        "link" => array(
                            "url" => "#",
                            "label" => "Servizi",
                        )
                    ),
                    array(
                        "id" => "navitem_3",
                        "link" => array(
                            "url" => "#",
                            "label" => "Chi siamo",
                        ),
                    ),
                    array(
                        "id" => "navitem_4",
                        "link" => array(
                            "url" => "#",
                            "label" => "Contatti",
                        ),
                    ),
                ]
            )
        )

    )

);

// LIST
$sectionList =  array(
    "id" => "my-section-reviews",
    "class" => "cs-section-reviews",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printInlineList(
        array(
            "class" => "cs-section-reviews-contents",
            "brakePointType" => "",
            "elements" => [
                printCard(array(
                    "header" => "Header1",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam blanditiis recusandae quam?",
                    "footer" => "2",
                    "type" => "sm",
                )),
                printCard(array(
                    "header" => "Header1",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam blanditiis recusandae quam?",
                    "footer" => "2",
                    "type" => "sm",
                )),
                printCard(array(
                    "header" => "Header1",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam blanditiis recusandae quam?",
                    "footer" => "2",
                    "type" => "sm",
                )),
 
            ]

        )
    )
);
