<?php
class Strings{
	public function find_needle($strings, $needle){
		/*
		findNeedle(["red", "blue", "yellow", "black", "grey"], "blue")
		This function should return 1 as the index of the needle (blue)
		*/
		$the_key = null;
		if(is_array($strings))
		{
			foreach ($strings as $key => $string) 
			{
				if($string == $needle){
					$the_key[] = $key;
				}
				
			}	

		}
		print_r($the_key)."<br />";
	}
}
Strings::find_needle(["red", "blue", "yellow", "black", "grey"],"blue");
?>