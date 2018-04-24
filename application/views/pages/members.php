<!DOCTYPE html>
<html>
<body>

<div id="container">
	<?php 
		$m = $this->db->query("SELECT ClubName From club");
		$query = $m->result();
		$clubname = $query[0]->ClubName;
	?>
	<h1> <?php echo $clubname; ?> Member Info</h1>
	<div id="body1" style = "text-align: center;">
		<h4>Members:</h4>
			<code>
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
			</code>
	</div>
</div>


</body>
</html>