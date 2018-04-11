<?php
class Mycal extends CI_Controller{
    function display($year = null, $month = null){

    	//check to see if the user is logged in
    		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}




        $this->load->model('Mycal_Model'); 
        $data['calendar'] = $this->Mycal_model->generate($year, $month);
        $this->load->view('templates/header');
        $this->load->view('mycal', $data);
        $this->load->view('templates/footer');
    }
}