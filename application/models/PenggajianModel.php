<?php

class PenggajianModel extends CI_Model{

  public function get_data($table){
    return $this->db->get($table);
  }

  public function get_data_id($table){
    $id = $this->session->userdata('id_pegawai');
    $this->db->where('oleh', $id);
    return $this->db->get($table);
  }

  public function get_data_in_out(){
    $this->db->select('data_in_out.*, data_pegawai.nama_pegawai as pengguna, data_gate.lokasi as gate, data_gate.kode as kode');
    $this->db->from('data_in_out');
    $this->db->join('data_pegawai', 'data_pegawai.id_pegawai = data_in_out.pengguna');
    $this->db->join('data_gate', 'data_gate.id_gate = data_in_out.gate');
    $this->db->order_by('id_in-out', 'DESC');
    $result = $this->db->get();

    return $result;
  }

  public function get_data_in_out_perId(){
    $id = $this->session->userdata('id_pegawai');
    $this->db->select('data_in_out.*, data_pegawai.nama_pegawai as pengguna, data_gate.lokasi as gate, data_gate.kode as kode');
    $this->db->from('data_in_out');
    $this->db->join('data_pegawai', 'data_pegawai.id_pegawai = data_in_out.pengguna');
    $this->db->join('data_gate', 'data_gate.id_gate = data_in_out.gate');
    $this->db->where('data_pegawai.id_pegawai', $id);
    $this->db->order_by('id_in-out', 'DESC');
    $result = $this->db->get();

    return $result;
  }

  public function insert_data($data, $table){
    $this->db->insert($table, $data);
  }

  public function update_data($table, $data, $where){
    $this->db->update($table, $data, $where);
  }

  public function delete_data($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function insert_batch($table=null, $data=array()){
    $jumlah = count($data);
    if($jumlah > 0){
      $this->db->insert_batch($table, $data);
    }
  }

  public function cek_login(){
    $username = set_value('username');
    $password = set_value('password');

    $result = $this->db->where('username', $username)
                       ->where('password', md5($password))
                       ->limit(1)
                       ->get('data_pegawai');

    if($result->num_rows() > 0){
      return $result->row();
    }
    else{
      return FALSE;
    }
  }

  public function cek_email(){
    $email = set_value('email');

    $result = $this->db->where('email', $email)
                       ->limit(1)
                       ->get('data_pegawai');

    if($result->num_rows() > 0){
      return $result->row();
    }
    else{
      return FALSE;
    }
  }


}