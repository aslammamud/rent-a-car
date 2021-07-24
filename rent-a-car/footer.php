<?php
$select_buttons_query = "SELECT * FROM socials WHERE social_id = 1";
$result_buttons = mysqli_query($con,$select_buttons_query);
$buttons =  mysqli_fetch_assoc($result_buttons);
?>
<!-- Footer start -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<ul id="menu-footer-menu" class="footer-nav"><li id="menu-item-115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4 current_page_item menu-item-on active"><a class="scroll-to" title="Home" href="index.php#home" style="color: white">Home</a></li>
				<li id="menu-item-113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-on"><a class="scroll-to" title="Services" href="index.php#services" style="color: white">Services</a></li>
				<li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-on"><a class="scroll-to" title="Reviwes" href="index.php#reviwes" style="color: white">Reviwes</a></li>
				<li id="menu-item-298" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-on"><a class="scroll-to" title="Why Us" href="index.php#why-us" style="color: white">Why Us</a></li>
				<li id="menu-item-105" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-on"><a class="scroll-to" title="Contact" href="index.php#contact" style="color: white">Contact</a></li>
			</ul>
			<div class = "clearfix"></div>
			<p class = "copyright" style="color: white">©HASIBTRAVELS, All Rights Reserved </p>
			<ul class="list-inline footer-social">
				<li><a href="<?= $buttons['facebook']?>"><i class="fa fa-facebook"></i></a></li>
				<li><a href="<?= $buttons['twitter']?>" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?= $buttons['google']?>"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
	</div>
</div>
</footer>
<!--Footer end -->
</body>
</html>