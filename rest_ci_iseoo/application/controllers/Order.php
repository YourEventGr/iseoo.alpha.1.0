<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Order extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $data = $this->db->get('order_jasa')->result();
            $user = array('value' => '1','result'=>$data);
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('order_jasa')->result();
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
                    'event_id'   => $this->post('event_id'),
                    'divisi_id'  => $this->post('divisi_id'),
                    'deskripsi'  => $this->post('deskripsi'),
                    'tanggal'    => $this->post('tanggal'),
                    'deadline'   => $this->post('deadline'),
                    'status'     => $this->post('status')
        );
        $insert = $this->db->insert('notula', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Memperbarui data user yang telah ada
	function index_put() {
        $id = $this->put('notula_id');
        $data = array(
                    'event_id'   => $this->put('event_id'),
                    'divisi_id'  => $this->put('divisi_id'),
                    'deskripsi'  => $this->put('deskripsi'),
                    'tanggal'    => $this->put('tanggal'),
                    'deadline'   => $this->put('deadline'),
                    'status'     => $this->put('status')
        );
        $this->db->where('notula_id', $id);
        $update = $this->db->update('notula', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Menghapus salah satu data user
	function index_delete() {
        $id = $this->delete('notula_id');
        $this->db->where('notula_id', $id);
        $delete = $this->db->delete('notula');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Masukan function selanjutnya disini
}
?>