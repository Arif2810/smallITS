<?php

class Dashboard extends CI_Controller{

  public function __construct(){
    parent::__construct();
    
    if($this->session->userdata('hak_akses') != '1'){
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
    $data['title'] = "Dashboard";
    $petugas = $this->db->query("SELECT * FROM data_pegawai WHERE hak_akses = 2");
    $civitas = $this->db->query("SELECT * FROM data_pegawai WHERE hak_akses = 3");
    $admin = $this->db->query("SELECT * FROM data_pegawai WHERE jabatan = 'Admin'");
    $jabatan = $this->db->query("SELECT * FROM data_jabatan");
    $kehadiran = $this->db->query("SELECT * FROM data_kehadiran");

    $data['petugas'] = $petugas->num_rows();
    $data['civitas'] = $civitas->num_rows();
    $data['admin'] = $admin->num_rows();
    $data['jabatan'] = $jabatan->num_rows();
    $data['kehadiran'] = $kehadiran->num_rows();
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('templates_admin/footer');
  }
}