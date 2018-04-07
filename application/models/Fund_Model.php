<?php
class Fund_Model extends CI_Model{

	public function __construct(){
		$this->load->database(); 
	}
	public function create_event($event_id){
		
		$data = array(
			'EventID' => $event_id,
			'DATE' => $this->input->post('date'),
			'EventName' => $this->input->post('name'),
			'TotalCost' => $this->input->post('cost')
		);

		return $this->db->insert('events', $data);
	}


}
?>