<?php
	if (isset($_POST["submit"])) {
		$email = $_POST['email'];
		$human = intval($_POST['human']);
		$from = $email; 
		$to = 'info@splitico.io'; 
		$subject = 'Newsletter Subscriber';
		
		$body = "New subscriber: $email";
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		// If there are no errors, send the email
		if (!$errEmail && !$errHuman) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Thank You!</div>';
			} else {
				$result='<div class="alert alert-danger">Sorry there was an error.Please try again later</div>';
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Spl/t is a cryptocurrency index fund which finds additional growth through a transparent Ethereum lottery.">
	<meta name="keywords" content="cryptocurrency, index fund, ether, ethereum, lottery, ethereum lottery, ICO">
  	<meta property="og:site_name" content="Spl/t">
  	<meta property="og:locale" content="en_US">
  	<meta property="og:type" content="website">

    <title>SPL/T - Ethereum lottery platform that contributes to the growth of a cryptocurrency index fund</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/custom.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	
	
	<link id="t-colors" href="color/default.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="js/charts.js"></script>

</head>




<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
    <nav class="navbar navbar-custom" role="navigation">
        <div class="container navigation">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">SPL/T</a>
            </div>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				  <li><a href="#about">About</a></li>
				<li><a href="#roadmap">Roadmap</a></li>
				<li><a href="#ico">Ico Details</a> </li>
				<li><a href="#structure">ICO Structure</a> </li>
				<li><a href="#team">Executive Team</a> </li>
				<li><a href="#faq">FAQ</a></li>
				<li><a href="#newsletter">Subscribe</a> </li>
			  </ul>
            </div>
        </div>
    </nav>
	
    <section id="intro" style="padding-top:170px; background-image: url('img/blue.jpg'); background-size:cover; height:800px">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<h1 class="changeFont white" style="font-size:4em">SPL/T</h1>
							<p class="blue">A transparent Ethereum lottery platform that contributes to the growth of a cryptocurrency index fund.</p>
							<h3 class="changeFont white">ICO LAUNCH</h3>
							<div id="clockdiv">
								<div>
									<span class="days"></span>
									<div class="smalltext blue">DAYS</div>
								</div>
								<div>
									<span class="hours"></span>
									<div class="smalltext blue">HOURS</div>
								</div>
								<div>
									<span class="minutes"></span>
									<div class="smalltext blue">MINUTES</div>
								</div>
								<div>
									<span class="seconds"></span>
									<div class="smalltext blue">SECONDS</div>
								</div>
							</div>
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>

	<section>
		<div class="container padded" >
			<div class="row text-center" id="about">
				<div class="col-lg-8 col-lg-offset-2">
					<h3 class="changeFont darkblue">ABOUT</h3>
					<p>
						<!--
						
						
						ENTER
						TEXT
						IN
						THIS
						SPACE  


						-->
					</p>
					<a href="assets/whitepaper.pdf" target="_blank"><button class="btn btn-lg btn-primary">Download White Paper</button></a>
				</div>
			</div>
		</div>
	</section>

	<div class="divider-short"></div>
	
	<section>
		<div class="container padded" >
			<div class="row text-center heading" id="roadmap">
				<h3 class="changeFont darkblue">ROADMAP</h3>
			</div>
			<div class="col-lg-10 col-lg-offset-1">
				<img src="img/timeline.png" alt="timeline" style="width:100%; height:auto" />
			</div>
		</div>
	</section>

	<section style="background-image:url('img/x.jpg'); background-size:cover; height:800px">
		<div class="container padded" >
			<div class="row text-center heading" id="ico">
				<h3 class="changeFont white">ICO DETAILS</h3>
				<p class="blue">
					<!--
					
					
					ENTER
					TEXT
					IN
					THIS
					SPACE  


					-->
				</p>
			</div>
		</div>
	</section>
	
    <section id="works" class="home-section" >
		<div class="container">
			<div class="row text-center heading" id="structure">
				<h3 class="changeFont darkblue">ICO STRUCTURE</h3>
			</div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div id="piechart" style="width: 900px; height: 500px;" class="wow fadeInLeft" data-wow-delay="0.2s"></div>
					<div id="piechart2" style="width: 900px; height: 500px;" class="wow fadeInLeft" data-wow-delay="0.2s"></div>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-8">
					<h4 class="changeFont">TOKEN SALE BONUSES</h3>
					<img src="img/bonuses.png" alt="bonuses" style="width:100%; height:auto" />
				</div>
			</div>
		</div>
	</section>

	<section id="team" class="padded">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h3 class="changeFont darkblue">EXECUTIVE TEAM</h3>
					<p>Bringing an idea into being is no small task. Our team has a diverse background of entrepreneurial and startup ventures. We know the difficulty of the task ahead and we thrive on it.
						From building AI natural language processing, to securing banking transactions, to training people to survive a zombie apocalypse, we have been able to turn exciting concepts into 
						reality through collaboration. We are united by our mission to create a useful and innovative product in one of the most exciting industries. </p>
				</div>
				<div class="col-lg-4 col-sm-6 text-center">
					<div class="team-leader wow fadeInDown delay-03s"> 
						<div class="team-leader-shadow"></div>
							<img src="img/vadim.jpg" alt="Vadim">
							<ul>
								<li><a href="https://www.linkedin.com/in/vadworks/" target="_blank" class="fa-linkedin"></a></li>
							</ul>
					</div>
					<h4 class="wow fadeInDown delay-03s">Vadim Mansourov</h4>
					<span class="wow fadeInDown delay-03s">Title</span><br/>
					<button class="btn btn-primary fadeInDown delay-03s" id="bisieButton">More Info</button>
					<script>
						$('#bisieButton').click(function () {
							
							$('#bisieDiv').toggle();
						});
					</script>
					<div id="bisieDiv" style="display:none">
						<p>Vadim is a self-taught carnie/movie background star who is curious by nature. Solutions architect with over 15 years experience in financial sector.
						Was an “early adopter” of the internet, starting his career in the murky era of “warez sites” :) Learned the industry from bottom up, starting as a network administrator, learning the wizardry of database administration and eventually moving on to full stack development, architecture and design.
						Passionate and eternally curious about security, learning new tech and generally pushing the limits and dreaming outside the box. Enjoys the fast pace of startups, is on the board of multiple organisations in the technical advisory role.
						Tinkers with cars, including a 1986 vw jetta that he built up from parts.</p>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 text-center">
					<div class="team-leader wow fadeInDown delay-06s"> 
						<div class="team-leader-shadow"></div>
						<img src="img/ant.jpg" alt="Antonio">
						<ul>
							<li><a href="#" class="fa-linkedin"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-09s">Antonio Sou</h3>
					<span class="wow fadeInDown delay-09s">Title</span><br/>
					<button class="btn btn-primary fadeInDown delay-03s" id="antButton">More Info</button>
					<script>
						$('#antButton').click(function () {
							
							$('#antDiv').toggle();
						});
					</script>
					<div id="antDiv" style="display:none">
						<p>With a degree in Electrical and Electronicss Engineering from the University of Toronto as a foundation, Antonio has been continually 
							building things, including companies. As the CTO of Massively Antonio oversaw the creation of a mutli-million dollar company creating natural language processing AI. 
							Antonio is a talented full stack architect who’s interest and work on AI keeps him looking over his shoulder for the terminator sent back to stop him.   </p>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 text-center">
					<div class="team-leader wow fadeInDown delay-09s"> 
						<div class="team-leader-shadow"></div>
						<img src="img/mike.jpg" alt="Mike">
						<ul>
							<li><a href="#" class="fa-linkedin"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-09s">Michael Somerville</h3>
					<span class="wow fadeInDown delay-09s">Co-Founder</span><br/>
					<button class="btn btn-primary fadeInDown delay-03s" id="mikeButton">More Info</button>
					<script>
						$('#mikeButton').click(function () {
							$('#mikeDiv').toggle();
						});
					</script>
					<div id="mikeDiv" style="display:none">
						<p>Michael Somerville is a co-founder of SPL/T, a transparent Ethereum lottery platform which contributes to the growth of a cryptocurrency index 
							fund. Prior to founding SPL/T he has experience working for a number of startups in managerial positions. Novel and revolutionary challenges always draw him in, so to work in
							the cryptocurrency space was a natural fit. This keen interest has led him to be an early investor in various ICOs. Michael holds a bachelor of Communications from Sir Wilfrid 
							Laurier University.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-lg-offset-2 col-sm-6 col-sm-offset-2 text-center padded">
					<div class="team-leader  wow fadeInDown delay-06s"> 
						<div class="team-leader-shadow"></div>
						<img src="img/milan.jpg" alt="Milan">
						<ul>
							<li><a href="https://www.linkedin.com/in/milan-stanojevic-125b0713b/" target="blank" class="fa-linkedin"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Milan Stanojevic</h3>
					<span class="wow fadeInDown delay-06s">Media Director</span><br/>
					<button class="btn btn-primary fadeInDown delay-03s" id="milanButton">More Info</button>
					<script>
						$('#milanButton').click(function () {
							$('#milanDiv').toggle();
						});
					</script>
					<div id="milanDiv" style="display:none">
						<p>Milan Stanojevic is responsible for SPL/T’s media design. More specifically, he develops and maintains the front-end of the company website. 
							In addition, Milan shoots all of SPL/T’s marketing photographs and videos. He graduated from York University’s Concurrent Education Program with a bachelor’s degree in 
							Education and History. In his spare time, Milan plays video games and homebrews beer.</p>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 text-center padded">	
					<div class="team-leader  wow fadeInDown delay-06s"> 
					<div class="team-leader-shadow"></div>
						<img src="img/eric.jpg" alt="Eric">
						<ul>
							<li><a href="https://www.linkedin.com/in/eric-somerville-449383100/" target="_blank" class="fa-linkedin"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-09s">Eric Somerville</h3>
					<span class="wow fadeInDown delay-09s">Co-Founder</span><br/>
					<button class="btn btn-primary fadeInDown delay-03s" id="ericButton">More Info</button>
					<script>
						$('#ericButton').click(function () {
							$('#ericDiv').toggle();
						});
					</script>
					<div id="ericDiv" style="display:none">
						<p>Eric is a serial entrepreneur with a range of start up experience from skilled gaming to home services to corporate training. By adopting 
							unconventional PR / marketing strategy Eric has been able to garner international publicity from hundreds of publications and outlets for his ventures for free. Eric holds an 
							honours degree in Media, Information and Technoculture from the University of Western Ontario. </p>
					</div>
				</div>
			</div>
				
			</div>
		
	</section>

	<section style="background-image: url('img/x.jpg'); background-size:cover; height:800px">
		
		<div class="container padded">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h3 class="white changeFont">Frequently Asked Questions</h3>
				</div>
			</div>
		</div>
	</section>

	<section id="callaction" class="home-section paddingtop-40">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="callaction">
							<div class="row">
								<div class="col-md-12" id="newsletter">
									<div class="wow fadeInUp" data-wow-delay="0.1s">
										<div class="cta-text">
											<h3 style="text-align:center" class="changeFont darkblue">SUBSCRIBE TO OUR NEWSLETTER</h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-md-offset-3">
									<form  role="form" method="post" action="#">
										<input class="form-control" type="email" id="email" name="email" placeholder="Email address" required />
										<input type="submit" id="sumbit" name="submit" class="btn btn-skin btn-lg" style="margin:0 auto; display:inherit; margin-top:25px"/>
									</form>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
	</section>	

	<footer>
	

		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					</ul>
				
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright - Spl/t. All rights reserved.</p>
					</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
		function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
</script>
    
</body>

</html>
