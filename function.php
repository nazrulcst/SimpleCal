<?php 
class Calculator
{
	public function add($a,$b,$c){
		if($c=='+'){
			echo"Your addition is = ".($a+$b);
		}elseif($c=='-'){
			echo"Your subtraction is =".($a-$b);
		}elseif($c=='*'){
			echo"Your multiplex is =".($a*$b);
		}elseif($c=='/'){
			echo"Your division is =".($a/$b);
		}
	}
}
?>