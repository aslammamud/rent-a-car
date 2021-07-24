<?php $page='index.php'; ?>
<?php include'header.php'; ?>

<!-- Teaser start -->
<section id="home">
   <div id="teaser">
      <div class="container" >
         <div class="row">
            <div class="col-md-6 col-xs-12 pull-right">
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides start -->
                  <div class="carousel-inner">
                     <?php
                        $sql_caro = 'select * from carousel';
                        $result_caro = mysqli_query($con,$sql_caro);
                        $count_caro = mysqli_num_rows($result_caro);
                        if($count_caro > 0){
                        foreach($result_caro as $caro_item){
                        ?>
                     <div class="item">
                        <h1 class="title"><?php echo $caro_item['carousel_title']; ?>
                           <span class="subtitle"><?php echo $caro_item['carousel_subtitle']; ?></span>
                        </h1>
                        <div class="car-img">
                           <img src="admin/images/carousel/<?php echo $caro_item['carousel_image']; ?>" class="img-responsive" alt="<?php echo $caro_item['carousel_image']; ?>">
                        </div>
                     </div>
                     <?php 
                        }
                        }	
                        ?>
                  </div>
                  <!-- Wrapper for slides end -->
                  <!-- Slider Controls start -->
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                  <!-- Slider Controls end -->
               </div>
            </div>
			
			 <div class="col-md-6 col-xs-12 pull-left">
               <div class="reservation-form-shadow">
			   <div id="message"></div>
                  <form class="formsubmit" name="car-select-form" id="car-select-form">                   
                     <!-- Car select start -->
                     <div class="styled-select-car">
                        <select name="car-select" id="car-select" required>
                           <option value="Toyota Hiace SGL 2015">Toyota Hiace Super GL 2015</option>
                           <option value="Toyota X Noah 2015">Toyota X Noah 2015</option>
                           <option value="Toyota premio 2015">Toyota Premio 2015</option>
                           <option value="Toyota Alion">Toyota Alion</option>
                        </select>
                     </div>
                     <!-- Car select end -->
                     <!-- Pick-up location start -->
                     <div class="location">
                        <div class="input-group pick-up">
                           <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span>Pick-up </span>

                           <div class="">
                              <div class="styled-select-time">
                                 <select name="pick-up-location" id="pick-up-location">
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Sylhet">Sylhet </option>
                                    <option value="Jessore">Jessore </option>
                                    <option value="Dinajpur">Dinajpur </option>
                                    <option value="Mymensingh">Mymensingh </option>
                                    <option value="Comilla">Comilla </option>
                                    <option value="Barisal">Barisal </option>
                                    <option value="Faridpur">Faridpur </option>
                                    <option value="Bogra">Bogra </option>
                                    <option value="Pabna">Pabna </option>
                                    <option value="Cumilla">Cumilla</option>
                                    <option value="Rangamati">Rangamati </option>
                                    <option value="Kushtia">Kushtia </option>
                                    <option value="Rangpur">Rangpur </option>
                                    <option value="Noakhali">Noakhali </option>
                                    <option value="Khulna">Khulna </option>
                                    <option value="Tangail">Tangail </option>
                                    <option value="Panchagarh">Panchagarh </option>
                                    <option value="Bhola">Bhola</option>
                                    <option value="Bandarban">Bandarban </option>
                                    <option value="Chandpur">Chandpur </option>
                                    <option value="Habiganj">Habiganj </option>
                                    <option value="Lakshmipur">Lakshmipur </option>
                                    <option value="Barguna">Barguna </option>
                                    <option value="Jhalokati">Jhalokati </option>
                                    <option value="Pirojpur">Pirojpur </option>
                                    <option value="Patuakhali">Patuakhali </option>
                                    <option value="Jhenaidah">Jhenaidah </option>
                                    <option value="Narail">Narail </option>
                                    <option value="Magura">Magura </option>
                                    <option value="Lalmonirhat">Lalmonirhat </option>
                                    <option value="Kurigram">Kurigram </option>
                                    <option value="Nilphamari">Nilphamari </option>
                                    <option value="Gaibandha">Gaibandha </option>
                                    <option value="Thakurgaon">Thakurgaon </option>
                                    <option value="Satkhira">Satkhira </option>
                                    <option value="Bagerhat">Bagerhat </option>
                                    <option value="Chuadanga">Chuadanga </option>
                                    <option value="Meherpur">Meherpur </option>
                                    <option value="Sirajganj">Sirajganj </option>
                                    <option value="Joypurhat">Joypurhat </option>
                                    <option value="Natore">Natore </option>
                                    <option value="Naogaon">Naogaon </option>
                                    <option value="Khagrachhari">Khagrachhari </option>
                                    <option value="Feni">Feni </option>
                                    <option value="Brahmanbaria">Brahmanbaria </option>
                                    <option value="Sunamganj">Sunamganj </option>
                                    <option value="Cox's Bazar">Cox's Bazar </option>
                                    <option value="Moulvibazar">Moulvibazar </option>
                                    <option value="Gopalganj">Gopalganj </option>
                                    <option value="Shariatpur">Shariatpur </option>
                                    <option value="Madaripur">Madaripur </option>
                                    <option value="Rajbari">Rajbari </option>
                                    <option value="Gazipur">Gazipur </option>
                                    <option value="Kishoreganj">Kishoreganj </option>
                                    <option value="Jamalpur">Jamalpur </option>
                                    <option value="Sherpur">Sherpur </option>
                                    <option value="Netrakona">Netrakona </option>
                                    <option value="Munshiganj">Munshiganj </option>
                                    <option value="Narsingdi">Narsingdi </option>
                                    <option value="Narayanganj">Narayanganj  </option>
                                    <option value="Manikganj">Manikganj  </option>                                 
									</select>
                              </div>
                           </div>
						   
                        </div>
						
                        <!-- Pick-up location end -->
                        <!-- Drop-off location start -->
                        <div class="input-group margin-20">
                           <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span>Drop-off</span>

                           <div class="">
                              <div class="styled-select-time">
                                 <select name="drop-off-location" id="drop-off-location">
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Sylhet">Sylhet </option>
                                    <option value="Jessore">Jessore </option>
                                    <option value="Dinajpur">Dinajpur </option>
                                    <option value="Mymensingh">Mymensingh </option>
                                    <option value="Comilla">Comilla </option>
                                    <option value="Barisal">Barisal </option>
                                    <option value="Faridpur">Faridpur </option>
                                    <option value="Bogra">Bogra </option>
                                    <option value="Pabna">Pabna </option>
                                    <option value="Cumilla">Cumilla</option>
                                    <option value="Rangamati">Rangamati </option>
                                    <option value="Kushtia">Kushtia </option>
                                    <option value="Rangpur">Rangpur </option>
                                    <option value="Noakhali">Noakhali </option>
                                    <option value="Khulna">Khulna </option>
                                    <option value="Tangail">Tangail </option>
                                    <option value="Panchagarh">Panchagarh </option>
                                    <option value="Bhola">Bhola</option>
                                    <option value="Bandarban">Bandarban </option>
                                    <option value="Chandpur">Chandpur </option>
                                    <option value="Habiganj">Habiganj </option>
                                    <option value="Lakshmipur">Lakshmipur </option>
                                    <option value="Barguna">Barguna </option>
                                    <option value="Jhalokati">Jhalokati </option>
                                    <option value="Pirojpur">Pirojpur </option>
                                    <option value="Patuakhali">Patuakhali </option>
                                    <option value="Jhenaidah">Jhenaidah </option>
                                    <option value="Narail">Narail </option>
                                    <option value="Magura">Magura </option>
                                    <option value="Lalmonirhat">Lalmonirhat </option>
                                    <option value="Kurigram">Kurigram </option>
                                    <option value="Nilphamari">Nilphamari </option>
                                    <option value="Gaibandha">Gaibandha </option>
                                    <option value="Thakurgaon">Thakurgaon </option>
                                    <option value="Satkhira">Satkhira </option>
                                    <option value="Bagerhat">Bagerhat </option>
                                    <option value="Chuadanga">Chuadanga </option>
                                    <option value="Meherpur">Meherpur </option>
                                    <option value="Sirajganj">Sirajganj </option>
                                    <option value="Joypurhat">Joypurhat </option>
                                    <option value="Natore">Natore </option>
                                    <option value="Naogaon">Naogaon </option>
                                    <option value="Khagrachhari">Khagrachhari </option>
                                    <option value="Feni">Feni </option>
                                    <option value="Brahmanbaria">Brahmanbaria </option>
                                    <option value="Sunamganj">Sunamganj </option>
                                    <option value="Cox's Bazar">Cox's Bazar </option>
                                    <option value="Moulvibazar">Moulvibazar </option>
                                    <option value="Gopalganj">Gopalganj </option>
                                    <option value="Shariatpur">Shariatpur </option>
                                    <option value="Madaripur">Madaripur </option>
                                    <option value="Rajbari">Rajbari </option>
                                    <option value="Gazipur">Gazipur </option>
                                    <option value="Kishoreganj">Kishoreganj </option>
                                    <option value="Jamalpur">Jamalpur </option>
                                    <option value="Sherpur">Sherpur </option>
                                    <option value="Netrakona">Netrakona </option>
                                    <option value="Munshiganj">Munshiganj </option>
                                    <option value="Narsingdi">Narsingdi </option>
                                    <option value="Narayanganj">Narayanganj  </option>
                                    <option value="Manikganj">Manikganj  </option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Drop-off location end -->
                     <!-- Pick-up date/time start -->
                     <div class="datetime pick-up">
                        <div class="date pull-left">
                           <div class="input-group">
                              <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span>Pick-up </span>
                              <input type="date" name="pick-up-date" id="pick-up-date" class="form-control" placeholder="dd/mm/yyyy">
                           </div>
                        </div>
                        <div class="time pull-right">
                           <div class="styled-select-time">
                              <select name="pick-up-time" id="pick-up-time">
                                 <option value="12:00 AM">12:00 AM</option>
                                 <option value="12:30 AM">12:30 AM</option>
                                 <option value="01:00 AM">01:00 AM</option>
                                 <option value="01:30 AM">01:30 AM</option>
                                 <option value="02:00 AM">02:00 AM</option>
                                 <option value="02:30 AM">02:30 AM</option>
                                 <option value="03:00 AM">03:00 AM</option>
                                 <option value="03:30 AM">03:30 AM</option>
                                 <option value="04:00 AM">04:00 AM</option>
                                 <option value="04:30 AM">04:30 AM</option>
                                 <option value="05:00 AM">05:00 AM</option>
                                 <option value="05:30 AM">05:30 AM</option>
                                 <option value="06:00 AM">06:00 AM</option>
                                 <option value="06:30 AM">06:30 AM</option>
                                 <option value="07:00 AM">07:00 AM</option>
                                 <option value="07:30 AM">07:30 AM</option>
                                 <option value="08:00 AM">08:00 AM</option>
                                 <option value="08:30 AM">08:30 AM</option>
                                 <option value="09:00 AM">09:00 AM</option>
                                 <option value="09:30 AM">09:30 AM</option>
                                 <option value="10:00 AM">10:00 AM</option>
                                 <option value="10:30 AM">10:30 AM</option>
                                 <option value="11:00 AM">11:00 AM</option>
                                 <option value="11:30 AM">11:30 AM</option>
                                 <option value="12:00 PM">12:00 PM</option>
                                 <option value="12:30 PM">12:30 PM</option>
                                 <option value="01:00 PM">01:00 PM</option>
                                 <option value="01:30 PM">01:30 PM</option>
                                 <option value="02:00 PM">02:00 PM</option>
                                 <option value="02:30 PM">02:30 PM</option>
                                 <option value="03:00 PM">03:00 PM</option>
                                 <option value="03:30 PM">03:30 PM</option>
                                 <option value="04:00 PM">04:00 PM</option>
                                 <option value="04:30 PM">04:30 PM</option>
                                 <option value="05:00 PM">05:00 PM</option>
                                 <option value="05:30 PM">05:30 PM</option>
                                 <option value="06:00 PM">06:00 PM</option>
                                 <option value="06:30 PM">06:30 PM</option>
                                 <option value="07:00 PM">07:00 PM</option>
                                 <option value="07:30 PM">07:30 PM</option>
                                 <option value="08:00 PM">08:00 PM</option>
                                 <option value="08:30 PM">08:30 PM</option>
                                 <option value="09:00 PM">09:00 PM</option>
                                 <option value="09:30 PM">09:30 PM</option>
                                 <option value="10:00 PM">10:00 PM</option>
                                 <option value="10:30 PM">10:30 PM</option>
                                 <option value="11:00 PM">11:00 PM</option>
                                 <option value="11:30 PM">11:30 PM</option>
                              </select>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <!-- Pick-up date/time end -->
                     <!-- Drop-off date/time start -->
                     <div class="datetime drop-off">
                        <div class="date pull-left">
                           <div class="input-group">
                              <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span>Drop-off</span>
                              <input type="date" name="drop-off-date" id="drop-off-date" class="form-control" placeholder="dd/mm/yyyy">
                           </div>
                        </div>
                        <div class="time pull-right">
                           <div class="styled-select-time">
                              <select name="drop-off-time" id="drop-off-time">
                                 <option value="12:00 AM">12:00 AM</option>
                                 <option value="12:30 AM">12:30 AM</option>
                                 <option value="01:00 AM">01:00 AM</option>
                                 <option value="01:30 AM">01:30 AM</option>
                                 <option value="02:00 AM">02:00 AM</option>
                                 <option value="02:30 AM">02:30 AM</option>
                                 <option value="03:00 AM">03:00 AM</option>
                                 <option value="03:30 AM">03:30 AM</option>
                                 <option value="04:00 AM">04:00 AM</option>
                                 <option value="04:30 AM">04:30 AM</option>
                                 <option value="05:00 AM">05:00 AM</option>
                                 <option value="05:30 AM">05:30 AM</option>
                                 <option value="06:00 AM">06:00 AM</option>
                                 <option value="06:30 AM">06:30 AM</option>
                                 <option value="07:00 AM">07:00 AM</option>
                                 <option value="07:30 AM">07:30 AM</option>
                                 <option value="08:00 AM">08:00 AM</option>
                                 <option value="08:30 AM">08:30 AM</option>
                                 <option value="09:00 AM">09:00 AM</option>
                                 <option value="09:30 AM">09:30 AM</option>
                                 <option value="10:00 AM">10:00 AM</option>
                                 <option value="10:30 AM">10:30 AM</option>
                                 <option value="11:00 AM">11:00 AM</option>
                                 <option value="11:30 AM">11:30 AM</option>
                                 <option value="12:00 PM">12:00 PM</option>
                                 <option value="12:30 PM">12:30 PM</option>
                                 <option value="01:00 PM">01:00 PM</option>
                                 <option value="01:30 PM">01:30 PM</option>
                                 <option value="02:00 PM">02:00 PM</option>
                                 <option value="02:30 PM">02:30 PM</option>
                                 <option value="03:00 PM">03:00 PM</option>
                                 <option value="03:30 PM">03:30 PM</option>
                                 <option value="04:00 PM">04:00 PM</option>
                                 <option value="04:30 PM">04:30 PM</option>
                                 <option value="05:00 PM">05:00 PM</option>
                                 <option value="05:30 PM">05:30 PM</option>
                                 <option value="06:00 PM">06:00 PM</option>
                                 <option value="06:30 PM">06:30 PM</option>
                                 <option value="07:00 PM">07:00 PM</option>
                                 <option value="07:30 PM">07:30 PM</option>
                                 <option value="08:00 PM">08:00 PM</option>
                                 <option value="08:30 PM">08:30 PM</option>
                                 <option value="09:00 PM">09:00 PM</option>
                                 <option value="09:30 PM">09:30 PM</option>
                                 <option value="10:00 PM">10:00 PM</option>
                                 <option value="10:30 PM">10:30 PM</option>
                                 <option value="11:00 PM">11:00 PM</option>
                                 <option value="11:30 PM">11:30 PM</option>
                              </select>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <!-- Drop-off date/time end -->
					 
					 <div>
					 <label>Name:</label>
					 <input type="text" name="bookie-name" class="form-control bookie-name" placeholder="Your name" required>
					 </div>
					 <div style="margin-top:10px;">
					 <label>Phone:</label>
					 <input type="tel" name="bookie-phone" class="form-control bookie-phone" placeholder="Your number" required>
					 </div>
					
                     <input id="myWish" type="submit" class="submit" name="submit" value="confirm your seat" id="checkoutModalLabel">
					 
                  </form>
               </div>
            </div>           
         </div>
      </div>
   </div>
