

$(document).ready(function() {
	
	// Load Animation
	$('body').delay(500).animate({opacity:'1'}, 900);
	
	// Global Color
	$('head style').append('h1, h1a, h2, h2 a, h3, h3 a, h4, h4 a, h5, h5 a, h6, h6 a  {font-family:"'+Heading_Font+'"; } html, body, div, p, table, tr, td, th, tbody, tfoot, ul, li, ol, dl, dd, dt, fieldset, cite, input, select, textarea, button, a, section, article, aside, header, footer, nav {font-family:"'+Site_Font+'"; }  body {background-color:#'+page_background_color+';} .btn:hover {background-color:#'+main_color+'; }  h1, ul.list-inline li a:hover i {color:#'+main_color+';}  input[type=submit] {background-color:#'+color2+';}    ::selection {background-color:#'+main_color+'; color:#fff;} ::-moz-selection {background-color:#'+main_color+'; color:#fff;} ');

	
	// Tooltip
	$('a.tips').tooltip();
	
	// tabs
	$('.tab-content-wrapper .tb-content').not('.tab-content-wrapper .tb-content:first').hide();
	$('.tabs li a[href^=#]').click(function(event) {
			event.preventDefault();
			$(this.hash).prev().delay(100).slideUp('slow');
			$('.tb-content').delay(200).slideUp('slow');
			$(this.hash).delay(300).slideDown('slow');	
	});
	
	// Broken Link
	var brokenlink = window.location;
	$('#comment').val('Hey - I\'ve found a broken link on your website: '+brokenlink);
	
	
	// Year Update
	var curYear = new Date().getFullYear();
	$('.year').php(curYear);	  
	  
});

