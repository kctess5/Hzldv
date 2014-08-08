<?php 
	$page_class = "home work static-nav";
	include "includes/header.php";
	$js = 'js/home.js';
		
?>

<div class="main red"> 

	<div class="fullwindow" id="splash">
		<div id="scrolly" style="position:absolute; top:50%; height:100% display:none;">&nbsp;</div>

		<div id="site-title">
			<h1>h<span><img src="./img/titlenut.png" height="33" width="33"><noscript><img class="lazy" data-original="./img/titlenut.png" height="33" width="33"></noscript></span>zelnut-dev</h1>
		</div>		
		<div id="profile-picture">
			<noscript><img src="./img/profilepic2.png" style="width:20%; min-width:200px;"></noscript>
			<img class="lazy" data-original="./img/profilepic2.png" style="width:20%; min-width:200px;">
			<h2>not your everyday pixel pusher</h2>
		</div>

		<div class="fade">
			<a class="scroll" href="#services"><img class="lazy" id="scroll" data-original="./img/arrow.svg" height="32" width="32"></a>
		</div>	
		
	</div>

	<?php include "includes/nav.php" ?>

	<div id="services">
		<div id="scrolly" style="position:absolute; top:50%; height:100% display:none;">&nbsp;</div>

		<h1 class="top-text hide-for-small">I make things</h1>
		<h1 class="top-text show-for-small">I make things</h1>

		<img class="lazy" id="mac-image" data-speed="2" data-original="./img/macsublime.svg">


		<h1><em class="hide-for-small">...on the internet</em></h1>
		<h1><em class="show-for-small">...on the internet</em></h1>




	</div>

	<!-- <div id="call-to-action">

		<button><h2>i'll hook you up</h2></button>

	</div> -->

	<div id="work">
		<div id="scrolly" style="position:absolute; top:30%; height:100% display:none;">&nbsp;</div>
		<h1>recent work</3.230h1>
		<div class="row">
			<div class="large-4 small-12 columns" style="">
				<div class="row">

					<a href="http://mikeysrun.com" target="_blank"><div class="small-8 small-offset-2 large-11 large-offset-0 columns work-entry" style="text-align:center;">
						<h2>mikeysrun<span style="font-size:0;"> </span>.com</h2>
						<div class="row">
							<div class="small-10 small-offset-1" style="text-align:center; background-color:black;">
								<!-- <noscript><img src="./img/mikeysrun.jpg" border="3px"></noscript> -->
								<!-- <img class="screenshot lazy" data-original="./img/mikeysrun.jpg" border="3px"> -->
								<img class="screenshot" src="./img/mikeysrun.jpg" border="3px">
							</div>
						</div>
						<noscript>
							<img class="mask" src="./img/mask2.png">
							<img class="visit" src="./img/visit.svg">
						</noscript>
						<img class="mask lazy" data-original="./img/mask2.png">
						<img class="visit lazy" data-original="./img/visit.svg">

						<div class="full-entry">
							<div class="visit-text">visit</div>
						</div>
						

						<div class="top-half">
							<div class="top-text">supporting the victims of the boston marathon bombing</div>
						</div>
						<div class="bottom-half">
							<div class="bottom-text two-line">wordpress <br> html/css</div>
						</div>
						
					</a>
					</div> 

				</div>
			</div>
			<div class="large-4 small-12 columns" style="">
				<div class="row">
					
					<a href="http://designemcee.com" target="_blank"><div class="small-8 small-offset-2 left large-11 large-offset-1 columns work-entry">
						<h2>sciex<span style="font-size:0;"> </span>.mit.edu</h2>
						<div class="row">
							<div class="small-10 small-offset-1" style="text-align:center; background-color:black;">
								<!-- <img class="screenshot lazy" data-original="./img/emcee.jpg"> -->
								<!-- <noscript><img class="screenshot" src="./img/emcee.jpg"></noscript> -->
								<img class="screenshot" src="./img/emcee.jpg">
							</div>
						</div>
						<noscript>
							<img class="mask" data-original="./img/mask2.png">
							<img class="visit" data-original="./img/visit.svg">
						</noscript>
						<img class="mask lazy" data-original="./img/mask2.png">
						<img class="visit lazy" data-original="./img/visit.svg">

						<div class="full-entry">
							<div class="visit-text">visit</div>
						</div>

						<div class="top-half">
							<div class="top-text">added jquery effects, content management, and structure</div>
						</div>
						<div class="bottom-half">
							<div class="bottom-text three-line" style="">html/css <br> javascript (jquery) <br> php</div>
						</div>

					</div></a>
				
				</div>
			</div>
			<div class="large-4 small-12 columns" style="">
				<div class="row">
					
					<a href="http://stickir.com" target="_blank"><div class="small-8 small-offset-2 left large-11 large-offset-1 columns work-entry">
						<h2>stickir<span style="font-size:0;"> </span>.com</h2>
						<div class="row">
							<div class="small-10 small-offset-1" style="text-align:center; background-color:black;">
								<!-- <img class="screenshot lazy" data-original="./img/emcee.jpg"> -->
								<!-- <noscript><img class="screenshot" src="./img/emcee.jpg"></noscript> -->
								<img class="screenshot" src="./img/stickir.jpg">
							</div>
						</div>
						<noscript>
							<img class="mask" data-original="./img/mask2.png">
							<img class="visit" data-original="./img/visit.svg">
						</noscript>
						<img class="mask lazy" data-original="./img/mask2.png">
						<img class="visit lazy" data-original="./img/visit.svg">

						<div class="full-entry">
							<div class="visit-text">visit</div>
						</div>

						<div class="top-half">
							<div class="top-text">designed and built from the ground up</div>
						</div>
						<div class="bottom-half">
							<div class="bottom-text three-line" style="">html/css <br> javascript (jquery) <br> php</div>
						</div>

					</div></a>
				
				</div>
			</div>
		</div>
	</div>

	<div class="window" id="process" >
		<div id="scrolly" style="position:absolute; top:70%; height:100% display:none;">&nbsp;</div>
		<div style="text-align:center;"><h1>process</h1></div>

		<div class="row process-bullet">
			<div class="small-12 large-9 small-centered columns" >
				<div class="row">
					<div class="large-3 large-offset-1 small-4 columns" style="text-align:center;">
						<div class="icon-wrapper">
							<img class="lazy" data-original="./img/planicon.svg" width="100%">
							<noscript><img src="./img/planicon.svg" width="100%"></noscript>
						</div>

					</div>
					<div class="large-8 small-8 columns">
						<h2>plan</h2>
						<p>It all starts on paper, I work with the client to see what the needs are
							for any given project.</p>
						
					</div>
				</div>

			</div>
		</div>

		<div class="row process-bullet">
			<div class="small-12 large-9 small-centered columns" >
				<div class="row">
					<div class="large-3 large-offset-1 small-4 columns" style="text-align:center;">
						<!-- <noscript><img src="./img/designicon.svg" height="80%" width="80%" style="padding-top:7%; padding-bottom:7%;"></noscript> -->
						<!-- <img class="lazy" data-original="./img/designicon.svg" height="80%" width="80%" style="padding-top:7%; padding-bottom:7%;"> -->
						<div class="icon-wrapper">
							<noscript><img src="./img/designicon.svg"></noscript>
							<img class="lazy" data-original="./img/designicon.svg">
						</div>
					</div>
					<div class="large-8 small-8 columns">
						<h2>design</h2>
						<p>I cook up something delectable with Photoshop and Sketch - in the man cave of course. </p>
						
					</div>
				</div>

			</div>
		</div>

		<div class="row process-bullet">
			<div class="small-12 large-9 small-centered columns">
				<div class="row">
					<div class="large-3 large-offset-1 small-4 columns" style="text-align:center;">
						<!-- <noscript><img src="./img/buildicon.svg" height="80%" width="80%" style="padding-top:7%; padding-bottom:7%;"></noscript> -->
						<!-- <img class="lazy" data-original="./img/buildicon.svg" height="80%" width="80%" style="padding-top:7%; padding-bottom:7%;"> -->
						<div class="icon-wrapper">
							<noscript><img src="./img/buildicon.svg"></noscript>
							<img class="lazy" data-original="./img/buildicon.svg">
						</div>
					</div>
					<div class="large-8 small-8 columns">
						<h2>build</h2>
						<p>The design is sliced n' diced into an interactive website.</p>
						
					</div>
				</div>

			</div>
		</div>

		<div class="row process-bullet">
			<div class="small-12 large-9 small-centered columns">
				<div class="row">
					<div class="large-3 large-offset-1 small-4 columns" style="text-align:center;">
						<!-- <noscript><img src="./img/refineicon.svg" height="80%" width="80%" style="padding-top:7%; padding-bottom:7%;"></noscript> -->
						<!-- <img class="lazy" data-original="./img/refineicon.svg" height="80%" width="80%" style="padding-top:7%; padding-bottom:7%;"> -->
						<div class="icon-wrapper">
							<noscript><img src="./img/refineicon.svg"></noscript>
							<img class="lazy" data-original="./img/refineicon.svg">
						</div>
					</div>
					<div class="large-8 small-8 columns">
						<h2>refine</h2>
						<p>I polish the site until it shines, then bring in the client to make sure everything is up to scratch.</p>
					</div>
				</div>

			</div>
		</div>

	</div>

	<div id="about-me">
		<div id="scrolly" style="position:absolute; top:100%; height:100% display:none;">&nbsp;</div>
			<h1>the nut</h1>
			<div class="row">
				<div class="small-4 large-3  columns" style="text-align:right;">
					<noscript><img src="./img/mitpic.png" width="80%" style="padding-bottom:40px;"></noscript>
					<img class="lazy" data-original="./img/mitpic.png" width="80%" style="padding-bottom:40px;">
				</div>
				<div class="small-8 large-9 columns">
					<h3 style="padding-top:5%;">I am both an artist and an engineer; <br> I refuse to fit in either box.</h3>
					<ul>
					  <li>html/css <span style="color:#286ebe; font-size:.75em;">&diams;</span></li>
					  <li>javascript <span style="color:#286ebe; font-size:.75em;">&diams;</span></li>
					  <li>php <span style="color:#286ebe; font-size:.75em;">&diams;</span></li>
					  <li>python <span style="color:#286ebe; font-size:.75em;">&diams;</span></li>
					  <li>photoshop <span style="color:#286ebe; font-size:.75em;">&diams;</span></li>
					  <li>wordpress</li>
					</ul>
				</div>
			</div>
	</div>

	<!-- <div class="halfwindow" id="contact-me"> -->
	<div id="contact-me">

		<h2>let's do this</h2>

		<form id="contact-form" method="POST" action="email.php">


			<div class="row">
				<div class="small-12 large-4 columns">

					<div class="row">
						<div class="small-12 columns">
							<input class="self-describing contact-info" title="name" type="text" id="name" name="name">
						</div>
					</div>

					<div class="row">
						<div class="small-12 columns">
							<input class="self-describing contact-info" title="email" type="text" id="email" name="email">
						</div>
					</div>

					<div class="row hide-for-small">
						<div class="small-12 columns" >
							<input type="submit" name="email" value="Submit" class="submit-button">
						</div>
					</div>

				</div>

				<div class="small-12 large-8 columns">
					<textarea class="self-describing" title="message" type="text" id="message" name="message" style="cursor: text;"></textarea>
				</div>

				<div class="small-12 show-for-small columns">
					<input type="submit" name="email" value="Submit" class="submit-button">
				</div>

			</div>


		</form>
		<br>
		<div id="formResponse" style="display: none;"></div>

	</div>
	

<!-- <div style="font-size:3em;">
	<div style="font-family:quicksandbold_oblique;">This is a test sentence, I hope that you like this font!</div>
	<div style="font-family:quicksandbold;">This is a test sentence, I hope that you like this font!</div>
	<div style="font-family:quicksandbook_oblique;">This is a test sentence, I hope that you like this font!</div>
	<div style="font-family:'quicksandbook';">This is a test sentence, I hope that you like this font!</div>
	<div style="font-family:'quicksanddash';">This is a test sentence, I hope that you like this font!</div>
	<div style="font-family:'quicksandlight_oblique';">This is a test sentence, I hope that you like this font!</div>
	<div style="font-family:'quicksandlight';">This is a test sentence, I hope that you like this font!</div>
</div> -->

</div><!-- end .main -->
		
<?php include "includes/footer.php"; ?>
		
		