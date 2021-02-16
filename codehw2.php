<!DOCTYPE html>
<html>
<head>
 <title>Code Homework #2: Functions</title>
    </head>
<body>
<p>
    
    <h2>Challenge: ISBN Validation</h2>
<?php
    /*first obtain the sum of (10 * the first digit, 9 times the second, and so on until 1 times the last digit. Second, divide the sum by 11. If sum leaves no remainder, ISBN = valid.*/

    
$myISBN = "0812995821";
print "Checking ISBN: ". $myISBN . "for validity..." . "<br><br>";
    
/* 0812995821 -- 
    
$D1 = 0;
$D2 = 8;
$D3 = 1;
$D4 = 2;
$D5 = 9;
$D6 = 9;
$D7 = 5;
$D8 = 8;
$D9 = 2;
$D10 = 1;
    
function ValidateISBN() ?? 
  
$SumOfDigits = (10 * $D1) + (9 * $D2) + (8 * $D3) + (7 * $D4) + (6 * $D5) + (5 * $D6) + (4 * $D7) + (3 * $D8) + (2 * $D9) + (1 * $D10);
$Result = $SumOfDigits / 11;

wait actually maybe substring function ?!

  

$SumOfDigits = (substr($myISBN, -9, 1) * 10) + (substr($myISBN, -8, 1) * 9) + (substr($myISBN, -7, 1) * 8) + (substr($myISBN, -6, 1) * 7) + (substr($myISBN, -5, 1) * 6) + (substr($myISBN, -4, 1) * 5) + (substr($myISBN, -3, 1) * 4) + (substr($myISBN, -2, 1) * 3) + (substr($myISBN, -1, 1) * 2) + (substr($myISBN, 10) * 1);
    
*/    

$str = $myISBN;
    
$D1 = $str[0] * 10;
$D2 = $str[1] * 9;
$D3 = $str[2] * 8;
$D4 = $str[3] * 7;
$D5 = $str[4] * 6;
$D6 = $str[5] * 5;
$D7 = $str[6] * 4;
$D8 = $str[7] * 3;
$D9 = $str[8] * 2;
$D10 = $str[9] * 1;
    
$SumOfDigits = ($D1 + $D2 + $D3 + $D4 + $D5 + $D6 + $D7 + $D8 + $D9 + $D10) ;
$Result = $SumOfDigits / 11;
    
    
return $Result;

    // $ReturnValue = ValidateISBN 
    
if ($Result != 0)
{
    echo "This is not a valid ISBN!" . "<br>";
}
else    
{
    echo "This is a valid ISBN!";
    };
    
// getting closer! still working out kinks
/* if ($some_variable % $some_other_variable != 0) 
    {echo "isbn is not valid"}
else {
echo "isbn is valid!" 
}
*/




      
?>
    
    
    
    
    
    
    <p><br>
    <h2>Challenge: Coin Toss</h2>
    
<?php
    //Coin toss challenge

?>
    
    
    
    
    
</body>
</html>