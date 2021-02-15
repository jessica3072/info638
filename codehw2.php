<!DOCTYPE html>

<html>

<head>
 <title>Code Homework #2: Functions</title>
    </head>
<body>
<p>
    
    <h2>Challenge: ISBN Validation</h2>
    
    
<?php
    /*Here we go, attempting the first challenge, trying to remember what function to use here... first obtain the sum of (10 * the first digit, 9 times the second, and so on until 1 times the last digit. Second, divide the sum by 11. If sum leaves no remainder, ISBN = valid.*/

    
$myISBN = "0812995821";
  
print "Checking ISBN: ". $myISBN . "for validity..." . "<br><br>";
    
// 0812995821
    
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
    
// function ValidateISBN()
  
$SumOfDigits = (10 * $D1) + (9 * $D2) + (8 * $D3) + (7 * $D4) + (6 * $D5) + (5 * $D6) + (4 * $D7) + (3 * $D8) + (2 * $D9) + (1 * $D10);
$Result = $SumOfDigits / 11;
return $Result;

    // $ReturnValue = ValidateISBN 
    
if ($ReturnValue % 0)
{
    echo "This is a valid ISBN!";
}
else    
{
    echo "This is not a valid ISBN.";
    }
    
// getting closer! still working out kinks

 
      
?>
    
    
    
    
    
    
    <p><br>
    <h2>Challenge: Coin Toss</h2>
    
<?php
    //Coin toss challenge

?>
    
    
    
    
    
</body>
</html>