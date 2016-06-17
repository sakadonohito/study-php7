<?php
require_once dirname(__FILE__)."/../vendor/autoload.php";

use Controllers\DefaultController as DefaultController;

$app = new DefaultController();
$app->run();
/*
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Study PHP7</title>
  </head>
  <body>
    <h1><?php echo 'Hello PHP7.';?></h1>
  </body>
</html>
*/