<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Login extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
//        $username = $this->get('username');
//        $password = $this->get('password');
//        if ($username == '' or $password ='') {
//            $user = array('value' => '0','result'=>'username or password invalid');
//        } else {
//            $this->db->where('username', $username);
//            $data = $this->db->get('user')->result();
//            if($data != NULL){
//                $this->db->where('password', $password);
//            $datas = $this->db->get('user')->result();
//            if($datas != NULL){
//            
//            $user = array('value' => '1','result'=>$datas,200);
//            }else{    
//            $user = array('value' => '0',502);
//            }
//            }else{    
//            $user = array('value' => '0',502);
//            }
//        }
//        $this->response($user, 200);
    }
    //Masukan function selanjutnya disini
    function index_post() {
        $username = $this->post('username');
        $password = $this->post('password');
        
        $query = $this->db->query("SELECT * FROM user where username ='$username' and password ='$password'");
        if ($query->num_rows() !=0) {
            foreach($query->result() as $fetch){
            $this->response(array('status' => 'success', 'username' => $username,'privilege' => $fetch->status));
            }
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Memperbarui data user yang telah ada
	function index_put() {
        
    }
    //Menghapus salah satu data user
	function index_delete() {
        
    }
    //Masukan function selanjutnya disini
}
?>