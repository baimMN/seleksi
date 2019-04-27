<?php 
function biodata(){
$name="ibra";
$address="jl.gorda";
$hobbies=array("ngoding","makan");
$is_married=false;
$schoolfrag=["highschool" => "smkn51","unviversity" => "ugm"];
$school=(object)$schoolfrag;
$skil1 = new stdClass(); 
$skil1->skill1= "bikin orng kesel";
$skil2 = new stdClass(); 
$skil2->skill2= "ngoding";
$skill = array($skil1,$skil2);

$return = array($name,$address,$hobbies,$is_married,$school,$skill);
return json_encode($return);
}
echo biodata();
 ?>