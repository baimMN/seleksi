<?php 	
function acak($jml){
	$bahan="0123456789abcdefghijklmnopqrstuvwxyz";
	for($i=0,$jml;$i < $jml;$i++){
		$new=substr(str_shuffle($bahan),1,32);
		echo "$new<br/>";
	}
}
echo acak(2);
 ?>