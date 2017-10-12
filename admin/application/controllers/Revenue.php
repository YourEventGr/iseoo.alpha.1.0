<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Revenue extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
 
	public function index(){	
		$data['title']="Revenue";	
		$data['head_info'] = $this->load->view('template/head-info',$data, true);
		$data['header'] = $this->load->view('template/header',$data, true);
		$data['sidebar'] = $this->load->view('template/sidebar',$data, true);
		$data['footer'] = $this->load->view('template/footer',$data, true);
		$data['content'] = $this->load->view('content/revenue',$data, true);
		$this->load->view('index',$data);
	}
	
 
}