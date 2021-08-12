<?php
include_once "media.php";
include_once "nav.php";
include_once "articles.php";

// SECTION GALLERY
$sectionGalleryContents = [];
foreach ($mediaGallery as $galleryItem)
    $sectionGalleryContents[] = printMedia($galleryItem);
$sectionGallery =  array(
    "id" => "my-section-gallery",
    "class" => "cs-section-gallery",
    "addContainer" => "container",
    "dataType" => "html",
    "data" =>  printContents(
        array(
            "class" => "cs-section-gallery-contents owl-carousel owl-theme",
            "contents" => $sectionGalleryContents,
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
        "label" => "Ho letto e acconsento ai termi espressi nella " . printLink(array("url" => "privacy.php", "label" => "privacy policy")),
        "required" => true,
    ),
];
// SECTION CONTACTS
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
                "media" => $media["contacts-form"],
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

