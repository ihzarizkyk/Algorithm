<?php

function search($arr,$x)
{
	$n = sizeof($arr);
	for($i = 0; $i<$n; $i++)
	{
		if($arr[$i] == $x)
		return $i;
	}
	return -1;
}

// Driver Code

$arr = array(1,2,3,5,6,8,7,4,10);
$x = 1;

$result = search($arr,$x);
if($result == -1)
{
	echo "Elemen tidak ada dalam array";
}else{
	echo "Elemen ada dalam index ke-",$result;
}

// Elemen ada dalam index ke-0