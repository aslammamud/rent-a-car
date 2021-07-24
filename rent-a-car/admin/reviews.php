<?php
$page='reviews';
include 'header.php';
if(isset($_POST['submit'])){
	
// $sub_sub_category_name = $_POST['sub_sub_category_name'];
$review = $_POST['review'];
$reviewer = $_POST['reviewer'];


// image uploaded code End
$review_insert_query = "INSERT INTO reviews (review, reviewer) VALUES ('$review','$reviewer')";
$review_from_db = mysqli_query($con, $review_insert_query);
}


?>
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
			<div class="signin-logo p-2 bg-info tx-center tx-24 tx-bold tx-inverse">All Reviews</div>
		    <table class="table table-bordered table-white table-responsive mg-b-0 tx-12">
              <thead>
                <tr class="tx-10">
                  <th class="pd-y-6 text-center">Serial No.</th>
                  <th class="pd-y-5 text-center">Review</th>
                  <th class="pd-y-6 text-center">Reviewer</th>
                  <th class="pd-y-6 text-center">Edit</th>
                </tr>
              </thead>
              <tbody>

                <?php				
					$sql_reviews = 'select * from reviews';
					$result_reviews = mysqli_query($con,$sql_reviews);
					$count_reviews = mysqli_num_rows($result_reviews);
					$cnt = 0;
					if($count_reviews > 0){
					foreach($result_reviews as $review_item){
					$cnt++;
                    ?>
                    <tr>
                      <td class="pd-l-20 text-center text-dark"><?php echo $cnt; ?></td>

                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block"><?php echo $review_item['review']; ?></a>
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $review_item['reviewer']; ?></a>
                      </td>
					  <td>
                        <a href="remove-reviews-item.php?id=<?php echo $review_item['review_id']; ?>" class="tx-inverse text-danger tx-12 tx-medium d-block text-center" onclick="return confirm('Are you sure want to remove?');">Delete</a>
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
              <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Add New Review</div>

					
				 <div class="form-group">
                    <label class="text-dark h6">Review</label>
                    <input type="text" class="form-control" placeholder="Enter review here" name="review" required>
                  </div><!-- form-group -->
                  <br>

                  <div class="form-group"> 
                    <label class="text-dark h6">Reviewer</label>
					<input type="text" class="form-control" placeholder="Enter reviewer name" name="reviewer" required>
                  </div>
				  

          
              <div class="text-center">
                <button type="submit" value="submit" name="submit" class="btn btn-info mt-4">Upload Review</button>
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