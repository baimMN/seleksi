<?php 
	function cek1($pwnya){
		if(preg_match("/[a-z]/", $pwnya) != 0  )
			{
				if(preg_match("/[.]/", $pwnya) != 0){
					if(strlen($pwnya) == 8){
						return true;
					}
					else
						{return false;}
				}
				else
					{return false;}
			}
		else
			{return false;}
	}


	function cek2($pwnya){
		if(preg_match("/[a-z]/", $pwnya) != 0  )
			{
				if(preg_match("/[.\'^£$%&*()}{@#~?><>,|=_+¬-]/", $pwnya) != 0){
					if(strlen($pwnya) >= 8){
						if(preg_match("/[A-Z]/", $pwnya) != 0  )
						{
							if(preg_match("/[0-9]/", $pwnya) != 0  ){
								return true;
							}
							else
								{return false;}
						}
						else
							{return false;}
					}
					else
						{return false;}
				}
				else
					{return false;}
			}
		else
			{return false;}
	}
	
	//aku sih pke vardump kak
	echo var_dump(cek2("sdsdaa%sd3d");

 ?>