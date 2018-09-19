<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Months</title>
    <meta charset='utf-8'>
    
  </head>
  <body>

    <h1>Is it August????</h1>
  
    <?php
    
       $month = date('F');
       
        if($month == "August")
        {
            echo "August is so warm";
        }
        else
        {
            echo "It is not August!";
        }
    
    ?>
    
    
  </body>
</html>