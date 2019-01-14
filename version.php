<?php 

function version($version1,$version2){
	$arr1=explode('.',$version1);
	$arr2=explode('.',$version2);
	for($i=0;$i<sizeof($arr1);$i++){
		if($arr2[$i]>$arr1[$i]){
			return -1;
		}
		elseif($arr2[$i]<$arr1[$i]){
			return 1;
		}
		$i=$i+1;

	}
}

$rez=version("8.1.13.41","8.1.009.125");
echo $rez;