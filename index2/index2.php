<!-- Work with Class, Method and Object -->

<!-- 
// Difference between isset() and empty()
-----------------------------------------
isset() 
is used to check if the variable is set with the value or not 

and 

Empty() 
is used to check if a given variable is empty or not.

isset() returns true when the variable is not null whereas 

Empty() returns true if the variable is an empty string. 

Null means nothing. Its just a literal. Null is the value of reference variable. 
But Empty string is blank.It gives the length=0. Empty string is a blank value,
means the string does not have any thing.

-->



<?php 

include "headerz.php"; 
include "functions.php"; 

?>


<section class="mainContent">
<form  action="" method="POST">
                
        <table >
            <tr>
                <td>Enter First Number </td>
                <td><input type="number" name="num1"/></td>
            </tr> 
            <tr>
                <td>Enter Second Number </td>
                <td><input type="number" name="num2"/></td>
            </tr> 
            <tr>
                <td></td>
                <td><input type="submit" name="calculation" value="Calculate" /></td>
            </tr> 
            
        </table>
</form>
</section> 

<?php

    if(isset($POST["calculation"])){ // see the logic
        $numOne = $POST['num1'];
        $numTwo = $POST['num2'];
    if(empty($numOne) or empty($numTwo)){
        echo "<span style='color:blue'>blue</span>";  
    }
    else{
    $FirstCal = new Calculation;
    $FirstCal -> add($numOne,$numTwo);
    $FirstCal -> sub($numOne,$numTwo);
    $FirstCal -> mul($numOne,$numTwo);
    $FirstCal -> div($numOne,$numTwo);
    }
}

?>
<?php include "footerz.php";?>
