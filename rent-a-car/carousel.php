<?php
$page='carousel';
include 'header.php';
if(isset($_POST['submit'])){
	
// $sub_sub_category_name = $_POST['sub_sub_category_name'];
$carousel_title = $_POST['carousel_title'];
$carousel_subtitle = $_POST['carousel_subtitle'];

// image uploaded code start
$carousel_image = ($_FILES['carousel_image']['name']);
$carousel_image_after_explode = explode(".", $carousel_image);
$carousel_image_after_explode_extention = end($carousel_image_after_explode);
$carousel_image_new_name = time() . "-" . rand(111, 999) . "." . $carousel_image_after_explode_extention;

$carousel_image_tmp_location = ($_FILES['carousel_image']['tmp_name']);
$carousel_image_new_location = "images/carousel/" . $carousel_image_new_name;
move_uploaded_file($carousel_image_tmp_location, $carousel_image_new_location);

// image uploaded code End

$carousel_insert_query = "INSERT INTO carousel (carousel_image, carousel_title, carousel_subtitle) VALUES ('$carousel_image_new_name','$carousel_title ','$carousel_subtitle')";
$carousel_from_db = mysqli_query($con, $carousel_insert_query);
}


?>
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
			<div class="signin-logo p-2 bg-info tx-center tx-24 tx-bold tx-inverse">All Carousel Items</div>
		    <table class="table table-bordered table-white table-responsive mg-b-0 tx-12">
              <thead>
                <tr class="tx-10">
                  <th class="pd-y-6 text-center">Serial No.</th>
                  <th class="pd-y-5 text-center">Carousel Image</th>
                  <th class="pd-y-6 text-center">Carousel Title</th>
                  <th class="pd-y-6 text-center">Carousel Subtitle</th>
                  <th class="pd-y-6 text-center">Edit</th>
                </tr>
              </thead>
              <tbody>

                <?php
				
					$sql_caro = 'select * from carousel';
							$result_caro = mysqli_query($con,$sql_caro);
							$count_caro = mysqli_num_rows($result_caro);
							$cnt = 0;
							if($count_caro > 0){
							foreach($result_caro as $caro_item){
							$cnt++;
                    ?>
                    <tr>
                      <td class="pd-l-20 text-center text-dark"><?php echo $cnt; ?></td>
                      <td>
                        <img src="images/carousel/<?php echo $caro_item['carousel_image']; ?>" alt="carousel image" height="80" width="150">
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block"><?php echo $caro_item['carousel_title']; ?></a>
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $caro_item['carousel_subtitle']; ?></a>
                      </td>
					  <td>
                        <a href="remove-carousel-item.php?id=<?php echo $caro_item['carousel_id']; ?>" class="tx-inverse text-danger tx-12 tx-medium d-block text-center">Delete</a>
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
              <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Add New Carousel Item</div>
				<div class="form-group">
                      <label class="text-dark h6" ><h6>Carousel Image</h6></label>
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
                        <input class="form-control" type='file' onchange="readURL(this); " name="carousel_image" />
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
                    <label class="text-dark h6">Carousel Title</label>
                    <input type="text" class="form-control" placeholder="Enter Carousel Title" name="carousel_title" required>
                  </div><!-- form-group -->
                  <br>

                  <div class="form-group m-auto"> 
                    <label class="text-dark h6">Carousel Subtitle</label>         
                    <input type="text" class="form-control" placeholder="Enter Carousel Subtitle" name="carousel_subtitle" required>
                  </div>

          
              <div class="text-center">
                <button type="submit" value="submit" name="submit" class="btn btn-info mt-4">Upload Carousel Item</button>
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