<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class User extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $data = $this->db->get('user')->result();
            $user = array('value' => '1','result'=>$data);
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('user')->result();
            if($data != NULL){
            $user = array('status' => 'ditemukan',$data,200);
            }else{    
            $user = array('status' => 'data tidak ditemukan',502);
            }
        }
        $this->response($user, 200);
    }

    //Mengirim atau menambah data user baru
	function index_post() {
        $data = array(
                    'id'            => $this->post('id'),
                    'fullname'      => $this->post('nama_lengkap'),
                    'username'      => $this->post('username'),
                    'password'      => $this->post('password'),
                    'birthday'      => $this->post('birthday'),
                    'email'         => $this->post('email'),
                    'phone'         => $this->post('phone'),
                    'gender'        => $this->post('gender'),
                    'status'        => $this->post('status')
        );
        $insert = $this->db->insert('user', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Memperbarui data user yang telah ada
	function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'            => $this->put('id'),
                    'fullname'      => $this->put('nama_lengkap'),
                    'username'      => $this->put('username'),
                    'password'      => $this->put('password'),
                    'birthday'      => $this->put('birthday'),
                    'email'         => $this->put('email'),
                    'phone'         => $this->put('phone'),
                    'gender'        => $this->put('gender'),
                    'status'        => $this->put('status')
        );
        $this->db->where('id', $id);
        $update = $this->db->update('user', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Menghapus salah satu data user
	function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('user');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Masukan function selanjutnya disini
}
?>