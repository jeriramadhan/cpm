<?php

class MProyek extends CI_Model
{
  public $nama;
  public $lokasi;
  public $waktu;
  public $biaya;
  public $keterangan;
  public $status;
  
  public function get_entries()
  {
    $query = $this->db->get('proyek');
    return $query->result();
  }
  
  public function get_entries_by_id($id)
  {
    $query = $this->db->get_where('proyek', ['id' => $id]);
    return $query->row();
  }
  
  public function insert_entry()
  {
    $this->nama       = $_POST['nama'];
    $this->lokasi      = $_POST['lokasi'];
    $this->waktu   = $_POST['waktu'];
    $this->biaya       = $_POST['biaya'];
    $this->keterangan      = $_POST['keterangan'];
    $this->status = $_POST['status'];
    
    $this->db->trans_start();
    $this->db->insert('proyek', $this);
    $this->db->trans_complete();
  }
  
  public function update_entry()
  {
    $this->nama       = $_POST['nama'];
    $this->lokasi      = $_POST['lokasi'];
    $this->waktu   = $_POST['waktu'];
    $this->biaya       = $_POST['biaya'];
    $this->keterangan      = $_POST['keterangan'];
    $this->status = $_POST['status'];
    
    $this->db->trans_start();
    $this->db->update('proyek', $this, ['id' => $_POST['id']]);
    $this->db->trans_complete();
  }
  
  public function delete_entry($id)
  {
    $this->db->trans_start();
    $this->db->delete('proyek', ['id' => $id]);
    $this->db->trans_complete();
  }
}
