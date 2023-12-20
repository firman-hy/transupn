<?php

class M_driver extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getdriver($id_driver = null)
  {
    if ($id_driver)
    {
      return $this->db->get_where('driver', array('id_driver'=>$id_driver))->result();
    }
    else return $this->db->get('driver')->result();
  }

  public function insert_driver($data)
    {
        $sql = "INSERT INTO driver 
        (id_driver, 
        nama, 
        no_sim, 
        alamat) 
        VALUES (?,?,?,?)";
    
        $this->db->query($sql, array
        ($data['id_driver'],
        $data['nama'],
        $data['no_sim'],
        $data['alamat']));
        return $this->db->affected_rows();
    }

  public function update($data)
    {
        $sql = "UPDATE driver SET
            nama = ?,
            no_sim = ?,
            alamat = ?,
            WHERE id_driver = ?";
    
        $this->db->query($sql, array
        ($data['nama'],
        $data['no_sim'],
        $data['alamat'],
        $data['id_driver']));
        return $this->db->affected_rows();
    }

  public function delete($id_driver)
    {
        $this->db->where('id_driver', $id_driver);
        $this->db->delete('driver');
        return $this->db->affected_rows();
    }
}