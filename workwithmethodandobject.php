//OOP Work With Methods and Object.
<!-- <?php include ="function.php"; ?> -->
<form action="" method="post">
    <table>
        <tr>
            <td>Enter the first Number : </td>
            <td><input type="number" name="num1"/></td>
        </tr>
        
        <tr>
            <td>Enter the second Number : </td>
            <td><input type="number" name="num2"/></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="calculation" value="Calculate"/></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST['calculation'])){
   $numOne = $_POST['num1']; 
   $numTwo = $_POST['num2']; 
    
if(empty($numOne) or empty($numTwo)){
    echo "<span style='color:#EE6554;'>Field must not be empty</span><br/>";
}
else{
    echo "First Number is : ".$numOne. " Second Number is : ".$numTwo. "<br/>";
    
    $cal = new Calculation;
    $cal->add($numOne, $numTwo);
    $cal->sub($numOne, $numTwo);
    $cal->mul($numOne, $numTwo);
    $cal->div($numOne, $numTwo);
}
}

?>
// Wriet Here file name function.php
<?php
class Calculation{
	function add($a, $b){
		echo "Summation = ".($a+$b)."<br/>";
	}
	
	function sub($a, $b){
		echo "Subtraction = ".($a-$b)."<br/>";
	}
	
	function mul($a, $b){
		echo "Multiplication = ".($a*$b)."<br/>";
	}
	
	function div($a, $b){
		echo "Division = ".($a/$b);
	}
}

?>