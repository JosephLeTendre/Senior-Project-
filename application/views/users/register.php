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

                <label>Select Club</label>
  <select>
    <option disabled >Select club:</option>
    <option value="1">Accounting Society</option>
    <option value="2">Acvtive Minds</option>
    <option value="3">Alpha Phi</option>
    <option value="4">Asian Students Association</option>
    <option value="5">Biology Club</option>
    <option value="6">Black Student Union</option>
    <option value="7">Bridging the Gap</option>
    <option value="8">Science Club</option>
    <option value="9">College Democrates</option>
    <option value="10">College Republicans</option>
    <option value="11">Down to Pray</option>
    <option value="12">Equestrian Club</option>
    <option value="13">Film Society</option>
    
  
</select>

<br>
<br>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
			
		</div>
		</div>
	</div>
<?php echo form_close(); ?>