</section>
<script type="text/javascript">
$(document).ready(function() {
	  
    // Send booking details in the server
    $("#myWish").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".formsubmit");
      var car = $form.find("#car-select").val();
      var plocation = $form.find("#pick-up-location").val();
      var dlocation = $form.find("#drop-off-location").val();
      var pdate = $form.find("#pick-up-date").val();
      var ddate = $form.find("#drop-off-date").val();
      var ptime = $form.find("#pick-up-time").val();
      var dtime = $form.find("#drop-off-time").val();
      var name = $form.find(".bookie-name").val();
      var phone = $form.find(".bookie-phone").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          car: car,
          plocation: plocation,
          dlocation: dlocation,
          pdate: pdate,
          ddate: ddate,
          ptime: ptime,
          dtime: dtime,
          name: name,
          phone: phone
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });
  });
  </script>

<div class="arrow-down"></div>
<!-- Teaser end -->
<!--BEGIN-services  -->
<div id="services" class="section-wraper ">
   <div class="section-edit">
      <div class="container relative">
         <span class="section-abc">Services</span>
      </div>
   </div>
   <div class="fw-page-builder-content">
      <section  id="section-6049b885047e4" class="fw-main-row auto servs">
         <div >
            <div class="fw-container sections">
               <div class="fw-row">
                  <div id="column-6049b88504b2a" class=" fw-col-sm-12       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="fw-heading fw-heading-h1 fw-heading-center   wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s" style=" color:">
                              <div class="">
                                 <h1 class='fw-special-title'>Services We Provide</h1>
                              </div>
                              <span class="underline">&nbsp;</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="fw-row">
                  <div id="column-6049b88504fa6" class=" fw-col-sm-12       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="panel-group fw-accordion srvaccrdn " id="accordion-6049b885051bd" role="tablist" aria-multiselectable="true">
                              <?php
                                 $sql_services = 'select * from services';
                                 $result_services = mysqli_query($con,$sql_services);
                                 $count_services = mysqli_num_rows($result_services);
                                 if($count_services > 0){
                                 	$cnt = 0;
                                 foreach($result_services as $service_panel){
                                 	$cnt++;
                                 	$service_area_id = str_replace(' ', '', $service_panel['service_title']);
                                 ?>
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="<?php echo $service_area_id; ?>">
                                    <h4 class="panel-title">
                                       <a class="collapsed" data-toggle="collapse" data-parent="#accordion-6049b885051bd" href="#<?php echo $service_area_id.$cnt; ?>" aria-expanded="false" aria-controls="acc-tab-accordion-6049b885051bd-3"> <?php echo $service_panel['service_title']; ?></a>
                                    </h4>
                                 </div>
                                 <div id="<?php echo $service_area_id.$cnt; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="acc-heading-3">
                                    <div class="panel-body">
                                       <h3 style="text-align: center;"><?php echo $service_panel['service_title']; ?></h3>
                                       <p style="text-align: center; font-size: 15px;">
                                          <img class="alignleft" style="float: left;" src="admin/images/services/<?php echo $service_panel['service_image']; ?>" alt="Services" width="200" height="200" />
                                       </p>
                                       <p style="color: #7e7e7e; font-size: 15px; font-family: avenir; font-weight: 200; text-align: left;"><?php echo $service_panel['service_description']; ?> <a class="xxx" href="#" target="_self"><?php echo $service_panel['service_link']; ?></a></p>
                                    </div>
                                 </div>
                              </div>
                              <?php 
                                 }
                                 }
                                 ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
