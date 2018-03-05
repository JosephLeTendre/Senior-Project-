<?php
	class Members_Controller extends CI_Controller{
	public function index()
	{

		$this->load->model('DisplayMembers');

		$data = array();

		$this->table->set_heading('UserID','FirstName','Email');

		$style = array('table_open'  => '<table class="table table-bordered table-hover">');
	    $this->table->set_template($style);

	    //$members = $this->displayMembers->get_members();

	    //$data['testing'] = 'hello'; 

	    $data['testing'] = $this->DisplayMembers->get_members();
	    $this->load->view('templates/header');
	    $this->load->view('pages/members', $data);
        $this->load->view('templates/footer');

	}
}
?>
