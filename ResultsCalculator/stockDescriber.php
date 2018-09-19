<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Stock Description</title>
    <meta charset='utf-8'>
    
  </head>
  <body>
    
    <h1>Stock Checker</h1>
    
    <?php
        
        $product_name = "Card";
        $cards = "Video cards range from EUR50 to EUR500";
        $monitors = "LCD monitors range from EUR200 to EUR400";
        $processors = "Intel processors range from EUR100 to EUR1000";
        $noMatch = "Sorry, We do not have this product";
        
        
        switch($product_name)
        {
            case 'Processor':
                echo "$processors";
                break;
                
            case 'Card':
                echo "$cards";
                break;
                
            case 'Monitor':
                echo "$monitors";
                break;
        
            default:
                echo "$noMatch";
                
        }
        
    
    ?>


  </body>
</html>