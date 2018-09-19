<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Tax Calculator 2 bands</title>
    <meta charset='utf-8'>
    
  </head>
  <body>

  <h1>Results Calculator</h1>
  <br>
  
  <?php
    
    $r1 = 55;
    $r2 = 60;
    
    $avg = ($r1 + $r2) / 2;
    
    if($avg > 40)  {
        echo "<h2>You win! <br>Your average is $avg!</h2>";
    }
    else
    {
        echo "<h2>You Lose ;-;</h2>"; 
    }
    
    
     $income = 65000.00;
     $gross = 0;
     
     if($income <= 14800.00) {
        $taxAMT = ($income * 0.2);
        $gross = ($income - $taxAMT);
        
        echo "<h3>Your income is $income. </br>
              Your tax taken is $taxAMT. <br>
              Your gross pay is $gross.</h3>";
        }
    
    else {
        
        $taxAMT = ($income * 0.42);
        $gross = ($income - $taxAMT);
        
        echo "<h3>Your income is $income. </br>
              Your tax taken is $taxAMT. <br>
              Your gross pay is $gross.</h3>";
     }       
    
    
      echo ($income < 14800.00) ? "<h3>Your income is $income. </br>
              Your tax taken is $taxAMT. <br>
              Your gross pay is $gross.</h3>" : "<h3>Your income is $income. </br>
              Your tax taken is $taxAMT. <br>
              Your gross pay is $gross.</h3>";
    
    
  ?>
  </body>
</html>