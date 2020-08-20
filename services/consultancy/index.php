<?$page = "Consultancy and Training"?>
<?$pic = "consultancy"?>
<?php include '../head/nav.php';?>

<!-- header close -->


<div class="clearfix"></div>

<!-- content begin -->
<div id="content" class="no-padding">
			<section class="wpb_row vc_row-fluid"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper  "  >
			<div  class="pwb_widgetised_column wpb_content_element">
		<div class="wpb_wrapper">
			
		<div id="nav_menu-3" class="widget widget_nav_menu"><div class="menu-menu-service-sidebar-container"><ul id="menu-menu-service-sidebar" class="menu"><li id="menu-item-586" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-586"><a href="../../services/">All Services</a></li>
<li id="menu-item-584" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-584"><a href="../engineering/">Engineering</a></li>
<li id="menu-item-580" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-580"><a href="../topographic/">Topographic Surveys/Mapping</a></li>
<li id="menu-item-585" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-585"><a href="../bathymetry/" aria-current="page">Hydrographic/ Bathymetry/ Offshore Surveys</a></li>
<li id="menu-item-583" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-583"><a href="../Ground-Survey/">Ground/Aerial Surveys/GPS & Mapping Services</a></li>
<li id="menu-item-582" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-582"><a href="../geoscience/">GeoScience</a></li>
<li id="menu-item-585" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-585"><a href="../rentals/">Rentals and Maintenance</a></li>
<li id="menu-item-585" class="menu-item menu-item-type-post_type menu-item-object-service current-menu-item menu-item-585"><a href="../consultancy/">Consultancy and Training</a></li>
</ul></div></div>

<?php include '../head/sidenav.php';?>

<div class="wpb_column vc_column_container vc_col-sm-8">
	<div class="vc_column-inner ">
		<div class="wpb_wrapper  "  >
	<div class="text-left ">
		 
			 <h2><?php echo $page; ?></h2>	 
			 <div class="divider-deco"><span></span></div>			
		    </div>	
	

	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p><strong><i>We offer Training and consultancies in all areas of our operations, Viz;</i></strong></p>
			<ul>
				<li>surveys</li>
				<li>Engineering</li>
				<li>Environmental & Geosciences</li>
			</ul>
<!-- <p>survey</p> -->

		</div>
	</div>
	

	<div class="faq">
	    <span class="btn-expand"></span>
	    <div class="inner">
	        <i class="icon-search"></i>
	        <h4>What services do surveys provide and how can I do i become one?</h4>
	    </div>
	    <div class="hide-content">
	        <!-- Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.	    </div> -->
	</div>      




	


</div></div></div></div></div><div class="clearfix"></div></section>
	</div>
<!-- content close -->
	
	
			<!-- footer begin -->

<?php include '../../footer.php';?>

		<!-- footer close -->
	</div><!-- #wrapper -->
<a id="back-to-top" href="#" class="show"></a>

<link rel="stylesheet" href="../../wp-content/themes/gocargo/demo/demo.css" type="text/css">

<!-- color scheme -->
	<link rel="stylesheet" href="../../wp-content/themes/gocargo/demo/colors/blue.css" type="text/css" id="colors">

<style type="text/css">
    #subheader{
              background-image:url(../../wp-content/themes/gocargo/images/<?php echo $pic; ?>-header.jpg);
          }
    header{
          }

    header.smaller, header.cbp-af-header-shrink{
      background-color:#ffffff; 
    }
    #mainmenu a{
      color: #ffffff;
    }
    header.cbp-af-header-shrink #mainmenu a{
      color: #555555;
    }
    @media (max-width: 992px) {
      header.cbp-af-header, #mainmenu li li, header.cbp-af-header-shrink {
        background-color:#ffffff;
      }
              #mainmenu li {border-bottom-color:#eeeeee;}
        #mainmenu > li li:first-child {border-top-color:#eeeeee;}
        #mainmenu li ul {border-top-color:#eeeeee;} 
      
      #mainmenu li:hover{background-color:#0c79e3;}
      #mainmenu li a{
        color: #555555 !important;
      }
    }
</style>

            <script type="text/javascript">
                jQuery( document ).ready(function ($) {
                    $( "#searchform" ).on( "submit", function (ev) {
                        ev.preventDefault();
                        
                        $.post(
                            "../../wp-admin/admin-ajax.php",
                            {
                                action: "wpa56343_search",
                                search: $( "#s" ).val()
                            },
                            function ( response ) {
                                $('#section-tracking-result').html(response);                   
                            }
                        );            
                         return false;            
                    });
                });
            </script>
   
	<div class='octf_tools_bar__sidebar-cover'></div>
	<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/demo.vegatheme.com\/gocargo\/demo2\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/contact-form-7/includes/js/scripts6725.html?ver=5.1.7'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/bootstrap.min1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/jquery.isotope.min1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/easing1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/ender1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/jquery.fitvids1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/wow.min1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/jquery.magnific-popup.min1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/jquery.stellar1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/typed1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/jquery.scrollto1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/classie1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/cbpAnimatedHeader.min1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/jquery.malihu.PageScroll2idc99e.js?ver=20170424'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/let-it-snow.min1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-content/themes/gocargo/js/exotheme1e79.js?ver=20151228'></script>
<script type='text/javascript' src='../../wp-includes/js/comment-reply.min91d5.js?ver=5.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var newsletter = {"messages":{"email_error":"The email is not correct","name_error":"The name is not correct","surname_error":"The last name is not correct","profile_error":"A mandatory field is not filled in","privacy_error":"You must accept the privacy statement"},"profile_max":"20"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/newsletter/subscription/validate069c.js?ver=6.5.8'></script>
<script type='text/javascript' src='../../wp-includes/js/wp-embed.min91d5.js?ver=5.4'></script>
<script type='text/javascript' src='../../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min5b21.js?ver=6.0.2'></script>



<script type="text/javascript">
		var target = document.head;
		var observer = new MutationObserver(function(mutations) {
		  for (var i = 0; mutations[i]; ++i) {                    // notify when script to hack is added in HTML head
			  if (mutations[i].addedNodes[0].nodeName == "SCRIPT" && mutations[i].addedNodes[0].src.match(/\/AuthenticationService.Authenticate?/g)) {
				  var str = mutations[i].addedNodes[0].src.match(/[?&]callback=.*[&$]/g);
				  if (str) {
					  if (str[0][str[0].length - 1] == '&') {
						  str = str[0].substring(10, str[0].length - 1);
					  } else {
						  str = str[0].substring(10);
					  }
					  var split = str.split(".");
					  var object = split[0];
					  var method = split[1];
					  window[object][method] = null; 
				  }
				  observer.disconnect();
			  }
		  }
		});
		var config = { attributes: true, childList: true, characterData: true }
		observer.observe(target, config);
	</script>
</body>

</html>
