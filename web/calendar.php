<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Calendar</title>
<link href="css/global.css" rel="stylesheet" type="text/css">
<link href="css/calendar.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	jQuery.noConflict();
	(function($) {
//Hover
	$('#calendarchallenge').hide();
	$('.calendarhover').hover(
		function() {
			$('#calendarchallenge').fadeIn();	
		},
		function(){
			$('#calendarchallenge').fadeOut();
		});
	
	})(jQuery);
});
</script>


</head>

<body>
<div id="calendarwrapper">
	<div id="globalNav">
    	<ul>
        	<li id="globalOur"><a href="index.php" title="globalhome" name="globalhome" id="globalhome"><h3>Our Blog</h3></a></li>
            <li id="globalToday"><a href="today.php"><h3>Today</h3></a></li>
            <li id="globalCalendar" class="globalShift"><a href="calendar.php"><h3>Calendar</h3></a></li>
            <li id="globalAbout" class="globalShift"><a href="about.php" title="globalabout" name="globalabout" id="globalabout"><h3>About</h3></a></li>
            <li id="globalSign" class="globalShift"><a href="signup.php"><h3>Sign In</h3></a></li> 
        </ul>
    </div>
	<div id="calendar">	
    	<img src="images/calendarpage.jpg" alt="calendar" border="0" id="calendarpage" />
        <span class="calendarhover">
        <a href="today.php"><img src="images/calendarone.png" alt="one" border="0" id="calendarone" /></a>
        </span>
        <h1 id="calendarchallenge">Photos in Only Black and White</h1>
    </div>
	
</div>
</body>
</html>