<!--END-SPEAKERS-->
<!--BEGIN-reviwes  -->
<div id="reviwes" class="section-wraper ">
   <div class="section-edit">
      <div class="container relative">
         <span class="section-abc">Reviwes</span>
      </div>
   </div>
   <div class="fw-page-builder-content">
      <section  id="section-6049b885059d5" class="fw-main-row parallax-section  auto "  style=" background:url(images/reviewBG-2.jpg) no-repeat center top fixed;-moz-background-size: cover;background-size: cover;-webkit-background-size: cover;-o-background-size: cover;width: 100%;overflow: hidden; "  >
         <div >
            <div class="fw-container sections">
               <div class="fw-row">
                  <div id="column-6049b88505cff" class=" fw-col-sm-12       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div id="testimonials-6049b88505ea4" class="container wow fadeInUp">
                              <div class="row text-center">
                                 <div id="reviews" >
                                    <div class="col-md-12 stars">
                                       <span class="glyphicon glyphicon-star"></span>
                                       <span class="glyphicon glyphicon-star"></span>
                                       <span class="glyphicon glyphicon-star big"></span>
                                       <span class="glyphicon glyphicon-star"></span>
                                       <span class="glyphicon glyphicon-star"></span>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1">
                                       <div id="reviews-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                                          <div class="carousel-inner">
                                             <?php
                                                $sql_reviews = 'select * from reviews';
                                                $result_reviews = mysqli_query($con,$sql_reviews);
                                                $count_reviews = mysqli_num_rows($result_reviews);
                                                if($count_reviews > 0){
                                                foreach($result_reviews as $review_item){
                                                ?>
                                             <div class="item">
                                                <div class="review"><?php echo $review_item['review']; ?></div>
                                                <div class="author"><?php echo $review_item['reviewer']; ?></div>
                                             </div>
                                             <?php
                                                }
                                                }
                                                ?>
                                             <!-- Review item 1 end -->
                                          </div>
                                          <!-- Review Nav start -->
                                          <ol class="carousel-indicators xs-indicator">
                                             <li data-target="#reviews-carousel" data-slide-to="0"></li>
                                             <li data-target="#reviews-carousel" data-slide-to="1"></li>
                                             <li data-target="#reviews-carousel" data-slide-to="2"></li>
                                          </ol>
                                          <!-- Review Nav end -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
