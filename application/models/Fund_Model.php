<?php
class Fund_Model extends CI_Model{

	public function __construct(){
		$this->load->database(); 
	}
	public function create_event($event_id){
		
		$data = array(
			'event_id' => $event_id,
			'name' => $this->input->post('name'),
			'date' => $this->input->post('date'),
			'cost' => $this->input->post('cost')
		);

		return $this->db->insert('events', $data);
	}


}
?>