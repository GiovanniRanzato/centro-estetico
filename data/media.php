<?php 
// DATA  
$media = array(
    "logo" => array(
        "src" => "img/svg/logo.svg",
        "title" => "logo",
        "class" => "cs-logo"
    ),
    "services-1"=> array(
        "id" => "services-1",
        "title" => "services-1",
        "src" => "img/services-1.jpg",
    ),
    "services-2"=> array(
        "id" => "services-2",
        "title" => "services-2",
        "src" => "img/services-2.jpg",
    ),
    "services-3"=> array(
        "id" => "services-3",
        "title" => "services-3",
        "src" => "img/services-3.jpg",
    ),
    "services-4"=> array(
        "id" => "services-4",
        "title" => "services-4",
        "src" => "img/services-4.jpg",
    ),
    "about"=> array(
        "id" => "img-1",
        "title" => "img-1",
        "src" => "img/about.jpg",
    ),
    "contacts-form" =>     array(
        "id" => "contacts-form-1",
        "title" => "contacts-form-1",
        "src" => "img/contacts-form.jpg",
    ),
    "staff-1" =>     array(
        "id" => "staff-1",
        "title" => "staff",
        "src" => "img/avatar-1.jpg",
    ),
    "staff-2" =>     array(
        "id" => "staff-2",
        "title" => "staff",
        "src" => "img/avatar-3.jpg",
    ),
    "staff-3" =>     array(
        "id" => "staff-3",
        "title" => "staff",
        "src" => "img/avatar-4.jpg",
    ),
    "staff-4" =>     array(
        "id" => "staff-4",
        "title" => "staff",
        "src" => "img/avatar-10.jpg",
    ),
    "staff-5" =>     array(
        "id" => "staff-5",
        "title" => "staff",
        "src" => "img/avatar-11.jpg",
    ),
    "staff-6" =>     array(
        "id" => "staff-6",
        "title" => "staff",
        "src" => "img/avatar-12.jpg",
    ),
    "review-1" =>     array(
        "id" => "review-2",
        "title" => "review",
        "src" => "img/avatar-14.jpg",
    ),
    "review-2" =>     array(
        "id" => "review-2",
        "title" => "review",
        "src" => "img/avatar-18.jpg",
    ),
    "review-3" =>     array(
        "id" => "review-3",
        "title" => "contacts-form-1",
        "src" => "img/avatar-19.jpg",
    ),
    "about-us-1" =>     array(
        "id" => "about-us-1",
        "title" => "about us",
        "src" => "img/about-us-1.jpg",
    ),
    "about-us-2" =>     array(
        "id" => "about-us-2",
        "title" => "about us",
        "src" => "img/about-us-2.jpg",
    ),
    "about-us-3" =>     array(
        "id" => "about-us-3",
        "title" => "about us",
        "src" => "img/about-us-3.jpg",
    ),
    "features-1" =>     array(
        "id" => "features-media-1",
        "title" => "welness",
        "src" => "img/svg/wellness.svg",
    ),
    "features-2" =>     array(
        "id" => "features-media-2",
        "title" => "beauty",
        "src" => "img/svg/beauty.svg",
    ),
    "features-3" =>     array(
        "id" => "features-media-3",
        "title" => "relax",
        "src" => "img/svg/relax.svg",
    ),
);
$mediaLogo = $media["logo"];


$mediaGallery = array (
    $media["services-1"],
    $media["services-2"],
    $media["services-3"],
    $media["services-4"],
    $media["about"],
    $media["contacts-form"],
);
foreach ($mediaGallery as $galleryItemKey => $galleryItem){
    $mediaGallery[$galleryItemKey]["type"] = "gallery-item";
}

