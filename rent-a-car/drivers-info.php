<?php
$page='drivers-info.php';
$title = 'DRIVERS INFO - HASIB TRAVELS';
include'header.php';

$select_drivers_query = "SELECT * FROM drivers WHERE 1";
$result_drivers = mysqli_query($con,$select_drivers_query);
$count = mysqli_num_rows($result_drivers);
?>
<style type="text/css">
   .card {
   width: 500px;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   text-align: center;
   border-radius: 10px;
   color: #000;
   padding: 30px;
   }
</style>
<!-- Teaser end -->
<div class="container">
   <div class="row">
      <div class="blog-box col-md-12" role="main">
         <article id="post-324" class="post-324 page type-page status-publish hentry">
            <!-- Article header -->
            <header class="entry-header">
            </header>
            <!-- end entry-header -->
            <!-- Article content -->
            <div class="entry-content">
               <div class="fw-page-builder-content">
                  <section  id="section-6049b8b05fe4f" class="fw-main-row   auto "  style="  "  >
                     <div >
                        <div class="fw-container sections">
                           <div class="fw-row">
						   <?php
							if($count>0){
								$i = 0;
								foreach($result_drivers as $driver){
								$i++;
							?>
                              <div class=" fw-col-sm-6 wow fadeInUp animated" data-wow-offset="120" data-wow-duration="1.5s" style="  ">
                                 <div class="fw-main-row">
                                    <div class="fw-col-inner" >
                                       <div class="fw-team team-member wow fadeInTop animated card" data-wow-offset="120" data-wow-duration="1.5s">
                                          <div class="fw-ratio-container fw-ratio-1">
                                             <div class="fw-team-image"><img src="admin/images/drivers/<?=$driver['driver_image']?>" alt="<?=$driver['driver_name']?>" height="100px" width="100px"></div>
                                          </div>
                                          <div class="fw-team-inner">
                                             <div class="fw-team-name">
                                                <h2><?=$driver['driver_name']?></h2>
                                                <h5>DOB: <?=$driver['driver_dob']?></h5>
                                             </div>
                                             <div class="fw-team-text">FATHER: <?=$driver['driver_father']?><br>
                                                LICENCE NO: <?=$driver['driver_licence']?><br>
                                                BLOOD GROUP: <?=$driver['driver_blood_group']?><br>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  <?php
								if($i%2==0){
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
         </article>
      </div>
   </div>
</div>
<?php include'footer.php'; ?>