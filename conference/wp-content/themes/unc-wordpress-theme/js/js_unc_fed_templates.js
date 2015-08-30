
// Accordions
function activate_accordions() {
   $('.accordion ul li.list-header').click(function() {
      // Make all subsequent li's disappear
      h4 = $(this).find('h4');
      $(this).siblings().slideToggle(200, function() {
      });
      $(h4).toggleClass('list-open');
   });
}

function activate_accordion_toggle(initial_state) {
   if (typeof(initial_state) == 'undefined') {
      initial_state='closed';
   }
   if (initial_state == 'closed') {
      $('.accordion ul li.list-header').click();
   }
   if ($('div.dropdown_toggle').length) {
      if (initial_state == 'open') {
         $(".show_all").hide();
      }
      else {
         $(".hide_all").hide();
      }
      $(".show_all").click(function() {
         $(this).hide();
         $(".hide_all").show();
         $('.accordion ul li.list-header:has(h4.list-open)').click();
         return false;
      });
      $(".hide_all").click(function() {
         $(this).hide();
         $(".show_all").show();
         $('.accordion ul li.list-header h4').not('.list-open').click();
         return false;
      });
   }
}


// Text Resizer
function resetText() {
   $('#content-well').css({
      'font-size' : '100%'
   });   
}
function largerText() {
   $('#content-well').css({
      'font-size' : '116%'
   });   
}
function largestText() {
   $('#content-well').css({
      'font-size' : '131%'
   });   
}


$(document).ready(function() {
   activate_accordions();
   activate_accordion_toggle();
   
   $("#resize_reset a").click(function() {
      resetText();
   });
   $("#resize_larger a").click(function() {
      largerText();
   });
   $("#resize_largest a").click(function() {
      largestText();
   });
   
});




