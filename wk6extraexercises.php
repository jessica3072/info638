<!DOCTYPE HTML>


<HEAD>
    
    <title>Week 6 Extra Exercises</title>
</HEAD>
<body>

<?php

    echo "<h2>" . "Lists - part a" . "</h2>";
    echo "Combining lists..." . "<br>";
  
$list1 = array("a", "b" , "c");
$list2 = array("1", "2", "3");  
    
$newlist = array("$list2[0]", "$list1[0]", "$list2[1]", "$list1[1]", "$list2[2]", "$list1[2]");
  
    
    
 echo "Adding " . "<b>" . "$list1[0]" . "</b>" . " to new list... adding " . "<b>" . "$list2[0]" . "</b>" . "  " . " to new list..." . "<br>";
 echo "Adding " . "<b>" . "$list1[1]" . "</b>" . " to new list... adding " . "<b>" . "$list2[1]" . "</b>" . "  " . " to new list..." . "<br>";
 echo "Adding " . "<b>" . "$list1[2]" . "</b>" . " to new list... adding " . "<b>" . "$list2[2]" . "</b>" . "  " . " to new list..." . "<br>";
    
 echo "Final new array is ";
print_r ($newlist);

echo "<h2>" . "Lists - part b" . "</h2>";
    /*revise code to create a function that takes the two lists as arguments and returns the combined list. 
    something like $newlist = list_combiner($list1, $list2); 
    */
//here is my function

/* attempt 1:
    function list_combiner() 
{
    $newerlist = list_combiner($list1, $list2);
    print_r ($newerlist);
}
*/   
    
    
    
/* from prof. maceli
$myarray = array("1","r");
    $myarray2 = array(1,2,3);

    function mynewfunction($myarray, $myarray2) {
      $mycombinedarray = array();
      // existing logic in here to combine arrays
      return $mycombinedarray;
    }

    $resultingarray = mynewfunction($myarray, $myarray2);

    print_r($resultingarray);
*/
    
//my notes -- return is used in the function context

    
echo "<br><br>";    
    
//exercise number 2
echo "<h2>" . "Pig Latin - part a" . "</h2>";
echo "converting the English text " . "Hello and welco to the course" . " to Pig Latin..." . "<br>";
    
    
echo "Here is the text in Pig Latin: " . "<i>" . "PIG LATIN TEXT" . "</i>";
    
    
//part b: write a function that does the reverse
echo "<h2>" . "Pig Latin - part b" . "</h2>";
echo "<br><br>";
    
//part 3 Roll the Dice
echo "<h2>" . "Roll the Dice" . "</h2>";

//Write a function which simulates rolling a red and a blue dice, 
/*he output should contain the values of the dice rolled, the sum of the dice, and a table listing all the possible outcomes (rolls). Use the table to calculate the probability for this sum to occur (number of ways to obtain this sum / number of total possible outcomes)
*/
    
// Micah's code example:
/* echo '<table>
      <caption>Dice Table for Six-Sided Die</caption>
      <thead>
        <tr>
          <th scope="col"></th>';
          for ($colcount = 1; $colcount <=6; ++$colcount) {
          echo '<th scope="col">' . $colcount . '</th>';
          }
        echo '</tr>
      </thead>
      <tbody>';
          for ($rowcount = 1; $rowcount <=6; ++$rowcount) {
            echo '<tr>
            <th scope="row">' . $rowcount . '</th>';
            for ($colcount = 1; $colcount <=6; ++$colcount){
              echo '<td>(' . $rowcount . ', ' . $colcount . ')</td>';
            }
          }
        echo '</tr>
        </tbody>
        </thead>
        </table>';
*/ 
    
    
    
echo "<br><br>";
    
    
    
?>
    
</body>
</html>
    