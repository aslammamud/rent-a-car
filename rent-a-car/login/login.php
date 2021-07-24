<?php include 'header.php'; ?>
<?php
$msg = '';
$err = '';
$phn = '';
$pass = '';

if(isset($_POST['submit'])) {
	
	if(isset($_POST['password'])){
		$pass = $_POST['password'];
	}
	if(empty($_POST['phone'])){
		$err = '<b>Please enter phone no.</b>';
	}else if(preg_match("/^[0-9][0-9]*$/",$_POST['phone'])){
		$phn = $_POST['phone'];
		if(preg_match("/^(?:\+88|01)?(?:\d{11}|\d{13})$/",$_POST['phone'])){		
			$phonenum = get_safe_value($con,htmlspecialchars($_POST['phone']));			
			$phone = preg_replace('/^\+?88|\|88|\DD/', '', ($phonenum));
			$password = get_safe_value($con,htmlspecialchars($_POST['password']));
				
			$sql = "SELECT user_id,user_phone,user_pass FROM user";
			$result = mysqli_query($con,$sql);   
			$count = mysqli_num_rows($result);

			if($count>0){
				
				foreach($result as $user){
					if( $user['user_phone']== $phone){
						$flag_phone = true;
						$err = '';
						
						if( $user['user_pass']== $password){
						$flag_pass = true;
						$msg = '';
						
						$sql_authentic_user = "SELECT * FROM user WHERE user_phone = '$phone' and user_pass = '$password'";
						$result_authentic_user = mysqli_query($con,$sql_authentic_user);   
						$data_authentic_user = mysqli_fetch_assoc($result_authentic_user);
						$count_authentic_user = mysqli_num_rows($result_authentic_user);
						
						if($count_authentic_user>0){
							$_SESSION['hasib_lgn']= true;
							$_SESSION['hasib_usr_id']=$data_authentic_user['user_id'];
							echo  reloader('../admin',0);
							//header("Location: index.php");
							exit();
							die(); 
							
						}					

						
						}else{
							$flag_pass = false;
							$msg = '<b>Please enter correct password.<b>';
						}
					}else{
						$flag_phone = false;
						$err = '<b>Please enter correct number.<b>';
					}
					
					
				}
				
				
			}
		}
		
		if(strlen($_POST['phone']) < 11){
			$flag_phone = false;
			$err = '<b>Mobile no should be 11 digits long.</b>';
		}
		
		if(strlen($_POST['phone']) > 11){
			$flag_phone = false;
			$err = '<b>Mobile no should be 11 digits only</b>';
		}
	}else{
		$flag_phone = false;
		$err = '<b>Mobile no should be digits only<b>';
	}

}
?>

<style>
body{
	background: #2b333e;
}
.error-msg{
	color:red;
}
.succ-msg{
	color:green;
}
.fntsz{
	font-size:18px;
}

/* Login and Signup */

.texth {
    color: #ffffff;
    font-size: 38px;
    border-color: #1fc834;
}

.checkoutbox {
    box-shadow: 4px 4px 30px 0px rgb(0 0 0 / 20%);
    margin: 30px;
	max-width: 600px;
    background: white;
    padding: 40px;
    font-size: 22px;
    text-align: justify;
    color: #909090;
}


.bildet {
    color: #909090;
    padding: 20px 40px 20px 40px;
    width: 100%;
    box-sizing: border-box;
    font-size: 32px;
}

.bildet form {
    display: inline-table;
}

.bildet form input:focus, textarea:focus, select:focus{
        outline: none;
    }

.inptex {
    font-size: 20px;
    background: rgb(250, 250, 250, 0.9);
    border: 0px;
    color: #000000;
	width: 400px;
    border: solid 1px #909090;
    margin: 4px 0 12px 0;
    padding: 8px 16px 8px 16px;
}

.apply {
    background: #187ec2;
    background: linear-gradient(45deg,#187ec2,#2a9140);
    background-position: bottom right;
    background-repeat: no-repeat;
    padding: 10px;
    border-radius: 8px;
    border: 0px;
    color: #ffffff;
    font-size: 24px;
    width: 150px;
    transition: ease all 0.6s;
    margin-top: 10px;
    border: 3px solid #fff;
}

@media only screen and (max-width: 600px) {
	.inptex {
		font-size: 16px;
		background: rgb(250, 250, 250, 0.9);
		border: 0px;
		color: #000000;
		width: 200px;
		border: solid 1px #909090;
		margin: 4px 0 12px 0;
		padding: 8px 16px 8px 16px;
	}
  .apply {
		background: #187ec2;
		background: linear-gradient(45deg,#187ec2,#2a9140);
		background-position: bottom right;
		background-repeat: no-repeat;
		padding: 10px;
		border-radius: 8px;
		border: 0px;
		color: #ffffff;
		font-size: 24px;
		width: 150px;
		transition: ease all 0.6s;
		margin-top: 10px;
		border: 3px solid #fff;
	}
}
</style>

<center>
<div class="texth mt-4">Admin - Login</div>

<div class="checkoutbox">
	<div class="contacta">
		<div class="bildet myfont">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<?php if(isset($flag_phone) && $flag_phone==true){
					echo ' <b class="succ-msg">Phone Number :</b>';
				}else if(isset($flag_phone) && $flag_phone==false){
					echo '<b class="error-msg">Phone Number :</b>';
				}else{
					echo 'Phone Number :';
				} ?>
				<br><input class="inptex" type="tel" name="phone" placeholder="Enter Phone Number" value="<?php echo $phn; ?>" required>
				<?php 
					if(!empty($err)){
						echo '<div class="error-msg fntsz text-left p-b-15">'.$err.'</div>'; 
					}else{
						echo '<br>';
					}
					?>
			
				<?php if(isset($flag_pass) && $flag_pass==true){
					echo ' <b class="succ-msg">Password :</b>';
				}else if(isset($flag_pass) && $flag_pass==false){
					echo '<b class="error-msg">Password :</b>';
				}else{
					echo 'Password :';
				} ?>
				  
				<br><input class="inptex" type="password" name="password" placeholder="Enter Password" value="<?php echo $pass; ?>" required>
				<?php 
					if(!empty($msg)){
						echo '<div class="error-msg fntsz text-left p-b-15">'.$msg.'</div>'; 
					}
					?>
				<center><input class="apply" name="submit" type="submit" value="Login"></center>
			</form>
		</div>
	</div>
</div>
</center>

<?php include 'footer.php'; ?>
