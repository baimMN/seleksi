<?php 	
function gambar($val){
	for($i=1,$val;$i <= $val;$i++ ){
		$value=$val*2;
		if($i == 1 or $i == $val)
		{
			$frag=str_repeat("+ ", $val);
			echo "$frag<br/>";
		}
		else{
			$equal=str_repeat("= ", $val);
			$result=substr_replace($equal, "+", $value/2-1,1);
			echo "$result<br/>";
		}
		
	}
}
echo gambar(9);
 ?>