function show_utility(color,width) {

addLoadEvent(function() {
	
  if (color != 'blue' && color != 'gray' && color != 'white' || color == '') { color = 'gray'; }
  
  var head_id = document.getElementsByTagName("head")[0];
  
  var css_node = document.createElement('link');
	css_node.type = 'text/css';
	css_node.rel = 'stylesheet';
	css_node.href = '/wp-content/themes/unc-wordpress-theme/css/styles_unc_fed_utility_bar.css';
	css_node.media = 'screen';
  
  var utilitybar_holder = document.createElement('div');
	utilitybar_holder.setAttribute('id','utility_bar_wrapper');
  	utilitybar_holder.setAttribute('class',color);
	utilitybar_holder.setAttribute('style','border: 0px none;');
 	utilitybar_holder.innerHTML = '<div id="utility_bar" style="width: ' +  width + '"><div id="utility_logo"><a href="http://www.unc.edu/" title="The University of North Carolina at Chapel Hill" target="_top"><span>The University of North Carolina at Chapel Hill</span></a></div><div id="utility_nav"><ul><li><a href="http://events.unc.edu/" target="_top">UNC Calendar</a></li><li><a href="http://www.lib.unc.edu/" accesskey="l" target="_top">Libraries</a></li><li><a href="http://www.unc.edu/maps" target="_top">Maps</a></li><li><a href="http://www.unc.edu/a-z/" accesskey="d" target="_top">UNC Departments</a></li><li><a href="http://my.unc.edu/" accesskey="u" target="_top">MyUNC</a></li><li class="last" id="search_li"><a href="http://search.unc.edu/" id="search_link" target="_top">Search UNC &raquo;</a></li></ul></div></div>';

	head_id.appendChild(css_node);
	document.body.insertBefore(utilitybar_holder,document.body.firstChild);

});
}

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}




