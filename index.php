<?php   

// set the default variables
$page = 'home';
$direction = 'ltr';

if(isset($_GET['page'])) {
  $page_prefix = basename($_GET['page']);
} else {
  $page_prefix = 'Meat Balls Delivery';
}

if(isset($_GET['direction'])) {
  $direction = basename($_GET['direction']);
} else {
  $direction = 'ltr';
}

// set the page title
$page_title= ucfirst(str_replace("-"," ",$page_prefix)) ." - ". "O Gosto da verdadeira Meat Ball Italiana";

// set the page description
$page_description = "Gaucho is an exquisite food & restaurant HTML template with a unique concept. Gaucho comes bundled with astounding features like page preloader, pre-built pages, full page slider and much more";

// disallowed paths 
$no_access = array(
  'includes/footer.php',
  'includes/head.php', 
  'includes/header.php', 
  'includes/nav.php', 
  'includes/nav-one-page.php', 
  'includes/offcanvas.php', 
  'includes/toolbar.php'
);

// check if file exists
if (!empty($_GET['page'])) { 
  $new_page = basename($_GET['page']); 
  if (!in_array($new_page, $no_access) && file_exists("{$new_page}.php")) {
      $page = $new_page;
  } else {
    $page = '404';
  }
}

// include header
if ($page == '404') {
  include("includes/head.php");
} else {
  include("includes/header.php");
}

// include page 
include("$page.php");

// include offcanvas menu
if ($page == "one-page-layout") {
  include("includes/offcanvas-one-page.php");
 } else {
  include("includes/offcanvas.php"); 
}

// include footer
include("includes/footer.php");

?>