<!--END-SPEAKERS-->
<!--BEGIN-why-us  -->
<div id="why-us" class="section-wraper ">
   <div class="section-edit">
      <div class="container relative">
         <span class="section-abc">Why Us</span>
      </div>
   </div>
   <div class="fw-page-builder-content">
      <section  id="section-6049b8850655d" class="fw-main-row parallax-section  auto "  style=" background:url(wp-content/uploads/2017/03/car-rental52323.jpg) no-repeat center top fixed;-moz-background-size: cover;background-size: cover;-webkit-background-size: cover;-o-background-size: cover;width: 100%;overflow: hidden; "  >
         <div >
            <div class="fw-container sections">
               <div class="fw-row">
                  <div id="column-6049b88506863" class=" fw-col-sm-12       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="fw-heading fw-heading-h1 fw-heading-center   wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s" style=" color:">
                              <div class="">
                                 <h1 class='fw-special-title'>Why Us</h1>
                              </div>
                              <div class="fw-special-subtitle">Best customer service in the arena</div>
                              <span class="underline">&nbsp;</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="fw-row">
                  <div id="column-6049b88506c84" class=" fw-col-sm-3       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="real-estate wow fadeIn" data-wow-offset="120" data-wow-duration="1.5s" style="background-color: ">
                              <img src="images/why_choose.png" alt=""  class='img-responsive' />
                              <div class="text-center" >
                              </div>
                              <div class="clear"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="column-6049b88506f87" class=" fw-col-sm-3       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="service-box wow fadeInLeft" data-wow-offset="100">
                              <div class="service-icon"><i class="fa fa-child"></i></div>
                              <h3 class="service-title">Cheap Rates</h3>
                              <div class="clearfix"></div>
                              <p class="service-content">As all of our fleets are company owned and we are not liable to any agents or third party.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="column-6049b8850724d" class=" fw-col-sm-3       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="service-box wow fadeInLeft" data-wow-offset="100">
                              <div class="service-icon"><i class="fa fa-ambulance"></i></div>
                              <h3 class="service-title">Backup vehicle</h3>
                              <div class="clearfix"></div>
                              <p class="service-content">Replacement vehicle is always ready for back up support in case of any emergency.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="column-6049b885074db" class=" fw-col-sm-3       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="service-box wow fadeInLeft" data-wow-offset="100">
                              <div class="service-icon"><i class="fa fa-arrows-alt"></i></div>
                              <h3 class="service-title">Coverage</h3>
                              <div class="clearfix"></div>
                              <p class="service-content">People can travel anywhere in Bangladesh from Jamalpur to any cities within Bangladesh.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="fw-row">
                  <div id="column-6049b885078d5" class=" fw-col-sm-3       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="service-box wow fadeInLeft" data-wow-offset="100">
                              <div class="service-icon"><i class="fa fa-bolt"></i></div>
                              <h3 class="service-title">Easy Booking</h3>
                              <div class="clearfix"></div>
                              <p class="service-content">Our services are just a click away, we have made it easier to you by online reservation.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="column-6049b88507b58" class=" fw-col-sm-3       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="service-box wow fadeInLeft" data-wow-offset="100">
                              <div class="service-icon"><i class="fa fa-subway"></i></div>
                              <h3 class="service-title">Quality Fleets</h3>
                              <div class="clearfix"></div>
                              <p class="service-content">Fleet maintenance is done by our company in regular basis for promising smooth ride.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="column-6049b88507dc1" class=" fw-col-sm-3       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="service-box wow fadeInLeft" data-wow-offset="100">
                              <div class="service-icon"><i class="fa fa-medkit"></i></div>
                              <h3 class="service-title">Safety &amp; Reliability</h3>
                              <div class="clearfix"></div>
                              <p class="service-content">All of our fleets are fitted with vehicle tracking devices (VTS) so that our customers feel safe.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="column-6049b8850802f" class=" fw-col-sm-3       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="service-box wow fadeInLeft" data-wow-offset="100">
                              <div class="service-icon"><i class="fa fa-users"></i></div>
                              <h3 class="service-title">Experienced Driver</h3>
                              <div class="clearfix"></div>
                              <p class="service-content">Our drivers have minimum of 5 years of driving experience in long haul journeys.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
