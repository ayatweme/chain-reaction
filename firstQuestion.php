<?php
function sortList($array){
	if(count($array) == 1 ){
		return $array;
	} 
	$mid = count($array) / 2;
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);
	$left = sortList($left);
	$right = sortList($right);
	return merge($left, $right);
}
function merge($left, $right){
	$res = array();
	while (count($left) > 0 && count($right) > 0){
		if($left[0] > $right[0]){
			array_push($res, $right[0]);
			$right = array_slice($right , 1);
		}else{
			array_push($res, $left[0]);
			$left = array_slice($left, 1);
		}
	}
	while (count($left) > 0){
		array_push($res, $left[0]);
		$left = array_slice($left, 1);
	}
	while (count($right) > 0){
		array_push($res, $right[0]);
		$right = array_slice($right, 1);
	}
	return $res;
}
$array = array(3, 6, 8, 7, 0, 1, 4, 2, 9, 5 );
echo "array to be sorted:".'<br>';
echo implode(',', $array).'<br>';
echo "array after sort:".'<br>';
echo implode(', ',sortList($array));