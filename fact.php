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
return $count-1;

}


//echo "count "; echo count_zerro(20);
echo ; echo str_count(15);