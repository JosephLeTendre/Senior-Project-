complete signup page with full
<!-- Button -->
<button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">times;</span>
<form class="modal-content" action="/action_page.php">
<div class="container">
<h1>Sign Up</h1>
<p> Create Account</p>
<hr>
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>

<label for="psw-repeat"><b>Repeat Password</b></label>
<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

<label for="nameFirst"><b>First Name</b></label>
<input type="text" placeholder="First Name" name="nameFirst" required>

<label for="nameLast"><b>Last Name</b></label>
<input type="text" placeholder="Last Name" name="nameLast" required>







<label>
<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
</label>

<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

<div class="clearfix">
<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
<button type="submit" class="signup">Sign Up</button>
</div>
</div>
</form>
</div>
