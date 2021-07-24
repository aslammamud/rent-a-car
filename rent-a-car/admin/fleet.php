<?php
$page='fleet';
include 'header.php';
if(isset($_POST['submit'])){
	
// $sub_sub_category_name = $_POST['sub_sub_category_name'];
$alt_text = $_POST['alt_text'];

// image uploaded code start
$car_image = ($_FILES['car_image']['name']);
$car_image_after_explode = explode(".", $car_image);
$car_image_after_explode_extention = end($car_image_after_explode);
$car_image_new_name = time() . "-" . rand(111, 999) . "." . $car_image_after_explode_extention;

$car_image_tmp_location = ($_FILES['car_image']['tmp_name']);
$car_image_new_location = "images/fleet/" . $car_image_new_name;
move_uploaded_file($car_image_tmp_location, $car_image_new_location);

// image uploaded code End

$fleet_insert_query = "INSERT INTO fleet (image, alt) VALUES ('$car_image_new_name','$alt_text')";
$fleet_to_db = mysqli_query($con, $fleet_insert_query);
}


?>
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
			<div class="signin-logo p-2 bg-info tx-center tx-24 tx-bold tx-inverse">All Cars</div>
		    <table class="table table-bordered table-white table-responsive mg-b-0 tx-12">
              <thead>
                <tr class="tx-10">
                  <th class="pd-y-6 text-center">Serial No.</th>
                  <th colspan="2" class="pd-y-5 text-center">Car Image</th>
                  <th colspan="3" class="pd-y-6 text-center">Alt Text</th>
                  <th class="pd-y-6 text-center">Edit</th>
                </tr>
              </thead>
              <tbody>

                <?php				
					$sql_fleet = 'select * from fleet';
					$result_fleet = mysqli_query($con,$sql_fleet);
					$count_fleet = mysqli_num_rows($result_fleet);
					$cnt = 0;
					if($count_fleet > 0){
					foreach($result_fleet as $fleet_item){
					$cnt++;
                    ?>
                    <tr>
                      <td class="pd-l-20 text-center text-dark"><?php echo $cnt; ?></td>
                      <td colspan="2">
                        <div class="text-center"><img src="images/fleet/<?php echo $fleet_item['image']; ?>" alt="car image" height="40" width="70"></div>
                      </td>
                      <td colspan="3">
                        <a href="" class="tx-inverse tx-12 tx-medium d-block"><?php echo $fleet_item['alt']; ?></a>
                      </td>                   
					  <td>
                        <a href="remove-fleet-item.php?id=<?php echo $fleet_item['fleet_id']; ?>" class="tx-inverse text-danger tx-12 tx-medium d-block text-center" onclick="return confirm('Are you sure want to remove?');">Delete</a>
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
              <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Add New Car</div>
				<div class="form-group">
                      <label class="text-dark h6" ><h6>Car Image</h6></label>
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
                        <input class="form-control" type='file' onchange="readURL(this); " name="car_image" />
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
					
					 <div class="form-group">
                    <label class="text-dark h6">Alt Text</label>
                    <input type="text" class="form-control" placeholder="Enter alt text" name="alt_text" required>
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