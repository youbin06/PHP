<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
      $array = array(1,2,3,4);
      $i = 0;
      while($i < count($array)){
        echo $array[$i].'<br>';
        $i = $i + 1;
      }
    ?>
  </body>
</html>
