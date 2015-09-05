<!DOCTYPE HTML>


<html lang="en-US">

<!-- Mirrored from themeblossom.net/thecause/ by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 13 Mar 2013 20:11:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="UTF-8">
<title>CARES</title>




<!-- STYLES -->
<link href='wp-content/themes/the-cause/styles/fonts/lora.css' rel='stylesheet' type='text/css' media='screen' id='themeFont'>
<link href='wp-content/themes/the-cause/styles/fonts2/greatVibes.css' rel='stylesheet' type='text/css' media='screen'>
<link rel="stylesheet" href="wp-content/themes/the-cause/styles/grid960.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="wp-content/themes/the-cause/style.css" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="The Cause - Non-Profit WordPress Theme &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="The Cause - Non-Profit WordPress Theme &raquo; Comments Feed" href="comments/feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="The Cause - Non-Profit WordPress Theme &raquo; Home Comments Feed" href="home/feed/index.html" />
<link rel='stylesheet' id='ewd-progress-bar-css'  href='wp-content/plugins/easy-wordpress-donations/includes/css/progress-bar.css4b1d.css?ver=1.8' type='text/css' media='all' />
<link rel='stylesheet' id='ewd-front-end-css'  href='wp-content/plugins/easy-wordpress-donations/includes/css/front-end4b1d.css?ver=1.8' type='text/css' media='all' />
<link rel='stylesheet' id='rs-settings-css'  href='wp-content/plugins/revslider/rs-plugin/css/settings1bba.css?ver=3.5' type='text/css' media='all' />
<link rel='stylesheet' id='rs-captions-css'  href='wp-content/plugins/revslider/rs-plugin/css/captions1bba.css?ver=3.5' type='text/css' media='all' />
<link rel='stylesheet' id='prettyPhotoStyle-css'  href='wp-content/themes/the-cause/js/prettyPhoto/css/prettyPhoto1bba.css?ver=3.5' type='text/css' media='all' />


<script type='text/javascript' src='wp-includes/js/jquery/jquery4511.js?ver=1.8.3'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.plugins.min1bba.js?ver=3.5'></script>
<script type='text/javascript' src='wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min1bba.js?ver=3.5'></script>
<script type='text/javascript' src='wp-content/themes/the-cause/js/twitter1bba.js?ver=3.5'></script>
<script type='text/javascript' src='wp-content/themes/the-cause/js/prettyPhoto/js/jquery.prettyPhoto583f.js?ver=3.1.3'></script>
<script type='text/javascript' src='wp-content/themes/the-cause/js/slides.min.jqueryc5c9.js?ver=1.1.9'></script>
<script type='text/javascript' src='wp-content/themes/the-cause/js/jquery.easing.1.34e44.js?ver=1.3'></script>
<script type='text/javascript' src='wp-content/themes/the-cause/js/jquery.uniform.min4963.js?ver=1.1'></script>
<script type='text/javascript' src='wp-content/themes/the-cause/js/tbUniform4963.js?ver=1.1'></script>
<script type='text/javascript' src='wp-content/themes/the-cause/js/themeblossom5152.js?ver=1.0'></script>

<script type="text/javascript" src="wp-content/themes/the-cause/js/jquery.cookie.js"></script>

<link rel="stylesheet" href="lib/sweet-alert.css">
<script src="lib/sweet-alert.min.js"></script>

<script type="text/javascript">
/* STYLE SWITCHER */
jQuery(document).ready(function($) {
	
	$("#close").click(function() {
		$("#popup").hide(600);
		
	});
	
	// swal("Your email subscripted successfully!");
	
	$("#styleChanger").addClass('hidden');
	$("#styleChanger .trigger a").click(function() {
		if ($("#styleChanger").hasClass("hidden")) {
			$("#styleChanger").animate({"left": "0px"}, "slow").removeClass('hidden');
		} else {
			$("#styleChanger").animate({"left": "-362px"}, "slow").addClass('hidden');
		}
	});


	$('#comment_form').submit(function(ev) {
			    ev.preventDefault(); // to stop the form from submitting
			    
			    /* Validations go here */
			    // this.submit(); // If all the validations succeeded
			    var name= $("#name").val();
			    var email= $("#email").val();
			    var phone= $("#phone").val();
			    var message= $("#message").val();
			    var form_data= "name="+ name+"&email="+email+"&phone="+phone+"&message="+ message;
			    // alert(form_data);

			    $.ajax({
				  type: "POST",
				  url: "comment_operation.php",
				  data: form_data,
				  success: function(success){
				  	// alert(success);
				  	if(success =='1'){
				  		swal("Your email subscripted successfully!");
				  		$("#name").val("");
				  		$("#email").val("");
				  		$("#phone").val("");
				  		$("#message").val("");
				  		$("#comment_form").trigger("reset");
				  	}else{
				  		swal("Your email is already subscribed!");
				  	}
				  }
				});

	});

});

