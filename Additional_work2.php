



 <?php 
      $userValue = rand(0,100);
      $var1 = 1;
      $var2 = 1;
      
      

      if ($var1 > $userValue) {
      	echo 'задуманное число не входит в числовой ряд';
      	exit;
      } 
       

      if ($var1< $userValue) {
      	 if ($var1==$userValue);{
        echo 'задуманное число входит в числовой ряд';
        exit;
      } 
      }
      if ($var1 != $userValue) {
      
          for ($var1 = 1; $var2 = 1; $var1 < $userValue) {
          	echo $var1;
         }
         }
        
        
        
  ?>   

