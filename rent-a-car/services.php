<?php
$page='services';
include 'header.php';
if(isset($_POST['submit'])){
	
// $sub_sub_category_name = $_POST['sub_sub_category_name'];
$service_title = $_POST['service_title'];
$service_description = $_POST['service_description'];
$service_link = $_POST['service_link'];

// image uploaded code start
$service_image = ($_FILES['service_image']['name']);
$service_image_after_explode = explode(".", $service_image);
$service_image_after_explode_extention = end($service_image_after_explode);
$service_image_new_name = time() . "-" . rand(111, 999) . "." . $service_image_after_explode_extention;

$service_image_tmp_location = ($_FILES['service_image']['tmp_name']);
$service_image_new_location = "images/services/" . $service_image_new_name;
move_uploaded_file($service_image_tmp_location, $service_image_new_location);

// image uploaded code End

$service_insert_query = "INSERT INTO services (service_image, service_title, service_description , service_link) VALUES ('$service_image_new_name','$service_title ','$service_description','$service_link')";
$service_from_db = mysqli_query($con, $service_insert_query);
}


?>
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
			<div class="signin-logo p-2 bg-info tx-center tx-24 tx-bold tx-inverse">All service Items</div>
		    <table class="table table-bordered table-white table-responsive mg-b-0 tx-12">
              <thead>
                <tr class="tx-10">
                  <th class="pd-y-6 text-center">Serial No.</th>
                  <th class="pd-y-5 text-center">service Image</th>
                  <th class="pd-y-6 text-center">service Title</th>
                  <th class="pd-y-6 text-center">service Description</th>
                  <th class="pd-y-6 text-center">service link</th>
                  <th class="pd-y-6 text-center">Edit</th>
                </tr>
              </thead>
              <tbody>

                <?php				
					$sql_service = 'select * from services';
					$result_service = mysqli_query($con,$sql_service);
					$count_service = mysqli_num_rows($result_service);
					$cnt = 0;
					if($count_service > 0){
					foreach($result_service as $service_item){
					$cnt++;
                    ?>
                    <tr>
                      <td class="pd-l-20 text-center text-dark"><?php echo $cnt; ?></td>
                      <td>
                        <img src="images/services/<?php echo $service_item['service_image']; ?>" alt="service image" height="80" width="100">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block"><?php echo $service_item['service_title']; ?></a>
                      </td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block"><?php echo $service_item['service_description']; ?></a>
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $service_item['service_link']; ?></a>
                      </td>
					  <td>
                        <a href="remove-services-item.php?id=<?php echo $service_item['service_id']; ?>" class="tx-inverse text-danger tx-12 tx-medium d-block text-center">Delete</a>
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
              <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Add New Service Item</div>
				<div class="form-group">
                      <label class="text-dark h6" ><h6>Service Image</h6></label>
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
                        <input class="form-control" type='file' onchange="readURL(this); " name="service_image" />
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
                    <label class="text-dark h6">Service Title</label>
                    <input type="text" class="form-control" placeholder="Enter service Title" name="service_title" required>
                  </div><!-- form-group -->
                  <br>

                  <div class="form-group"> 
                    <label class="text-dark h6">Service Description</label>
					<br>
					<textarea rows="4" name="service_description" cols="58"> </textarea>
                  </div>
				  
				  <div class="form-group"> 
                    <label class="text-dark h6">Service link</label>         
                    <input type="text" class="form-control" placeholder="Enter service link" name="service_link" required>
                  </div>

          
              <div class="text-center">
                <button type="submit" value="submit" name="submit" class="btn btn-info mt-4">Upload Service Item</button>
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