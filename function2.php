<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Function2</title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>

    <?php
    function basic(){
      print("deserunt mollit anim id est laborum1.<br>");
      print("officia deserunt mollit anim id est laborum2.<br>");
    }

    basic();
     ?>
     <h2>parameter & argument</h2>
     <?php
     function sum($left, $right){
       print($left+$right);
       print("<br>");

     }

     sum(2,4);
     sum(4323,4);
      ?>
      <h2>return</h2>
      <?php
      function sum2($left, $right){
        return $left+$right;
      }
      print(sum2(2,4));
      file_put_contents('result.txt', sum2(2,4));
       ?>

  </body>
</html>
