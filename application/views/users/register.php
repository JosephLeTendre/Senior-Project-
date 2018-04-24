<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="body1" align="center">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group" style="width:250px;">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div>
			
			<div class="form-group" style="width:250px;">
				<label>School Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
  
			<div class="form-group" style="width:250px;">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>
			<div class="form-group" style="width:250px;">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form-group" style="width:250px;">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>

			<div class="form-group" style="width:250px;">
  <select>
    <option disabled >Select club:</option>
    <option value="1">Accounting Society</option>
    <option value="2">Acvtive Minds</option>
    <option value="3">Alpha Phi</option>
    <option value="4">Asian Students Association</option>
    <option value="5">Biology Club</option>
    <option value="6">Black Student Union</option>
    <option value="7">Bridging the Gap</option>
    <option value="8">College Democrates</option>
    <option value="9">College Republicans</option>
    <option value="10">Down to Pray</option>
    <option value="11">Equestrian Club</option>
    <option value="12">Film Society</option>
    <option value="14">Accounting Society</option>
    <option value="15">Acvtive Minds</option>
    <option value="16">Alpha Phi</option>
    <option value="17">Asian Students Association</option>
    <option value="18">Biology Club</option>
    <option value="19">Black Student Union</option>
    <option value="20">Bridging the Gap</option>
    <option value="21">College Democrates</option>
    <option value="22">College Republicans</option>
    <option value="23">Down to Pray</option>
    <option value="24">Equestrian Club</option>
    <option value="25">Film Society</option>
  </select>
</div>

		<div class="form-group" style="width:250px;">
  <select>
    <option value="0">Select Role:</option>
    <option value="1">President</option>
    <option value="2">Vice President</option>
    <option value="3"> Secretary</option>
    <option value="4">Treasurer</option>
    <option value="5">Member</option>
    <option value="6">Other</option>
    
  </select>
</div>
<br>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
			
		</div>
		</div>
	</div>
<?php echo form_close(); ?>