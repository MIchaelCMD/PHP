<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Tax Calculator 3 bands</title>
    <meta charset='utf-8'>
    
    </head>
  <body>

   <h1>Results Calculator</h1>
  <br>

     <?php
    
    
     $income = 36000.00;
     $gross = 0;
     
     if($income <= 14800.00) {
        $taxAMT = ($income * 0.2);
        $gross = ($income - $taxAMT);
        
        echo "<h3>Your income is $income. </br>
              Your tax taken is $taxAMT. <br>
              Your gross pay is $gross.</h3>";
        }
        
     elseif($income > 14800.00 && $income <= 29600.00) {
        
         $taxAMT = ($income * 0.42);
         $gross = ($income - $taxAMT);
         
         echo "<h3>Your income is $income. </br>
              Your tax taken is $taxAMT. <br>
              Your gross pay is $gross.</h3>";     
        
     }
    
     else {
        
        $taxAMT = ($income * 0.5);
        $gross = ($income - $taxAMT);
        
        echo "<h3>Your income is $income. </br>
              Your tax taken is $taxAMT. <br>
              Your gross pay is $gross.</h3>";
     }       
            
    
     ?>
    
  </body>
</html>