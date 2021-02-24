<!DOCTYPE html>
<html>
<head>
    <title>Code HW 3
    </title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<html>
<body>
    
    
<?php
echo "<h3>" . "Code Homework #3 [Arrays]" . "</h3>";
echo "<h4>" . "1. Challenge: Book lists" . "</h4>";
/*getting very comfortable now interpolating html within php after practicing taking notes in it over the past week! */

//multi-dimensional arrays
//table
    
/* started with actual data to make sure table looked the way it should. moving to variables to input the rest of the data.*/
//row 3 (not counting header)
$variable1 = "PHP Cookbook: Solutions & Examples for PHP Programmers";
$variable2 = "David";
$variable3 = "Sklar";
$variable4 = "14";
$variable5 = "Paperback";
$variable6 = "$40.58";

//now starting an array/multi for the rest of the information
$booklistdata = array("JavaScript and JQuery: Interatcive Front-End Web Development", "Jon", "Duckett", "251", "Paperback", "$22.09", "Modern PHP: New Features and Good Practices", "Josh", "Lockhart", "7", "Paperback", "$28.49", "Programming PHP", "Kevin", "Tatroe", "26", "Paperback", "$28.96");
//row 4  -- call back [0]-[5]
//row 5 -- call back [6] - [11]
//row 6 -- call back [12] - [17]

//i'm sure there's a way to do this nesting arrays ???    

echo "<i>" . "Feel free to hover over the data :)" . "</i><br><br>";
echo "<table><caption>" . "Lovely Stylized Table" . "</caption><thead><tr><th>" . "Title" . "</th><th>" . "First Name" . "</th><th>" . "Last Name" . "</th><th>" . "Number of Pages" . "</th><th>" . "Type" . "</th><th>" . "Price" . "</th></tr></thead><tbody><tr><td>" . "PHP and MySQL Web Development" . "</td><td>" . "Luke" . "</td><td>" . "Welling" . "</td><td>" . "144" . "</td><td>" . "Paperback" . "</td><td>" . "$31.63" . "</td></tr><tr><td>" . "Web Design with HTML, CSS, JavaScript and jQuery" . "</td><td>" . "Jon" . "</td><td>" . "Duckett" . "</td><td>" . "135" . "</td><td>" . "Paperback" . "</td><td>" . "$41.23" . "</td></tr><tr><td>" . "$variable1" . "</td><td>" . "$variable2" . "</td><td>" . "$variable3" . "</td><td>" . "$variable4" . "</td><td>" . "$variable5" . "</td><td>" . "$variable6" . "</td></tr><tr><td>" . "$booklistdata[0]" . "</td><td>" . "$booklistdata[1]" . "</td><td>" . "$booklistdata[2]" . "</td><td>" . "$booklistdata[3]" . "</td><td>" . "$booklistdata[4]" . "</td><td>" . "$booklistdata[5]" . "</td><tr><td>" . "$booklistdata[6]" . "</td><td>" . "$booklistdata[7]" . "</td><td>" . "$booklistdata[8]" . "</td><td>" . "$booklistdata[9]" . "</td><td>" . "$booklistdata[10]" . "</td><td>" . "$booklistdata[11]" . "</td><tr><td>" . "$booklistdata[12]" . "</td><td>" . "$booklistdata[13]" . "</td><td>" . "$booklistdata[14]" . "</td><td>" . "$booklistdata[15]" . "</td><td>" . "$booklistdata[16]" . "</td><td>" . "$booklistdata[17]" . "</td></tr></tbody><tfoot><tr>" . "</tr></tfoot></table>";
    



    
    
    
//part two
echo "<br><h4>" . "2. Challenge: Coin Toss, continued" . "</h4>";
//modify program to 1: be a function that takes one argument

    
/*2: modify code to use this argument to allow a variable number of heads in a row to be chosen
*/
//whoops running out of time

    
    
?>
</body>
</html>