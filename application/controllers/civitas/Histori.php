<?php

class Histori extends CI_Controller{

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
    $data['title'] = "Histori";
    $id = $this->session->userdata('id_pegawai');
    $data['tap_in_out'] = $this->penggajianModel->get_data_in_out_perId()->result();
    // $data['histori'] = $this->db->query("SELECT * FROM data_in_out WHERE id_pegawai='$id'")->result();

    $this->load->view('templates_civitas/header', $data);
    $this->load->view('templates_civitas/sidebar');
    $this->load->view('civitas/histori');
    $this->load->view('templates_civitas/footer');
  }





}