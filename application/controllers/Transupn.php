<?php

class Transupn extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_transupn');
    $this->load->library('Template');
    $this->load->helper('transupn');
  }

  public function index()
  {
    $data['trans'] = $this->M_transupn->gettransupn();
    
    $this->template->display('transupn/home', $data);
    
  }

  public function add()
  {
    if ($this->input->post())
    {
      $data_transupn= $this->input->post();
      $status = $this->M_transupn->insert_trans_upn($data_transupn);
      if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Trans UPN Berhasil disimpan"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Trans UPN Gagal disimpan"));
      }
      redirect(base_url().'index.php/transupn/index');
    }
    else{
      $data['judul'] = "Tambah Data Baru  TRANS UPN";
    
    $this->load->view('transupn/add', $data);
    


    }
  }

  public function update($id_trans_upn = null)
  {
    if ($this->input->post())
    {
			$data = $this->input->post();
			$status = $this->M_transupn->update($data);
      if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Trans UPN Berhasil diupdate"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Trans UPN Gagal diupdate"));
      }
			redirect(base_url().'index.php/transupn/index');

		}
		else{
			$data['trans'] = $this->M_transupn->gettransupn($id_trans_upn);
			$data['judul'] = 'Edit Data';
    
    $this->load->view('transupn/update', $data);
		}
  }

  public function delete($id_trans_upn)
  {
    $status = $this->M_transupn->delete($id_trans_upn);
    if($status > 0)
      {
        $this->session->set_flashdata('msg',berhasil("Data Trans UPN Berhasil dihapus"));
      }
      else
      {
        $this->session->set_flashdata('msg',gagal("Data Trans UPN Gagal dihapus"));
      }
    redirect(base_url().'index.php/transupn/index');


  }
}