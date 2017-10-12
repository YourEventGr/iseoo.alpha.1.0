<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {
	var $API ="";
	function __construct(){
		parent::__construct();
		$this->API="http://localhost/rest_ci_iseoo";
        $this->load->library('session');
        if($this->session->userdata('username')!=''){
            if($this->session->userdata('privilege')=='member'){
                redirect(site_url().'home');
            }else if($this->session->userdata('privilege')=='admin'){
                redirect('http://localhost/admin/dashboard');
            }else{
                $this->session->unset_userdata('username');
                echo'<script>alert("Illegal Account");
                window.location="'.site_url().'login";
                </script>';
                
            }
        }
	}
 
	public function index(){	
		$data['title']="Login";	
		$this->load->view('login/index',$data);
	}
	function auth(){
        if(isset($_POST['submit'])){
            $data = array(
                'username'       =>  $this->input->post('username'),
                'password'      =>  $this->input->post('password'));
            $j_decode =   json_decode($this->curl->simple_post($this->API.'/login', $data, array(CURLOPT_BUFFERSIZE => 10))); 
            
            if($j_decode->status == "success")
            {
                $this->session->set_userdata('username', $this->input->post('username'));
                $this->session->set_userdata('privilege', $j_decode->privilege);
                if($j_decode->privilege == "member")
                    redirect(site_url().'home');
                else
                    redirect('http://localhost/admin/dashboard');
            }else
            {
                echo'<script>alert("Invalid username or password'.error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE).'");
                window.location="'.site_url().'login";
                </script>';
            }
        }
    }
    function logout(){
        $this->session->unset_userdata('username');
         redirect(site_url().'login');
    }
 
}