<!DOCTYPE html>
<html>
    <head>
        <title>Code Homework #1: Variables, expressions, and control flow</title>
    </head>
    <body>
        <p>
            <h2>Challenge: Correct Change</h2>
<br>    
    
    
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
            
    echo "You are due back\n .  $numdollars . $numnickels . $numquarters . $numnickels . $numcents . <br>"; 
            /* Still thinking through how to procede and which functions?? would be wise in this case*/


 
    echo "<h2>";
    echo "Challenge: 99 Bottles of Beer </h2>"; 
            // I ran out of time and got stuck on figuring out filezilla
    

        
            
echo " bottles of beer on the wall,  bottles of beer!
Take one down, pass it around,  bottles of beer on the wall!";
    
            
            
?>
    
</body>  
</html>