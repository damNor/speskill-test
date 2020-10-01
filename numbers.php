<?php 
	class Numbers{

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

	Numbers::find_narcissistic(153);
	Numbers::find_parity([2, 4, 0, 100, 4, 11, 2602, 36]);
	
?>