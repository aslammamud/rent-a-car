<?php
$page='socials';
include 'header.php';

$select_buttons_query = "SELECT * FROM socials WHERE social_id = 1";
$result_buttons = mysqli_query($con,$select_buttons_query);
$buttons =  mysqli_fetch_assoc($result_buttons);
$facebook = $buttons['facebook'];
$twitter = $buttons['twitter'];
$google = $buttons['google'];

if(isset($_POST['submit'])){	

$facebook = get_safe_value($con,htmlspecialchars($_POST['facebook']));
$twitter = get_safe_value($con,htmlspecialchars($_POST['twitter']));
$google = get_safe_value($con,htmlspecialchars($_POST['google']));

$links_update_query = "UPDATE socials SET facebook='$facebook',twitter= '$twitter',google='$google' WHERE social_id= 1";
$button_from_db = mysqli_query($con, $links_update_query);
$msg_seccess = 'Successfully Updated Your Links.';

}


?>		
		   
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
	  <div class="signin-logo p-2 bg-info tx-center tx-24 tx-bold tx-inverse">Update Social Button Links</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <div class="d-flex align-items-center  bg-sl-white ht-50v">
              <div class="login-wrapper wd-500 wd-xs-1000 pd-25 pd-xs-50 bg-white m-auto custom-class">
             
				<?php if(isset($msg_seccess)){echo '<div class="alert alert-success">'.$msg_seccess.'</div>';} ?>
				 <div class="form-group">
                    <label class="text-dark h6">Facebook</label>
                    <input type="text" class="form-control" value="<?php echo $facebook ?>" placeholder="Enter link here" name="facebook" required>
                  </div><!-- form-group -->
                  <br>

                  <div class="form-group"> 
                    <label class="text-dark h6">Twitter</label>
					<input type="text" class="form-control" value="<?php echo $twitter ?>" placeholder="Enter link here" name="twitter" required>
                  </div> 
				  
				  <div class="form-group"> 
                    <label class="text-dark h6">Google</label>
					<input type="text" class="form-control" value="<?php echo $google ?>" placeholder="Enter link here" name="google" required>
                  </div>
				  
              <div class="text-center">
                <button type="submit" value="submit" name="submit" class="btn btn-info mt-4">Update</button>
              </div>

        </div><!-- login-wrapper -->
      </div><!-- d-flex -->
     </form>

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->      
    <!-- ########## END: MAIN PANEL ########## -->


<?php
  require_once 'footer.php';
?>