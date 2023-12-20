<?php

class Driver extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_driver');
    $this->load->library('Template');
    $this->load->helper('driver');
  }

  public function index()
  {
    $data['dvr'] = $this->M_driver->getdriver();
    $this->template->display('driver/home', $data);
    // $this->template->display('transupn', $data);
    
  }

  public function add()
  {
    if ($this->input->post())
    {
      $data_driver= $this->input->post();
      $status = $this->M_driver->insert_driver($data_driver);
      if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Driver Berhasil disimpan"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Driver Gagal disimpan"));
      }
      redirect(base_url().'index.php/driver/index');
    }
    else{
      $data['judul'] = "Tambah Data Baru Driver TRANS UPN";
    
    $this->load->view('driver/add', $data);
    


    }
  }

  public function update($id_driver = null)
  {
    if ($this->input->post())
    {
			$data = $this->input->post();
			$status = $this->M_driver->update($data);
      if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Driver Berhasil diupdate"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Driver Gagal diupdate"));
      }
			redirect(base_url().'index.php/driver/index');

		}
		else{
			$data['dvr'] = $this->M_driver->getdriver($id_driver);
			$data['judul'] = 'Edit Data';
    
    $this->load->view('driver/update', $data);
		}
  }

  public function delete($id_driver)
  {
    $status = $this->M_driver->delete($id_driver);
    if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Driver Berhasil dihapus"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Driver Gagal dihapus"));
      }
    redirect(base_url().'index.php/driver/index');


  }
}