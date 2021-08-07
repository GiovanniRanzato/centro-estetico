<?php
// DATA  
$mediaLogo = array(
    "src" => "img/svg/logo.svg",
    "title" => "logo",
    "class" => "cs-logo"
);
$contactsnav = array(
    "title" => array(
        "title" => "Contatti",
        "heading" => 4,
    ),
    "navitems" => [
        array(
            "id" => "navitem_1",
            "active" => true,
            "link" => array(
                "url" => "#",
                "label" => "info@spacenter.it",
                "icon" => "fas fa-envelope"
            )
        ),
        array(
            "id" => "navitem_2",
            "link" => array(
                "url" => "#",
                "label" => "Via roma 10, Abano terme 350001 (PD)",
                "icon" => "fas fa-map-marker"
            )
        ),
        array(
            "id" => "navitem_3",
            "link" => array(
                "url" => "#",
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
                "url" => "#",
                "icon" => "fab fa-instagram",
                "label" => "instagram",
            )
        ),
        array(
            "id" => "social_1",
            "link" => array(
                "url" => "#",
                "icon" => "fab fa-facebook-f",
                "label" => "facebook",
            ),
        ),
        array(
            "id" => "social_1",
            "link" => array(
                "url" => "#",
                "icon" => "fab fa-pinterest-p",
                "label" => "pinterest",
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
                "url" => "#",
                "label" => "Massaggi",
            )
        ),
        array(
            "id" => "navitem_2",
            "link" => array(
                "url" => "#",
                "label" => "Cura del corpo",
            )
        ),
        array(
            "id" => "navitem_3",
            "link" => array(
                "url" => "#",
                "label" => "Beauty care",
            ),
        ),
        array(
            "id" => "navitem_4",
            "link" => array(
                "url" => "#",
                "label" => "Zona relax",
            ),
        ),
    ]
);

// HEADER - TOP BAR
$topBar = array(
    "id" => "my-top-bar",
    "class" => "cs-top-bar",
    "sectionTag" => "header",
    "dataType" => "html",
    "data" =>  printTopBar(
        array(
            "class" => "cs-top-bar-contents",
            "logoLink" => array(
                "url" => "#",
                "media" => $mediaLogo,
            ),
            "contactsnav" => $contactsnav,
            "socialnav" => $socialnav,
            "mainnav" => $mainnav,
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

// SECTION REVIEWS
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
                    "header" => printAvatarCardHeader(
                        array(
                            "media" => array(
                                "id" => "img-1",
                                "title" => "img-1",
                                "src" => "img/about.jpg",
                            ),
                            "title" => array(
                                "title" => "Laura Celeste",
                                "caption" => "recensione",
                                "heading" => 4,
                                "decoration" => "cs-title-line"
                            ),
                        )
                    ),
                    "body" => "Lorem ipsum dolor!!!!",
                    "footer" => printStars(array(
                        "number" => 4,
                        "total" => 5,
                    )),
                    "type" => "sm",
                )),
                printCard(array(
                    "header" => printAvatarCardHeader(
                        array(
                            "media" => array(
                                "id" => "img-1",
                                "title" => "img-1",
                                "src" => "img/about.jpg",
                            ),
                            "title" => array(
                                "title" => "Laura Celeste",
                                "caption" => "recensione",
                                "heading" => 4,
                                "decoration" => "cs-title-line"
                            ),
                        )
                    ),
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam blanditiis recusandae quam?",
                    "footer" => printStars(array(
                        "number" => 5,
                        "total" => 5,
                    )),
                    "type" => "sm",
                )),
                printCard(array(
                    "header" => printAvatarCardHeader(
                        array(
                            "media" => array(
                                "id" => "img-1",
                                "title" => "img-1",
                                "src" => "img/about.jpg",
                            ),
                            "title" => array(
                                "title" => "Laura Celeste",
                                "caption" => "recensione",
                                "heading" => 4,
                                "decoration" => "cs-title-line"
                            ),
                        )
                    ),
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam blanditiis recusandae quam?",
                    "footer" => printStars(array(
                        "number" => 4,
                        "total" => 5,
                    )),
                    "type" => "sm",
                )),
            ]
        )
    )
);

// SECTION GALLERY
$sectionGallery =  array(
    "id" => "my-section-gallery",
    "class" => "cs-section-gallery",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printContents(
        array(
            "class" => "cs-section-gallery-contents owl-carousel owl-theme",
            "contents" => [
                printMedia(
                    array(
                        "id" => "img-1",
                        "title" => "img-1",
                        "src" => "img/about.jpg",
                    )
                ),
                printMedia(
                    array(
                        "id" => "img-1",
                        "title" => "img-1",
                        "src" => "img/about.jpg",
                    )
                ),
                printMedia(
                    array(
                        "id" => "img-1",
                        "title" => "img-1",
                        "src" => "img/about.jpg",
                    )
                ),
                printMedia(
                    array(
                        "id" => "img-1",
                        "title" => "img-1",
                        "src" => "img/about.jpg",
                    )
                ),
                printMedia(
                    array(
                        "id" => "img-1",
                        "title" => "img-1",
                        "src" => "img/about.jpg",
                    )
                ),
                printMedia(
                    array(
                        "id" => "img-1",
                        "title" => "img-1",
                        "src" => "img/about.jpg",
                    )
                ),
            ]
        )
    )
);
// SECTION CONTACTS
$formContacts = [
    array(
        "type" => "text",
        "name" => "name",
        "label" => "Nome",
        "placeholder" => "Severus",
        "value" => "",
        "required" => true,
    ),
    array(
        "type" => "text",
        "name" => "secondname",
        "label" => "Cognome",
        "placeholder" => "Piton",
        "value" => "",
        "required" => true,
    ),
    array(
        "type" => "email",
        "name" => "email",
        "label" => "Email",
        "placeholder" => "severus@piton.com",
        "value" => "",
        "required" => true,
    ),
    array(
        "type" => "tel",
        "name" => "phone",
        "label" => "Telefono",
        "placeholder" => "+39 123456789",
        "required" => true,
    ),
    array(
        "type" => "checkbox",
        "name" => "agreements",
        "label" => "Ho letto e acconsento ai termi espressi nella " . printLink(array("url" => "#", "label" => "privacy policy")),
        "required" => true,
    ),
];
// SECTION ABOUT
$sectionContacts =  array(
    "id" => "my-section-contacts",
    "class" => "cs-section-contacts",
    "addContainer" => "container",
    "data" =>  array(
        "class" => "cs-card cs-move-down-4",
        "contents" => [
            array(
                "class" => "cs-section-about-contents",
                "layoutFunction" => "printMainArticle",
                "title" => array(
                    "title" => "Ti aspettiamo",
                    "caption" => "contatti",
                    "heading" => 3,
                    "decoration" => "cs-title-line"
                ),
                "media" => array(
                    "id" => "img-1",
                    "title" => "img-1",
                    "src" => "img/about.jpg",
                ),
                "text" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus."],
                "form" => array(
                    "method" => "POST",
                    "name" => "contatto",
                    "action" => "inviaEmailContaato.php",
                    "formFields" => $formContacts,
                    "addSubmit" => true,
                ),

            )
        ]
    ),
);


// FOOTER - TOP BAR
$formNewsletter =     [
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
