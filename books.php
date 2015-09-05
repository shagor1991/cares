<?php 
include('connect.php');
$bid= $_GET['bid'];
$sql_book="SELECT * FROM book WHERE id='$bid'";
$results_book= mysqli_query($conn,$sql_book);
$data_book= mysqli_fetch_assoc($results_book);


$sql_book_file="SELECT * FROM books_file WHERE book='$bid'";
$resuls_book_file= mysqli_query($conn,$sql_book_file);

?>
<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from themeblossom.net/thecause/blog/ by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 13 Mar 2013 20:13:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="UTF-8">
<title>Projects</title>




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

<script type="text/javascript">
/* STYLE SWITCHER */
jQuery(document).ready(function($) {
	$("#styleChanger").addClass('hidden');
	$("#styleChanger .trigger a").click(function() {
		if ($("#styleChanger").hasClass("hidden")) {
			$("#styleChanger").animate({"left": "0px"}, "slow").removeClass('hidden');
		} else {
			$("#styleChanger").animate({"left": "-362px"}, "slow").addClass('hidden');
		}
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
<style>
td { padding: 10px;}
.mem_name { font-weight:bold; font-size:large;}
.member { padding-left:40px;}
</style>

</head>

<body class="page page-id-62 page-template page-template-page-blog-wide-php theme-thecause">

<a id="top"></a>

	
<!-- HEADER -->
<div id="header" class="width100" style="background-image: url('wp-content/themes/the-cause/images/backgrounds/header/headerBckg.png'); background-color: #ffffff;">
    <div class="width1000">
        
        <div id="logo"><a href="#" title="CARESbd"><img src="wp-content/uploads/sites/5/2013/01/logo2.png" alt="CARESbd"></a></div>
		
    </div>
</div>
<!-- .HEADER -->

<div class="clear"></div>

<!-- CONTENT -->
<div id="contentHolder" class="width100">
    
	<!-- Navigation -->
    <?php include('navigation.php'); ?>
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

    
        <!-- Content -->
        <div id="content" class="default extra-green  sidebar-green width1000" >
		<div class="fullWidth">


<h2 style="text-align:center">Current Affairs</h2>

<!-- News -->
<div id="news">

	
	<div class="news wide ">
			        
	        
        <div>
        	<h3><?php echo $data_book['title']; ?></h3>
            <?php 
            $num=1;
            while($data_files= mysqli_fetch_assoc($resuls_book_file)){ ?>
            <a href="uploads/<?php echo $data_files['filename'] ?>" target="_blank"><?php echo $num.'. '.$data_files['title']; ?>. <br>
            - <?php echo $data_files['author']; ?></a> <br> <br>
            <?php $num++; } ?>
            <!-- <a href="pdf/book1_2.pdf" target="_blank">2. Development of a Novel-Universal Multiplex RT-PCR kit for rapid detection of vector-borne viruses<br>
            - Mohammed Alimul Islam Md. Mortuzza Ali and Kouichi Morita</a> <br> <br>
            
            <a href="pdf/book1_3.pdf" target="_blank">3. Biodegradation of reactive textile dyes by bacterial isolates<br>
            - Abul Kalam Azad, Md. Zobaidul Hossen, Kamrul Islam and Mohammad Majharul Islam</a> <br> <br>
            
            <a href="pdf/book1_4.pdf" target="_blank">4. Functional Structures of CRY4AA Toxin that are responsible for the mosquitocidal activity against culex pipiens<br>
            - Mohammad Tofazzal Hossain Howlader, Saori Nakao, Hiroshi Sakai and Tohru Hayakawa</a> <br> <br>
            
            <a href="pdf/book1_5.pdf" target="_blank">5. Creation of knock-out mouse models by transgenesis to understand human physiology and diseases <br>
            - Md. Zakir Hossain</a> <br> <br>
            
            <a href="pdf/book1_6.pdf" target="_blank">6. Prospects and issue for developing biotechnology Industries in Bangladesh: medical Laboratory perspectives. <br>
            - Dr. Muhammad Morshed</a> <br> <br>
            
            
            <a href="pdf/book1_7.pdf" target="_blank">7. Current trends of  biosimilar growth opens opportunities for Bangladesh. <br>
            - Ataur Rahman, Md. Shawkat Hossain, Raquibur Rahman, Mohammed Zakiur Rhaman and Md. Iqbal Hassan Khan</a> <br> <br>
            
            <a href="pdf/book1_8.pdf" target="_blank">8. DNA marker-assisted breeding and genetic transformation for producing salt-tolerant rice for Bangladesh <br>
            - Zeba I.Seraj, U.S. Mahzabin Amin and M. Sazzadur Rahman</a> <br> <br>
            
            <a href="pdf/book1_9.pdf" target="_blank">9. Development of Fungal disease resistance in lentil (Lens Culinaris Medik) Following Agrobacterium-Mediated genetic transformation <br>
            - Subroto K. Das, M.I. Hoque and R.H. Sarker</a> <br> <br>
            
            <a href="pdf/book1_10.pdf" target="_blank">10. Promise of bioinformatics in pharmaceutics and diagnostics  <br>
            - Abul B.M.M.K. Islam</a> <br> <br>
            
            <a href="pdf/book1_11.pdf" target="_blank">11. Molecular diagnostics tests in Bangladesh: Challenges and opportunities <br>
            - Tanvira Afroze Sultana, Subhagara Choudhury, Gazi Sharmin Sultana, M Sohrab Alma and Rubyyat Hassan</a> <br> <br>
            
            <a href="pdf/book1_12.pdf" target="_blank">12. Molecular epidemiological analysis of H5N1 Highly pathogenic avian influenza viruses of Bangladesh <br>
            - M.E. Haque, M. Giasuddin , E.H. Chowdhury and M.R. Islam</a> <br> <br>
            
            <a href="pdf/book1_13.pdf" target="_blank">13. Salinity-tolerant rice variety for combating climate disaster and assuring food security <br>
            - Mirza Mofazzal Islam, Shamsun Nahar Begum, Nazmul Hoque and Manas K. Saha</a> <br> <br>
            
            <a href="pdf/book1_14.pdf" target="_blank">14. Bioprocess development for Eco-friendly microbial products and its impacts on bio-industry establishment in Bangladesh <br>
            - Md. Mozammel Hoq, Arafal Al Mamun, Md. Asaduzzaman Shishir, Md Murad Khan, Md. Nahinur  Rahman Akand and Shakila Nargis Khan</a> <br> <br>
            
            <a href="pdf/book1_15.pdf" target="_blank">15. Harnessing heterosis for growth through intergeneric hybrid: Molecular cytogenetic studies on avian hybrid sterility <br>
            - Fhamida Binte Islam, Md. Bazlur Rahman Mollah and Yoichi Matsuda</a> <br> <br>
            
            <a href="pdf/book1_16.pdf" target="_blank">16. Aspects of 7sk SNRNA in HIV1 drug discovery <br>
            - Shamsun Nahar Khan</a> <br> <br>
            
            <a href="pdf/book1_17.pdf" target="_blank">17. Progress in generating bio-engineered crop plants for sustainable agriculture <br>
            - Lutful Hassan</a> <br> <br>
            
            <a href="pdf/book1_18.pdf" target="_blank">18. Indiscriminate use of chemical in fruits and their health effects <br>
            - M.A. Rahim</a>  -->


        </div>
    </div>

        
</div>
<!-- .News -->
		
		
	
	
    

        </div></div>
        <!-- .Content -->
    
    </div>
    <!-- .MAIN -->

</div>
<!-- .CONTENT -->



<!-- BOTTOM LINE -->
<div id="bottomLine" class="width100">
	<div class="width1000">
        <div id="bottomNav">
		<ul id="menu-footer" class="">
        <!--<li id="menu-item-1092" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-60 current_page_item menu-item-1092"><a href="index.html">Home</a></li>
<li id="menu-item-1093" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1093"><a href="#">CARES</a></li>
<li id="menu-item-1100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1100"><a href="#">Function & Administration</a></li>
<li id="menu-item-1128" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1128"><a href="#">Projects</a></li>
<li id="menu-item-1095" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1095"><a href="#">News</a></li>
<li id="menu-item-1094" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1094"><a href="#">Contact us</a></li>-->
</ul>        </div>
        
        <div id="credits"><a href="http://www.webpers.com/" title="Webpers"><img src="wp-content/uploads/sites/5/2013/01/footer_webpers.png" alt="Image 1"></a> </div>
	</div>
</div>
<!-- .BOTTOM LINE -->


<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min7514.js?ver=1.6.6'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-plugins.min7514.js?ver=1.6.6'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"countries":"{\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"BR\":{\"AM\":\"Amazonas\",\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"MA\":\"Maranh\u00e3o\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\",\"PA\":\"Par\u00e1\",\"BH\":\"Bahia\",\"GO\":\"Goi\u00e1s\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"RJ\":\"Rio de Janeiro\",\"SP\":\"S\u00e3o Paulo\",\"MG\":\"Minas Gerais\",\"PB\":\"Para\u00edba\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"HU\":[],\"IS\":[],\"IL\":[],\"NL\":{\"DR\":\"Drenthe\",\"FL\":\"Flevoland\",\"FR\":\"Friesland\",\"GLD\":\"Gelderland\",\"GRN\":\"Groningen\",\"LB\":\"Limburg\",\"NB\":\"Noord-Brabant\",\"NH\":\"Noord-Holland\",\"OV\":\"Overijssel\",\"UT\":\"Utrecht\",\"ZLD\":\"Zeeland\",\"ZH\":\"Zuid-Holland\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"NO\":[],\"PL\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\"},\"USAF\":{\"AA\":\"Americas\",\"AE\":\"Europe\",\"AP\":\"Pacific\"},\"VN\":[]}","select_state_text":"Select an option\u2026","plugin_url":"http:\/\/themeblossom.net\/thecause\/wp-content\/plugins\/woocommerce","ajax_url":"\/\/themeblossom.net\/thecause\/wp-admin\/admin-ajax.php","ajax_loader_url":"http:\/\/themeblossom.net\/thecause\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader.gif","required_rating_text":"Please select a rating","review_rating_required":"yes","required_text":"required","update_order_review_nonce":"8b91ed7dbe","apply_coupon_nonce":"d2255403b8","option_guest_checkout":"yes","checkout_url":"\/\/themeblossom.net\/thecause\/wp-admin\/admin-ajax.php?action=woocommerce-checkout","is_checkout":"0","update_shipping_method_nonce":"37a40eae60","add_to_cart_nonce":"80a48b5bd7"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min7514.js?ver=1.6.6'></script>

</body>

<!-- Mirrored from themeblossom.net/thecause/blog/ by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 13 Mar 2013 20:13:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
</html>