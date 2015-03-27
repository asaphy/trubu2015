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
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
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
					<li><a href="#" class="scroll-link" data-id="abouttrubu">Platform</a></li>
					<li><a href="#" class="scroll-link" data-id="policypage">Policy</a></li>
					<li><a href="#" class="scroll-link" data-id="endorsements">Endorsements</a></li>
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
		<h2 id="meetslate">Meet the Slate</h2>
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
	 					CAS '17<br/>
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
				   	<h3>Community Means:</h3>
			   		<ul>
			   			<li class="meriweather">Advocating for increased mental health support</li>
							<li class="meriweather">Spearheading education on multicultural sensitivity</li>
			   		</ul>
			   	</div>
		   </div>
		   <div class="col-md-4">
			   <div class="caption">
			   	<h3>Empowerment Means:</h3>
		   		<ul>
		   			<li class="meriweather">Partnering with student groups to accomplish their initiatives</li>
						<li class="meriweather">Expanding free expression boards and readily available meeting spaces</li>
		   		</ul>
		   		</div>
		   </div>
		   <div class="col-md-4">
			   <div class="caption">
			   	<h3>Vision Means:</h3>
		   		<ul>
		   			<li class="meriweather">Building student power to gain tuition transparency</li>
						<li class="meriweather">Leading sustainability movements locally and globally</li>
		   		</ul>
		   	</div>
		   </div>
    </div>
	</div>
	<!--/.container-->
<!-- 	<div class="quote">
	<div class="container">
		<a href="policy.pdf" id="policy" target="_blank"><div id="jointheteam">View Our Detailed Platform</div></a>
	</div>
	</div> -->
</div>
<!--/#abouttrubu-->

