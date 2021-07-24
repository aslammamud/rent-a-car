<?php
$page='car-rental-pricing';
include 'header.php';
if(isset($_POST['submit'])){
	
//car rentals
$car_rental_item = $_POST['car_rental_item'];
$car_rental_price = $_POST['car_rental_price'];


// image uploaded code End
$car_rental_insert_query = "INSERT INTO car_rental (car_rental_item, car_rental_price) VALUES ('$car_rental_item','$car_rental_price')";
$car_rental_from_db = mysqli_query($con, $car_rental_insert_query);
}


?>
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
			<div class="signin-logo p-2 bg-info tx-center tx-24 tx-bold tx-inverse">All Rentals</div>
		    <table class="table table-bordered table-white table-responsive mg-b-0 tx-12">
              <thead>
                <tr class="tx-10">
                  <th class="pd-y-6 text-center">Serial No.</th>
                  <th class="pd-y-5 text-center">Rental Item</th>
                  <th class="pd-y-6 text-center">Price</th>
                  <th class="pd-y-6 text-center">Edit</th>
                </tr>
              </thead>
              <tbody>

                <?php				
					$sql_rental = 'select * from car_rental';
					$result_rental = mysqli_query($con,$sql_rental);
					$count_rental = mysqli_num_rows($result_rental);
					$cnt = 0;
					if($count_rental > 0){
					foreach($result_rental as $rental_item){
					$cnt++;
                    ?>
                    <tr>
                      <td class="pd-l-20 text-center text-dark"><?php echo $cnt; ?></td>

                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $rental_item['car_rental_item']; ?></a>
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $rental_item['car_rental_price']; ?></a>
                      </td>
					  <td>
                        <a href="remove-rental-item.php?id=<?php echo $rental_item['car_rental_id']; ?>" class="tx-inverse text-danger tx-12 tx-medium d-block text-center" onclick="return confirm('Are you sure want to remove?');">Delete</a>
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
              <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Add New Rental Item</div>
	
				 <div class="form-group">
                    <label class="text-dark h6">Rental Item</label>
                    <input type="text" class="form-control" placeholder="Enter rental name here" name="car_rental_item" required>
                  </div><!-- form-group -->
                  <br>

                  <div class="form-group"> 
                    <label class="text-dark h6">Rental Price</label>
					<input type="text" class="form-control" placeholder="Enter rental price" name="car_rental_price" required>
                  </div>
				  

          
              <div class="text-center">
                <button type="submit" value="submit" name="submit" class="btn btn-info mt-4">Save Rental</button>
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