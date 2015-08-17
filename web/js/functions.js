// Our Blog Functions
$(document).ready(function(){
	jQuery.noConflict();
	(function($) {
/*//Hide Global Nav
	$('#globalNav').hide();
	$('#main').mouseleave(function() {
		$('#globalNav').slideDown('slow');	
	}).mouseenter(function() {
		$('#globalNav').fadeOut('slow');
	});
*/
//Hover Nav
	$("#todaylink2").hide();
	$("#calendarlink2").hide();
	$("#aboutlink2").hide();

	function myHoverLink(divName, linkgif1, linkgif2){
		$(divName).hover(
			function(){
			$(linkgif1).hide();
			$(linkgif2).show();
			},
			function(){
			$(linkgif1).show();	
			$(linkgif2).hide();	
			});
	};
	
	myHoverLink('#link1', '#todaylink', '#todaylink2');
	myHoverLink('#link2', '#calendarlink', '#calendarlink2');
	myHoverLink('#link3', '#aboutlink', '#aboutlink2');
	
//Arrow links
	$(".rtarrow2").hide();
	$(".ltarrow2").hide();
	myHoverLink('.rtarrowgroup a', '.rtarrow', '.rtarrow2');
	myHoverLink('.ltarrowgroup a', '.ltarrow', '.ltarrow2');
//About Accordion
	
	$('#about p').hide();
	$('.minus').hide();
	function myAccordion(divName, para, gif1, gif2, para2, para3, para4, gif3, gif4, gif5, gif6, gif7, gif8) {
		$(divName).toggle(
			function(){
			$(para).slideDown('slow');
			$(gif1).hide();
			$(gif2).show();
			$(gif3).show();
			$(gif4).show();
			$(gif5).show();
			$(gif6).hide();
			$(gif7).hide();
			$(gif8).hide();
			$(para2).slideUp('slow');
			$(para3).slideUp('slow');
			$(para4).slideUp('slow');
			}, 
			function(){
			$(para).slideUp('slow');
			$(gif1).show();
			$(gif2).hide();
			}			
		);
	}
	myAccordion('#level1', '#plus1p', '#plus1', '#minus1', '#plus2p', '#plus3p', '#plus4p', "#plus2", "#plus3",  "#plus4", "#minus2", "#minus3", "#minus4");
	myAccordion('#level2', '#plus2p', '#plus2', '#minus2', '#plus1p', '#plus3p', '#plus4p', "#plus1", "#plus3",  "#plus4", "#minus1", "#minus3", "#minus4" );
	myAccordion('#level3', '#plus3p', '#plus3', '#minus3', '#plus1p', '#plus2p', '#plus4p', "#plus2", "#plus1",  "#plus4", "#minus2", "#minus1", "#minus4");
	myAccordion('#level4', '#plus4p', '#plus4', '#minus4', '#plus1p', '#plus2p', '#plus3p', "#plus2", "#plus3",  "#plus1", "#minus2", "#minus3", "#minus1");
	
	})(jQuery);
});

//Date Function 

	function dateString(date,string) {
		var year=date.getFullYear();
		var month=date.getMonth();
		var realMonth=month_1;
		if (realMonth<10) {
			fillMonth = '0' + realMonth;	
		} else {
			fillMonth = realMonth;	
		}
		
		var months = ['January',
					  'February',
					  'March',
					  'April',
					  'May',
					  'June',
					  'July',
					  'August',
					  'September',
					  'October',
					  'November',
					  'December'
					  ];
		var monthName = months[month];
		var day=date.getDate();
		if (day<10) {
			fillDate='0' + day;
		} else {
			fillDate=day;	
		}
		var fillDate = (day<10) ? '0' + day : day;
		var weekday=date.getDay();
		var weekdays = ['Sunday',
						'Monday',
						'Tuesday',
						'Wednesday',
						'Thursday',
						'Friday',
						'Saturday'
						];
		var dayName=weekdays[weekday];
		string = string.replace(/%Y/g,year);
		string = string.replace(/%y/g,year.toString().slice(-2));
		string = string.replace(/%M/g,monthName);
		string = string.replace(/%m/g,monthName.slice(0,3));
		string = string.replace(/%N/g,fillMonth);
		string = string.replace(/%n/g,realMonth);
		string = string.replace(/%W/g,dayName);
		string = string.replace(/%w/g,dayName.slice(0,3));
		string = string.replace(/%D/g,fillDate);
		string = string.replace(/%d/g,day);
		return string;
	}