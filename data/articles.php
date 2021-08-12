<?php
//require "../media/media.php";

$articlesReviews = array(
    array(
        "title" => array(
            "title" => "Laura Celeste",
            "caption" => "recensione",
            "heading" => 4,
            "decoration" => "cs-title-line"
        ),
        "media" =>  $media["review-1"],
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem!",
        "score" => array(
            "number" => 4,
            "total" => 5,
        ),
    ),
    array(
        "title" => array(
            "title" => "Laura Celeste",
            "caption" => "recensione",
            "heading" => 4,
            "decoration" => "cs-title-line"
        ),
        "media" =>  $media["review-2"],
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quae reprehenderit sint commodi impedit vel esse a, nobis omnis porro.",
        "score" => array(
            "number" => 4,
            "total" => 5,
        ),
    ),
    array(
        "title" => array(
            "title" => "Laura Celeste",
            "caption" => "recensione",
            "heading" => 4,
            "decoration" => "cs-title-line"
        ),
        "media" =>  $media["review-3"],
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, non aut beatae quo temporibus sequi.",
        "score" => array(
            "number" => 4,
            "total" => 5,
        ),
    ),
);

$servicesSummary  = [
    array(
        "title" => "<span>Massaggi</span> e cura del corpo",
        "media" => $media["services-1"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
        "action" => array( "url" => "servizi.php#my-section-body-care", "label" => "continua" )
    ),
    array(
        "title" => "Makeover & <span>Beauty</span>",
        "media" => $media["services-2"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
        "action" => array( "url" => "servizi.php#my-section-beauty-care", "label" => "continua" )
    ),
    array(
        "title" => "Zona <span>relax</span>",
        "media" => $media["services-3"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
        "action" => array( "url" => "servizi.php#my-section-relax", "label" => "continua" )
    )
];
$servicesBodyCare  = [
    array(
        "title" => "Solarium",
        "media" => $media["about"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
        "action" => array( "url" => "contatti.php#my-section-contacts", "label" => "prenota" )
    ),
    array(
        "title" => "Massaggi con pietre calde",
        "media" => $media["services-1"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
        "action" => array( "url" => "contatti.php#my-section-contacts", "label" => "prenota" )
    )
];
$servicesBeautyCare = [
    array(
        "title" => "Trattamenti <span>corpo</span>",
        "media" => $media["services-4"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
        "action" => array( "url" => "contatti.php#my-section-contacts", "label" => "prenota" )
    ),
    array(
        "title" => "Estetica <span>viso</span>",
        "media" => $media["services-2"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
        "action" => array( "url" => "contatti.php#my-section-contacts", "label" => "prenota" )
    )
];
$servicesRelax = [
    array(
        "title" => "Bagno <span>turco</span>",
        "media" => $media["services-4"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
        "action" => array( "url" => "contatti.php#my-section-contacts", "label" => "prenota" )
    ),
    array(
        "title" => "Sauna <span>fillandese</span>",
        "media" => $media["services-3"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
        "action" => array( "url" => "contatti.php#my-section-contacts", "label" => "prenota" )
    )
];

$aboutUsArticles = [
    array(
        "title" => "La nostra <span>mission</span>",
        "media" => $media["about-us-1"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
    ),
    array(
        "title" => "La nostra <span>esperienza</span>",
        "media" => $media["about-us-2"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
    ),
    array(
        "title" => "La nostra <span>storia</span>",
        "media" => $media["about-us-3"],
        "text" => [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam vitae facere est odio sed temporibus, voluptatum officia iusto nihil aliquam vel quas quidem, labore, minus consectetur? Eaque ratione sunt doloremque nihil sit veniam laudantium? Est ea mollitia accusantium, praesentium officia quos dolorem tempore odio saepe cum sequi natus alias optio!",
        ],
    )
];

$staffMembers = array(
    array(
        "title" => array(
            "title" => "Laura Celeste",
            "caption" => "recensione",
            "heading" => 4,
            "decoration" => "cs-title-line"
        ),
        "media" =>  $media["staff-1"],
        "text" => "Lorem ipsum dolor!",
    ),
    array(
        "title" => array(
            "title" => "Laura Celeste",
            "caption" => "recensione",
            "heading" => 4,
            "decoration" => "cs-title-line"
        ),
        "media" =>  $media["staff-2"],
        "text" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque perferendis voluptatem, nihil rem cumque soluta?",
    ),
    array(
        "title" => array(
            "title" => "Laura Celeste",
            "caption" => "recensione",
            "heading" => 4,
            "decoration" => "cs-title-line"
        ),
        "media" =>  $media["staff-3"],
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
    ),
    array(
        "title" => array(
            "title" => "Laura Celeste",
            "caption" => "recensione",
            "heading" => 4,
            "decoration" => "cs-title-line"
        ),
        "media" =>  $media["staff-4"],
        "text" => "Lorem ipsum dolor!",
    ),
    array(
        "title" => array(
            "title" => "Laura Celeste",
            "caption" => "recensione",
            "heading" => 4,
            "decoration" => "cs-title-line"
        ),
        "media" =>  $media["staff-5"],
        "text" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque perferendis voluptatem, nihil rem cumque soluta?",
    ),
    array(
        "title" => array(
            "title" => "Laura Celeste",
            "caption" => "recensione",
            "heading" => 4,
            "decoration" => "cs-title-line"
        ),
        "media" =>  $media["staff-6"],
        "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
    ),
);