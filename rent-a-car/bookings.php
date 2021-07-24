<?php
$page='bookings';
include 'header.php';
?>
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
			<div class="signin-logo p-2 bg-info tx-center tx-24 tx-bold tx-inverse">All service Items</div>
		    <table class="table table-bordered table-white table-responsive mg-b-0 tx-12">
              <thead>
                <tr class="tx-10">
                  <th class="pd-y-6 text-center">SN.</th>
                  <th class="pd-y-5 text-center">Car</th>
                  <th class="pd-y-5 text-center">Customer</th>
                  <th class="pd-y-5 text-center">C. Phone</th>
                  <th class="pd-y-6 text-center">Pickup Location</th>
                  <th class="pd-y-6 text-center">Drop Location</th>
                  <th class="pd-y-6 text-center">Pickup Time</th>
                  <th class="pd-y-6 text-center">Drop Time</th>
                  <th class="pd-y-6 text-center">Pickup Date</th>
                  <th class="pd-y-6 text-center">Drop Date</th>
                  <th class="pd-y-6 text-center">Edit</th>
                </tr>
              </thead>
              <tbody>

				<?php
					
					$bookings_query = "SELECT * FROM bookings ORDER BY booking_id DESC";
					$bookings = mysqli_query($con, $bookings_query);
					$count_bookings = mysqli_num_rows($bookings);
					mysqli_query($con,'SET CHARACTER SET utf8');
					$cnt = 0;
					if($count_bookings > 0){
					foreach($bookings as $booking_item){
					$cnt++;
                ?>
                    <tr>
                      <td class="pd-l-20 text-center text-dark"><?php echo $cnt; ?></td>
                      <td>
						<a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $booking_item['booking_car_name']; ?></a>
                      </td>
                      <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $booking_item['booking_bookie_name']; ?></a>
                      </td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $booking_item['booking_bookie_phone']; ?></a>
                      </td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $booking_item['booking_pickup_location']; ?></a>
                      </td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $booking_item['booking_drop_location']; ?></a>
                      </td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $booking_item['booking_pickup_time']; ?></a>
                      </td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $booking_item['booking_drop_time']; ?></a>
                      </td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $booking_item['booking_pickup_date']; ?></a>
                      </td>
					  <td>
                        <a href="" class="tx-inverse tx-12 tx-medium d-block text-center"><?php echo $booking_item['booking_drop_date']; ?></a>
                      </td>
					  <td>
                        <a href="remove-bookings-item.php?id=<?php echo $booking_item['booking_id']; ?>" class="tx-inverse text-danger tx-12 tx-medium d-block text-center">Delete</a>
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
<?php
  require_once 'footer.php';
?>