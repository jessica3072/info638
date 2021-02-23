<!DOCTYPE HTML>


<HEAD>
</HEAD>
<BODY>

<?php

    echo "<h1>" . "Array Basics" . "</h1><br>";
    
    echo "Pt. 1: Numeric Arrays:" . "<br><br>";
    //here we go
    // create a numeric array
/*
   $mynumericarray = array("Jessica", "NoMiddle", "Salinas");
    print ($mynumericarray[1]);
    //remove your middle name
 $mynumericarray[];
*/
    //1
    $myarray[0] = "Jessica";
    $myarray[1] = "NoMiddle";
    $myarray[2] = "Salinas";
    
    
    $arrayA = $myarray[0] . " " . $myarray[1] . " " . $myarray[0];
    
    echo "A: ";
    print ($arrayA);
    echo "<br>" . "B: ";
    print ($myarray[0]) . " " . ($myarray[2]);
    echo "<br>" . "C: ";
    print_r($arrayA);
    
    echo "<br><br>" . "Pt. 2: Associative Arrays" . "<br><br>";
//
    
    
    
    // next section
    echo "<h1>" . "Foreach " . "</h1><br><br>";
    
    
    
    
    
    
?>



</BODY>
</HTML>
