<!DOCTYPE html>
<html>
    <head>
        <title>Code Homework #1: Variables, expressions, and control flow</title>
    </head>
    <body>
        <p>
            <h2>Challenge: Correct Change</h2>
  
    
    
<?php
               
$a = "159"; /* html is not too tricky for me, luckily, but interweaving html elements like inserting a space or a break has been tripping me up. I also got a bit tripped up and have to review the github tutorial -- kept re-saving and my folders may or may not be synced up yet --  */
        
$leftover = $a; /* Got this leftover idea from talking with Janet in peer review */
        
    $changetotal = "$1.59";
        
        
    $numdollars = (int)($a / 100);
        
        $leftover = $leftover % 100;
        $numquarters = (int)($leftover / 25);

        $leftover = $leftover % 25;
        $numdimes = (int)($leftover / 10);
        
        $leftover = $leftover % 10;
        $numnickels = (int)($leftover / 5);

        $numcents = (int)($leftover % 5); //the remaining cents
        
            
            
    echo "You are due $changetotal in change total. ";
    echo    "<br />";
            
    echo "You are due back\n" .  $numdollars . "\ndollar(s),\n" . $numquarters . "\nquarter(s),\n" . $numdimes . "\ndime(s),\n" .  $numnickels . "\nnickel(s), and\n" . $numcents . "\ncent(s)" . "<br><br>"; 
        
        
            // Promblem 2 

    echo "<h2>";
    echo "Challenge: 99 Bottles of Beer </h2>"; 
            // Working through this
$count = 4;
        
while ($count >= 1) {            
echo "$count bottles of beer on the wall, $count bottles of beer!";
    
echo "<br>\n";
    --$count;
echo "Take one down, pass it around," . "\n$count" . "\n bottles of beer on the wall!\n";
    
}
            
?>
    
</body>  
</html>