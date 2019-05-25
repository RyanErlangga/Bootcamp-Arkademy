<?php
for ($i=0; $i <5; $i++)  
{
   for ($j=0; $j <5; $j++) 
   {
      
      if ($i==0) {
      	echo "X";
      } elseif ($i==4) {
      	echo 'X';
      } elseif ($j==2) {
      	echo "x";
      } else {
      	echo ' = ';
      }
   }
   echo "<br>";
}

 ?>