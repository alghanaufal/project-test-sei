<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

    private $api_url = 'http://localhost:8081/proyek';

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('curl');
    }

    public function index() {
        $data['proyek'] = json_decode($this->curl->simple_get($this->api_url));
        $this->load->view('layout/header');
        $this->load->view('proyek/index', $data);
        $this->load->view('layout/footer');
    }

    public function input() {
        $this->load->view('layout/header');
        $this->load->view('proyek/input');
        $this->load->view('layout/footer');
    }

    public function edit($id) {
        $data['proyek'] = json_decode($this->curl->simple_get($this->api_url . '/' . $id));
        $this->load->view('layout/header');
        $this->load->view('proyek/edit', $data);
        $this->load->view('layout/footer');
    }

    public function store() {
        $data = array(
            'namaProyek' => $this->input->post('namaProyek'),
            'client' => $this->input->post('client'),
            'tglMulai' => $this->input->post('tglMulai'),
            'tglSelesai' => $this->input->post('tglSelesai'),
            'pimpinanProyek' => $this->input->post('pimpinanProyek'),
            'keterangan' => $this->input->post('keterangan'),
        );

        $this->curl->simple_post($this->api_url, $data);
        redirect('proyek');
    }

    public function update($id) {
        $data = array(
            'namaProyek' => $this->input->post('namaProyek'),
            'client' => $this->input->post('client'),
            'tglMulai' => $this->input->post('tglMulai'),
            'tglSelesai' => $this->input->post('tglSelesai'),
            'pimpinanProyek' => $this->input->post('pimpinanProyek'),
            'keterangan' => $this->input->post('keterangan'),
        );

        $this->curl->simple_put($this->api_url . '/' . $id, $data);
        redirect('proyek');
    }

    public function delete($id) {
        $this->curl->simple_delete($this->api_url . '/' . $id);
        redirect('proyek');
    }
}
