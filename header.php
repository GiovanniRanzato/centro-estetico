<?php 
include "functions/layout.php";
include "./data/data.php";
$mainnav["active"] = $active;
$title = $title ?? "";
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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php echo $title ?></title>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/b2fa7f74dd.js" crossorigin="anonymous"></script>
    <!-- hamburgers CSS -->
    <link href="plugins/hamburgers/hamburgers.min.css" rel="stylesheet">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- FANCYBOX -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <!-- fancyapps -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- hamburgers Custom CSS -->
    <link href="css/hamburger-custom.css" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="my-body">
<?php 
echo printSection($topBar); 