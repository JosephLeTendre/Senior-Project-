<!DOCTYPE html>
<html>
<body>

<?php

		$this->load->library('table');
		$this->table->set_heading('UserID','FirstName','Email','Title');

		$style = array('table_open'  => '<table class="table table-bordered table-hover">');
	    $this->table->set_template($style);
	    $members = $this->db->query("SELECT id, name, email FROM users;");
	    echo $this->table->generate($members);


	// $this->load->library('table');
	// $query = $this->db->query("SELECT * FROM login");
	// echo $this->table->generate($query);
?>






</body>
</html>