<!--END-SPEAKERS-->
<!--BEGIN-pricing  -->
<div id="pricing" class="section-wraper ">
   <div class="section-edit">
      <div class="container relative">
         <span class="section-abc">Pricing</span>
      </div>
   </div>
   <div class="fw-page-builder-content">
      <section  id="section-6049b885087b7" class="fw-main-row   auto ">
         <div >
            <div class="fw-container sections">
               <div class="fw-row">
                  <div id="column-6049b88508aa1" class=" fw-col-sm-12 wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="fw-heading fw-heading-h1 fw-heading-center   wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                              <div class="">
                                 <h1 class='fw-special-title'>Car Rental Pricing</h1>
                              </div>
                              <span class="underline">&nbsp;</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="fw-row">
                  <div id="column-6049b88508ea7" class=" fw-col-sm-12 wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <p>
                           <div class="rtbs  rtbs_pricing">
						   
							  <?php
							  $select_car_rental_query = "SELECT * FROM car_rental WHERE 1";
							  $result_car_rental = mysqli_query($con,$select_car_rental_query);
							  $count_car_rentals = mysqli_num_rows($result_car_rental);
							  if($count_car_rentals>0):
								echo '<div class="w3-bar w3-black">';
								  foreach($result_car_rental as $rental_item):	
							  $rental_item_section_id = str_replace(' ', '', $rental_item['car_rental_item']);
							  ?>
                                 <button class="w3-bar-item w3-button tablink <?php echo($rental_item['car_rental_id'] == 1 ? "w3-red" : ""); ?>" onclick="openCity(event,'<?=$rental_item_section_id ?>')"><?=$rental_item['car_rental_item']?></button>
                              <?php
								endforeach;
								echo '</div>';
								foreach($result_car_rental as $rental_item):
								$rental_item_section_id = str_replace(' ', '', $rental_item['car_rental_item']);
							  ?>								
							  <div id="<?=$rental_item_section_id ?>" class="w3-container w3-border city" style=" <?php echo($rental_item['car_rental_id'] == 1 ? "display: block;" : "display: none;"); ?> ">
                                 <h2>Price: <?=$rental_item['car_rental_price']?> Tk</h2>
                              </div>
							  <?php
								endforeach;
								endif;
							  ?>
						   </div>
                        </div>
                        
                     </div>
                  </div>
                  </p>        
               </div>
            </div>
         </div>
   </div>
