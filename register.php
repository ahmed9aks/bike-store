<?php
   include_once'header.php'
?>
    <!----Main Section------->
	<div class="container">
		<form action="includes/signup.inc.php" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
                <p>Username</p>
				<input type="text" placeholder="Username" name="uid" required>
			</div>
			<div class="input-group">
                <p>Email</p>
				<input type="text" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
                <p>Password</p>
				<input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <p>Re-enter password</p>
				<input type="password" placeholder="Confirm Password" name="cpassword"  required>
			</div>
			<div class="input-group">
				<button type="submit" name="submit" class="btn"><a href="login.php">Register</a></button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
   <?php
      if (isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo"<p>Fill in all fields, please and thank you</p>";
		} 
		elseif ($_GET["error"]== "invaliduid") {
			echo"<p>Choose a proper username</p>";
		}
		elseif ($_GET["erorr"]=="invalidemail") {
			echo"<p>Choose a proper email</p>";
		}
		elseif ($_GET["erorr"]=="passwordsdontmatch") {
			echo"<p>Password don't match</p>";
		}
		elseif ($_GET["erorr"]=="stmtfailed") {
			echo"<p>Something went wrong, please try again later</p>";
		}
		elseif ($_GET["erorr"]=="usernametaken") {
			echo"<p>Username already taken. Please, choose a different user name</p>";
		}
        elseif ($_GET["erorr"]=="none") {
			echo"<p>Congratulations!!! You signed up!!</p>";
		}
	  }

   ?>
    <!----Footer----->
    <?php
            include_once'footer.php';
    ?>
      <script src="bikeshop.js"></script>

      
</body>
</php>