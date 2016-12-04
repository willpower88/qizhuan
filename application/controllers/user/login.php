<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {
	
	function __construct(){
		
		parent::__construct();
		$this->load->library('service/auth/user_service');		
		$this->load->library('auth_filter');
		$this->load->helper('qizhuan_helper');
	}
	
	public function index(){
		$this->load->view('login');
	}
	
	public function login() {
		$rst = $this->user_service->check_user($_REQUEST);
		if($rst['status'] == 'failed') {
			echo json_encode($rst);
		}
		$res = $this->user_service->login($_REQUEST['username'], $_REQUEST['password']);
		echo json_encode($res);
		//$this->load->view('index');
		//return TRUE;
	}	
	
	
}

