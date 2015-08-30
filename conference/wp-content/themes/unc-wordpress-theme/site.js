jQuery(document).ready( function() 
	  { 
		prepFeatures();
		$("#feature-box div.feature:not(#feature-1)").hide();
		changeStory(1);
		storyCount = $('#feature-box .feature').size();
		
		$("#documents-table").tablesorter({
			headers: { 
            // assign the third column (we start counting zero) 
			  3: { 
				  // disable it by setting the property sorter to false 
				  sorter: false 
			  } 
			}
		  });
			
	  } 
);


var currentStoryID = 0;
var storyCount = 0;

function prepFeatures() {
	//$("#feature-nav li.story").each( function() {
	//	$featureIDbits = $(this).attr("id").split('-');
	//	$featureID = $featureIDbits[2];
	//	$(this).children("a").attr("href" ,"javascript:changeStory(" + $featureID + ");");
	//});
	
	$('div.feature p').each( function() {
		content = jQuery('a', this).html();

		if ( content != null && content.toLowerCase()  == 'learn more' ) { 
			$(this).addClass('more');
		}
								 
	});
}

function changeStory(id) {
	currentStoryID = id;
	$("#feature-box div.feature:not(#feature-" + id + ")").hide();
	$("#feature-box div#feature-" + id ).show();
	$("#feature-nav li.story ").removeClass('on');
	$("#feature-nav li#feature-nav-" + id).addClass('on');
}

function nextStory() {
	nextStoryID = (currentStoryID % storyCount) + 1;
	changeStory(nextStoryID);
}

function prevStory() {
	prevStoryID = (currentStoryID != 1) ? (currentStoryID - 1 ) : storyCount;
	changeStory(prevStoryID);
}