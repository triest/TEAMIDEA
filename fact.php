<?php 

function factofialpp($number){

	if ($number<=0) {
		return 1;
	}
	else{
		return $number * factofialpp($number-1);
	}
}	

function count_zerro($input){
$num=factofialpp($count);
$ost='';
$count=0;
while ($ost==0 and $num>10){
	echo "ost: "+$ost;
	echo "num"+$num;
	$ost=$num%10;
	$count++;
	$num=intdiv($num, 10);
};
return $count;
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