<?php 
	
	if(!defined('BASEPATH')) exit ('no direct script allowed');

	class Home_m extends CI_Model
	{
		function __construct()
		{	
			parent::__construct();
			$this->load->database();
			$this->load->library('session');
		}

		function regis($email,$pass,$date){

			return $this->db->query("insert into users value(null,'$email','$pass','$date')");
		}

		function login($email,$pass) {
			return $this->db->query("select * from users where email='$email' and password='$pass'");
		}

		// function addreg() {
		// 	return $this->db->query("insert into ");
		// }

	}
 ?>