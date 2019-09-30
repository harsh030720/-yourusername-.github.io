<?php
 
$capital=$_POST['capital']; 
$interest=$_POST['interest']; 
$year=$_POST['year']; 
$installment=$_POST['installment']; 


print "Capital $capital<br>"; 
print "Interest $interest<br>"; 
print "Installment $installment<br>"; 
print "Years $year<br>"; 


$months=$year * 12; 

 
if (strcmp($installment,"Fixed")==0) 
 
{ 
 
    $fixedPayment=$capital / $months; 
    $interestRateForMonth=$interest / 12; 

 
    for ($i=0;$i<$months;$i++) 
    { 

        $interestForMonth=$capital / 100 * $interestRateForMonth; 
 
        $capital=$capital - $fixedPayment; 
 
        $paymentForMonth=$fixedPayment + $interestForMonth; 
 
        $month=$i+1; 
        printf("$month payment is %.2f<br>", $paymentForMonth); 
    }     
} 

else 
{ 
 
    $interest=$interest / 100; 
    $result=$interest / 12 * pow(1 + $interest / 12,$months) / (pow(1 + $interest / 12,$months) - 1) * $capital;     
    printf("Monthly pay is %.2f", $result); 
} 
?> 