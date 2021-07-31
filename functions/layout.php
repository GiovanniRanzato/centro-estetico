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
            echo $content["layoutFunction"]($content);
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
                if ($action)
                    echo printBtn($action);
                ?>
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
// "brakePointType" => string with bootstrap breakpoint type
// "elements" => array of html string with element contents,
function printTopBar($props)
{
    $class = isset($props["class"]) ? $props["class"] : "";
    $logoLink = isset($props["logoLink"]) ? $props["logoLink"] : [];
    $logoLink["class"] = isset ($logoLink["class"]) ? $logoLink["class"] : "cs-logo";
    $topNav = isset($props["topNav"]) ? $props["topNav"] : [];
    $socialNav = isset($props["socialNav"]) ? $props["socialNav"] : [];
    $mainNav = isset($props["mainNav"]) ? $props["mainNav"] : [];

    
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];

    ob_start(); ?>

    <div class="<?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?> >
    <div class="cs-top-nav">
        <?php echo printNav($topNav); ?>
        <?php echo printNav($socialNav); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php echo printLink($logoLink); ?>
            </div>
            <div class="col-md-10 cs-main-nav">
                <?php echo printNav($mainNav); ?>
            </div>
        </div>
    </div>

<?php return  ob_get_clean();
}


// INLINE CARD LIST
// @props
// "class" => string css class,
// "brakePointType" => string with bootstrap breakpoint type
// "elements" => array of html string with element contents,
function printAvatarCardHeader($props)
{
    $class = isset($props["class"]) ? $props["class"] : "";
    $title = isset($props["title"]) ? $props["title"] : [];
    $media = isset($props["media"]) ? $props["media"] : [];
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];

    ob_start(); ?>
    <div class="cs-avatar-card-headder<?php echo $class ?>" <?php echo printArrayOptions($htmlOptions) ?>>
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

    ob_start(); ?>
    <div class="cs-card  <?php echo $class ?? ""; ?>" <?php echo printArrayOptions($htmlOptions) ?>>

        <?php if ($header) { ?>
            <div class="cs-card-header">
                <?php echo $props["header"]; ?>
            </div>
        <?php } ?>

        <?php if ($body) { ?>
            <div class="cs-card-body">
                <?php echo $props["body"]; ?>
            </div>
        <?php } ?>

        <?php if ($footer) { ?>
            <div class="cs-card-footer">
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

function printNav($props)
{
    $id = isset($props["id"]) ? $props["id"] : "";
    $navitems = isset($props["navitems"]) ? $props["navitems"] : [];
    $class = isset($props["class"]) ? $props["class"] : "cs-nav";
    $htmlOptions = isset($props["htmlOptions"]) ? $props["htmlOptions"] : [];

    ob_start(); ?>
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

// ICON
// @props
// id: string  (font awesome class)
function printImg($props)
{
    $id = isset($props["id"]) ? $props["id"] : "";
    $title = isset($props["title"]) ? $props["title"] : "";
    $class = isset($props["class"]) ? $props["class"] : "";
    $src = isset($props["src"]) ? $props["src"] : "";

    ob_start(); ?>
    <img 
        id="<?php echo $id ?>"
        class="<?php echo $class ?>"
        src="<?php echo $src ?>" 
        alt="<?php echo $title ?>" >
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

// PRINT ARRAY OPTIONS
function printArrayOptions($options, $separator = "=", $quotes = '"')
{
    $result = "";
    foreach ($options as $key => $val) {
        $result .= $key . $separator . $quotes . $val . $quotes;
    }
    return $result;
}
