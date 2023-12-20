<?php

class Bus extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_bus');
    $this->load->library('Template');
    $this->load->helper('bus');
  }

  public function index()
  {
    $data['bis'] = $this->M_bus->getbus();
    $this->template->display('bus/home', $data);
    // $this->template->display('transupn', $data);
    
  }

  public function add()
  {
    if ($this->input->post())
    {
      $data_bus= $this->input->post();
      $status = $this->M_bus->insert_bus($data_bus);
      if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Bus Berhasil disimpan"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Bus Gagal disimpan"));
      }
      redirect(base_url().'index.php/bus/index');
    }
    else{
      $data['judul'] = "Tambah Data Baru Bus TRANS UPN";
    
    $this->load->view('bus/add', $data);
    


    }
  }

  public function update($id_bus = null)
  {
    if ($this->input->post())
    {
			$data = $this->input->post();
			$status = $this->M_bus->update($data);
      if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Bus Berhasil diupdate"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Bus Gagal diupdate"));
      }
			redirect(base_url().'index.php/bus/index');

		}
		else{
			$data['bis'] = $this->M_bus->getbus($id_bus);
			$data['judul'] = 'Edit Data';
    
    $this->load->view('bus/update', $data);
		}
  }

  public function delete($id_bus)
  {
    $status = $this->M_bus->delete($id_bus);
    if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Bus Berhasil dihapus"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Bus Gagal dihapus"));
      }
    redirect(base_url().'index.php/bus/index');


  }
}