
<?php 
$data= array(array('h','s','a'),array('a'),array('g','s','g','g','d','z','p'));
function urutkan($val){
	$new=array();
	$f=count($val);
	for ($i=0,$f;$i < $f;$i++)
	{	
		sort($val[$i]); 
	}
	asort($val);
	return $val;
}

echo json_encode(urutkan($data));

 ?>