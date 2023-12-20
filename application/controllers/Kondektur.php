<?php

class Kondektur extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_kondektur');
    $this->load->library('Template');
    $this->load->helper('kondektur');
  }

  public function index()
  {
    $data['kdr'] = $this->M_kondektur->getkondektur();
    
    $this->template->display('kondektur/home', $data);
    
  }

  public function add()
  {
    if ($this->input->post())
    {
      $data_kondektur= $this->input->post();
      $status = $this->M_kondektur->insert_kondektur($data_kondektur);
      if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Kondektur Trans UPN Berhasil disimpan"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Kondektur Trans UPN Gagal disimpan"));
      }
      redirect(base_url().'index.php/kondektur/index');
    }
    else{
      $data['judul'] = "Tambah Data Baru Kondektur TRANS UPN";
    
    $this->load->view('kondektur/add', $data);
    


    }
  }

  public function update($id_kondektur = null)
  {
    if ($this->input->post())
    {
			$data = $this->input->post();
			$status = $this->M_kondektur->update($data);
      if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Kondektur Trans UPN Berhasil diupdate"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Kondektur Trans UPN Gagal diupdate"));
      }
			redirect(base_url().'index.php/kondektur/index');

		}
		else{
			$data['kdr'] = $this->M_kondektur->getkondektur($id_kondektur);
			$data['judul'] = 'Edit Data';
    
    $this->load->view('kondektur/update', $data);
		}
  }

  public function delete($id_kondektur)
  {
    $status = $this->M_kondektur->delete($id_kondektur);
    if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Kondektur Trans UPN Berhasil dihapus"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Kondektur Trans UPN Gagal dihapus"));
      }
    redirect(base_url().'index.php/kondektur/index');


  }
}