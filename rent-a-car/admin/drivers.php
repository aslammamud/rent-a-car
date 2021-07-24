<?php
$page='drivers';
include 'header.php';
if(isset($_POST['submit'])){
	
// $sub_sub_category_name = $_POST['sub_sub_category_name'];
$driver_name = $_POST['driver_name'];
$driver_dob = $_POST['driver_dob'];
$driver_father = $_POST['driver_father'];
$driver_licence = $_POST['driver_licence'];
$driver_blood_group = $_POST['driver_blood_group'];

// image uploaded code start
$driver_image = ($_FILES['driver_image']['name']);
$driver_image_after_explode = explode(".", $driver_image);
$driver_image_after_explode_extention = end($driver_image_after_explode);
$driver_image_new_name = time() . "-" . rand(111, 999) . "." . $driver_image_after_explode_extention;

$driver_image_tmp_location = ($_FILES['driver_image']['tmp_name']);
$driver_image_new_location = "images/drivers/" . $driver_image_new_name;
move_uploaded_file($driver_image_tmp_location, $driver_image_new_location);

// image uploaded code End
$driver_insert_query = "INSERT INTO drivers (driver_image, driver_name, driver_dob, driver_father, driver_licence, driver_blood_group) VALUES ('$driver_image_new_name','$driver_name','$driver_dob','$driver_father','$driver_licence','$driver_blood_group')";
$driver_insert_db = mysqli_query($con, $driver_insert_query);
}


?>
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
			<div class="signin-logo p-2 bg-info tx-center tx-24 tx-bold tx-inverse">All Drivers List</div>
		    <table class="table table-bordered table-white table-responsive mg-b-0 tx-12">
              <thead>
                <tr class="tx-10">
                  <th class="pd-y-6 text-center">Serial No.</th>
                  <th class="pd-y-6 text-center">Name</th>
                  <th class="pd-y-5 text-center">Image</th>
                  <th class="pd-y-6 text-center">Birth</th>
                  <th class="pd-y-6 text-center">Father</th>
                  <th class="pd-y-6 text-center">Licence</th>
                  <th class="pd-y-6 text-center">Blood Group</th>
                  <th class="pd-y-6 text-center">Edit</th>
                </tr>
              </thead>
              <tbody>

                <?php				
					$sql_drivers = 'select * from drivers';
					$result_drivers = mysqli_query($con,$sql_drivers);
					$count_drivers = mysqli_num_rows($result_drivers);
					$cnt = 0;
					if($count_drivers > 0){
					foreach($result_drivers as $driver_item){
					$cnt++;
                    ?>
                    <tr>
                      <td class="pd-l-20 text-center text-dark"><?=$driver_item['driver_id']?></td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block"><?php echo $driver_item['driver_name']; ?></a>
                      </td>
                      <td>
                        <div class="text-center"><img src="images/drivers/<?php echo $driver_item['driver_image']; ?>" alt="driver image" height="40" width="50"></div>
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $driver_item['driver_dob']; ?></a>
                      </td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $driver_item['driver_father']; ?></a>
                      </td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $driver_item['driver_licence']; ?></a>
                      </td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $driver_item['driver_blood_group']; ?></a>
                      </td>
					  <td>
                        <a href="remove-drivers-item.php?id=<?php echo $driver_item['driver_id']; ?>" class="tx-inverse text-danger tx-12 tx-medium d-block text-center" onclick="return confirm('Are you sure want to remove?');">Delete</a>
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
              <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Add New Driver</div>
				<div class="form-group">
                      <label class="text-dark h6" ><h6>Driver Image</h6></label>
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
                        <input class="form-control" type='file' onchange="readURL(this); " name="driver_image" />
					</div>
                      <script>
                        function readURL(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();

                              reader.onload = function (e) {
                                  $('#blah')
                                    .attr('src', e.target.result)
                                    .width(110)
                                    .height(120);
                              };

                              reader.readAsDataURL(input.files[0]);
                          }
                        }
                      </script>
                      <!-- When select image than show this image Code End -->
                    </div><!-- form-group -->
					
					 <div class="form-group">
                    <label class="text-dark h6">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Driver's Name" name="driver_name" required>
                  </div><!-- form-group -->
                  <br>
				  
				  <div class="form-group"> 
                    <label class="text-dark h6">Date of Birth</label>         
                    <input type="text" class="form-control" placeholder="Enter service link" name="driver_dob" required>
                  </div>
				  
				  <div class="form-group"> 
                    <label class="text-dark h6">Father</label>         
                    <input type="text" class="form-control" placeholder="Enter service link" name="driver_father" required>
                  </div>
				  
				  <div class="form-group"> 
                    <label class="text-dark h6">Licence</label>         
                    <input type="text" class="form-control" placeholder="Enter service link" name="driver_licence" required>
                  </div>
				  
				  <div class="form-group"> 
                    <label class="text-dark h6">Blood Group</label>         
                    <input type="text" class="form-control" placeholder="Enter service link" name="driver_blood_group" required>
                  </div>
          
              <div class="text-center">
                <button type="submit" value="submit" name="submit" class="btn btn-info mt-4">Save Driver</button>
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