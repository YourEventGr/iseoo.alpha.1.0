<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Equipment extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $this->db->where('jenis_jasa','1');
            $data = $this->db->get('jasa')->result();
            $user = array('value' => '1','result'=>$data);
        } else {
            $this->db->where('id', $id);
            $this->db->where('jenis_jasa','1');
            $data = $this->db->get('jasa')->result();
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
                    'event_id'  => $this->post('event_id'),
                    'deskripsi' => $this->post('deskripsi'),
                    'status'    => $this->post('status')
        );
        $insert = $this->db->insert('daily_report', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Memperbarui data user yang telah ada
	function index_put() {
        $id = $this->put('daily_report_id');
        $data = array(
                    'event_id'  => $this->put('event_id'),
                    'deskripsi' => $this->put('deskripsi'),
                    'status'    => $this->put('status')
        );
        $this->db->where('id', $id);
        $update = $this->db->update('daily_report', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Menghapus salah satu data user
	function index_delete() {
        $id = $this->delete('daily_report_id');
        $this->db->where('daily_report_id', $id);
        $delete = $this->db->delete('daily_report');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Masukan function selanjutnya disini
}
?>