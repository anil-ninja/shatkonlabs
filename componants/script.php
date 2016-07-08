<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/scrollReveal.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.snippet.min.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/style-switcher.js"></script><!-- Remove for production -->
<script type="text/javascript" src="js/activate-snippet.js"></script>
<script type="text/javascript" src="js/skrollr.min.js"></script>
<script>
	var config = {
	easing: 'hustle',
	mobile:  true,
	delay:  'onload'
	}
	window.sr = new scrollReveal( config );
</script>
<!-- Slider Revolution JS -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- Slider Revolution Extensions (Load Extensions only on Local File Systems The following part can be removed on Server for On Demand Loading) -->	
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/validation.js"></script>

<!-- Slider Revolution Main -->
<script type="text/javascript">
	jQuery(document).ready(function() { 
	   jQuery("#slider1").revolution({
	        sliderType:"standard",
	        startDelay:2500,
	        spinner:"spinner2",
	        sliderLayout:"auto",
	        viewPort:{
	           enable:false,
	           outof:'wait',
	           visible_area:'100%'
	        }
	        ,
	        delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				onHoverStop:"off",
				arrows: {
					style:"erinyen",
					enable:true,
					hide_onmobile:true,
					hide_under:600,
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div>	<span class="tp-arr-titleholder">{{title}}</span> </div>',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:30,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:30,
						v_offset:0
					}
				}
				,
				touch:{
					touchenabled:"on",
					swipe_treshold : 75,
					swipe_min_touches : 1,
					drag_block_vertical:false,
					swipe_direction:"horizontal"
				}
				,
				bullets: {
	                enable:true,
	                hide_onmobile:true,
	                hide_under:600,
	                style:"hermes",
	                hide_onleave:true,
	                hide_delay:200,
	                hide_delay_mobile:1200,
	                direction:"horizontal",
	                h_align:"center",
	                v_align:"bottom",
	                h_offset:0,
	                v_offset:30,
	                space:5
				}
			},
			gridwidth:1240,
			gridheight:497 
	    }); 
	});
</script>