<?php

$year = 2023;
$født1 = "Oscar";
$født2 = "Ludvig";
$født3 = "beate";

$poop = "eldere";
$poop1 = "yngere";


$tall1 = 1980;
$tall2 = 2003;
$tall3 = 2007;






 $sum3 = $year - $tall2;
 $sum2 = $year - $tall1;
 $sum = $year - $tall3;

    echo ("<br>$year<br>");
    echo ("<br>$født1 er født i $tall1 så han er $sum2 år gammel<br>");
    echo ("<br>$født2 er født i $tall2 så han er $sum3 år gammel<br>");
    echo ("<br>$født3 er født i $tall3 så ho er $sum år gammel<br>");

$mop = $sum3 - $sum;
    



    
if ($sum3 <= $sum){
 echo ("<br>$født3 er $mop år $poop en $født2<br>");
}

else if ($sum3 >= $sum){
  echo ("<br>$født3 er $mop år $poop1 en $født2<br>");
}



$mop1 = $sum2 - $sum3;
    



    
if ($sum2 >= $sum3){
 echo ("<br>$født1 er $mop1 år $poop en $født2<br>");
}

else if ($sum2 <= $sum3){
  echo ("<br>$født1 er $mop1 år $poop1 en $født2<br>");
}

?>



