<?php 
class blue_ocean{
	public function compare($array1, $array2)
	{
		if(empty($array1) || empty($array2))
			die('one of params is not an array');

		$result = array_diff($array1,$array2);

		print_r($result);
	}
}
blue_ocean::compare([1,2,3,4,6,10],[1]);
?>