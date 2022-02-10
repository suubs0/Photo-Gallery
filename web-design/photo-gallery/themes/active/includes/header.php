<?php
// this file contains the opening tags for the html and body tags
// it is always included at the start of the template file 
// to open the tags properly
// tags that need unique information like <title> and <meta> call up variables to fill in the blanks
?>
<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />

<title><?php echo $metatitle; ?></title>
<?php // each template must have a value for $metatitle so it can be printed here ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

<meta name="description" content="<?php echo $metadescription; ?>">
<?php // each template must have a value for $metadescription so it can be printed here ?>
<link rel="stylesheet" href="/web-design/photo-gallery/themes/active/css/simple-css-reset-v2.0.css" media="all">
<link rel="stylesheet" href="/web-design/photo-gallery/themes/active/css/style.css" media="all">
</head>
<body>

<header>
    <nav>
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/web-design/photo-gallery/datasource/nav.php"; 
        // require the navigation file to be loaded here
        ?>
    </nav>
</header>


