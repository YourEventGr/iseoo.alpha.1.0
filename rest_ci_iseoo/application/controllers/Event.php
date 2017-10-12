<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Event extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $data = $this->db->get('event')->result();
            $user = array('value' => '1','result'=>$data);
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('event')->result();
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
                    'event_id'           => $this->post('event_id'),
                    'event_name'         => $this->post('event_name'),
                    'event_description'  => $this->post('event_description'),
                    'event_date'         => $this->post('event_date'),
                    'event_venue'        => $this->post('event_venue'),
                    'event_creator'      => $this->post('event_creator'),
                    'event_status'       => $this->post('event_status')
        );
        $insert = $this->db->insert('event_details', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Memperbarui data user yang telah ada
	function index_put() {
        $id = $this->put('event_id');
        $data = array(
                    'event_id'           => $this->put('event_id'),
                    'event_name'         => $this->put('event_name'),
                    'event_description'  => $this->put('event_description'),
                    'event_date'         => $this->put('event_date'),
                    'event_venue'        => $this->put('event_venue'),
                    'event_creator'      => $this->put('event_creator'),
                    'event_status'       => $this->put('event_status')
        );
        $this->db->where('id', $id);
        $update = $this->db->update('event_datails', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Menghapus salah satu data user
	function index_delete() {
        $id = $this->delete('event_id');
        $this->db->where('event_id', $id);
        $delete = $this->db->delete('event_details');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Masukan function selanjutnya disini
}
?>