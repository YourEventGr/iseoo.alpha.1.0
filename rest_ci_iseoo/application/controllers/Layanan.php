<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Layanan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data user
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $data = $this->db->get('jasa')->result();
            $user = array('value' => '1','result'=>$data);
        } else {
            $this->db->where('id', $id);
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
                    'nama_jasa'  => $this->post('nama_jasa'),
                    'harga'     => $this->post('harga'),
                    'kontak'     => $this->post('kontak'),
                    'jenis_jasa'    => $this->post('jenis_jasa'),
                    'deskripsi'    => $this->post('deskripsi'),
                    'untuk_event'    => $this->post('untuk_event'),
                    'pemilik'    => $this->post('pemilik'),
                    'status'    => '1'
        );
        $insert = $this->db->insert('jasa', $data);
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
                    'nama_jasa'  => $this->post('nama_jasa'),
                    'harga'     => $this->post('harga'),
                    'kontak'     => $this->post('kontak'),
                    'jenis_jasa'    => $this->post('jenis_jasa'),
                    'deskripsi'    => $this->post('deskripsi'),
                    'untuk_event'    => $this->post('untuk_event'),
                    'pemilik'    => $this->post('pemilik'),
                    'status'    => $this->post('status')
        );
        $this->db->where('id', $id);
        $update = $this->db->update('jasa', $data);
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
        $delete = $this->db->delete('jasa');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Masukan function selanjutnya disini
}
?>