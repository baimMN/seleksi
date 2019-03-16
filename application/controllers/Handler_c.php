<?php 
if(!defined('BASEPATH')) exit ('no direct script allowed');
error_reporting(2);

class Handler_c extends CI_Controller 
{
	function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$login = $this->login();
		$regis= $this->regis();
		$this->load->model('Home_m');
		$data['routes'] = $this->routes();
		$data['login'] = $this->login();
		$data['regis']= $this->regis();
		$this->load->view('handle.php',$data);

			
	}


	function routes() {
		if(isset($_GET['data'])){	
			if($_GET['data'] == "logform"){
				return "login.php";
			}		
			elseif ($_GET['data'] == "daftar") {
				return "daftar.php";
			}
		}
	}


	function login () {
		if(isset($_POST['kirim'])){
				$email= $_GET['email'];
				$pass= $_GET['pass'];
				$query =$this->Home_m->login($email,$pass);
				$f=$query->result();
				if($query->num_rows() > 0){
					$val = array('email' => '$f->email','id' => '$f->id' );
					$this->session->set_userdata('login','$val');
					redirect('');
				}

				else {
					return "Email atau password salah";
				}	
		}

	}
		


	function regis () {
		if(isset($_POST['daftar'])){	
			$email= $_POST['email'];
			$pass= $_POST['pass'];
			$query=$this->Home_m->regis($email,$pass,$date);
			if ($query > 0) {
				return "Akun Berhasil Dibuat";
			}
			else
			{
				"Gagal membuat akun";
			}
		}
	}


}
 ?>