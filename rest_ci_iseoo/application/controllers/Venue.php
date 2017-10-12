<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Venue extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $this->db->where('jenis_jasa','2');
            $data = $this->db->get('jasa')->result();
            $user = array('value' => '1','result'=>$data);
        } else {
            $this->db->where('id', $id);
            $this->db->where('jenis_jasa','2');
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
                    'event_id'              => $this->post('event_id'),
                    'committee_name'        => $this->post('committee_name'),
                    'committee_division'    => $this->post('committee_division'),
                    'committee_role'        => $this->post('committee_role'),
                    'status'                => $this->post('status')
        );
        $insert = $this->db->insert('committee_details', $data);
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
                    'event_id'              => $this->put('event_id'),
                    'committee_name'        => $this->put('committee_name'),
                    'committee_division'    => $this->put('committee_division'),
                    'committee_role'        => $this->put('committee_role'),
                    'status'                => $this->put('status')
        );
        $this->db->where('id', $id);
        $update = $this->db->update('committee_details', $data);
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
        $delete = $this->db->delete('committee_details');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Masukan function selanjutnya disini
}
?>