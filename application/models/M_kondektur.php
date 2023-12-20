<?php

class M_kondektur extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getkondektur($id_kondektur = null)
  {
    if ($id_kondektur)
    {
      return $this->db->get_where('kondektur', array('id_kondektur'=>$id_kondektur))->result();
    }
    else return $this->db->get('kondektur')->result();
  }

  public function insert_kondektur($data)
  {
    $sql = "INSERT INTO kondektur 
    (id_kondektur, 
    nama) 
    VALUES (?,?)";

    $this->db->query($sql, array
    ($data['id_kondektur'],
    $data['nama']));
    return $this->db->affected_rows();
  }

  public function update($data)
  {
    $sql = "UPDATE kondektur SET
        nama = ?,
        WHERE id_kondektur = ?";

    $this->db->query($sql, array
    ($data['nama'],
    $data['id_kondektur']));
    return $this->db->affected_rows();
  }

  public function delete($id_kondektur)
  {
    $this->db->where('id_kondektur', $id_kondektur);
    $this->db->delete('kondektur');
    return $this->db->affected_rows();
  }
}