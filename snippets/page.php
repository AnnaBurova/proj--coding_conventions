<?php

/** Globals ************************************************************************************ **/

  // All globals for Project (relative)
  include_once('../inc/define.php');

  // ID from Project
  define('ID', '');

  // Path folders (from docroot to file location)
  define('PATH', '/');

  // Title from project: used in title, meta, h1
  define('TITLE', '');

/** MVC Model ********************************************************************************** **/

  // Model
  include_once('ClassName.php');
  $class = new ClassName();

  // Controller
  include_once('controller.php');

  // View
  include_once('view.php');

/** Visibility of page ************************************************************************* **/

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?=TITLE;?> - <?=ID;?> - <?=PROJECT_NAME;?></title>
  <meta name="description" content="<?=TITLE;?> - <?=ID;?> - <?=PROJECT_NAME;?>">
  <meta name="keywords" content="web-development, creations, web-design, php, js, html5, css3">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" href="/inc/images/icon.png">
  <!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="/inc/google-analytics.js"></script>
</head>
<body>
  <div id="wrapper">
    <header>
      <p id="reload_button">
        <a href="<?=PATH;?>">
          &#8634; You can reload page here
        </a>
      </p>
      <h1><?=TITLE;?></h1>
    </header>
    <main>
    </main>
    <footer>
      <?php include_once(DOCROOT.'/inc/footer.php'); ?>
    </footer>
  </div>
</body>
</html>
