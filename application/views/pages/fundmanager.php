<div id="container">
	<h1>[INSERT CLUB'S NAME HERE]'s Fund Manager</h1>

	<div id="body1" style = "text-align: center;">
		&nbsp
		<h4>Budget:</h4>
			<code>
				<?php 
					$this->load->library('table');
					$this->table->set_heading('Current Budget');
					$style = array('table_open'  => '<table class="table table-bordered table-hover text-primary">');
	    			$this->table->set_template($style);
		 			$current = $this->db->query("SELECT CurrentBudget FROM club;");
		 			echo $this->table->generate($current);
				?>
				<?php
					$this->load->library('table');
					$this->table->set_heading('Total Budget');
					$style = array('table_open'  => '<table class="table table-bordered table-hover text-primary">');
	    			$this->table->set_template($style);
					$total = $this->db->query("SELECT InitialBudget FROM club;");
					echo $this->table->generate($total); 
				?>
		<br></code>
	</div>

	<div id="body1" style = "text-align: center;">
		&nbsp
		<h4>Transaction History List:</h4>
			<code><?php
					$this->load->library('table');
					$this->table->set_heading('Event Name','Date','Cost of Event');
					$style = array('table_open'  => '<table class="table table-bordered table-hover text-primary">');
	    			$this->table->set_template($style);
					$transactions = $this->db->query("SELECT EventName, DATE, TotalCost FROM events;");
					echo $this->table->generate($transactions); 
				  ?>
	    <br></code>
	</div>

	<div id="body1">
		<br>
		<h4> Add New Budget Item </h4>
		<?php echo validation_errors(); ?>
		<?php echo form_open('Funds/addItem');?>
			<div class="form-group text-primary">
				<label>Name of Event:</label>
				<input type="text" name="name" class="form-control" style="width: 25%">
			</div>
			<div class="form-group text-primary">
				<label>Date of Event(YYYY-MM-DD):</label>
				<input type="text" name="date" class="form-control" style="width: 25%">
			</div>
			<div class="form-group text-primary">
				<label>Cost of Event:</label>
				<input type="text" name="cost" class="form-control" style="width: 25%">
			</div>
			<input type="hidden" name="slug" value='<?php echo $post['slug']; ?>'>
			<button class="btn btn-primary" type="submit"> Submit </button>

	</div>

</div>