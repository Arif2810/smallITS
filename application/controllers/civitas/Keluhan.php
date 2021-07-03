<?php

class Keluhan extends CI_Controller{

  public function __construct(){
    parent::__construct();
    
    if($this->session->userdata('hak_akses') != '3'){
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Anda belum login!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('welcome');
    }
  }

  public function index(){
    $data['title'] = "Input Keluhan";
    $data['keluhan'] = $this->penggajianModel->get_data_id('data_keluhan')->result();

    $this->load->view('templates_civitas/header', $data);
    $this->load->view('templates_civitas/sidebar');
    $this->load->view('civitas/keluhan', $data);
    $this->load->view('templates_civitas/footer');
  }

  public function tambahData(){
    $data['title'] = "Keluhan Pengguna";
    $data['keluhan'] = $this->penggajianModel->get_data('data_keluhan')->result();
    
    $this->load->view('templates_civitas/header', $data);
    $this->load->view('templates_civitas/sidebar');
    $this->load->view('civitas/keluhan', $data);
    $this->load->view('templates_civitas/footer');
  }
 

  public function tambahDataAksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambahData();
    }
    else{
      $subject           = $this->input->post('subject');
      $isi_keluhan       = $this->input->post('keluhan');
      $oleh              = $this->session->userdata('id_pegawai');

      $data = array(
        'subject'           => $subject,
        'isi_keluhan'       => $isi_keluhan,
        'oleh'              => $oleh,
      );

     // print_r($data); die();
      $this->load->model('PenggajianModel');
      $this->PenggajianModel->insert_data($data, 'data_keluhan');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil ditambahkan</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('civitas/keluhan');
    }
  }

  public function _rules(){
    $this->form_validation->set_rules('subject', 'isi_keluhan', 'required');
  }

}