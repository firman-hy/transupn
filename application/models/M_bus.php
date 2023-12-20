<?php

class M_bus extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getbus($id_bus = null)
  {
    if ($id_bus)
    {
      return $this->db->get_where('bus', array('id_bus'=>$id_bus))->result();
    }
    else return $this->db->get('bus')->result();
  }

  public function insert_bus($data)
  {
    $sql = "INSERT INTO bus 
    (id_bus, 
    plat, 
    status) 
    VALUES (?,?,?)";

    $this->db->query($sql, array
    ($data['id_bus'],
    $data['plat'],
    $data['status']));
    return $this->db->affected_rows();
  }

  public function update($data)
  {
    $sql = "UPDATE bus SET
          plat = ?,
          status = ?,
          WHERE id_bus = ?";

    $this->db->query($sql, array
    ($data['plat'],
    $data['status'],
    $data['id_bus']));
    return $this->db->affected_rows();
  }

  public function delete($id_bus)
  {
    $this->db->where('id_bus', $id_bus);
    $this->db->delete('bus');
    return $this->db->affected_rows();
  }
}