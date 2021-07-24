<?php
$page='partner-companies';
include 'header.php';
if(isset($_POST['submit'])){
	
// image uploaded code start
$partner_company_image = ($_FILES['partner_company_image']['name']);
$partner_company_image_after_explode = explode(".", $partner_company_image);
$partner_company_image_after_explode_extention = end($partner_company_image_after_explode);
$partner_company_image_new_name = time() . "-" . rand(111, 999) . "." . $partner_company_image_after_explode_extention;

$partner_company_image_tmp_location = ($_FILES['partner_company_image']['tmp_name']);
$partner_company_image_new_location = "images/partners/" . $partner_company_image_new_name;
move_uploaded_file($partner_company_image_tmp_location, $partner_company_image_new_location);

// image uploaded code End

$partner_insert_query = "INSERT INTO partners (partner_image) VALUES ('$partner_company_image_new_name')";
$partner_to_db = mysqli_query($con, $partner_insert_query);
}


?>
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
			<div class="signin-logo p-2 bg-info tx-center tx-24 tx-bold tx-inverse">All Partner Companies</div>
		    <table class="table table-bordered table-white table-responsive mg-b-0 tx-12">
              <thead>
                <tr class="tx-10">
                  <th class="pd-y-6 text-center">Serial No.</th>
                  <th colspan="2" class="pd-y-5 text-center">Partner Company Image</th>
                  <th class="pd-y-6 text-center">Edit</th>
                </tr>
              </thead>
              <tbody>

                <?php				
					$sql_partner = 'select * from partners';
					$result_partner = mysqli_query($con,$sql_partner);
					$count_partner = mysqli_num_rows($result_partner);
					$cnt = 0;
					if($count_partner > 0){
					foreach($result_partner as $partner){
					$cnt++;
                    ?>
                    <tr>
                      <td class="pd-l-20 text-center text-dark"><?php echo $cnt; ?></td>
                      <td colspan="2">
                        <div class="text-center"><img src="images/partners/<?php echo $partner['partner_image']; ?>" alt="car image" height="40" width="70"></div>
                      </td>                  
					  <td>
                        <a href="remove-partner-item.php?id=<?php echo $partner['partner_id']; ?>" class="tx-inverse text-danger tx-12 tx-medium d-block text-center" onclick="return confirm('Are you sure want to remove?');">Delete</a>
                      </td>
                    </tr>
                    <?php
						}
					}
                ?>
				
              </tbody>
            </table>
	  </div>
    </div>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <div class="d-flex align-items-center  bg-sl-white ht-50v">
              <div class="login-wrapper wd-500 wd-xs-1000 pd-25 pd-xs-50 bg-white m-auto custom-class">
              <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Add New Partner</div>
				<div class="form-group">
                      <label class="text-dark h6" ><h6>New Partner Image</h6></label>
                      <br>
                      <!-- When select image than show this image Code start -->
                      <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                      <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

                      <style>
                        article, aside, figure, footer, header, hgroup, 
                        menu, nav, section { display: block; }
                      </style>
					  <div class="text-center">
                        <img id="blah" class="img-sm mt-2 mb-4" style="height:200px !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="http://demo.activeitzone.com/shop/uploads/product_image/default.jpg" alt="your image" /><br>
                        <input class="form-control" type='file' onchange="readURL(this); " name="partner_company_image" />
					</div>
                      <script>
                        function readURL(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();

                              reader.onload = function (e) {
                                  $('#blah')
                                    .attr('src', e.target.result);
                              };

                              reader.readAsDataURL(input.files[0]);
                          }
                        }
                      </script>
                      <!-- When select image than show this image Code End -->
                    </div><!-- form-group -->					
                  <br>
              <div class="text-center">
                <button type="submit" value="submit" name="submit" class="btn btn-info mt-4">Upload This Car</button>
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