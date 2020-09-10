<?php

class MSubkegiatan extends CI_Model
{
  public $nama_subkegiatan;
  
  public function get_entries()
  {
    $query = $this->db->get('subkegiatan');
    return $query->result();
  }
  
  public function get_entries_by_id($id)
  {
    $query = $this->db->get_where('subkegiatan', ['id' => $id]);
    return $query->row();
  }
  
  public function insert_entry()
  {
    $this->nama_subkegiatan       = $_POST['nama_subkegiatan'];
    
    $this->db->trans_start();
    $this->db->insert('subkegiatan', $this);
    $this->db->trans_complete();
  }
  
  public function update_entry()
  {
    $this->nama_subkegiatan       = $_POST['nama_subkegiatan'];
    
    $this->db->trans_start();
    $this->db->update('subkegiatan', $this, ['id' => $_POST['id']]);
    $this->db->trans_complete();
  }
  
  public function delete_entry($id)
  {
    $this->db->trans_start();
    $this->db->delete('subkegiatan', ['id' => $id]);
    $this->db->trans_complete();
  }
}