</div>
</div>
</section>
</div>
</div>
<!--END-SPEAKERS-->
<!--BEGIN-partners  -->
<div id="partners" class="section-wraper ">
   <div class="section-edit">
      <div class="container relative">
         <span class="section-abc">Partners</span>
      </div>
   </div>
   <div class="fw-page-builder-content">
      <section  id="section-6049b88509c86" class="fw-main-row   auto "  style="background-color:#f9f9f9;  "  >
         <div >
            <div class="fw-container sections">
               <div class="fw-row">
                  <div id="column-6049b88509f78" class=" fw-col-sm-12       wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="fw-heading fw-heading-h1 fw-heading-center   wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s" >
                              <div>
                                 <h1 class='fw-special-title'>Meet Our Partners</h1>
                              </div>
                              <span class="underline">&nbsp;</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
			   <?php
			   $select_mop_query = "SELECT mop_description FROM mop_description WHERE mop_id = 1";
			   $result_mop_query = mysqli_query($con,$select_mop_query);
			   $fetch_mop_data = mysqli_fetch_assoc($result_mop_query);
			   
			   
			   $select_partners_query = "SELECT * FROM partners WHERE 1";
			   $result_partners = mysqli_query($con,$select_partners_query);
			   $count_partners = mysqli_num_rows($result_partners);
			   ?>
               <div class="fw-row">
                  <div id="column-6049b8850a356" class=" fw-col-sm-12 wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s">
                     <div class="fw-main-row">
                        <div class="fw-col-inner">
                           <p><?=$fetch_mop_data['mop_description']?></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="fw-row">
                  <div id="column-6049b8850a6d6" class=" fw-col-sm-12 wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s">
                     <div class="fw-main-row">
                        <div class="fw-col-inner" >
                           <div class="fw-divider-space space-md"  ></div>
                        </div>
                     </div>
                  </div>
               </div>
			   <div class="fw-row">
			   <?php
			   if($count_partners>0):
			   $i = 0;
			   foreach($result_partners as $partner):
			   $i++;
			   ?>
					  <div id="column-6049b8850ab05" class=" fw-col-xs-12 fw-col-sm-15  wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
						 <div class="fw-main-row">
							<div class="fw-col-inner">
							   <div class="client-wrapper2 wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
								  <img alt="client" src="admin/images/partners/<?=$partner['partner_image']?>">
							   </div>
							</div>
						 </div>
					  </div>
					  
				  <?php
						if($i%5==0){
						   echo '</div><br><div class="fw-row">'; 
						}
					  endforeach;
					endif;		  
				  ?>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
