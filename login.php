<?php  include("./includes/head.php"); ?>

<?php

require('dbcon.php');
session_start();
if(isset($_POST['email']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from login where email = '$email' AND password= '$password'";

        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) >0)
        {

        
        $_SESSION['email'] = $email;
        $row=mysqli_fetch_assoc($result);
           
        
        header("Location: dashboard.php");
        
    }
        else
        {
            echo "<div class='form'>
                <h3>Incorrect username or password!</h3><br/>
                <p class='link'><a href='login.php'>Click to Login Again</a></p>
                 </div>";
        }

    }
    else {
    ?>

<div class="wrapper">
	<div class="title">
		Welcome Admin!
	</div>
	<form action="" method="post">
		<div class="field">
			<input type="text" name="email">
			<label>Email Address</label>
		</div>
		<div class="field">
			<input type="password" name="password" >
			<label>Password</label>
		</div>
		<div class="content">
			<div class="pass-link">
				<a href="#">Forgot password?</a>
			</div>
		</div>
		<div class="field">
			<input type="submit" value="Login"/>
		</div>
		<div class="signup-link">
			Not a member? <a href="#">Signup now</a>
		</div>
	</form>
	<?php
    }

    ?>
</div>