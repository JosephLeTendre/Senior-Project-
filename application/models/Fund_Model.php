<?php
class Fund_Model extends CI_Model{

	public function __construct(){
		$this->load->database(); 
	}
	public function create_event($event_id){

		$costCheck = $this->input->post('cost');
		$q = $this->db->query("SELECT CurrentBudget From club");
		$ch = $q->result(); 
		$check = $ch[0]->CurrentBudget; 
		if (($check-$costCheck)<0){
			
		}

		else {
		$curr = $check;

		$newBudget = $curr - $costCheck; 
		var_dump($newBudget);
		
		$data = array(
			'EventID' => $event_id,
			'DATE' => $this->input->post('date'),
			'EventName' => $this->input->post('name'),
			'TotalCost' => $this->input->post('cost')
		);

		$this->db->insert('events', $data);

		$id = '123';
		$myq = $this->db->query("SELECT InitialBudget From club");
		$initialbudget = $myq->result(); 

		// $myq = $this->db->query("SELECT ClubName From club");
		// $clubname = $myq->result(); 

		// $myq = $this->db->query("SELECT TotalMembers From club");
		// $members = $myq->result(); 

		// $replaceQuery = $this->db->query("UPDATE 'club' SET 'CurrentBudget' = $newBudget WHERE 'club'.'ClubID' = 123;");

		// return $this->db->query("UPDATE 'club' SET 'CurrentBudget' = '$newBudget' WHERE 'ClubID' = '123';");

		$this->db->set('CurrentBudget', $newBudget);
		$this->db->where('ClubID', 123);
		$this->db->update('club');
		$this->session->set_flashdata('user_registered', 'Event added, be sure to submit a fund request to the school for this event');
	}
	}


}
?>