<div id="policypage" class="page-section">
	<div class="container">
		<div class="row platformrow">
			<div class="col-md-12">
				<h2 id="platform2015">True BU Policy 2015</h2>
				<em>Andrew, Mel, Marwa, and Kim have compiled this list of policies that we believe resonate with Boston University students. We hope that our achievements and involvements in the organizations invested in these issues prove to you our sincerity and commitment to these policies. We have individually found ourselves running together under True BU because we believe Student Government can be the empowering tool for students to move forward on these issues. Nothing in this policy we claim to implement on our own; rather, it will be through genuine partnerships and supportive collaboration. We invite you to join True BU in contributing to a legacy of student involvement and TRUE change at Boston University.</em>
				<h3>MULTICULTURAL MOVEMENT</h3>
				<h4>Increasing Multicultural Sensitivity</h4>
				President Brown was subpoenaed to a hearing on diversity in higher education
				by the Boston City Council for his failure to appear at a hearing on employee and
				student diversity at local colleges. It is clear that this is an issue on our campus
				and must be continually addressed.  <strong>True BU will rally the current efforts by
				organizations represented in the Center for Gender, Sexuality, and
				Activism (CGSA) and the Boston University Culture Council to create
				multicultural education programs with the Office of Orientation and the
				Office of the Dean of Students.</strong><br/>

				<h4>Career Support for International Students</h4>
				20.6 percent of the study body is comprised of international students.  Visa
				requirements, and extensive paperwork all stand in the way of international
				students acquiring work experience they need to become well-rounded
				graduates. To counter this TrueBU will work alongside the Center for Career
				Development to <strong>create programs specifically addressing international
				students' needs.</strong> In addition, TrueBU will expand resources for international
				students so that they can easily navigate their complicated tax forms.

				<h3>SHATTERING STIGMA</h3>
				<h4>Sexual Assault Prevention: Shattering Stigma & BU's 16,000 Strong</h4>
				Because we are committed to working with student groups, we will partner with
				members of the Center for Gender, Sexuality, and Activism and Greek Life to
				lead the dialogue on sexual assault. We want to <strong>expand the reach of "safer
				space" culture</strong> to large organizations like fraternities and sororities and foster an
				open dialogue about sexual assault. We will foster dialogue between Greek
				Life and clubs by creating workshops to offer advice about
				creating organizational structure with groups of students. Each month, we will
				select a new stigma focus, approved by Senate. The workshops would also
				function to demystify Greek life and build diversified networks within the BU
				community.<br/><br/>
				However, we want to do more than just talk about the problem-<strong>we want to
				bring awareness to action and go further than a pledge.</strong>  We will implement a
				pilot GreenDot training to teach students how to intervene and speak about
				sexual assault. The CDC-funded trainings demonstrated a 50 percent reduction
				in sexual violence perpetuation in high schools.<br/><br/>
				We will continue and expand the 16,000 Strong campaign to incorporate the It
				Happens Here Project (http://www.ihhproject.org), in which sexual assault
				survivors anonymously submit their stories and to a panel of students reads them
				and shares them on the website. <strong>Our projects seek to end the stigma
				against talking about rape culture</strong> and the stigma that manifests itself in victim
				shaming.<br/>

				<h3>HEIGHTENING HEALTH</h3>
				<h4>Mental Health Support Through the Student Support Network</h4>
				By collaborating with Behavioral Medicine, we will <strong>reinstate the Student
				Support Network</strong> and train students on how to recognize the warning signs
				associated with depression and other serious mental health concerns. In
				addition, TrueBU and Behavioral Medicine will work together to <strong>provide an
				outlet for students to express themselves</strong> via BU Secret. Postcards will be
				displayed in public places around campus.  Because we understand the gravity
				of this issue, we have already begun work on this project.<br/>

				<h4>Enhanced Resources for the Center for Gender, Sexuality and Activism</h4>
				We will allocate a fixed percentage of the Student Government budget to be
				allotted to this student-funded space. Student Government should support this
				student space that functions as resource center for the university's most
				marginalized students, which includes and is not limited to LGBTQ students,
				people of color, and women. CGSA currently runs on volunteers and is allocated
				funds as a student club. However, in reality, the space known as the CGSA is a
				resource center for the LGBTQ community as well as student activism and women.<br/>

				<h3>CREATIVE COLLABORATION</h3>
				<h4>Innovation Grant Program, Green Fund & Arts Commission</h4>
				Student Government has an estimated $60,000 in its control, allocated by the
				undergraduate student fee. Although less than 1% of our tuition goes directly
				into the hands of the undergraduate students, <strong>we must not forget the monetary
				influence that we have.</strong> Our grant program will make Student Government
				funds available to student initiatives on an application basis, subject to approval
				by a designated committee. We have divided the budget into 5 strategic sections:
				<br/><br/><ul>
				<li>Innovation Grant Program (see details below)</li>
				<li>Internal Affairs of Student Government</li>
				<li>Student Government Co-Sponsored Events</li>
				<li>Student Group Support Funds</li>
				<li>Orientation Funds</li>
				</ul><br/>
				We will start implementing the Innovation Grant Program immediately in the fall
				of 2015, as we have already started discussing details with key administrators
				and students and will continue to over the summer. The grant program will
				change the way the current Student Government budget is allocated. <strong>There will
				be a specific permanent fund allocated for student initiatives that will further
				Boston University's presence in the fields of technology and the arts.</strong><br/>

				<h4>Student Group Support System</h4>
				True BU will <strong>support and foster student group development and existence</strong>
				on campus in many forms. When the Student Involvement Board rejects a
				student group we want to offer our resources to get them off the ground. This
				includes reserving spaces, opening our office to them, and aiding with publicity.
				For existing student groups, <strong>we will increase the number of free expression
				boards for event visibility, and create and publicize readily available
				meeting spaces.</strong>  Spaces such as the conference rooms in the GSU should be
				available when not in use.  While SAO works tirelessly to support student
				activities, <strong>we know firsthand the obstacles that student groups face.</strong> Any
				needs that SAO cannot deliver, True BU Student Government will serve as a
				collective voice to advocate for student groups. This entails pushing for more
				storage space for theatre groups, increasing the travel fund, and ensuring
				budgets for smaller or less active groups.<br/>

				<h4>RHA Partnership to Enhance Quality of Life</h4>
				Student Government will seek to be fully in touch with daily quality of life issues
				by increasing partnership with RHA in addressing issues such as safety, smoking
				concerns, and affairs for recycling and heating concerns.<br/>

				<h3>TUITION TRANSPARENCY</h3>
				<h4>Advocacy through the Student Trustee Position</h4>
				We will begin dialogue with the Dean of Students and President Brown concerning
				the necessity for a <strong>student representative in investment decisions</strong> given the
				fact that the student body is a large stakeholder. Based off of these conversations,
				we will create criteria for students interested in this position and create an
				application form for a year-long commitment.  With tuition slated to go up a
				whopping 3.7% and many questioning whether or not college is still 'worth it', we
				as students must have a say in tuition decisions. In recent correspondence with
				President Brown, competitive salaries were mentioned as reason for tuition rise,
				but it seems that these competitive salaries are given to upper tier administrators
				and not professors.<br/>

				<h4>Tuition Transparency Workshop</h4>
				By hosting a series of workshops, we will create a bridge between students who
				are bearing the burden of expanding the university and the administrators who
				ultimately control the costs.  In addition to advertising this to students, we will
				encourage faculty to voice their opinions on the necessity of an increase in
				tuition. <strong>We will create a space for students to understand the reasons and
				interact directly with decision makers.</strong> The rising cost of tuition with little to no
				explanation has alarmed not just students but also alumni, parents and faculty of
				the BU community.<br/>

				<h3>STRENGHTENING SUSTAINABILITY</h3>
				<h4>Bike Safety</h4>
				We congratulate BU Bikes on their advocacy for CycleTrack (a protected bike
				lane) for all segments of Commonwealth Avenue. The next step is to <strong>build bike
				culture at BU through facilitating education</strong> for bikers and pedestrians. by
				funding and advocating for covered bike shelters in West Campus and potential
				other spots on campus. We will advocate for <strong>more appropriate shelter for
				bikes.</strong> With limited transportation options on our large campus, it is important
				that low-cost options are available and safe for students.<br/>

				<h4>Restore the CAS Greenhouse</h4>
				It is unacceptable that the little known CAS Greenhouse has been defunct due to
				neglect from the administration to repair broken water pipes.  We will <strong>firmly
				advocate for university funds to be appropriated to the CAS Greenhouse to
				be restored</strong> in order to restore this amazing resource for the environmental
				community on our urban campus.  The Environmental Student Organization has
				already picked up this issue but still needs support.  We are committed to
				sustainability on our campus, as well as empowering student groups with Student
				Government resources.  We also have experience-Andrew and Kim were
				active members of OGC in the glory days of a functioning greenhouse, and know
				exactly the obstacles they face.<br/>

				<h4>Support Divest BU from Fossil Fuel campaign</h4>
				We aim to support this group's effort by endorsing their referendum question as
				well as offer follow up after the 2015 Student Government elections by lobbying
				administration and the Board of Trustees to <strong>commit to fossil fuel
				divestment.</strong> Other institutions across the world are working towards this goal
				with impressive success. Investment in low-carbon energy amounted to $257
				billion in 2011, and continues to rise. Sustainable industries like solar and wind
				energy production are becoming increasingly attractive investments. BU's
				financial growth is not incompatible with reducing its role in climate change.
				True BU believes that the university's large-scale actions should reflect our educational values.<br/>

				<h3>STRUCTURAL SOLUTIONS</h3>
				<h4>Communications Reform</h4>
				Forming a <strong>strong communications department</strong> will ensure that the Student
				Government website is always up-to-date and clear about resources. This
				includes providing contact resources and publishing updates on initiatives and
				events. True BU Student Government will have a physical presence in GSU
				every week, provide a State of the University once a semester, and equip
				Senators for reaching out with a dedicated budget. True BU promises to
				implement <strong>increased Financial Transparency</strong> through automated alerts of
				when the budget money has been spent. The Student Government website will
				be updated weekly with new budget details, proposals, and Senate decisions.<br/>

				<h4>Senator Training</h4>
				Our experience in the Residence Hall Association has taught us the importance
				of building up the community feel of an organization. We will equip them with the
				tools to reach their constituents, as well as <strong>commit to establishing a culture at
				Senate that is constructive and empowering.</strong><br/>

				<h4>Vice President of Internal Affairs as Senate Historian</h4>
				TrueBU will also give the VPIA the responsibility of writing a history of the
				successes, failures, and challenges to Student Government initiatives and why
				they are occurring. We should not have to reinvent the wheel every year.
			</div>
		</div>
	</div>
</div>
<!--/#videos-->

<div id="endorsements" class="page-section">
	<div class="container">
		<h2 id="endorsementsheading">Endorsements</h2>
			<div class="row endorsement-section">
			<div class="col-md-3">
				<img class="align-middle" src="images/justina.jpg" alt="Justina Choi"/>
			</div>
			<div class="col-md-9 meriweather">
				Justina Choi<br/>Hawaii Cultural Association Co-President<br/>
				School: CAS '15<br/>
				<br/>
				Hawaii Cultural Association supports TrueBU because of their support of student organizations. Student leaders are the most dedicated people at BU and TrueBU is committed to listening to our concerns. Student organizations need an ally on campus to advocate for our initiatives and suggestions to improve SAO and AB.		</div>
		</div>
		<div class="endorsement-section">
			<div class="endorsement-text-right meriweather">
				<img id="float-right" src="images/luke.png" alt="Luke Walsh"/>
				Luke Walsh<br/>
				School: CAS '16<br/><br/>
				My involvement in Admissions, CAS Deans Hosts, FY101, and Orientation have afforded me the opportunity to meet and work with so many of these great people and I have gained so much from these relationships. TrueBU's emphasis on cultivating a stronger and more meaningful sense of community on campus is something that means a lot to me and I feel confident in their abilities to achieve this. Having personally known Andrew Cho for three years I can attest to his incredible work ethic and his utmost commitment to enhancing the student life on campus. His track record in RHA of affecting change makes me confident in his  abilities to to lead our Student Government and hope that everyone decides to vote TrueBU on their StudentLink!</div>
		</div>
		<div class="row endorsement-section">
			<div class="col-md-3">
				<img src="images/carson.png" alt="Carson Robers"/>
			</div>
			<div class="col-md-9 meriweather">
				Carson Robers<br/>
				School: CAS/GRS '16<br/>
				<br/>
				Despite how cliche it is you can truly be you at BU. Pursuing multiple degrees, leading and being inspired by our environmental community, and studying abroad in Quito, Ecuador has allowed me to find myself. From my work with Andrew Cho on many of Students for a Just and Stable Future's initiatives, I know that True BU is the type of leadership that we need to make our campus even more vibrant. 			</div>
		</div>
		<div class="endorsement-section">
			<div class="endorsement-text-right meriweather">
				<img id="float-right" src="images/lindsey.png" alt="Lindsey Chew"/>
				Lindsey Chew<br/>
				School: SMG '16<br/><br/>
				As head of the Environmental Coalition and President of RHA, Andrew has helped catalyze sustainable action at BU and beyond. These groups are usually seen as having different goals, but Andrew always finds a way to bridge the two--including innovations in sustainable RHA events, a rooftop garden for Warren towers and more.
				<br/>But Andrew makes the biggest impact by simply being himself, a leader by example. I support True BU because I believe that Andrew's leadership and sustainable vision will build community and empower students to be change makers--exactly what BU needs to thrive.			</div>
			</div>
			<div id="moreendorsementssoon" class="meriweather">More endorsements coming soon!</div>
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
		</div>
	</div>
	<!--/.container-->
	<div class="footer">
	<div class="container">
		<div class="copyright"><!-- &copy; 2015 True Bu. All Rights Reserved. -->Vote for what is TRUE to your University, your Student Government, your voice.</div>
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
