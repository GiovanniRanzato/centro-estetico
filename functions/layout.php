<?php
// SECTION
// @props: array(
// "class" => string (class for section)
// "addContainer" => string (class for container )
// "data" => string html for contents or structured array with data contents
// "dataType" => "string" ("html" to print preformatted html string "structureData" to print structured data array with layout functions)
// "htmlOptions" => array(options for wrapper)
// )
function printSection($props)
{
    $id = isset($props["id"]) ? $props["id"] : "";
    $class = isset($props["class"]) ? $props["class"] : "";
    $addContainer = isset($props["addContainer"]) ? $props["addContainer"] : "";
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];
    $data = isset($props["data"]) ? $props["data"] : [];
    $dataType = isset($props["dataType"]) ? $props["dataType"] : "";

    $sectionTag = isset($props["sectionTag"]) ? $props["sectionTag"] : "section";
    $containerTag = isset($props["containerTag"]) ? $props["containerTag"] : "div";

    ob_start();
    echo "<$sectionTag id='$id' class='$class' " . printArrayOptions($htmlOptions) . ">";
    if ($addContainer) {
        echo "<$containerTag class='$addContainer' >";
    }
    switch ($dataType) {
        case "html":
            echo $data;
            break;
        case "structureData":
        default:
            echo printContents($data);
            break;
    }
    if ($addContainer) {
        echo "</$containerTag>";
    }
    echo "</$sectionTag>";
    return  ob_get_clean();
}

// CONTENTS
// @props: array(
// "class" => string (class for wrapper)
// "contents" => array (structured array with data contents)
// )
function printContents($props)
{
    $class = isset($props["class"]) ? $props["class"] : "";
    $contents = isset($props["contents"]) ? $props["contents"] : [];
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];
    ob_start(); ?>
    <div class="<?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?>>
        <?php
        foreach ($contents as $content) {
            if (isset($content["layoutFunction"]) && $content["layoutFunction"])
                echo $content["layoutFunction"]($content);
            else
                echo $content;
        }
        ?>
    </div>
<?php return  ob_get_clean();
}
// TITLE
// @props
// "title" => string title,
// "caption" => string caption,
// "class"  => string class for the wrapper
// "heading" => number 1-6 (default: 1 for h1)
// "decoration" => string class name for decoration
// )
function printTitle($props)
{
    $title = isset($props["title"]) ? $props["title"] : "";
    $caption = isset($props["caption"]) ? $props["caption"] : "";
    $class = isset($props["class"]) ? $props["class"] : "";
    $heading = isset($props["heading"]) && $props["heading"] >= 1 && $props["heading"] <= 6 ? (int)$props["heading"] : 1;
    $decoration = isset($props["decoration"]) ? $props["decoration"] : "";
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];
    ob_start(); ?>
    <div class="<?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?>>
        <div class="<?php echo $decoration ?>">
            <?php if ($caption) { ?>
                <p class="cs-caption"><?php echo $caption ?></p>
            <?php } ?>
            <?php echo "<h$heading class='cs-title '>"; ?><?php echo $title ?><?php echo "</h$heading>" ?>
        </div>
    </div>
<?php return  ob_get_clean();
}

// MAIN ARTICLE
// @props
// "id" => string id,
// "title" => string for alt attribute,
// "class"  => string class for the wrapper
// "src" => string path
function printMainArticle($props)
{
    $id = isset($props["id"]) ? $props["id"] : "";
    $class = isset($props["class"]) ? $props["class"] : "";

    $title = isset($props["title"]) ? $props["title"] :  [];
    $media = isset($props["media"]) ? $props["media"] : [];
    $text = isset($props["text"]) ? $props["text"] : [];
    $action = isset($props["action"]) ? $props["action"] : [];
    $form = isset($props["form"]) ? $props["form"] : [];
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];

    ob_start(); ?>
    <div id="<?php echo $id ?>" class="cs-main-article <?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?>>
        <div class="row cs-main-article-row">
            <div class="col-lg-6 cs-relative">
                <?php
                if ($media) {
                    echo printMedia($media);
                }
                ?>
            </div>
            <div class="col-lg-6 cs-main-article-contents cs-card-body">
                <?php
                if ($title)
                    echo printTitle($title);
                if ($text)
                    echo printText($text);
                if ($form)
                    echo printForm($form);
                if ($action) { ?>
                    <div class="cs-main-article-contents-actions">
                        <?php echo printBtn($action); ?>
                    </div>
                <?php } ?>
                
            </div>
        </div>
    </div>
