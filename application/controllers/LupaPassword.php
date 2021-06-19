<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LupaPassword extends CI_Controller{

  public function index(){
    $this->_rules();

		if($this->form_validation->run() == FALSE){
			$data['title'] = "Konfirmasi Email";
      $data['pegawai'] = $this->penggajianModel->get_data('data_pegawai')->result();
      $this->load->view('templates_admin/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('konfirmasi_email', $data);
      $this->load->view('templates/footer');
		}
		else{
			$email = $this->input->post('email');

			$cek = $this->penggajianModel->cek_email($email);

			if($cek == FALSE){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Email yang anda masukkan salah!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect('lupaPassword');
			}
			else{
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Notifikasi berhasil dikirim ke email anda, silahkan cek email anda!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect('lupaPassword');
			}
		}
	}

  public function _rules(){
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	}


}