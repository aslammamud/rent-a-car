<?php
$page='our-fleet.php';
$title = 'OUR FLEET - HASIB TRAVELS';
include'header.php';

$select_fleet_query = "SELECT * FROM fleet WHERE 1";
$result_fleet = mysqli_query($con,$select_fleet_query);
$count = mysqli_num_rows($result_fleet);
?>
<!-- Teaser end -->
<div class="container">
   <div class="row">
      <div class="blog-box col-md-12" role="main">
         <article id="post-459" class="post-459 page type-page status-publish hentry">
         <!-- Article header -->
         <header class="entry-header"></header>
         <!-- end entry-header -->
         <!-- Article content -->
         <div class="entry-content">
            <div class="fw-page-builder-content">
               <section  id="section-6049b8ab7c558" class="fw-main-row   auto"  style="">
                  <div>
				  <div class="fw-container sections">
				  <div class="fw-row">
				  <?php
					if($count>0){
						$i = 0;
						foreach($result_fleet as $car){
						$i++;
					?>		
                        
                           <div class=" fw-col-sm-4 wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s">
                              <div class="fw-main-row">
                                 <div class="fw-col-inner">
                                    <div class="fw-single-image">
                                       <img src="admin/images/fleet/<?=$car['image'] ?>" class="img-responsive" alt="<?=$car['alt']?>"/>
                                    </div>
                                 </div>
                              </div>
                           </div> 
                        
                     		
						  <?php
								if($i%3==0){
								   echo '<div  class="fw-divider-full-width fw-line-solid fw-divider-line space-md " style="width:auto%; " ></div>'; 
								}
							  }
							}			  
						  ?>
						 </div>
                     </div>	
					 </div>	                  
               </section>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include'footer.php'; ?>