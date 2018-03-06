<div id="container">
	<h1>[INSERT CLUB'S NAME HERE]'s Fund Manager</h1>

	<div id="body1" style = "text-align: center;">
		&nbsp
		<h4>Budget:</h4>
			<code>
				<?php 
					$this->load->library('table');
					$this->table->set_heading('Current Budget');
					$style = array('table_open'  => '<table class="table table-bordered table-hover">');
	    			$this->table->set_template($style);
		 			$current = $this->db->query("SELECT CurrentBudget FROM club;");
		 			echo $this->table->generate($current);
				?>
				<?php
					$this->load->library('table');
					$this->table->set_heading('Total Budget');
					$style = array('table_open'  => '<table class="table table-bordered table-hover">');
	    			$this->table->set_template($style);
					$total = $this->db->query("SELECT InitialBudget FROM club;");
					echo $this->table->generate($total); 
				?><br></code>
	</div>
	<div id="body1" style = "text-align: center; width: 80%">
		&nbsp
		<h4>Transaction History List:</h4>
			<code>[INSERT LIST OF TRANSACTIONS]<br></code>
	</div>
</div>