<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class TambahSponsor extends CI_Controller {
	var $API ="";
	function __construct(){
		parent::__construct();
		$this->API="http://localhost/rest_ci_iseoo";
	}
 
	public function index(){	
		$data['title']="TambahSponsor";	
		$data['head_info'] = $this->load->view('template/head-info',$data, true);
		$data['header'] = $this->load->view('template/header',$data, true);
		$data['sidebar'] = $this->load->view('template/sidebar',$data, true);
		$data['footer'] = $this->load->view('template/footer',$data, true);
		$data['content'] = $this->load->view('content/tambahSponsor',$data, true);
		$this->load->view('index',$data);
	}
    
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'nama_sponsor'       =>  $this->input->post('nama_sponsor'),
                'kontak'=>  $this->input->post('kontak'),
                'jenis_sponsor'    =>  $this->input->post('jenis_sponsor'),
                'deskripsi'    =>  $this->input->post('deskripsi'),
                'untuk_event'    =>  $this->input->post('untuk_event'),
                'pemilik'    =>  $this->input->post('pemilik'));
            $insert =  $this->curl->simple_post($this->API.'/sponsor', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
//                $this->session->set_flashdata('hasil','Insert Data Berhasil');
                redirect(site_url().'/layanan');
            }else
            {
//               $this->session->set_flashdata('hasil','Insert Data Gagal');
                echo'<script>alert("Gagal menambahkan sponsor'.error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE).'");
                window.location="'.site_url().'/tambahsponsor";
                </script>';
            }
//            redirect('mahasiswa');
        }
//        else{
//            $data['jurusan'] = json_decode($this->curl->simple_get($this->API.'/jurusan'));
//            $this->load->view('mahasiswa/create',$data);
//        }
    }
	
 
}