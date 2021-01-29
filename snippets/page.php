<?php

/** Globals ************************************************************************************ **/

  include_once('../inc/define.php');
  define('ID', '');
  define('PATH', '/');
  define('TITLE', '');

/** Errors ************************************************************************************* **/

  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  ini_set('log_errors', 'On');
  ini_set('error_log', DOCROOT);

/** MVC Model ********************************************************************************** **/

  include_once('ClassName.php');
  $class = new ClassName();

  include_once('controller.php');

  include_once('view.php');

/** Visibility of page ************************************************************************* **/

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />

  <title><?=TITLE;?> - <?=ID;?> - <?=PROJECT_NAME;?></title>
  <meta name="description" content="<?=TITLE;?> - <?=ID;?> - <?=PROJECT_NAME;?>" />
  <meta name="keywords" content="web-development, creations, web-design, php, js, html5, css3" />

  <link rel="icon" href="/inc/images/icon.png" />
  <!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
  <link rel="stylesheet" type="text/css" href="style.css" />
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
