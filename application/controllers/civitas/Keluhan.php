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

    $this->load->view('templates_civitas/header', $data);
    $this->load->view('templates_civitas/sidebar');
    $this->load->view('civitas/keluhan');
    $this->load->view('templates_civitas/footer');
  }





}