<?php
   include_once'header.php';
?>
    <!----Main Section------->
	<div class="container">
		<form action="includes/login.inc.php" method="post" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
                <p>Email</p>
				<input type="text" placeholder="Email" name="email"  required>
			</div>
			<div class="input-group">
                <p>Password</p>
				<input type="password" placeholder="Password" name="password"  required>
			</div>
			<div class="input-group">
				<button type="submit" name="submit" class="btn"><a href="welcome.php">Login</a></button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
		<?php
            if(isset($_GET["error"])){
				if($_GET["error"] == "emptyinput"){
					echo"<p>Fill in all fields</p>";
				}
				elseif ($_GET["errpr"] == "wronglogin") {
					echo"<p>Incorrect login information</p>";
				}
			} 
		?>

	</div>
   
    <!----Footer----->  
        <?php
            include_once'footer.php';
        ?> 
      
      <script src="bikeshop.js"></script>
      
      
</body>
</php>