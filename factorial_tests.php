<?php 
include "fact.php";
include "version.php"


function test($input,$output){
$rez=str_count($input);

	if($rez==$output){	
		echo "Test c переменной  cдан ".$input;
	}
	else{
	  echo "test с числом ".$input. "провален";
	}
};

test(15,3); echo "\n";
test(0,0);echo "\n";
test(-3,0);

