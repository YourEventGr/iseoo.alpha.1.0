<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Event extends CI_Controller {
	var $API ="";
    
	function __construct(){
		parent::__construct();
		$this->API="http://localhost/rest_ci_iseoo";
	}
 
	public function index(){	
		$data['title']="Event";	
		$data['read'] = json_decode($this->curl->simple_get($this->API.'/event'));
		$data['head_info'] = $this->load->view('template/head-info',$data, true);
		$data['header'] = $this->load->view('template/header',$data, true);
		$data['sidebar'] = $this->load->view('template/sidebar',$data, true);
		$data['footer'] = $this->load->view('template/footer',$data, true);
		$data['content'] = $this->load->view('content/event',$data, true);
		$this->load->view('index',$data);
	}
	
 
}