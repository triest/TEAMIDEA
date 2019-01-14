<?php 

function factofialpp($number){

	if ($number<=0) {
		return 1;
	}
	else{
		return $number * factofialpp($number-1);
	}
}	


function str_count($input){
   if(!is_int($input)){
		return "incorect input";
	}
    $input=factofialpp($input);
 
	$str=strval($val);
	$lastchar=substr($input, -1);
	$count=0;
while ($lastchar=='0') {
	# code...
	$lastchar=substr($input, -1);
	$count++;
	$input=substr($input,0, -1);
}
if ($count<=0){
 return 0;		
		}
	else{
		return $count-1;
	}
 
}


$n=10;

echo "number of null for fact ".$n ; echo ":\n";
echo str_count($n);

//echo "Test:";

