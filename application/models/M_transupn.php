<?php

class M_transupn extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function gettransupn($id_trans_upn = null)
  {
    if ($id_trans_upn)
    {
      return $this->db->get_where('trans_upn', array('id_trans_upn'=>$id_trans_upn))->result();
    }
    else return $this->db->get('trans_upn')->result();
  }

  public function insert_transupn($data)
  {
    $sql = "INSERT INTO trans_upn 
    (id_trans_upn, 
    id_kondektur, 
    id_bus,
    id_driver,
    jumlah_km,
    tanggal) 
    VALUES (?,?,?,?,?,?)";

    $this->db->query($sql, array
    ($data['id_trans_upn'],
    $data['id_kondektur'],
    $data['id_bus'],
    $data['id_driver'],
    $data['jumlah_km'],
    $data['tanggal']));
    return $this->db->affected_rows();
  }

  public function update($data)
  {
    $sql = "UPDATE trans_upn SET
          id_kondektur = ?,
          id_bus = ?,
          id_driver = ?,
          jumlah_km = ?,
          tanggal = ?,
          WHERE id_trans_upn = ?";

    $this->db->query($sql, array
    ($data['id_kondektur'],
    $data['id_bus'],
    $data['id_driver'],
    $data['jumlah_km'],
    $data['tanggal'],
    $data['id_trans_upn']));
    return $this->db->affected_rows();
  }

  public function delete($id_trans_upn)
  {
    $this->db->where('id_trans_upn', $id_trans_upn);
    $this->db->delete('trans_upn');
    return $this->db->affected_rows();
  }
}