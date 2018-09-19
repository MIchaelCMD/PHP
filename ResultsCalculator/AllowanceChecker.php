<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Allowance Checker</title>
    <meta charset='utf-8'>
    
  </head>
  <body>

    <h1>Allowance Checker</h1>
    
    
    <?php
    
       $cost = 266.00;
       
       if($cost <= 33.64)
        echo "<h3>You have no allowance.</h3>";
        
       elseif($cost > 33.64 && $cost <= 252)
       {
            $allowance = ($cost * 0.80);
            echo "<h3>Your allowance is EUR$allowance</h3>";
       } 
    
        else
        {
            echo "<h3>Your allowance is 201.60</h3>";
        }
    ?>


  </body>
</html>