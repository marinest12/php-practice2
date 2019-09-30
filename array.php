<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $coworker = array('egoing', 'choish','sagh','choisl');
    echo $coworker[2].'<br>';
    echo $coworker[3].'<br>';
    var_dump(count($coworker));
    array_push($coworker, 'giref');
    var_dump($coworker);


    
     ?>
  </body>
</html>
