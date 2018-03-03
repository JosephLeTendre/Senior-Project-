<?php
class Mycal extends CI_Controller{
    function display($year = null, $month = null){

        $this->load->model('Mycal_Model'); 

        $data['calendar'] = $this->Mycal_model->generate($year, $month);

        $this->load->view('templates/header');
        $this->load->view('mycal', $data);
        $this->load->view('templates/footer');

    }

}