function strpos (haystack, needle, offset) {
  // http://kevin.vanzonneveld.net
  // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   improved by: Onno Marsman
  // +   bugfixed by: Daniel Esteban
  // +   improved by: Brett Zamir (http://brett-zamir.me)
  // *     example 1: strpos('Kevin van Zonneveld', 'e', 5);
  // *     returns 1: 14
  var i = (haystack + '').indexOf(needle, (offset || 0));
  return i === -1 ? false : i;
}


</script>

</head>

<body class="home page page-id-60 page-template page-template-page-home-revolution-php theme-thecause">


<a id="top"></a>



<!-- HEADER -->
<div id="header" class="width100" style="background-image: url('wp-content/themes/the-cause/images/backgrounds/header/headerBckg.png'); background-color: #ffffff;">
    <div class="width1000">
    	<!--<div id="to_banner"><a href="conference"><img src="img/top_banner.png" /> </a></div>-->
        
        <div id="logo"><a href="#" title="CARESbd"><img src="wp-content/uploads/sites/5/2013/01/logo2.png" alt="CARESbd"></a></div>
		
    </div>
</div>
<!-- .HEADER -->


<!-- CONTENT -->
<div id="contentHolder" class="width100">
    
	<!-- Navigation -->
    <?php include('navigation.php') ?>
	<!-- .Navigation -->
        
    <!-- MAIN -->
    <div id="main" class="width100">
	
			
		<!-- Promo Image -->
		<div id="promoImage" class="width100">
						<div style="background-image: url('wp-content/uploads/sites/5/2013/01/tb_green.png');">
				<img src="wp-content/uploads/sites/5/2013/01/tb_green.png">
							</div>
					</div>
		<!-- .Promo Image -->

    
        <!-- Slider -->
        <div id="parallaxRevolution" class="width1000"><div>
		
						
				<!-- START REVOLUTION SLIDER 2.1.6 -->
				
								
				<link rel='stylesheet' id='rev-google-font' href='http://fonts.googleapis.com/css?family=Lato:400' type='text/css' media='all' />				<div id="rev_slider_10_1_wrapper" class="rev_slider_wrapper" style="margin:0px auto;background-color:#DCDFE3;padding:0px;margin-top:0px;margin-bottom:0px;height:485px;width:979px;">
					<div id="rev_slider_10_1" class="rev_slider" style="display:none;height:485px;width:979px;">						
										<ul>
								<li data-transition="random" data-slotamount="7" data-masterspeed="500" >
						<img src="wp-content/uploads/sites/5/2013/01/trans.png" alt="trans" >
														
				<div class="tp-caption lfl randomrotateout"  
					 data-x="500" 
					 data-y="46" 
					 data-speed="1200" 
					 data-start="800" 
					 data-easing="easeOutExpo" data-end="8500" data-endspeed="1200" ><img src="wp-content/uploads/sites/5/2013/01/research.jpg" alt="Image 1"></div>
								
				
								
				<div class="tp-caption medium_text lfl ltr"  
					 data-x="63" 
					 data-y="201" 
					 data-speed="1000" 
					 data-start="1800" 
					 data-easing="easeOutExpo" data-end="7100" data-endspeed="1000" >CARES is a scientific research liaison and  </div>
								
				<div class="tp-caption medium_text lfl ltr"  
					 data-x="64" 
					 data-y="231" 
					 data-speed="1200" 
					 data-start="2500" 
					 data-easing="easeOutExpo" data-end="7800" data-endspeed="1200" >interface foundation established recently.</div>
								
				
		
				
												</li>
									<li data-transition="random" data-slotamount="7" data-masterspeed="500" >
						<img src="wp-content/uploads/sites/5/2013/01/trans.png" alt="trans" >
                        
                 <div class="tp-caption lfl randomrotateout"  
					 data-x="544" 
					 data-y="96" 
					 data-speed="1200" 
					 data-start="800" 
					 data-easing="easeOutExpo" data-end="8500" data-endspeed="1200" ><img src="wp-content/uploads/sites/5/2013/01/Micro-biology.jpg" alt="Image 1"></div>
								
				
								
				<div class="tp-caption medium_text lfl ltr"  
					 data-x="53" 
					 data-y="190" 
					 data-speed="1200" 
					 data-start="1800" 
					 data-easing="easeOutExpo" data-end="7100" data-endspeed="1200" >Its principal objective is to support innovations <br>(research and experimentation), prototyping, and evidence </div>
                 
                					
                     
                 <div class="tp-caption medium_text lfl ltr"  
					 data-x="53" 
					 data-y="231" 
					 data-speed="1200" 
					 data-start="2500" 
					 data-easing="easeOutExpo" data-end="8200" data-endspeed="1200" >based decision making together with rigorous<br> evaluation of policy to performance to<br>accelerate an integrated economic development <br> and social well being of <br>people of Bangladesh.  </div>
												</li>
									<li data-transition="random" data-slotamount="7" data-masterspeed="500" >
						<img src="wp-content/uploads/sites/5/2013/01/trans.png" alt="trans" >
														
				
				<div class="tp-caption lfl randomrotateout"  
					 data-x="548" 
					 data-y="96" 
					 data-speed="1200" 
					 data-start="800" 
					 data-easing="easeOutExpo" data-end="9500" data-endspeed="1200" ><img src="wp-content/uploads/sites/5/2013/01/agro-industrial.jpg" alt="Image 1"></div>
								
				
								
				<div class="tp-caption medium_text lfl ltr"  
					 data-x="63" 
					 data-y="170" 
					 data-speed="1200" 
					 data-start="1800" 
					 data-easing="easeOutExpo" data-end="7100" data-endspeed="1200" >CARES has been visioned as a "virtual" <br>University working together with persons,<br> institutions, organizations and  </div>
                 
                					
                     
                 <div class="tp-caption medium_text lfl ltr"  
					 data-x="64" 
					 data-y="231" 
					 data-speed="1200" 
					 data-start="2500" 
					 data-easing="easeOutExpo" data-end="8800" data-endspeed="1200" >programs to promote and support basic applied, and<br> prototype research of immediate economic value in fields<br> of agriculture, life sciences, small and medium<br> agro-enterprises,green technology and rural enterprises.  </div>
												</li>
									<li data-transition="random" data-slotamount="7" data-masterspeed="500" >
						<img src="wp-content/uploads/sites/5/2013/01/trans.png" alt="trans" >									
				
														
                    
               
								
				<div class="tp-caption large_text lfb"  
					 data-x="48" 
					 data-y="126" 
					 data-speed="1200" 
					 data-start="1000" 
					 data-easing="easeOutExpo"  >A number of eminent scientists <br>including some social leaders, Fellows and members<br> of the BAS (Bangladesh Academy of Sciences), <br>other academics, businessmen and entrepreneurs<br> are founding members of CARES.</div>
								
				
				
												</li>
								</ul>
									<div class="tp-bannertimer"></div>					</div>
				</div>				
							
			<script type="text/javascript">

				var tpj=jQuery;
				
									tpj.noConflict();
								
				var revapi10;
				
				tpj(document).ready(function() {
				
				if (tpj.fn.cssOriginal != undefined)
					tpj.fn.css = tpj.fn.cssOriginal;
				
				if(tpj('#rev_slider_10_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_10_1');
				else
				   revapi10 = tpj('#rev_slider_10_1').show().revolution(
					{
						delay:10000,
						startwidth:979,
						startheight:485,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:4,
						
						navigationType:"none",
						navigationArrows:"nexttobullets",
						navigationStyle:"round",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						navOffsetHorizontal:0,
						navOffsetVertical:20,
						
						shadow:0,
						fullWidth:"off",

						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0					});
				
				});	//ready
				
			</script>
			
							<!-- END REVOLUTION SLIDER -->
				
        </div></div>
        <!-- .Slider -->
					
        <!-- Content -->
        <div id="content" class="default extra-green  sidebar-green leftSidebar width1000" style="margin-top: 0 !important;">
		<div class="fullWidth">
        
	<!-- Home -->
	<div id="home" class="noslider">
	
	<div class="left"><h2>Committee of Action for Research, Extension <span>& </span> Services</h2></div>
	
		
	<div class="right">
				<a href="#" title="Enter" class="bigButtonExtra roundButton right">Enter</a>
	</div>
	
		
	<div class="clear"></div>
	
    </div>
    <!-- .Home -->
	
    <!-- INNER content -->
    <div id="innerHome"><div>
	
	<div id="sidebar" style="">
	<div class="widget box" style="margin:0; padding:0;"></div>
        
        <div class="widget box"><div><h3>CARES</h3>
        <div class="cwu">
        	<div><h4>At A Glance</h4>
            
            <p style="font-size:14px; line-height:1.8;">Bangladesh society offers opportunities for catalyst work for acceleration of economic growth along with strengthening rural -urban cultural and family ties.</p><a href="#">At A Glance</a></div>
        </div>
        <div class="cwu">
        	<div><h4>Vision, Mission and Objectives</h4>
            
            <p  style="font-size:14px; line-height:1.8;">To improve the economic condition in Bangladesh through scientific development.</p><a href="#">Vision, Mission and Objectives</a></div>
        </div>
        
        <div class="cwu">
        	<div><h4>Comments</h4>
            <form name="" id="comment_form" action="comment_operation.php" method="post">
                <label>Name : </label>
                <input type="text" name="name" id="name" required>
                
                <label>Email : </label>
                <input type="email" name="email" id="email" required>
                
                <label>Phone : </label>
                <input type="tel" name="phone" id="phone" required>
                
                <label>Comments : </label>
                <textarea name="message" id="message" required></textarea>
                <input type="submit" class="bigButtonExtra roundButton" value="Submit">
            </form>
            
            
            </div>
        </div>
        
       </div></div>	</div>
	
	<div id="inner"  style=" line-height:1.8;">
	
		<div id="homeHighlights">
	<div>		
		<h3 style="text-align:center;"><a href="#" title="Mission">Mission</a></h3>        
        <p>Campaign to make people aware of scientific human resource in the country and to promote their optimal utilization for national development.</p> 
        
        <p class="center"><a href="#" title="Mission" class="tinyButton">Read More</a></p>
        
        </div><div>		
		<h3 style="text-align:center;"><a href="#" title="Vision">Vision</a></h3>        
        <p>To improve the economic condition in Bangladesh through scientific development.</p>  <br/>  <br/>
        
        <p class="center"><a href="#" title="Vision" class="tinyButton">Read More</a></p>
        
        </div><div>		
		<h3 style="text-align:center;"><a href="#" title="Members">Members</a></h3>        
        <p>It is essentially a membership based organization with tiered hierarchy that is homogeneously responsible for all actions by the Committee.</p>
        
        <p class="center"><a href="#" title="Members" class="tinyButton">Read More</a></p>
        
        </div>	</div>
		
		<div>
	<h3>Latest News / Upcoming Events</h3>
	
		
            	
	<div class="news dfw">
			
						
						
			<div class="excerpt">
			<h4>
				<a href="#" title="">Notice</a>
			</h4>
            <br>
            
            <p>CARES is proud to note that Dr. Jafrul Hasan, one of our leading NRB Founding members, has received US EPA award for his pioneering work on easy detection of Anthrax virus. For further details, here is the media coverage link: <br> 
             	
                <a href="http://www.dailyinqilab.com/2013/11/29/146062.php">http://www.dailyinqilab.com/2013/11/29/146062.php</a> <br>  
 
                <a href="http://manobkantha.com/2013/11/29/148852.html">http://manobkantha.com/2013/11/29/148852.html</a>   <br> 
                 
                <a href="http://www.bd-pratidin.com/first-page/2013/11/29">http://www.bd-pratidin.com/first-page/2013/11/29</a> 

			
			</p>
						
			<p>Dr. M. Zainul Abedin, a renowned agricultural scientist and the former Country Representative of International Rice Research Institute (IRRI) to Bangladesh, has recently joined CARES as its Director (Research and Innovations). With his inclusion in the CARES team and a three year rolling work plan being developed, it is hoped that CARES’ institutional capacity and activities would be further enhanced.
            </p>
            
			</div>
			
	</div>
    
    <div class="news dfw">
			
						
						
			<div class="excerpt">
			<h4>
				<a href="conference_report.html" title="">Draft Report on the first rendezvous/Annual General Meeting of Fellows and Members of CARES held on 18 January, 2014 at the BRAC Centre</a>
			</h4>
			<br>
			
			
						
			<p>Fellows and Members (Founding Members, Primary Members including members nominated by institutions) had a get-together (<i>rendezvous</i>) from 11: 30 a.m. on <b>Saturday, 18 January, 2014</b>. at <b>The BRAC Centre Auditorium</b> which concluded with <b>LUNCH</b>. The meeting was the first rendezvous/ get-together involving all categories of persons associated with CARES which was chaired by the Dr. A. Majeed Khan.  The meeting was attended by 3 Fellows, 47 Founding Members, 6 Primary Members, 1 guest. Full list of participants is appended. 
            </p>
            
            <p><a href="agm.html" class="tinyButton">Read More</a></p>
			</div>
			
	</div>
    
    
    <div class="news dfw">
			
						
						
			<div class="excerpt">
			<h4>
				<a href="#" title="">Proceedings of the Seminar on “Impact of R&D on National Development” jointly organized by CARES and BCSIR on October 8, 2013</a>
			</h4>
			<br>
			
			
						
			<p>A Seminar with the theme “Impact of R&D on National Development” was held in the BCSIR premises on 8th October, 2013 (in fulfillment of the CARES work-plan approved on 31st August, 2013 by the EC). The Seminar was attended by some 200 participants from the BCSIR, several members of CARES and academics. The Seminar was structured into three sessions, an opening session, the keynote address by Professor Samir Kumar Brahmachari, Director General of CSIR, India who is also the Secretary of DSIR, and the concluding session with a presentation from the CSIR. Session-wise summary is given below:
            </p>
            <div>
            <img src="img/DSC_0080.JPG" width="48%" style="float:left; margin-bottom:15px;"/> <img src="img/DSC_0202.JPG" width="48%" style="float:left; margin-left:5px; margin-bottom:15px;"/>
            </div>
            
            <p>
            	<a href="news.html" class="tinyButton">Read more</a>
            </p>
			</div>
			
	</div>
    
    <div class="news dfw">
			
						<div class="frame">
				<div>
				<a href="conference_report.html" title="11th Monthly Seminar of CARES">11th Monthly Seminar of CARES</a>
				<span class="image" style="background-image: url('img/report.png');"></span>
				<span class="paperClip"></span>
				<div>
				
				<strong>25</strong><br>
				May			
				</div>
				
				</div>
			</div>
						
			<!--<div class="excerpt">
			<h4>
				<a href="#" title="11th Monthly Seminar of CARES">11th Monthly Seminar of CARES</a>
			</h4>
			
			
						
			<p>All EC, Founding & Primary members, friends and associates are cordially invited to attend <br/>

			1. Topic<br/>

            RD Model for Rural Development in Bangladesh,<br/>
            
            2. Speaker<br/>
            
            Mr. M.A. Matin,<br/>

            Director General, Rural Development Academy (RDA) Bogra, Bangladesh<br/>
            
            3. Venue<br/>
            
            Prof. Matin Auditorium, University of South Asia<br/>
            
            Road # 14, Block # B, Banani, Dhaka (location: Opp: UAE market, Banani)
            </p>
			</div>-->
			
	</div>

    <!--<div class="news dfs">
			
						<div class="frame">
				<div>
				<a href="#" title="View all posts in Society">INTERNATIONAL CONFERENCE ON BIOTECHNOLOGY</a>
				<span class="image" style="background-image: url('wp-content/uploads/sites/5/2013/01/mini.jpg');"></span>
				<span class="paperClip"></span>
				
				<div>
				
				<strong>24</strong><br>
				Aug				
				</div>
				</div>
			</div>
						
			<div class="excerpt">
			<h4>
				<a href="conferance" title="News about conference">INTERNATIONAL CONFERENCE ON BIOTECHNOLOGY</a>
			</h4>
			
			<p class="newsInfo">posted under: <a href="#" title="View all posts in Society" rel="category tag">Society</a></p>
						
			<p>Guidelines for Preparation and Submission of Abstracts<br>
                1.	Relevance: Abstracts (of no more than 350 words, excluding Title, Authors and their affiliations, Acknowledgement), containing findings of new studies, should be relevant to the conference topics. <br>
                2.	Content and structure: Each abstract, with a title, name(s) of author(s) with designation(s), affiliation(s), and full address, including land phone and cell phone numbers, should be structured as follows: Background/Introduction; Objective; Methods and materials; Results; Conclusion .....</p>
                <p class="center"><a href="conferance" title="Vision" class="tinyButton">Read More</a></p>
			</div>
			
	</div>-->
    
    <div class="news dfw">
			
						
						
			<div class="excerpt">
			<h4>
				<a href="conference_report.html" title="">Draft Report on the International Conference on Biotechnology Organized by CARES, May 25-26, 2013 at The Westin, Dhaka</a>
			</h4>
			
			<br>
						
			<p>CARES International Conference on Biotechnology (ICB), which was also the formal launching of CARES, was held on 25-26, 2013 at the Westin Dhaka was participated by over 250 scientists, researchers, academia, business-industry leaders, Founding and Primary members of CARES and interested students. Most public and some private universities were represented.
            </p>
            
            <p><a href="conference_report.html" class="tinyButton">Read More</a></p>
			</div>
			
	</div>
    	
	</div>	
		<div>

	
            
    <h3>Video Gallery</h3>
	
	<div id="homeVideo"><div class="slides_container">
    	<div class="video">
        	<div class="player">
	        	<a href="http://www.youtube.com/watch?v=gP2MfsH5FBc&feature=youtu.be" title="CONFERENCE">
	            	<img width="444" height="237" src="pdf/video.png" class="attachment-videoWide wp-post-image" alt="CONFERENCE" title="CONFERENCE" />	            </a>
            </div>
            
            
        </div>
				
	
    	
				
	
    	
				
	
    	<!--<div class="video">
        	<div class="player">
	        	<a href="http://www.youtube.com/watch?v=nqEYe234Fr8&list=PLB460E4C5AA7EEABC" title="Dozens of admin features">
	            	<img width="444" height="237" src="wp-content/uploads/sites/5/2012/10/video-444x237.png" class="attachment-videoWide wp-post-image" alt="presentation(6.2)" title="presentation(6.2)" />	            </a>
            </div>
            
            
        </div>
        
        
        <div class="video">
        	<div class="player">
	        	<a href="http://www.youtube.com/watch?v=QGcGXjNSjGU&list=PLB460E4C5AA7EEABC" title="Dozens of admin features">
	            	<img width="444" height="237" src="wp-content/uploads/sites/5/2012/10/video-444x237.png" class="attachment-videoWide wp-post-image" alt="presentation(6.3)" title="presentation(6.3)" />	            </a>
            </div>
            
            
        </div>-->
				
		

	
	</div>
	
	<ul class="videoPagination">
	
    	<li><a href="#"><img width="147" height="102" src="pdf/video_small.png" class="attachment-dfs wp-post-image" alt="CONFERENCE" title="CONFERENCE" /></a></li>
				
	
    	<!--<li><a href="#"><img width="147" height="102" src="wp-content/uploads/sites/5/2012/10/video-147x102.png" class="attachment-dfs wp-post-image" alt="presentation(6.2)" title="presentation(6.2)" /></a></li>
				
	
    	<li><a href="#"><img width="147" height="102" src="wp-content/uploads/sites/5/2012/10/video-147x102.png" class="attachment-dfs wp-post-image" alt="presentation(6.3)" title="presentation(6.3)" /></a></li>-->
				
	
    	
				
		</ul>
		
	</div>

	<script>
		jQuery(document).ready(function($){
			$('#homeVideo').slides({
				effect: 'fade',
				crossfade: true,
				fadeSpeed: 500,
				paginationClass: 'videoPagination',
				generateNextPrev: false,
				generatePagination: false,
				autoHeight: true
			});
		});
	</script>
	
	    
    	
	</div>	
	
		

	
	</div>

    </div></div>
	<!-- .INNER content -->


        </div></div>
        <!-- .Content -->
    
    </div>
    <!-- .MAIN -->

</div>
<!-- .CONTENT -->

<!-- FOOTER -->
<div id="footer" class="width100">
	<div class="width1000"  style=" line-height:1.8;">
        
        <div class="container_12">
        
        <div class="grid_3">
		<div class="widget"><h3>Objectives and Goal</h3><p>The overall scheme is to promote research and active liaison amongst institutions and programs in the role of a catalyst to achieve a higher and faster growth of economy based research, and extension of evidence based knowledge. </p>
<p class="nomargin"><a href="#">Read more &raquo;</a></p></div><div class="clear"></div>        </div>
        
        <div class="grid_3">
		<div class="widget"><h3>Projects</h3><p>The Executive Committee has appointed five area-wise working/ subcommittee <br/> 
        	1. Bio technology committee Chaired by Prof. Haseena Khan.<br/>
            2. Environment and climate concerns committee Chaired by Commodore Ataur Rahman.<br/>
           
        </p>
<p class="nomargin"><a href="#">Read more &raquo;</a></p>
		
        
                        
        <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/themeblossom.json?callback=twitterCallback2&amp;count=2"></script>
        
    	</div><div class="clear"></div>        </div>
        
        <div class="grid_3">
		        
		
        
        <div class="grid_3">
		<div class="widget"><h3>Contact Details</h3>
        <p><b>Engr. Md. Abdul Majeed</b> <br/>

				Programme Development & Management Consultant<br/>

                Apt – 4B, House No – 9, Road – 2/1, <br/>
                
                Banani, Dhaka – 1213<br/>
                
                Phone: 9894033; 01766144966<br/>
                
                E-mail:<a href='mailto:info@caresbd.org'>info@caresbd.org</a>, <a href="mailto:mjd.ma48@gmail.com">mjd.ma48@gmail.com</a>
         </p>
                </div><div class="clear"></div>        </div>
        
        </div>
        
	</div>
</div>
<!-- .FOOTER -->

<!-- BOTTOM LINE -->
<div id="bottomLine" class="width100">
	<div class="width1000">
        <div id="bottomNav">
		<ul id="menu-footer" class="">
        <!--<li id="menu-item-1092" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-60 current_page_item menu-item-1092"><a href="index.html">Home</a></li>
<li id="menu-item-1093" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1093"><a href="#">CARES</a></li>
<li id="menu-item-1100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1100"><a href="#">Function & Administration</a></li>
<li id="menu-item-1128" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1128"><a href="#">Projects</a></li>
<li id="menu-item-1095" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1095"><a href="#">News</a></li>-->
<!--<li id="menu-item-1094" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1094">Go up</li>-->
</ul>        </div>
        
        <div id="credits"><a href="http://www.webpers.com/" title="Webpers"><img src="wp-content/uploads/sites/5/2013/01/footer_webpers.png" alt="Image 1"></a> </div>
	</div>
</div>
<!-- .BOTTOM LINE -->


<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min7514.js?ver=1.6.6'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-plugins.min7514.js?ver=1.6.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"countries":"{\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"BR\":{\"AM\":\"Amazonas\",\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"MA\":\"Maranh\u00e3o\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\",\"PA\":\"Par\u00e1\",\"BH\":\"Bahia\",\"GO\":\"Goi\u00e1s\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"RJ\":\"Rio de Janeiro\",\"SP\":\"S\u00e3o Paulo\",\"MG\":\"Minas Gerais\",\"PB\":\"Para\u00edba\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"HU\":[],\"IS\":[],\"IL\":[],\"NL\":{\"DR\":\"Drenthe\",\"FL\":\"Flevoland\",\"FR\":\"Friesland\",\"GLD\":\"Gelderland\",\"GRN\":\"Groningen\",\"LB\":\"Limburg\",\"NB\":\"Noord-Brabant\",\"NH\":\"Noord-Holland\",\"OV\":\"Overijssel\",\"UT\":\"Utrecht\",\"ZLD\":\"Zeeland\",\"ZH\":\"Zuid-Holland\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"NO\":[],\"PL\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\"},\"USAF\":{\"AA\":\"Americas\",\"AE\":\"Europe\",\"AP\":\"Pacific\"},\"VN\":[]}","select_state_text":"Select an option\u2026","plugin_url":"http:\/\/themeblossom.net\/thecause\/wp-content\/plugins\/woocommerce","ajax_url":"\/\/themeblossom.net\/thecause\/wp-admin\/admin-ajax.php","ajax_loader_url":"http:\/\/themeblossom.net\/thecause\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader.gif","required_rating_text":"Please select a rating","review_rating_required":"yes","required_text":"required","update_order_review_nonce":"8b91ed7dbe","apply_coupon_nonce":"d2255403b8","option_guest_checkout":"yes","checkout_url":"\/\/themeblossom.net\/thecause\/wp-admin\/admin-ajax.php?action=woocommerce-checkout","is_checkout":"0","update_shipping_method_nonce":"37a40eae60","add_to_cart_nonce":"80a48b5bd7"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min7514.js?ver=1.6.6'></script>

</body>

<!-- Mirrored from themeblossom.net/thecause/ by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 13 Mar 2013 20:12:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
</html>