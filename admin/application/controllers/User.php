<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Controller {
	var $API ="";
    
	function __construct(){
		parent::__construct();
		$this->API="http://localhost/rest_ci_iseoo";
	}
 
	public function index(){	
		$data['title']="User";
        $data['read'] = json_decode($this->curl->simple_get($this->API.'/user'));
		$data['head_info'] = $this->load->view('template/head-info',$data, true);
		$data['header'] = $this->load->view('template/header',$data, true);
		$data['sidebar'] = $this->load->view('template/sidebar',$data, true);
		$data['footer'] = $this->load->view('template/footer',$data, true);
		$data['content'] = $this->load->view('content/user',$data, true);
		$this->load->view('index',$data);
	}
	
 
}