<!--END-SPEAKERS-->
<!--BEGIN-contact  -->
<div id="contact" class="section-wraper ">
<div class="section-edit">
   <div>
      <span class="section-abc">Contact</span>
   </div>
</div>
</div>
<center>
   <h1 class="fw-special-title">Contact Us</h1>
</center>
<center>
   <p class="contact-info">You have any questions or need additional information?<br />
      Hasib Travels.<br />
      Corporate Office: Jamalpur Mymensingh,
      Dhaka Division, Bangladesh.<br />
      Branch Office: Jamalpur Mymensingh,
      Dhaka Division, Bangladesh.
   </p>
</center>
<center>
   <div class="contact-box-portion ">
      <div class="contact-info-box gutter">
         <h4 class="contact-box-title">Customer Center</h4>
         <p><img src="images/contact_avatar-2.png" alt="contact-img" /><br />
            Hotline<br />
            Phone: +880 1711-980876<br />
            Email: mdhasiburrahmanusa@gmail.com
         </p>
      </div>
      <div class="contact-info-box gutter">
         <h2>Location</h2>
         <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14475.121395901166!2d89.950021!3d24.9054729!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd46481abc43446cc!2sHasib%20Travels!5e0!3m2!1sen!2sbd!4v1615877611615!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
      </div>
   </div>
</center>
<!--END-Contact-->
<center>
   <div ><img src="images/hbo-max.jpg" alt=""></div>
</center>
<script type='js/bootstrap.min7359.js'></script>
<?php include'footer.php'; ?>