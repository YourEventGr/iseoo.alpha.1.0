<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
        if($this->session->userdata('username')!=''){
            if($this->session->userdata('privilege')=='member'){
                redirect(site_url().'home');
            }
        }else{
            echo'<script>alert("Login First");
                window.location="http://localhost/iseoo-web/login";
                </script>';
        }
	}
 
	public function index(){	
		$data['title']="Dashboard";	
        $data['user_session']= $this->session->userdata('username');
		$data['head_info'] = $this->load->view('template/head-info',$data, true);
		$data['header'] = $this->load->view('template/header',$data, true);
		$data['sidebar'] = $this->load->view('template/sidebar',$data, true);
		$data['footer'] = $this->load->view('template/footer',$data, true);
		$data['content'] = $this->load->view('content/dashboard',$data, true);
		$this->load->view('index',$data);
	}
	
 
}