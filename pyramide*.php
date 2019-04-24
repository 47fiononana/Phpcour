

 <?php
$a=5;

	
      for ($j=0; $j<=$a ; $j++) { 
      	   $stars = str_repeat('* ', ($j - 1) * 1 + 1);
      	    $space = str_repeat(' ', $a - $j);
      			echo $space . ' ' . $stars . '<br />';

      			echo "<pre>";
      			
      	}
    

    
      
?>