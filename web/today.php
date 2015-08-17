<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Today</title>
<link href="css/global.css" rel="stylesheet" type="text/css">
<link href="css/today.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<!--<script type="text/javascript" src="js/mootools-core-1.4.5-full-compat.js"></script>-->
<!--<script type="text/javascript" src="js/mootools-smoothscroll.js"></script>
<script type="text/javascript">
//Smooth Scroll
	window.addEvent('domready',function() { new SmoothScroll({ duration: 1800 }); });
	
</script>
-->

</head>

<body>
<div id="todaywrapper">
	<div id="globalNav">
    	<ul>
        	<li id="globalOur"><a href="index.php" title="globalhome" name="globalhome" id="globalhome"><h3>Our Blog</h3></a></li>
            <li id="globalToday"><a href="today.php"><h3>Today</h3></a></li>
            <li id="globalCalendar" class="globalShift"><a href="calendar.php"><h3>Calendar</h3></a></li>
            <li id="globalAbout" class="globalShift"><a href="about.php" title="globalabout" name="globalabout" id="globalabout"><h3>About</h3></a></li>
            <li id="globalSign" class="globalShift"><a href="signup.php"><h3>Sign In</h3></a></li> 
        </ul>
    </div>
	<div id="today">	
    	<img src="images/todaytitle.png" alt="todaytitle" border="0" id="todaytitle" />
        <h1 id="todaydate">1 March 2012
			<script type="text/javascript">
				jQuery.noConflict();
				(function($) {
				var today = new Date();
				var message = dateString(today, 'Today is %W, %M %d, %Y');
				document.write(message)
				});
            </script>
        </h1>
      	<img src="images/challengetitle.png" alt="challengetitle" border="0" id="challengetitle" />
        <h3 id="challengename"> Photos in Only Black and White </h3>
        <img src="images/todaychallenge.jpg" alt="todaychallenge" border="0" class="todaychallenge" />
        <img src="images/todaychallenge.jpg" alt="todaychallenge2" border="0" class="todaychallenge" />
        <img src="images/todaychallenge.jpg" alt="todaychallenge3" border="0" class="todaychallenge" />
        <div id="pagination">
        
        <p id="pagbuttons"> <a href="#">Next</a> | <a href="#">3</a> , <a href="#">4</a> </p>
        
        </div>
        
    </div>
    <script type="text/javascript"> new SoftDivScroll('about');</script>
	
</div>
</body>
</html>