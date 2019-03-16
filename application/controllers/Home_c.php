<?php 
if(!defined('BASEPATH')) exit ('no direct script allowed');
error_reporting(3);

class Home_c extends CI_Controller 
{
	function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Home_m');
	}


	function index() {
		$this->load->view('Home.php');
	}

	function login () {
		$email= $_GET['email'];
		$pass= $_GET['pass'];
		$query = $this->Home_m->login($email,$pass);
		if($query > 0){
			return "";
		}
		else {
			return "Email atau password salah";
		}
	}

	function regis () {
		$email= $_GET['email'];
		$pass= $_GET['pass'];
		$date="ini date";
		$query=$this->Home_m->regis($email,$pass,$date);
		if ($query > 0) {
			return "Akun Berhasil Dibuat";
		}
		else
		{
			"Gagal membuat akun";
		}
	}

	function addreg() {

	}

}
 ?>