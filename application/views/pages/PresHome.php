<div id="container">
	<?php 
		$m = $this->db->query("SELECT ClubName From club");
		$query = $m->result();
		$clubname = $query[0]->ClubName;
	?>
	<h1>Welcome <?php echo $clubname ?> Member!</h1>

	<div id="body1" style = "float: left; width: 40%">
		&nbsp
		<h4>List of Club Members</h4>
		<code>[INSERT MEMBER1'S NAME HERE]<br>
			[INSERT MEMBER2'S NAME HERE]<br>
			[INSERT MEMBER3'S NAME HERE]<br>
			[INSERT MEMBER4'S NAME HERE]<br></code>
	</div>
	<div id="body2" style = "float: right; width: 45%">
		&nbsp

		<h4>Executive Members</h4>
		<code>[INSERT PRES NAME HERE] <br>
			  [INSERT VP NAME HERE] <br>
			  [INSERT TREASURER NAME HERE] <br>
			  [INSERT SECRETARY NAME HERE] <br>
		</code>

	</div>
</div>

</body>
</html>