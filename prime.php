<?php
error_reporting(E_ALL);
//Program to find prime numbers in between a range

$num =24;

for( $j = 2; $j <= $num; $j++ )
{
	for( $k = 2; $k < $j; $k++ )
	{
		echo $j."J====K".$k;
		
		if( $j % $k == 0 )
		{
			break;
		}
	}	
if($k == $j)
echo "Prime Number :". $j."<br/>";
}
?>
