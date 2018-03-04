<?php
class DisplayMembers extends CI_Model{

	public function get_members()
	{
		return $this->db->get('login');

		

	}
}
?>