<?php return  ob_get_clean();
}
// FEATURES
// @props
// "class" => string css class,
// "elements" => structured for features,
function printFeatures($props)
{
    $class = isset($props["class"]) ? $props["class"] : "";
    $elements = isset($props["features"]) ? $props["features"] : [];
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];
    if (count($elements) == 0)
        return;
    $breakPoints = (int) (12 / count($elements));
    ob_start(); ?>
    <div class="<?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?>>
        <div class="row">
            <?php foreach ($elements as $e) { ?>
                <div class="col-md-<?php echo $breakPoints ?>">
                    <div class="cs-feature">
                        <div class="cs-feature-icon">
                            <i class="fas fa-<?php echo $e["icon"] ?>"></i>
                        </div>
                        <?php echo $e["title"] ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php return  ob_get_clean();
}

// INLINE CARD LIST
// @props
// "class" => string css class,
// "brakePointType" => string with bootstrap breakpoint type
// "elements" => array of html string with element contents,
function printInlineList($props)
{
    $class = isset($props["class"]) ? $props["class"] : "";
    $elements = isset($props["elements"]) ? $props["elements"] : [];
    $brakePointType = isset($props["brakePointType"]) && $props["brakePointType"] ? $props["brakePointType"] . "-" : "";
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];

    if (count($elements) == 0)
        return;
    $breakPoint = (int) (12 / count($elements));
    ob_start(); ?>
    <div class="<?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?>>
        <div class="row">
            <?php foreach ($elements as $e) { ?>
                <div class="col-<?php echo $brakePointType . $breakPoint ?>">
                    <div class="cs-inline-list">
                        <?php echo $e ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php return  ob_get_clean();
}

// SITE TOP BAR
// @props
// "class" => string css class,
// "logoLink" => array with structured  data for link
// "conctactsnav" => array with structured  data for nav
// "socialNav" => array with structured  data for nav
// "mainNav" => array with structured  data for nav
function printTopBar($props)
{
    $class = isset($props["class"]) ? $props["class"] : "";
    $logoLink = isset($props["logoLink"]) ? $props["logoLink"] : [];
    $logoLink["class"] = isset($logoLink["class"]) ? $logoLink["class"] : "cs-logo";
    $contactsnav = isset($props["contactsnav"]) ? $props["contactsnav"] : [];
    $socialnav = isset($props["socialnav"]) ? $props["socialnav"] : [];
    $mainnav = isset($props["mainnav"]) ? $props["mainnav"] : [];

    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];

    ob_start(); ?>

    <div class="<?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <?php echo printLink($logoLink); ?>
                </div>
                <div class="col-lg-10">
                    <div class="cs-top-nav">
                        <?php echo printNav($contactsnav); ?>
                        <?php echo printNav($socialnav); ?>
                    </div>
                    <div class="cs-main-nav">
                        <?php echo printNav($mainnav); ?>
                    </div>
                    <div class="cs-menu-toggler hamburger-container">
                        <button id="hamburger" class="hamburger hamburger--collapse menu-toggler " type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    <?php return  ob_get_clean();
}

// SITE FOOTER
// @props
// "class" => string css class,
// "logoLink" => array with structured  data for link
// "nav1" => array with structured  data for nav
// "nav2" => array with structured  data for nav
// "nav3" => array with structured  data for nav
function printFooter($props)
{
$class = isset($props["class"]) ? $props["class"] : "";
$logo = isset($props["logo"]) ? $props["logo"] : [];
$nav1 = isset($props["nav1"]) ? $props["nav1"] : [];
$nav2 = isset($props["nav2"]) ? $props["nav2"] : [];
$nav3 = isset($props["nav3"]) ? $props["nav3"] : [];
$form = isset($props["form"]) ? $props["form"] : [];
$copyright = isset($props["copyright"]) ? $props["copyright"] : "";
$privacyLink = isset($props["privacyLink"]) ? $props["privacyLink"] : "";
$cookieLink = isset($props["cookieLink"]) ? $props["cookieLink"] : "";

$htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];

