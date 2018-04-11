<?php
	class Funds extends CI_Controller{
		public function addItem(){

			//check if user is checked in
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}





			$slug = $this->input->post('slug');

			$this->form_validation->set_rules('name', 'EventName','required');
			$this->form_validation->set_rules('date', 'DATE','required');
			$this->form_validation->set_rules('cost', 'TotalCost','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/fundmanager', $data);
				$this->load->view('templates/footer');
			} else {
				$q = $this->db->query("SELECT max(EventID) FROM events");
				$event_id = $q->result();
				$event_id[max(EventID)]++;
				$this->Fund_Model->create_event($event_id["max(EventID)"]);
				redirect('fundmanager/');
			}		
		}

	}
?>
