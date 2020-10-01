<?php 
	class Numbers{
		private $number;

		public function find_narcissistic($num)
		{
			$string_length = strlen($num);
			$sum = 0;
			$num = (string) $num;
			for ($i = 0; $i < $string_length; $i++) 
			{
			$sum = $sum + pow((string)$num{$i},$string_length);
			}
			if ((string)$sum == (string)$num) 
			{
			echo  "True <br />";
			} 
			else 
			{
			echo "False <br />";
			}
		}

		function find_parity($integers) 
		{
		  $odds = [];
		  $evens = [];
		  foreach ($integers as $item) 
		  {
		    if ($item % 2) 
		    	array_push($odds, $item);
		  	  else 
		  	  	array_push($evens, $item);
		  }
		  echo  count($evens) === 1 ? $evens[0] : $odds[0] ."<br />";
		}
		   
	}

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
	Numbers::find_narcissistic(153);
	Numbers::find_parity([2, 4, 0, 100, 4, 11, 2602, 36]);
	Strings::find_needle(["red", "blue", "yellow", "black", "grey"],"blue");
?>