ob_start(); ?>

    <div class="<?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?>>
        <div class="container">
            <div class="cs-footer-logo">
                <?php echo printMedia($logo); ?>
            </div>
            <div class="row cs-footer-navs">
                <div class="col-lg-3 col-md-6">
                    <div class="cs-footer-nav">
                        <?php echo printNav($nav1, true); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs-footer-nav">
                        <?php echo printNav($nav2, true); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs-footer-nav">
                        <?php echo printNav($nav3, true); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs-footer-nav">
                        <?php echo printForm($form, true); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-second-footer">
            <div class="container">
                <div class="cs-second-footer-contents">
                    <span><?php echo $copyright; ?></span>
                    <span><?php echo printLink($privacyLink)." - ".printLink($cookieLink); ?></span>
                </div>
            </div>
        </div>
    <?php return  ob_get_clean();
}

// INLINE CARD LIST
// @props
// "class" => string css class,

function printAvatarCardHeader($props)
{
    $class = isset($props["class"]) ? $props["class"] : "";
    $title = isset($props["title"]) ? $props["title"] : [];
    $media = isset($props["media"]) ? $props["media"] : [];
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];
    $media["class"] = isset($media["class"]) ? "cs-avatar " . $media["class"] : "cs-avatar";
    ob_start(); ?>
        <div class="cs-avatar-card-header <?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?>>
            <?php
            echo printMedia($media);
            echo printTitle($title);
            ?>
        </div>
    <?php return  ob_get_clean();
}


// MESSAGE
// @props
// "message" => string text message,
// "icon" => string fa-icon class name,
// "type" => string bootstrap color type,
function printMessage($props)
{
    $message = isset($props["message"]) ? $props["message"] : "";
    $type = isset($props["type"]) ? $props["type"] : "info";
    $icon = isset($props["icon"]) ? $props["icon"] : "";
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];

    ob_start(); ?>
        <div class="row" <?php echo printArrayOptions($htmlOptions) ?>>
            <div class="col">
                <?php echo $icon ? "<i class=\"fas fa-$icon\"></i>" : ''; ?>
                <div class="alert alert-<?php echo $type; ?>" role="alert">
                    <?php echo $message; ?>
                </div>
            </div>
        </div>
    <?php return  ob_get_clean();
}

// CARD
// @props
// "header" => "string  header content",
// "body" => "string  body content",
// "footer" => "string  footer content"
// "leftBorder" => "string  left border bootstrap color type (see sustom css for supported)"
// "class" => "string css class added to defauls classes",
function printCard($props)
{
    $class = isset($props["class"]) ? $props["class"] : "";
    $header = isset($props["header"]) ? $props["header"] : "";
    $body = isset($props["body"]) ? $props["body"] : "";
    $footer = isset($props["footer"]) ? $props["footer"] : "";
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];
    $type = isset($props["type"]) ? "-" . $props["type"] : "";

    ob_start(); ?>
        <div class="cs-card  <?php echo $class ?? ""; ?>" <?php echo printArrayOptions($htmlOptions) ?>>

            <?php if ($header) { ?>
                <div class="cs-card-header<?php echo $type; ?>">
                    <?php echo $props["header"]; ?>
                </div>
            <?php } ?>

            <?php if ($body) { ?>
                <div class="cs-card-body<?php echo $type; ?>">
                    <?php echo $props["body"]; ?>
                </div>
            <?php } ?>

            <?php if ($footer) { ?>
                <div class="cs-card-footer<?php echo $type; ?>">
                    <?php echo $props["footer"]; ?>
                </div>
            <?php } ?>
        </div>

    <?php return  ob_get_clean();
}

// MEDIA
// @props
// "id" => string id,
// "title" => string for alt attribute,
// "class"  => string class for the wrapper
// "src" => string path
function printMedia($props)
{
    $id = isset($props["id"]) ? $props["id"] : "";
    $title = isset($props["title"]) ? $props["title"] : "";
    $class = isset($props["class"]) ? $props["class"] : "cs-media";
    $src = isset($props["src"]) ? $props["src"] : "";
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];

    ob_start(); ?>
        <div id="<?php echo $id ?>" class="<?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?>>
            <img src="<?php echo $src ?>" alt="<?php echo $title ?>">
        </div>
    <?php return  ob_get_clean();
}

// NAV
// @props
// "id" => string id,
// "class"  => string class for the wrapper
// "navitems" => structured array with nav items data (id, class, link, submenu),
function printNav($props, $enableTitle = false)
{
    $id = isset($props["id"]) ? $props["id"] : "";
    $navitems = isset($props["navitems"]) ? $props["navitems"] : [];
    $class = isset($props["class"]) ? $props["class"] : "cs-nav";
    $title = isset($props["title"]) ? $props["title"] : "";
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];

    ob_start();
    if ($title && $enableTitle)
        echo printTitle($title);
    ?>
        <ul id="<?php echo $id ?>" class="<?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?>>
            <?php
            foreach ($navitems as $navitem) {
                echo printNavItem($navitem);
            } ?>
        </ul>
    <?php return  ob_get_clean();
}

