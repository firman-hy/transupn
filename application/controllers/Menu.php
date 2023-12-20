<?php

class Menu extends CI_Controller {
    public function index() {
        $this->load->model('menu_model');
        $data['menu'] = $this->menu_model->getAllMenu();
        $this->load->view('bus', $data);
        $this->load->view('driver', $data);
        $this->load->view('kondektur', $data);
        $this->load->view('sallary', $data);
    }
}
