<?php
/*
* Ajax form submit
*/

# request sent using HTTP_X_REQUESTED_WITH
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
	if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['message'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];

		$to = "akiko.truebostonu@gmail.com";
		$subject = "True BU Email from:  $name Email: $email";
		$message = $_POST['message'];
		$from = $email;
		$headers = "From:" . $name;
		mail($to,$subject,$message,$headers);
		echo 'Message sent!';
	}
	else {
		echo 'All Fields are required';
	}
	return;
}

/**
 * email function
 *
 * @return bool | void
 **/
function email($to, $from_mail, $from_name, $subject, $message){
	$header = array();
	$header[] = "MIME-Version: 1.0";
	$header[] = "From: {$from_name}<{$from_mail}>";
	/* Set message content type HTML*/
	$header[] = "Content-type:text/html; charset=iso-8859-1";
	$header[] = "Content-Transfer-Encoding: 7bit";
	if( mail($to, $subject, $message, implode("\r\n", $header)) ) return true;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>True BU 2015</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/png" href="images/favicon.png" />
</head>

<body>
<div class="header">
	<div class="container header-nav">
		<nav class="navbar navbar-inverse" role="navigation" id="togglenav">
        	<div class="navbar-header">
	            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	            </button>
	            <a href="#" class="navbar-brand scroll-top" id="homelink"><img src="images/logo_handdrawn.png" alt="Home" width=126 height=54></a>
        	</div>
        	<!--/.navbar-header-->
	        <div id="main-nav" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
		            <li><a href="#" class="scroll-link" data-id="slate">Meet the Slate</a></li>
					<li><a href="#" class="scroll-link" data-id="abouttrubu">Our Platform</a></li>
<!-- 					<li><a href="#" class="scroll-link" data-id="videos">Videos</a></li>
 -->					<li><a href="#" class="scroll-link" data-id="endorsements">Endorsements</a></li>
					<li><a href="#" class="scroll-link" data-id="contactus">Join the Team!</a></li>
	            </ul>
	        </div>
	        <!--/.navbar-collapse-->
	    </nav>
	    <!--/.navbar-->
	</div>
	<!--/.container-->
</div>
<!--/.header-->

<div class="page-section intro">
	<div class="container">
		<h1>True BU</h1></br>
		<h3>Community. Empowerment. Vision.</h3>
	</div>
	<!--/.container-->
</div>
<!--/.page-section-->

<div id="slate" class="page-section">
	<div class="container">
		<h2>Meet the Slate</h2>
		  <div class="row">
	      <div class="col-md-3">
	      	<a data-toggle="modal" data-target="#andrewModal">
					  <img src="images/andrew_head.png" alt="Andrew Cho"/>
					</a>
					<div class="slate-text">
	 					Andrew Cho<br/>
	 					President<br/>
	 					CAS '16<br/>
	 				</div>
	      </div>

	      <!-- Andrew Modal -->
				<div class="modal fade" id="andrewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Andrew Cho // President</h4>
				      </div>
				      <div class="modal-body">
				      	<div class="row">
				      		<div class="col-md-6">
					  				<div><img src="images/andrew_full.png" alt="Andrew Cho"/></div>
					  				</div>
						  			<div class="col-md-6 modal-text">
						  				<strong>Favorite Song:</strong><br/>
						  				You to Belive In by Paradise Fears<br/><br/>
						  				<strong>Favorite Spot on Campus:</strong><br/>
						  				BU Central. Often neglected during the lunch rush in GSU, always a nice place to restore focus.<br/><br/>
						  				<strong>Freshman Memory:</strong><br/>
						  				Late Nite talks in Warren.
						  			</div>
						  		</div>
						  		<div>
						  			<br/>During my three years in RHA leadership along with my involvement in Christian fellowships, cultural associations, and advocacy groups, I've internalized the RHA motto "home-grown community." I'm running for Student Body President because I desire for your BU experience to be marked by a similarly vibrant sense of community.
										<br/><br/>Living in Warren (for two years by choice!), I had the opportunity as President of my Residence Hall Association to tap into the power and beauty of a student-driven, administration-supported project. The Warren Patio Project transformed a formerly empty concrete box into a unique gathering space, replete with plants and benches.
										<br/><br/>My vision for bringing people together led me to partnerships with the environmental community on campus, the Community Service Center, Res Life and Facilities.
										<br/><br/>However, I know firsthand the obstacles to engaging in community- but my message is this: you are not alone. Together, we can foster communities at BU where students are valued for their passions over their ability. This is what True BU means to me.
										<br/><br/>Vote for what is TRUE to your university, your student government, your voice.
						  		</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>

	      <div class="col-md-3">
	      	<a data-toggle="modal" data-target="#melModal">
					  <img src="images/mel_head.png" alt="Mel Finau"/>
					</a>
					<div class="slate-text">
	 					Mel Finau<br/>
	 					Vice President<br/>
	 					CAS '17<br/>
	 				</div>
	      </div>

	      <!-- Mel Modal -->
				<div class="modal fade" id="melModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Mel Finau // Vice President</h4>
				      </div>
				      <div class="modal-body">
				      	<div class="row">
				      		<div class="col-md-6">
					  				<div><img src="images/mel_full.png" alt="Mel Finau"/></div>
					  				</div>
						  			<div class="col-md-6 modal-text">
						  				<strong>Favorite Song:</strong><br/>
						  				An American in Paris by George Gershwin <br/><br/>
						  				<strong>Favorite Spot on Campus:</strong><br/>
											Though I am not in SMG, my favorite spot on campus is SMG Pardee Library. It has great natural lighting, and if you snag one of the desks in the corner, its a great place to take a study break nap.<br/><br/>
											<strong>Freshman Memory:</strong><br/>
											Receiving a mini- Christmas Tree from Whole Foods during Student Food Rescue. I loved watching everyone's reaction as I carried it down Comm Ave and brought it to all my classes!
										</div>
						  		</div>
						  		<div>
										<br/>I am a planner, a listmaker, type A to the max. As a Biochemistry Molecular Biology major and Kilachand Honors student, I have to approach every week with a plan, making time for research, CSC Student Food Runs, and Senator duties.  I'm running for Executive Vice President because I am committed to following through with a plan for Student Government to support the student body.
										<br/><br/>This approach has taught me the importance of making the time and effort for engaging with my community.If you live in Danielsen, you might have met me while I was collecting signatures for a petition to get a water bottle refill station in our building! My position as Danielsen RHA Senator has empowered me to dive into quality of life issues at a grassroots level.
										<br/><br/>I recognize the many pressures we face as students, and I find it crucial that Student Government take the time and effort to engage the BU community, delivering on areas like mental health support. That is what True BU means to me.
										<br/><br/>Vote for what is TRUE to your University, your Student Government, your voice.
						  		</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>

	      <div class="col-md-3">
	      	<a data-toggle="modal" data-target="#marwaModal">
					  <img src="images/marwa_head.png" alt="Marwa Sayed"/>
					</a>
					<div class="slate-text" id="marwa">
	 					Marwa Sayed<br/>
	 					VP of Internal Affairs<br/>
	 					CAS '18<br/>
	 				</div>
	      </div>

	      <!-- Marwa Modal -->
				<div class="modal fade" id="marwaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Marwa Sayed // VP of Internal Affairs</h4>
				      </div>
				      <div class="modal-body">
				      	<div class="row">
				      		<div class="col-md-6">
					  				<div><img src="images/marwa_full.png" alt="Marwa Sayed"/></div>
					  				</div>
						  			<div class="col-md-6 modal-text">
						  				<strong>Favorite Song:</strong><br/>
						  				Q.U.E.E.N. by Janelle Monae <br/><br/>
						  				<strong>Favorite Spot on Campus:</strong><br/>
											Dean's study lounge <br/><br/>
											<strong>Freshman Memory:</strong><br/>
											CGSA Birthday party!
										</div>
						  		</div>
						  		<div>
						  			<br/>I have never been one to sit still while the world passes me by. Whether it is protesting against the Assad regime or participating in a die-in with Black Lives Matter Boston, I am always conscious and aware of the factors affecting my community. I am running for VP of Internal Affairs because I want to bring my experience with social justice action to BU through Student Government.
										<br/><br/>Witnessing BU students take hold of the resources of the university has taught me what it means to truly seize the day.  With the Student Labor Action Project, I've been able to lend my support and gratitude to maintenance workers as they negotiated a new contract. As a member of Kilachand's Resident Hall Association, I have contributed to the effort and sacrifice students put into making on-campus living a fun and inclusive environment.
										<br/><br/>I believe that the values that govern Student Government should parallel the incredible student initiatives that exist at BU. That is what True BU means to me.
										<br/><br/>Vote for what is TRUE to your university, your student government, your voice.
						  		</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>

	      <div class="col-md-3">
	      	<a data-toggle="modal" data-target="#kimModal">
					  <img src="images/kim_head.png" alt="Kimberly Barzola"/>
					</a>
					<div class="slate-text">
	 					Kimberly Barzola<br/>
	 					VP of Finance<br/>
	 					CAS '16<br/>
	 				</div>
	      </div>

	      <!-- Kim Modal -->
				<div class="modal fade" id="kimModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Kimberly Barzola // VP of Finance</h4>
				      </div>
				      <div class="modal-body">
				      	<div class="row">
				      		<div class="col-md-6">
					  				<div><img src="images/kim_full.png" alt="Kim Barzola"/></div>
					  				</div>
						  			<div class="col-md-6 modal-text">
						  				<strong>Favorite Song:</strong><br/>
						  				Sir Duke by Stevie Wonder  <br/><br/>
						  				<strong>Favorite Spot on Campus:</strong><br/>
											I'm too afraid that my fav spot will be taken if I disclose it so, my 2nd favorite spot on campus is the CGSA (The Center for Gender, Sexuality and Activism) - for insightful conversations and organizing collective action! <br/><br/>
											<strong>Freshman Memory:</strong><br/>
											Definitely the Dee Dee Bridgewater Concert sponsored by the BU Arts Initiative and the BU African American Studies Program. Her performance was so refreshingly vibrant and her command over the audience was incredible to witness.
										</div>
						  		</div>
						  		<div>
						  			<br/>When freshman year of college finally rolled around, it was not the matriculation ceremony that welcomed me to the University, it was the niche communities I slowly began to uncover. As an active volunteer at The Center for Gender, Sexuality and Activism (CGSA), I have surrounded myself with students that are passionate about causes that extend far beyond Comm Ave. I am running for VP of Finance because I want to use Student Government to facilitate all the student-led causes that are already happening at BU.
										<br/><br/>It was through the CGSA that I discovered that many of the injustices that students are passionate about intersect. As President of Boston University’s Vegetarian Society and a representative in the Environmental Leadership Network, I have supported spaces where students come together to share what makes their time at BU feel meaningful.
										<br/><br/>The role of Student Government should be to question those who limit student aspirations. I believe in student initiatives that hold the university accountable for the high standards we have. That is what True BU means to me.
										<br/><br/>Vote for what is TRUE to your university, your student government, your voice.
						  		</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
				</div>
				<div class="positionsheld"> Positions we've held and what we've done:</div>
				<div class="row center">
					<div class="col-md-6">
						<ul>
							<li>Warren Towers Patio Project</li>
							<li>Warren Towers RHA President 2012-2014</li>
							<li>OEC RHA President</li>
							<li>VSA Culture Show 2012-2015</li>
							<li>Warren Towers Senator 2012-2013</li>
							<li>Environmental Affairs Department Associate Director 2012-2014</li>
							<li>No Waste November 2012</li>
							<li>Environmental Coalition Leader 2013-2014</li>
							<li>FYStaff 2013</li>
							<li>Frontier Group Public Policy Think Tank Internship</li>
							<li>Water Bottle Dispenser Initiative</li>
							<li>Danielsen RHA senator 2014-2015</li>
							<li>CSC Student Food Rescue Volunteer</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>Kilachand Honors Student</li>
							<li>Undergraduate Researcher</li>
							<li>Adjuncts Union Support</li>
							<li>Planned East Campus Carnival</li>
							<li>Boston University Initiative for Literacy Development Tutor</li>
							<li>Coming of Faith Internship</li>
							<li>Kilachand RHA</li>
							<li>#Food4Thought campaign (passed by Senate March 2015) currently being worked on with Dining Admin</li>
							<li>President of BU Vegetarian Society 2014-2015</li>
							<li>Representative for Environmental Leadership Network</li>
							<li>Policy Intern at The Humane League (non-profit)</li>
						</ul>
					</div>
				</div>
	</div>
	<!--/.container-->
</div>
<!--/#abouttrubu-->

<div id="abouttrubu" class="page-section">
	<div class="container">
		<h2>Our Bullet Point Platform</h2>
		<div class="row bullet-points">
		   <div class="col-md-4">
			   <div class="caption">
			   	<h3>Vision Means:</h3>
		   		<ul>
		   			<li>Building student power to gain tuition transparency</li>
						<li>Leading sustainability movements locally and globally</li>
		   		</ul>
		   	</div>
		   </div>
		   <div class="col-md-4">
			   <div class="caption">
			   	<h3>Empowerment Means:</h3>
		   		<ul>
		   			<li>Partnering with student groups to accomplish their initiatives</li>
						<li>Expanding free expression boards and readily available meeting spaces</li>
		   		</ul>
		   		</div>
		   </div>
		   <div class="col-md-4">
			   <div class="caption">
				   	<h3>Community Means:</h3>
			   		<ul>
			   			<li>Advocating for increased mental health support</li>
							<li>Spearheading education on multicultural sensitivity</li>
			   		</ul>
			   	</div>
		   </div>
    </div>
	</div>
	<!--/.container-->
	<div class="quote">
	<div class="container">
		<em>Vote for what is TRUE to your University, your Student Government, your voice.</em>
	</div>
	</div>
</div>
<!--/#abouttrubu-->

<!-- <div id="videos" class="page-section">
	<div class="container">
		<h2>Videos</h2>
		<div class="video-frame">
			<iframe id="video1" src="https://player.vimeo.com/video/89961835" width=80% height="500px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
	</div>
</div> -->
<!--/#videos-->

<div id="endorsements" class="page-section">
	<div class="container">
		<h2>Endorsements</h2>
			<div class="row endorsement-section">
			<div class="col-md-3">
				<img class="align-middle" src="images/justina.jpg" alt="Justina Choi"/>
			</div>
			<div class="col-md-9">
				Justina Choi<br/>Hawaii Cultural Association Co-President<br/>
				School: CAS '15<br/>
				<br/>
				Hawaii Cultural Association supports TrueBU because of their support of student organizations. Student leaders are the most dedicated people at BU and TrueBU is committed to listening to our concerns. Student organizations need an ally on campus to advocate for our initiatives and suggestions to improve SAO and AB.		</div>
		</div>
		<div class="endorsement-section">
			<div class="endorsement-text-right">
				<img id="float-right" src="images/luke.png" alt="Luke Walsh"/>
				Luke Walsh<br/>
				School: CAS '16<br/><br/>
				My involvement in Admissions, CAS Deans Hosts, FY101, and Orientation have afforded me the opportunity to meet and work with so many of these great people and I have gained so much from these relationships. TrueBU's emphasis on cultivating a stronger and more meaningful sense of community on campus is something that means a lot to me and I feel confident in their abilities to achieve this. Having personally known Andrew Cho for three years I can attest to his incredible work ethic and his utmost commitment to enhancing the student life on campus. His track record in RHA of affecting change makes me confident in his  abilities to to lead our Student Government and hope that everyone decides to vote TrueBU on their StudentLink!				<br/>But Andrew makes the biggest impact by simply being himself, a leader by example. I support True BU because I believe that Andrew's leadership and sustainable vision will build community and empower students to be change makers--exactly what BU needs to thrive.			</div>
		</div>
		<div class="row endorsement-section">
			<div class="col-md-4">
				<img src="images/carson.png" alt="Carson Robers"/>
			</div>
			<div class="col-md-8">
				Carson Robers<br/>
				School: CAS/GRS '16<br/>
				<br/>
				Despite how cliche it is you can truly be you at BU. Pursuing multiple degrees, leading and being inspired by our environmental community, and studying abroad in Quito, Ecuador has allowed me to find myself. From my work with Andrew Cho on many of Students for a Just and Stable Future's initiatives, I know that True BU is the type of leadership that we need to make our campus even more vibrant. 			</div>
		</div>
		<div class="endorsement-section">
			<div class="endorsement-text-right">
				<img id="float-right" src="images/lindsey.png" alt="Lindsey Chew"/>
				Lindsey Chew<br/>
				School: SMG '16<br/><br/>
				As head of the Environmental Coalition and President of RHA, Andrew has helped catalyze sustainable action at BU and beyond. These groups are usually seen as having different goals, but Andrew always finds a way to bridge the two--including innovations in sustainable RHA events, a rooftop garden for Warren towers and more.
				<br/>But Andrew makes the biggest impact by simply being himself, a leader by example. I support True BU because I believe that Andrew's leadership and sustainable vision will build community and empower students to be change makers--exactly what BU needs to thrive.			</div>
			</div>
			<div id="moreendorsementssoon">More endorsements coming soon!</div>
</div>
</div>
<!--/#endorsements-->
<a name="contactus"></a>
<div id="contactus" class="page-section">
	<div class="container">
		<h2>Get Involved!</h2>
		<div class="contactus-info">
<!-- 			<div id="joinstaff">Join Our Staff!(Link to Google Form)
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut"
			</div><br/> -->

		<div class="row">
			<div class="col-md-6">
			<div id="updates">
				<span class="updatetitles">Join the team! </span><br/><br/>
				<div class="social-media">
					<a href="//facebook.com/truebostonu" target="_blank"><img src="images/fb.png" alt="Facebook"/ id="fb"></a>
					<a href="//twitter.com/truebostonu" target="_blank"><img src="images/twitter.png" alt="Twitter"/ id="fb"></a>
					<a href="//instagram.com/truebu" target="_blank"><img src="images/instagram.png" alt="Instagram" id="ig"/></a>
				</div>
				<div id="jointeamwrapper"><a href="//goo.gl/forms/O14DCnjfpm" target="_blank"><div id="jointheteam">Staff for True BU</div></a></div>
			</div>
			</div>
			<div class="col-md-6">
				<div id="upcomingdates">
					<div>
						<span class="comments-endorsements">Comments/Endorsements!</span>
					</div>
					<div class="endorse-form form-inline">
		<div class="alert"></div>
		<form id="form" action="" method="post" class="form-inline">
			<div class="form-group">
				<label for="name">Name</label>
					<input type="text" class="form-control" id="name" placeholder="Name" name="name">
			</div>
			<div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" placeholder="example@example.com" name="email">
		  </div>
			<div>
				<label for="message"></label>
				<textarea class="form-control" rows="4" name="message" placeholder="We'd love to hear your thoughts, answer your questions, or have your endorsement!"></textarea>
			</div>
			<div>
				<button name="submit" class="btn btn-default" type="submit" id="submitButton">Send Email</button>
			</div>
		</form>
					</div>
				</div>
			</div>
		</div>
			<!-- div id="supporters" class="row">
				<div class="col-md-3">
					Trinidad Mowen - Some Position<br/>
					Marine Straka<br/>
					Shirley Obregon<br/>
					Angele Schoenberger<br/>
					Otto Greenburg<br/>
				</div>
				<div class="col-md-3">
					Trinidad Mowen - Some Position<br/>
					Marine Straka<br/>
					Shirley Obregon<br/>
					Angele Schoenberger<br/>
					Otto Greenburg<br/>
				</div>
				<div class="col-md-3">
					Trinidad Mowen - Some Position<br/>
					Marine Straka<br/>
					Shirley Obregon<br/>
					Angele Schoenberger<br/>
					Otto Greenburg<br/>
				</div>
				<div class="col-md-3">
					Trinidad Mowen - Some Position<br/>
					Marine Straka<br/>
					Shirley Obregon<br/>
					Angele Schoenberger<br/>
					Otto Greenburg<br/>
				</div>
			</div> -->
		</div>
	</div>
	<!--/.container-->
	<div class="footer">
	<div class="container">
		<div class="copyright">&copy; 2015 True Bu. All Rights Reserved.</div>
	</div>
	</div>
<!--/#contactus-->

<!--/.page-section-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61070755-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>
