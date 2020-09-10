<?php

class MKegiatan extends CI_Model
{
  public $nama_kegiatan;
  
  public function get_entries()
  {
    $query = $this->db->get('kegiatan');
    return $query->result();
  }
  
  public function get_entries_by_id($id)
  {
    $query = $this->db->get_where('kegiatan', ['id' => $id]);
    return $query->row();
  }
  
  public function insert_entry()
  {
    $this->nama_kegiatan       = $_POST['nama_kegiatan'];
    
    $this->db->trans_start();
    $this->db->insert('kegiatan', $this);
    $this->db->trans_complete();
  }
  
  public function update_entry()
  {
    $this->nama_kegiatan       = $_POST['nama_kegiatan'];
    
    $this->db->trans_start();
    $this->db->update('kegiatan', $this, ['id' => $_POST['id']]);
    $this->db->trans_complete();
  }
  
  public function delete_entry($id)
  {
    $this->db->trans_start();
    $this->db->delete('kegiatan', ['id' => $id]);
    $this->db->trans_complete();
  }
}
