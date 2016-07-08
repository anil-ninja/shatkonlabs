
<!-- Begin Header -->
<header>

	<!-- Begin Top Bar -->
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<!-- Address and Phone -->
				<div class="col-sm-7 hidden-xs">
					<span class="ion-android-system-home home-icon"></span>77-p, Sector-40, Gurgaon(Haryana), INDIA <span class="ion-ios7-telephone phone-icon"></span>9599075355
				</div>
				<!-- Social Buttons -->
				<div class="col-sm-5 text-right">
	                <ul class="topbar-list list-inline">
		                <li>						
				            <a href="https://twitter.com/shatkonlabs1" target="_blank" class="btn btn-social-icon btn-rw btn-primary btn-xs">
								<i class="fa fa-twitter"></i>
							</a>
							<!-- <a href="" target="_blank" class="btn btn-social-icon btn-rw btn-primary btn-xs">
								<i class="fa fa-instagram"></i>
							</a> -->
							<a href="https://www.facebook.com/profile.php?id=100012328729544" target="_blank" class="btn btn-social-icon btn-rw btn-primary btn-xs">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<!-- <li>
							<a data-toggle="modal" data-target="#login">Login</a>
						</li>
						<li>
							<a href="http://aliensix.com/raleway-2.3/pages-forms-register-login.html">Register</a>
						</li> -->
					</ul>
				</div>
			</div><!--/row --> 
		</div><!--/container header -->   
	</div><!--/top bar -->   
	<!-- End Top Bar -->

	<!-- Login -->
	<div class="modal fade" id="career" tabindex="-1" role="dialog" aria-labelledby="careerLabel" aria-hidden="true">
	    <div class="modal-dialog modal-sm">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
	                <h4 class="modal-title" id="loginLabel">Career With Shatkon Labs</h4>
	            </div>
	            <div class="modal-body">
		            <form role="form" enctype="multipart/form-data">
		            	<div class="form-group">
			                <label for="exampleInputEmail1">Name</label>
			                <input type="text" class="form-control" id="name" placeholder="Enter Name">
			            </div>
			            <div class="form-group">
			                <label for="exampleInputEmail1">Email address</label>
			                <input type="email" class="form-control" onkeyup="nospaces(this)" id="email" placeholder="Enter email">
			            </div>
			            <div class="form-group">
			                <label for="exampleInputPassword1">Mobile No.</label>
			                <input type="number" class="form-control" onkeyup="nospaces(this)" id="mobile2" placeholder="Enter Phone Number">
			            </div>
			            <div class="form-group">
			                <label for="exampleInputEmail1">Upload Resume</label>
			                <input type="file" class="form-control" id="resume" title="Upload your Resume">
			            </div>
			            <!-- <div class="checkbox">
			                <label>
			                    <input type="checkbox"> Do you flex?
			                </label>
			            </div> -->
			        </form><!-- /form -->
	            </div>
	            <div class="modal-footer">
	                <button type="button" id="sendResume" onclick="send_resume()" class="btn btn-rw btn-primary">Send</button>
	            </div>
	        </div><!-- /modal content -->
	    </div><!-- /modal dialog -->
	</div><!-- /modal holder -->
	<!-- End Login -->

 	<!-- Begin Navigation -->
 	<div class="navbar-wrapper">
		<div class="navbar navbar-main" id="fixed-navbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 column-header">
						<div class="navbar-header">
							<!-- Brand -->
							<a href="#" class="navbar-brand">
								<img src="images/logo.png" class="raleway-logo" >
							</a>
							<!-- Mobile Navigation -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
							</button>
						</div><!-- /navbar header -->   

						<!-- Main Navigation - Explained in Documentation -->
						<nav class="navbar-collapse collapse navHeaderCollapse" role="navigation">
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown dropdown-main">
						        	<a href="index.php" >Home<!-- class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"<span class="fa fa-angle-down dropdown-arrow"></span> --></a>
						        	<!-- <ul class="dropdown-menu dropdown-subhover dropdown-animation animated fadeIn"><!-- Control Animations by changing "fadeIn" to another property from animate.css, check animations page in features / ALSO dropdown-animation class controls the duration, ajust if need 
						          		<li><a href="http://aliensix.com/raleway-2.3/index.html">Option 1: Home</a></li>
						          		<li><a href="http://aliensix.com/raleway-2.3/index-home.html">Option 2: aHome</a></li>
						          		<li><a href="http://aliensix.com/raleway-2.3/index-home-b.html">Option 3: bHome</a></li>
						          		<li><a href="http://aliensix.com/raleway-2.3/index-carousel-subnav.html">Option 4: Carousel Subnav</a></li>
						          		<li><a href="http://aliensix.com/raleway-2.3/shop-home-revolution-slider.html">Option 5: Shop Home 1</a></li>
						          		<li><a href="http://aliensix.com/raleway-2.3/shop-home-bootstrap-slider.html">Option 6: Shop Home 2</a></li>
						          		<li><a href="http://aliensix.com/raleway-2.3/features-navigation-options.html">Navigation Options</a></li>
						          		<li class="dropdown dropdown-submenu">
								    		<a class="trigger">Footer Options</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-footer-options.html">Dark</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-footer-options-2.html">Light</a></li>
									    	</ul>
										</li>
						        	</ul> -->
						        </li>
								<li class="dropdown mega-dropdown dropdown-main">
									<a href="focus.php" >focus<!-- class="dropdown-toggle" data-toggle="dropdown"<span class="fa fa-angle-down dropdown-arrow"></span> --></a>
									<!-- <ul class="dropdown-menu dropdown-subhover mega-dropdown-menu row dropdown-animation animated fadeIn"><!-- Control Animations by changing "fadeIn" to another property from animate.css, check animations page in features / ALSO dropdown-animation class controls the duration, ajust if need 
										<li class="col-lg-4 hidden-md hidden-sm hidden-xs">
											<ul>
												<li class="dropdown-header">New in Stores</li>
												<li><img src="http://aliensix.com/raleway-2.3/screen.png" class="img-responsive screen-img mt10">
											</ul>
										</li>
										<li class="col-lg-2 col-md-3 col-sm-6">
											<ul>
												<li class="dropdown-header">Inform</li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-about-us-1.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> About Page 1</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-about-us-2.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> About Page 2</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-about-us-team.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> About us &amp; Team</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-team-1.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> The Team 1</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-team-2.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> The Team 2</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-pricing.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Our Pricing</a></li>
											</ul>
										</li>
										<li class="col-lg-2 col-md-3 col-sm-6 mt15-xs">
											<ul>
												<li class="dropdown-header">Common</li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-services-1.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Service Option 1</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-services-2.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Service Option 2</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-404-default.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> 404 Default</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-404-fullscreen.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> 404 Fullscreen</a></li>	
												<li><a href="http://aliensix.com/raleway-2.3/pages-forms-register-login.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Register &amp; Login</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-faq.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Common Questions</a></li>
											</ul>
										</li>
										<li class="col-lg-2 col-md-3 col-sm-6 mt15-xs mt15-sm">
											<ul>
												<li class="dropdown-header">More <span class="ion-plus"></span></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-sidebar-right.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Page w/ Sidebar Right</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-sidebar-left.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Page w/ Sidebar Left</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-menu-right.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Page w/ Menu Right</a></li>	
												<li><a href="http://aliensix.com/raleway-2.3/pages-menu-left.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Page w/ Menu Left</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-404-default-image.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> 404 Default Image</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/features-navigation-options.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Navigation Options</a></li>
											</ul>
										</li>
										<li class="col-lg-2 col-md-3 col-sm-6 mt15-xs mt15-sm">
											<ul>
												<li class="dropdown-header">More <span class="ion-plus"></span></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-contact-1.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Contact Page 1</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-contact-2.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Contact Page 2</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-timeline.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Company Timeline</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-user-profile-1.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> User Profile</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-user-profile-2.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> User Profile 2</a></li>
												<li><a href="http://aliensix.com/raleway-2.3/pages-freebies.html"><span class="fa fa-angle-right mega-dropdown-arrow"></span> Freebies</a></li>
											</ul>
										</li>
									</ul> -->
								</li>
								<li class="dropdown dropdown-main">
						        	<a href="work.php" >work<!--class="dropdown-toggle" data-toggle="dropdown" <span class="fa fa-angle-down dropdown-arrow"></span> --></a>
						        	<!-- <ul class="dropdown-menu dropdown-subhover dropdown-animation animated fadeIn"><!-- Control Animations by changing "fadeIn" to another property from animate.css, check animations page in features / ALSO dropdown-animation class controls the duration, ajust if need 
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger"><strong>Components</strong></a>
									    	<ul class="dropdown-menu animated fadeInRight dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-alerts.html">Alerts</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-tabs-accordions.html">Tabs &amp; Accordions</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-lists.html">Lists</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-thumbnails.html">Thumbnails</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-tables.html">Tables</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-dividers.html">Dividers</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-headings.html">Headings</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-progress-bars.html">Progress Bars</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-modals.html">Modals</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-labels-badges.html">Labels &amp; Badges</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-forms.html">Forms</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-panels.html">Panels</a></li>
									    	</ul>
										</li>
										<li><a href="http://aliensix.com/raleway-2.3/features-typography.html">Typography</a></li>
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger">Icons</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-icons-fontawesome.html">FontAwesome</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-icons-ionicons.html">Ionicons</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-icons-glyphicons.html">Glyphicons</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-icons-raleway.html">Raleway</a></li>
									    	</ul>
										</li>
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger">Buttons</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-buttons-basic.html">Basic</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-buttons-social.html">Social</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-buttons-library.html">Library</a></li>
									    	</ul>
										</li>
										<li><a href="http://aliensix.com/raleway-2.3/features-animations.html">Animations</a></li>
										<li><a href="http://aliensix.com/raleway-2.3/features-sliders-bootstrap.html">Bootstrap Carousel</a></li>
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger">Content Boxes</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-content-boxes-icon-big.html">Icon Big</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-content-boxes-icon-small.html">Icon Small</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-content-boxes-icon-left.html">Icon Left Aligned</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-content-boxes.html">Boxes</a></li>
									    	</ul>
										</li>
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger">Extras</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-recent-projects.html">Recent Projects</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-image-video-zoom.html">Image &amp; Video Zoom</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-pricing-tables.html">Pricing Tables</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-calltoactions.html">Call to Action</a></li>
									    	</ul>
										</li>
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger">Subheader Options</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-header-1.html">Default</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-header-2.html">Option 2</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-header-3.html">Option 3</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-header-parallax.html">Parallax</a></li>
									    	</ul>
										</li>
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger">Team Member Options</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-team-members-1.html">Option 1</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/features-team-members-2.html">Option 2</a></li>
									    	</ul>
										</li>
							            <li><a href="http://aliensix.com/raleway-2.3/features-parallax.html">Parallax</a></li>
							            <li><a href="http://aliensix.com/raleway-2.3/features-columns.html">Columns</a></li>
						        	</ul> -->
						        </li>
						        <li class="dropdown dropdown-main">
						        	<a data-toggle="modal" data-target="#career">Career</a>
						        </li>
								<li class="dropdown dropdown-main">
						        	<a href="portfolio.php" >Portfolio<!-- class="dropdown-toggle" data-toggle="dropdown"<span class="fa fa-angle-down dropdown-arrow"></span> --></a>
						        	<!-- <ul class="dropdown-menu dropdown-subhover dropdown-animation animated fadeIn"><!-- Control Animations by changing "fadeIn" to another property from animate.css, check animations page in features / ALSO dropdown-animation class controls the duration, ajust if need s
						        		<li class="dropdown dropdown-submenu">
								    		<a class="trigger">Boxed</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/portfolio-fixed-3-columns.html">3 Columns</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/portfolio-fixed-4-columns.html">4 Columns</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/portfolio-fluid-boxed.html">Fluid</a></li>
									    	</ul>
										</li>
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger">Circle</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/portfolio-fixed-3-columns-circle.html">3 Columns</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/portfolio-fixed-4-columns-circle.html">4 Columns</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/portfolio-fluid-circle.html">Fluid</a></li>
									    	</ul>
										</li>
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger">Borderless</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/portfolio-borderless-example.html">Borderless Example</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/portfolio-fluid-borderless.html">Fluid</a></li>
									    	</ul>
										</li>
							            <li><a href="http://aliensix.com/raleway-2.3/portfolio-single-project.html">Single Project</a></li>
						        	</ul> -->
						        </li>
								<li class="dropdown dropdown-main">
						        	<a href="team.php" >Team<!--class="dropdown-toggle" data-toggle="dropdown" <span class="fa fa-angle-down dropdown-arrow"></span> --></a>
						        	<!-- <ul class="dropdown-menu dropdown-subhover dropdown-animation animated fadeIn"><!-- Control Animations by changing "fadeIn" to another property from animate.css, check animations page in features / ALSO dropdown-animation class controls the duration, ajust if need 
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger">Home Pages</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/shop-home-revolution-slider.html">Revolution Slider</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/shop-home-bootstrap-slider.html">Bootstrap Slider</a></li>
									    	</ul>
										</li>
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger">Layouts</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
												<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/shop-layouts-2col.html">2 Columns</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/shop-layouts-3col.html">3 Columns</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/shop-layouts-4col.html">4 Columns</a></li>
									    	</ul>
										</li>
							            <li class="dropdown dropdown-submenu">
								    		<a class="trigger">Checkout</a>
									    	<ul class="dropdown-menu animated fadeIn dropdown-animation">
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/shop-checkout-1.html">Step 1: Shipping</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/shop-checkout-2.html">Step 2: Payment</a></li>
									    		<li><a tabindex="-1" href="http://aliensix.com/raleway-2.3/shop-checkout-3.html">Step 3: Review</a></li>
									    	</ul>
										</li>
							            <li><a href="http://aliensix.com/raleway-2.3/shop-single-product.html">Single Product</a></li>
							            <li><a href="http://aliensix.com/raleway-2.3/shop-cart.html">Cart</a></li>
						        	</ul> -->
						        </li>
								<li class="dropdown dropdown-main">
						        	<a href="features.php" >Features<!-- class="dropdown-toggle" data-toggle="dropdown"<span class="fa fa-angle-down dropdown-arrow"></span> --></a>
						        	<!-- <ul class="dropdown-menu dropdown-subhover dropdown-animation animated fadeIn"><!-- Control Animations by changing "fadeIn" to another property from animate.css, check animations page in features / ALSO dropdown-animation class controls the duration, ajust if need 
						            	<li><a href="http://aliensix.com/raleway-2.3/blog-posts-sidebar-right.html">Sidebar Right</a></li>
						            	<li><a href="http://aliensix.com/raleway-2.3/blog-posts-sidebar-left.html">Sidebar Left</a></li>
						            	<li><a href="http://aliensix.com/raleway-2.3/blog-posts-fullwidth.html">Full Width</a></li>
						            	<li><a href="http://aliensix.com/raleway-2.3/blog-posts-grid.html">Grid</a></li>
						            	<li><a href="http://aliensix.com/raleway-2.3/blog-single-post.html">Single Post</a></li>
						        	</ul> -->
						        </li>
								<li class="dropdown hidden-sm hidden-xs">
			                    	<a href="tel://9599075355" target="_blank" class="ml10 nav-circle-li dropdown-toggle dropdown-form-toggle"><i class="fa fa-phone"></i></a>
			                        <!--  data-toggle="dropdown"<ul class="fadeInUp-animated dropdown-menu dropdown-menu-user cart">
			                            <li id="dropdownForm">
			                            	<div class="dropdown-form">
												<table class="table table-hover no-margin">
													<thead>
														<tr>
															<th class="quantity">QTY</th>
															<th class="product">Product</th>
															<th class="amount">Subtotal</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="quantity">2 x</td>
															<td class="product"><a href="http://aliensix.com/raleway-2.3/shop-product.html">IPhone 6s</a><span class="small">32GB 10.0 Megapixel</span></td>
															<td class="amount">$700.00</td>
														</tr>
														<tr>
															<td class="quantity">3 x</td>
															<td class="product"><a href="http://aliensix.com/raleway-2.3/shop-product.html">G10 Macbook Toaster</a><span class="small">Quad Core 5GB</span></td>
															<td class="amount">$500.00</td>
														</tr>
														<tr>
															<td class="quantity">3 x</td>
															<td class="product"><a href="http://aliensix.com/raleway-2.3/shop-product.html">Desktop Seagul</a><span class="small">1 Foot Tall - 2FT Wingspan</span></td>
															<td class="amount">$1500.00</td>
														</tr>
														<tr>
															<td class="total-quantity" colspan="2">Total 8 Items</td>
															<td class="total-amount">$3000.00</td>
														</tr>
														<tr>
															<td class="text-right" colspan="3">
																<a href="http://aliensix.com/raleway-2.3/shop-cart.html"><button class="btn btn-rw btn-primary btn-sm">View your cart</button></a>
																<a href="http://aliensix.com/raleway-2.3/shop-checkout-1.html"><button class="btn btn-rw btn-primary btn-sm">Checkout</button></a>
															</td>
														</tr>
													</tbody>
												</table>
			                                </div>
			                            </li> 
			                        </ul> --><!-- /cart dropdown -->
			                	</li><!-- /cart navbar list item -->
								<li class="dropdown hidden-sm hidden-xs">
			                    	<a href="index.html#" class="ml10 nav-circle-li dropdown-toggle dropdown-form-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
			                        <ul class="fadeInRight-animated dropdown-menu dropdown-menu-user">
			                            <li id="dropdownForm">
			                            	<div class="dropdown-form">
			                                	<form class="form-default form-inline p15">
			                                        <div class="input-group">
			                                            <input type="text" class="form-control search-input" placeholder="Search...">
			                                            <span class="input-group-btn">
			                                                <button class="btn btn-rw btn-primary search-btn" type="button">Go!</button>
			                                            </span>
			                                    </form><!-- /searh form -->  
			                                </div><!-- /dropdown form -->  
			                            </li><!-- /dropdownForm list item -->  
			                        </ul><!-- /search dropdown -->
			                	</li><!-- /search navbar list item --> 
							</ul><!-- /navbar right -->  
						</nav><!-- /nav -->
					</div>
				</div>
			</div><!-- /container header -->   
		</div><!-- /navbar -->
	</div><!-- /navbar wrapper -->
	<!-- End Navigation -->

</header><!-- /header -->
<!-- End Header -->
