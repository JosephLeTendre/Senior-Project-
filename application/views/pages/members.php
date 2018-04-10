<!DOCTYPE html>
<html>
<body>


<?php
		$this->load->library('table');
		$this->table->set_heading('Name','Email');

		$style = array('table_open'  => '<table class="table table-bordered table-hover text-primary">');
	    $this->table->set_template($style);
	    $members = $this->db->query("SELECT name, email FROM users;");
	    echo $this->table->generate($members);

	// $this->load->library('table');
	// $query = $this->db->query("SELECT * FROM login");
	// echo $this->table->generate($query);
?>



</body>
</html>