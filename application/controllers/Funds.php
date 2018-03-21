<?php
	class Funds extends CI_Controller{
		public function addItem($event_id){
			$slug = $this->input->post('slug');

			$this->form_validation->set_rules('name', 'EventName','required');
			$this->form_validation->set_rules('date', 'DATE','required');
			$this->form_validation->set_rules('date', 'DATE','regex_match[\d{4}-(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])]');
			$this->form_validation->set_rules('cost', 'TotalCost','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/fundmanager', $data);
				$this->load->view('templates/footer');
			} else {
				$this->Fund_Model->create_event($event_id);
				redirect('fundmanager/'.$slug);
			}		
		}

	}
?>
