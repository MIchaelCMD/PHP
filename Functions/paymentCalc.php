<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Payment Calculator</title>
    <meta charset='utf-8'>
    
  </head>
  <body>
    
    <?php
        
        echo "Your payment is " . calcPay(24, 3);  
    
        function calcPay($hours, $rate)
        {
            if($hours > 60)
            {
                return 60 * $rate;
            }
            else
            {
                return $hours * $rate;
            }
        }
    
        
    ?>


  </body>
</html>