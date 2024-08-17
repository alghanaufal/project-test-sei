<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

    private $api_url = 'http://localhost:8081/lokasi';

    public function __construct() {
        parent::__construct();
        $this->load->library('curl');
    }

    public function index() {
        $data['lokasi'] = json_decode($this->curl->simple_get($this->api_url));
        $this->load->view('layout/header');
        $this->load->view('lokasi/index', $data);
        $this->load->view('layout/footer');
    }

    public function input() {
        $this->load->view('layout/header');
        $this->load->view('lokasi/input');
        $this->load->view('layout/footer');
    }

    public function edit($id) {
        $data['lokasi'] = json_decode($this->curl->simple_get($this->api_url . '/' . $id));
        $this->load->view('layout/header');
        $this->load->view('lokasi/edit', $data);
        $this->load->view('layout/footer');
    }

    public function store() {
        $data = array(
            'namaLokasi' => $this->input->post('namaLokasi'),
            'negara' => $this->input->post('negara'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
        );

        $this->curl->simple_post($this->api_url, $data);
        redirect('lokasi');
    }

    public function update($id) {
        $data = array(
            'namaLokasi' => $this->input->post('namaLokasi'),
            'negara' => $this->input->post('negara'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
        );

        $this->curl->simple_put($this->api_url . '/' . $id, $data);
        redirect('lokasi');
    }

    public function delete($id) {
        $this->curl->simple_delete($this->api_url . '/' . $id);
        redirect('lokasi');
    }
}
