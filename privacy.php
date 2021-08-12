<?php
$title = "index";
$active =  basename(__FILE__); 

include "header.php";

$sectionPrivacy =  array(
    "id" => "my-section-privacy",
    "class" => "cs-section-privacy",
    "addContainer" => "container",
    "data" =>  array(
        "class" => "cs-move-down-4",
        "contents" => [
            array(
                "class" => "cs-section-privact-contents",
                "layoutFunction" => "printCard",

                "header" => printTitle (
                    array(
                        "title" => "Privacy Policy",
                        "caption" => "Privacy",
                        "heading" => 1,
                        "decoration" => "cs-title-line"
                    )
                ),
                "body" => printText (["Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sapiente repellendus, doloribus minus vero obcaecati iure, voluptates voluptas aliquid assumenda minima quibusdam tenetur rerum, tempore magni nulla inventore recusandae aut. Quas pariatur quidem expedita maxime nemo, iste perferendis consectetur sapiente itaque deleniti eligendi, atque, sit sed repudiandae consequatur assumenda deserunt.","Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sapiente repellendus, doloribus minus vero obcaecati iure, voluptates voluptas aliquid assumenda minima quibusdam tenetur rerum, tempore magni nulla inventore recusandae aut. Quas pariatur quidem expedita maxime nemo, iste perferendis consectetur sapiente itaque deleniti eligendi, atque, sit sed repudiandae consequatur assumenda deserunt.","Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sapiente repellendus, doloribus minus vero obcaecati iure, voluptates voluptas aliquid assumenda minima quibusdam tenetur rerum, tempore magni nulla inventore recusandae aut. Quas pariatur quidem expedita maxime nemo, iste perferendis consectetur sapiente itaque deleniti eligendi, atque, sit sed repudiandae consequatur assumenda deserunt."]),

            )
        ]
    ),
);
echo printSection($sectionPrivacy);

include "footer.php"; ?> 