// NAVITEM
// @props
// "id" => string id,
// "class"  => string class for the wrapper
// "link" => structured array with link item data (id, class, url ... ),

function printNavItem($props)
{
    $id = isset($props["id"]) ? $props["id"] : "";
    $class = isset($props["class"]) ? $props["class"] : "cs-navitem ";
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];
    $navLinkClass = "cs-nav-link";
    ob_start(); ?>
        <li id="<?php echo $id; ?>" class="<?php echo $class; ?>" <?php echo printArrayOptions($htmlOptions) ?>>
            <?php
            $props["link"]["class"] = isset($props["link"]["class"]) ? $props["link"]["class"] : $navLinkClass;
            $props["link"]["class"] .= isset($props["active"]) && $props["active"] ? " active" : "";
            echo printLink($props["link"]);
            if (isset($props["submenu"])) {
                echo printNav($props["submenu"]);
            }
            ?>
        </li>
    <?php return  ob_get_clean();
}

// BTN
// @props
// "url"  => string url
// "label"  => string label
// "class"  => string class
function printBtn($props)
{
    $btnProps = $props;
    $btnProps["class"] = isset($btnProps["class"]) ? $btnProps["class"] : "cs-btn";

    return printLink($btnProps);
}

// LINK
// @props
// "url"  => string url
// "label"  => string label
// "class"  => string class
function printLink($props)
{
    $id = isset($props["id"]) ? $props["id"] : "";
    $class = isset($props["class"]) ? $props["class"] : "";
    $url = isset($props["url"]) ? $props["url"] : "#";
    $label = isset($props["label"]) ? $props["label"] : "";
    $icon = isset($props["icon"]) ? $props["icon"] : "";
    $media = isset($props["media"]) ? $props["media"] : "";
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];

    ob_start(); ?>
        <a id="<?php echo $id ?>" class="<?php echo $class ?>" href="<?php echo $url ?>" <?php echo printArrayOptions($htmlOptions) ?>>
            <?php echo printIcon($icon);
            if ($label) { ?>
                <span><?php echo $label ?></span>
            <?php }
            if ($media) {
                echo printImg($media);
            } ?>

        </a>
    <?php return  ob_get_clean();
}


// ICON
// @props
// icon: string  (font awesome class)
function printIcon($icon)
{
    if (!$icon) return;
    ob_start(); ?>
        <i class="<?php echo $icon ?>"></i>
    <?php return  ob_get_clean();
}

// IMG
// @props
// id: string 
// class: string 
// title: string 
// src: string 
function printImg($props)
{
$id = isset($props["id"]) ? $props["id"] : "";
$title = isset($props["title"]) ? $props["title"] : "";
$class = isset($props["class"]) ? $props["class"] : "";
$src = isset($props["src"]) ? $props["src"] : "";

ob_start(); ?>
    <img id="<?php echo $id ?>" class="<?php echo $class ?>" src="<?php echo $src ?>" alt="<?php echo $title ?>">
    <?php return  ob_get_clean();
}

// TEXT
// @props
// "url"  => string url
// "label"  => string label
// "class"  => string class
function printText($paragraphs)
{
    ob_start();
    foreach ($paragraphs as $p) {
        $htmlOptions = isset($p["htmlOptions"]) ? $p["htmlOptions"] : []; ?>
        <p <?php echo printArrayOptions($htmlOptions) ?>><?php echo $p ?></p>
    <?php }
    return  ob_get_clean();
}
// TEXT
// @props
// "id" => string id
// "class"  => string class
// "total"  => int total number of stars
// "number"  => int number of filled stars
// "icon" => string fa icon class
// "iconEmpty" => string fa icon class
function printStars($props)
{
    $id = isset($props["id"]) ? $props["id"] : "";
    $class = isset($props["class"]) ? $props["class"] : "cs-section-reviews-stars";
    $total = isset($props["total"]) ? $props["total"] : 5;
    $number = isset($props["number"]) ? $props["number"] : 0;
    $icon = isset($props["icon"]) ? $props["icon"] : "fas fa-star";
    $iconEmpty = isset($props["iconEmpty"]) ? $props["iconEmpty"] : "far fa-star";
    ob_start(); ?>
    <div id="<?php echo $id ?>" class="<?php echo $class ?>">
        <?php for ($i = 0; $i < $total; $i++) {
            if ($i < $number)
                echo "<i class='$icon'></i>";
            else
                echo "<i class='$iconEmpty'></i>";
        } ?>
    </div>
<?php
    return  ob_get_clean();
}

