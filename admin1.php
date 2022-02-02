<?php

$flag=0;
$s=array();
$file = fopen("details.txt", 'r');
while(!feof($file))
{
  $s=fgets($file);
  $str_arr = array_pad(explode('::', $s),4,null);
  $j_a_n=$str_arr[0];
  echo "$j_a_n::";




		
?>




<?php

		
		
		$flag=1;
	  break;
	}

	
	

	


if ($flag==0)
		echo "Please register before login <a href=index.html>Click Here to Register</a><br>";
		
		
		fclose($file);

		
?>