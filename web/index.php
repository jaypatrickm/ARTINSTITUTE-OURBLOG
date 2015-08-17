<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Our Blog</title>
<!--<link href="css/home.css" rel="stylesheet" type="text/css">-->
<link href="css/global.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	jQuery.noConflict();
	(function($) {
//Hide Global Nav
	$('#globalNav').hide();
	$('#main').mouseleave(function() {
		$('#globalNav').slideDown('slow');	
	}).mouseenter(function() {
		$('#globalNav').fadeOut('slow');
	});
	})(jQuery);
});
</script>
<!--<script type="text/javascript" src="js/mootools-core-1.4.5-full-compat.js"></script>-->
<script type="text/javascript" src="js/mootools-smoothscroll.js"></script>
<script type="text/javascript">
//Smooth Scroll
	window.addEvent('domready',function() { new SmoothScroll({ duration: 1800 }); });
</script>


</head>

<body onload="window.scrollTo(1648,2980)">
<div id="container">
	<div id="globalNav">
    	<ul>
        	<li id="globalOur"><a href="#main" title="globalhome" name="globalhome" id="globalhome"><h3>Our Blog</h3></a></li>
            <li id="globalToday"><a href="today.php"><h3>Today</h3></a></li>
            <li id="globalCalendar" class="globalShift"><a href="calendar.php"><h3>Calendar</h3></a></li>
            <li id="globalAbout" class="globalShift"><a href="#about" title="globalabout" name="globalabout" id="globalabout"><h3>About</h3></a></li>
            <li id="globalSign" class="globalShift"><a href="signup.php"><h3>Sign In</h3></a></li> 
        </ul>
    </div>
	<div id="about">	
    	<img src="images/abouttitle.png" alt="abouttitle" border="0" id="abouttitle" />
        <img src="images/aboutwelcome.png" alt="aboutwelcome" border="0" id="aboutwelcome" />
        <div id="accordion">
        	<h3 id="level1"/><img src="images/plus.gif" alt="plus" border="0" class="plus" id="plus1" ><img src="images/minus.gif" alt="minus" border="0" id="minus1" class="minus" >What is Our Blog?</h3>
            <p id="plus1p">Our blog is a new way to express your creative mind. It is designed to test your creative ability, by giving you well-thought blog topics for you to tackle each day. We try to use unconventional means of blogging in order to really make you think outside of the box. We then catalog all of your accomplishments and display it in a more explorative fashion. The main idea is to inspire and create, so we also catalog all the entries of particular days so that you can view all the different kinds of solutions! </p>
            <h3 id="level2"><img src="images/plus.gif" alt="plus" border="0" class="plus" id="plus2"/><img src="images/minus.gif" alt="minus" border="0" id="minus2" class="minus" >A Few Guidelines</h3>
            <p id="plus2p">Our blog is a new way to express your creative mind. It is designed to test your creative ability, by giving you well-thought blog topics for you to tackle each day. We try to use unconventional means of blogging in order to really make you think outside of the box. We then catalog all of your accomplishments and display it in a more explorative fashion. The main idea is to inspire and create, so we also catalog all the entries of particular days so that you can view all the different kinds of solutions! </p>
            <h3 id="level3"><img src="images/plus.gif" alt="plus" border="0" class="plus" id="plus3"/><img src="images/minus.gif" alt="minus" border="0" id="minus3" class="minus" >Getting Started</h3>
            <p id="plus3p">Our blog is a new way to express your creative mind. It is designed to test your creative ability, by giving you well-thought blog topics for you to tackle each day. We try to use unconventional means of blogging in order to really make you think outside of the box. We then catalog all of your accomplishments and display it in a more explorative fashion. The main idea is to inspire and create, so we also catalog all the entries of particular days so that you can view all the different kinds of solutions! </p>
            <h3 id="level4"><img src="images/plus.gif" alt="plus" border="0" class="plus" id="plus4"/><img src="images/minus.gif" alt="minus" border="0" id="minus4" class="minus" >Support</h3>
            <p id="plus4p">Our blog is a new way to express your creative mind. It is designed to test your creative ability, by giving you well-thought blog topics for you to tackle each day. We try to use unconventional means of blogging in order to really make you think outside of the box. We then catalog all of your accomplishments and display it in a more explorative fashion. The main idea is to inspire and create, so we also catalog all the entries of particular days so that you can view all the different kinds of solutions! </p>
        </div>
    </div>
    <script type="text/javascript"> new SoftDivScroll('about');</script>
	<div id="meight" class="monthModule">
      <div class="monthwrapper">
          <span class="ltarrowgroup">
            <a href="#mseven" title="msevenlink" name="msevenlink" id="msevenlink">
                <img src="images/ltarrow.png" alt="ltarrow" border="0" class="ltarrow" height="23" width="33"/>
                <img src="images/ltarrow2.png" alt="ltarrowdown" border="0" class="ltarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/8.png" alt="button" border="0" class="circ"/>
          <span class="rtarrowgroup">
            <a href="#mnine" title="mninelink" name="mninelink" id="mninelink">
                <img src="images/rtarrow.png" alt="rtarrow" border="0" class="rtarrow" height="23" width="33"/>
                <img src="images/rtarrow2.png" alt="rtarrowdown" border="0" class="rtarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/challenge.jpg" alt="challenge" border="0" class="challenge"/>
      </div>
    </div>
    <div id="mnine" class="monthModule">
      <div class="monthwrapper">
          <span class="ltarrowgroup">
            <a href="#meight" title="meightlink" name="meightlink" id="meightlink">
                <img src="images/ltarrow.png" alt="ltarrow" border="0" class="ltarrow" height="23" width="33"/>
                <img src="images/ltarrow2.png" alt="ltarrowdown" border="0" class="ltarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/9.png" alt="button" border="0" class="circ"/>
          <span class="rtarrowgroup">
            <a href="#mten" title="mtenlink" name="mtenlink" id="mtenlink">
                <img src="images/rtarrow.png" alt="rtarrow" border="0" class="rtarrow" height="23" width="33"/>
                <img src="images/rtarrow2.png" alt="rtarrowdown" border="0" class="rtarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/challenge.jpg" alt="challenge" border="0" class="challenge"/>
      </div>
    </div>
    <div id="mseven" class="monthModule">
      <div class="monthwrapper">
          <span class="ltarrowgroup">
            <a href="#msix" title="msixlink" name="msixlink" id="msixlink">
                <img src="images/ltarrow.png" alt="ltarrow" border="0" class="ltarrow" height="23" width="33"/>
                <img src="images/ltarrow2.png" alt="ltarrowdown" border="0" class="ltarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/7.png" alt="button" border="0" class="circ"/>
          <span class="rtarrowgroup">
            <a href="#meight" title="meightlink" name="meightlink" id="meightlink">
                <img src="images/rtarrow.png" alt="rtarrow" border="0" class="rtarrow" height="23" width="33"/>
                <img src="images/rtarrow2.png" alt="rtarrowdown" border="0" class="rtarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/challenge.jpg" alt="challenge" border="0" class="challenge"/>
      </div>
    </div>
    <div id="msix" class="monthModule">
      <div class="monthwrapper">
          <span class="ltarrowgroup">
            <a href="#mfive" title="mfivelink" name="mfivelink" id="mfivelink">
                <img src="images/ltarrow.png" alt="ltarrow" border="0" class="ltarrow" height="23" width="33"/>
                <img src="images/ltarrow2.png" alt="ltarrowdown" border="0" class="ltarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/6.png" alt="button" border="0" class="circ"/>
          <span class="rtarrowgroup">
            <a href="#mseven" title="msevenlink" name="msevenlink" id="msevenlink">
                <img src="images/rtarrow.png" alt="rtarrow" border="0" class="rtarrow" height="23" width="33"/>
                <img src="images/rtarrow2.png" alt="rtarrowdown" border="0" class="rtarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/challenge.jpg" alt="challenge" border="0" class="challenge"/>
      </div>
    </div>
    <div id="mten" class="monthModule">
      <div class="monthwrapper">
          <span class="ltarrowgroup">
            <a href="#mnine" title="mninelink" name="mninelink" id="mninelink">
                <img src="images/ltarrow.png" alt="ltarrow" border="0" class="ltarrow" height="23" width="33"/>
                <img src="images/ltarrow2.png" alt="ltarrowdown" border="0" class="ltarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/10.png" alt="button" border="0" class="circ" id="mlastfix"/>
          <img src="images/challenge.jpg" alt="challenge" border="0" class="challenge"/>
      </div>
    </div>
    <div id="main">
    	<div id="mainwrapper">
            <img src="images/welcome.png" alt="welcome" border="0" id="welcome" />
            <img src="images/logo.jpg" alt="logo" border="0" id="logo"/>
            <a href="#mone" title="monelink" name="monelink" id="monelink"><img src="images/marchcalendar.png" alt="calendar" border="0" id="marchcalendar" /></a>
            <img src="images/firsttime.png" alt="firstblurb" border="0" id="firstblurb" />
            <div id="nav">
                <ul>
                    <li id="link1">
                        <a href="today.php">
                            <img src="images/navtoday.png" alt="todaylink" border="0" id="todaylink"/>
                            <img src="images/navtoday2.png" alt="todaylink2" border="0" id="todaylink2"/>
                        </a>
                    </li>
                    <li id="link2">
                        <a href="calendar.php">
                            <img src="images/navcalendar.png" alt="calendarlink" border="0" id="calendarlink"/>
                            <img src="images/navcalendar2.png" alt="calendarlink2" border="0" id="calendarlink2" />
                        </a>
                    </li>
                    <li id="link3">
                        <a href="#about" title="navabout" name="navabout" id="navabout">
                            <img src="images/navabout.png" alt="aboutlink" border="0" id="aboutlink"/>
                            <img src="images/navabout2.png" alt="aboutlink2" border="0" id="aboutlink2" />
                        </a>
                    </li>
                </ul>
            </div>
            <img src="images/creativeblurb.png" alt="welcome" border="0" id="creativeblurb"/>
            <img src="images/email.png" alt="emailimg" border="0" id="emailimg" />
            <img src="images/password.png" alt="passwordimg" border="0" id="passwordimg"/>
            <form action="signup.php" method="post" name="mainlog" id="mainlog">
            <input name="email" type="text" value="" size="30" maxlength="50">
            <input name="password" type="password" value="" size="30" maxlength="20">
            <input name="logsubmit" value="Sign in/Sign up" type="submit">
            </form>
        </div>
    </div>
    <div id="mfive" class="monthModule">
      <div class="monthwrapper">
          <span class="ltarrowgroup">
            <a href="#mfour" title="mfourlink" name="mfourlink" id="mfourlink">
                <img src="images/ltarrow.png" alt="ltarrow" border="0" class="ltarrow" height="23" width="33"/>
                <img src="images/ltarrow2.png" alt="ltarrowdown" border="0" class="ltarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/5.png" alt="button" border="0" class="circ"/>
          <span class="rtarrowgroup">
            <a href="#msix" title="msixlink" name="msixlink" id="msixlink">
                <img src="images/rtarrow.png" alt="rtarrow" border="0" class="rtarrow" height="23" width="33"/>
                <img src="images/rtarrow2.png" alt="rtarrowdown" border="0" class="rtarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/challenge.jpg" alt="challenge" border="0" class="challenge"/>
      </div>
    </div>
    <div id="mone" class="monthModule">
      <div class="monthwrapper">
          <img src="images/1.png" alt="button" border="0" class="circ"/>
          <span class="rtarrowgroup">
            <a href="#mtwo" title="mtwolink" name="mtwolink" id="mtwolink">
                <img src="images/rtarrow.png" alt="rtarrow" border="0" class="rtarrow" height="23" width="33"/>
                <img src="images/rtarrow2.png" alt="rtarrowdown" border="0" class="rtarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/challenge.jpg" alt="challenge" border="0" class="challenge"/>
      </div>
    </div>
    <div id="mthree" class="monthModule">
      <div class="monthwrapper">
          <span class="ltarrowgroup">
            <a href="#mtwo" title="mtwolink" name="mtwolink" id="mtwolink">
                <img src="images/ltarrow.png" alt="ltarrow" border="0" class="ltarrow" height="23" width="33"/>
                <img src="images/ltarrow2.png" alt="ltarrowdown" border="0" class="ltarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/3.png" alt="button" border="0" class="circ"/>
          <span class="rtarrowgroup">
            <a href="#mfour" title="mfourlink" name="mfourlink" id="mfourlink">
                <img src="images/rtarrow.png" alt="rtarrow" border="0" class="rtarrow" height="23" width="33"/>
                <img src="images/rtarrow2.png" alt="rtarrowdown" border="0" class="rtarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/challenge.jpg" alt="challenge" border="0" class="challenge"/>
      </div>
    </div>
    <div id="mtwo" class="monthModule">
      <div class="monthwrapper">
          <span class="ltarrowgroup">
            <a href="#mone" title="monelink" name="monelink" id="monelink">
                <img src="images/ltarrow.png" alt="ltarrow" border="0" class="ltarrow" height="23" width="33"/>
                <img src="images/ltarrow2.png" alt="ltarrowdown" border="0" class="ltarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/2.png" alt="button" border="0" class="circ"/>
          <span class="rtarrowgroup">
            <a href="#mthree" title="mthreelink" name="mthreelink" id="mthreelink">
                <img src="images/rtarrow.png" alt="rtarrow" border="0" class="rtarrow" height="23" width="33"/>
                <img src="images/rtarrow2.png" alt="rtarrowdown" border="0" class="rtarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/challenge.jpg" alt="challenge" border="0" class="challenge"/>
      </div>
    </div>
    <div id="mfour" class="monthModule">
      <div class="monthwrapper">
          <span class="ltarrowgroup">
            <a href="#mthree" title="mthreelink" name="mthreelink" id="mthreelink">
                <img src="images/ltarrow.png" alt="ltarrow" border="0" class="ltarrow" height="23" width="33"/>
                <img src="images/ltarrow2.png" alt="ltarrowdown" border="0" class="ltarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/4.png" alt="button" border="0" class="circ"/>
          <span class="rtarrowgroup">
            <a href="#mfive" title="mfivelink" name="mfivelink" id="mfivelink">
                <img src="images/rtarrow.png" alt="rtarrow" border="0" class="rtarrow" height="23" width="33"/>
                <img src="images/rtarrow2.png" alt="rtarrowdown" border="0" class="rtarrow2" height="23" width="33" />
            </a>
          </span>
          <img src="images/challenge.jpg" alt="challenge" border="0" class="challenge"/>
      </div>
    </div>
    
    

</div>
</body>
</html>