// PRINT ARRAY OPTIONS
function printArrayOptions($options, $separator = "=", $quotes = '"')
{
    $result = "";
    foreach ($options as $key => $val) {
        $result .= $key . $separator . $quotes . $val . $quotes;
    }
    return $result;
}

// FORM
// @props
// "action"  => string 
// "name"  => string 
// "method"  => string class
// "formFields"  => array
// "htmlOptions"  => array
function printForm($props, $enableTitle = false)
{
    $id = isset($props["id"]) ? $props["id"] : "";
    $class = isset($props["class"]) ? $props["class"] : "cs-form";
    $action = isset($props["action"]) ? $props["action"] : "";
    $name = isset($props["name"]) ? $props["name"] : "form";
    $method = isset($props["method"]) ? $props["method"] : "get";
    $title = isset($props["title"]) ? $props["title"] : "";
    $addSubmit = isset($props["addSubmit"]) ? $props["addSubmit"] : false;
    $formFields = isset($props["formFields"]) ? $props["formFields"] : [];
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];
    ob_start(); 
    if ($title && $enableTitle)
        echo printTitle($title);
    ?>
    <form id="<?php echo $id ?>" class="<?php echo $class ?>" action="<?php echo $action ?>" name="<?php echo $name ?>" method="<?php echo $method ?>" <?php echo printArrayOptions($htmlOptions) ?> >
    <?php 
        foreach ($formFields as $input) {
            echo printInput($input);
        }
        if($addSubmit)
            echo printInput ( array("type"=>"submit", "value"=>"invia") );
    ?>    
    </form>
    <?php
    return  ob_get_clean();
}

// INPUT
// @props
// "id" => string id
// "class"  => string class
// "label"  => istring
// "value"  => string
// "required" => boolean
// "placeholder" => string 
function printInput($props)
{  
    $type = isset($props["type"]) ? $props["type"] : "text";
    $name = isset($props["name"]) ? $props["name"] : "";
    $label = isset($props["label"]) ? $props["label"] : "";
    $value = isset($props["value"]) ? $props["value"] : "";
    $form = isset($props["form"]) ? $props["form"] : "";
    $required = isset($props["required"]) ? $props["required"] : "";
    $placeholder = isset($props["placeholder"]) ? $props["placeholder"] : "";
    
    ob_start();
    switch ($type) { 
        case "submit": ?>
                <div class="cs-form-group cs-form-action" >
                <input 
                type="<?php echo $type?>" 
                class="cs-btn cs-btn-primary" 
                value="<?php echo $value?>" >
            </div>   
        <?php break;
        case "submit-btn": ?>
            <div class="cs-form-group cs-form-action" >
            <button 
            type="submit" 
            form = "<?php echo $form?>"
            class="cs-btn cs-btn-primary" 
            value="Submit" ><?php echo $label?>
            </button>
            
        </div>   
        <?php break;
        case "checkbox": ?>
        <div class="cs-form-checkbox">
            <input 
                class="cs-form-checkbox-control" 
                type="<?php echo $type?>" 
                value="<?php echo $value?>" 
                name="<?php echo $name?>" 
                placeholder="<?php echo $placeholder?>" 
                <?php echo $required ? "required" : "" ?> >
            <label 
                class="cs-form-checkbox-label" 
                for="<?php echo $name?>">
                <?php echo $label?>
            </label>
        </div>
        <?php break;
        case "text":
        case "email":
        case "tel":
        case "number": 
        default: ?>
            <div class="cs-form-group">
                <label 
                    class="cs-form-label" 
                    for="<?php echo $name?>">
                    <?php echo $label?>
                </label>
                <input 
                    class="cs-form-control" 
                    type="<?php echo $type?>" 
                    value="<?php echo $value?>" 
                    name="<?php echo $name?>" 
                    placeholder="<?php echo $placeholder?>" 
                    <?php echo $required ? "required" : "" ?> >
            </div>
    <?php break;
    }
    return  ob_get_clean();
}

