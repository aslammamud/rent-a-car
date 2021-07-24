<?php
$page='meet-out-partners';
include 'header.php';

$select_buttons_query = "SELECT * FROM mop_description WHERE mop_id = 1";
$result_buttons = mysqli_query($con,$select_buttons_query);
$buttons =  mysqli_fetch_assoc($result_buttons);
$mop_description = $buttons['mop_description'];

if(isset($_POST['submit'])){	

$mop_description = get_safe_value($con,htmlspecialchars($_POST['mop_description']));

$links_update_query = "UPDATE mop_description SET mop_description='$mop_description' WHERE mop_id= 1";
$button_from_db = mysqli_query($con, $links_update_query);
$msg_seccess = 'Successfully Updated Meet Our Partners Description.';

}


?>		
		   
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
	  <div class="signin-logo p-2 bg-info tx-center tx-24 tx-bold tx-inverse">Update Meet Our Partners Description</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <div class="d-flex align-items-center  bg-sl-white ht-50v">
              <div class="login-wrapper wd-500 wd-xs-1000 pd-25 pd-xs-50 bg-white m-auto custom-class">
             
				<?php if(isset($msg_seccess)){echo '<div class="alert alert-success">'.$msg_seccess.'</div>';} ?>
				 <div class="form-group">
                    <label class="text-dark h6">mop_description</label>
                    <textarea rows=10 type="text" class="form-control" placeholder="Enter text here" name="mop_description" required><?php echo $mop_description ?></textarea>
                  </div><!-- form-group -->
                  <br>
				  
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