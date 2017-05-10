<!DOCTYPE html>
<?php
// Starting Login Session
session_start();

if ($_SESSION["username"]) {
	$user = true;
} else {
	$user = false;
}
?>

<html lang="en">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../index.js"></script>
<link rel="stylesheet" href="TOU.css">

</head>
<?php echo'<body onload="ifLogin('.$user.')">'; ?>

 <!-- top Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
	<div class="navbar-header">


		<!-- Dropdown menu for different categories -->
		<div class="dropdown">
		<button type="button" data-toggle="dropdown" class="btn btn-default" id="dropdown">
			<span class="caret"></span> Categories </button>

			<!-- list of categories -->
			<ul class="dropdown-menu">
				<li><a href="../Books/Books.php">
				Books</a></li>
				<li><a class="tags" href="../Electronics/Electronics.php">
				Electronics</a></li>
				<li><a class="tags" href="../Furniture/Furniture.php">
				Furniture</a></li>
				<li><a class="tags" href="../Tickets/Tickets.php">
				Tickets</a></li>
				<li><a class="tags" href="../Clothing/Clothing.php">
				Clothing</a></li>
          </ul>
		</div>

		<!-- Login button -->
		<button type="button" data-target="#loginModal" class="btn btn-default" data-toggle="modal" id="login">
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login
		</button>

		<!-- Small screen/phone screen login button -->
		<button type="button" data-target="#loginModal" class="btn btn-default" data-toggle="modal" id="login2">
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		</button>

		<!-- User Account Button -->
		<button type="button" class="btn btn-default" id="userBtn">
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			<?php
			echo $_SESSION["username"];
			?>
		</button>

		<!-- List item button -->
		<button type="button" data-target="#listingModal" data-toggle="modal" class="btn btn-default" id="add">
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>List an Item
		</button>

		<!-- small screen/phone screen add button -->
		<button type="button" data-target="#listingModal" data-toggle="modal"
			class="btn btn-default" id="add2">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		</button>


		<!-- Searchbar -->
		<!--<form class="navbar-form navbar-right" id="searchBar">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
					</input>
				</div>
			</form>-->
		</div>
	</div>
</nav>

<!-- Modal -->
		<div id="loginModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Login to Campus Trade</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="login.php" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required=""
                                  title="Please enter you username" placeholder="">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(if this is a private computer)</p>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                              <a href="forgotpass.html" class="btn btn-default btn-block">Forgot Password?</a>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
					<div class="well">
                      <p class="lead">Register now for FREE</p>

						<form id="loginForm" method="POST" action="register.php" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required=""
                                  title="Please enter you username" placeholder="">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>

							  <div class="form-group">
                                  <label for="repeatpassword" class="control-label">Repeat Password</label>
                                  <input type="password" class="form-control" id="repeatpassword" name="repeatpassword" value="" required="" title="Please enter your password again">
                                  <span class="help-block"></span>
                              </div>

							  <div class="form-group">
                                  <label for="email" class="control-label">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" value="" required="" title="Please enter your email">
                                  <span class="help-block"></span>
                              </div>

                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>

                              <button type="submit" class="btn btn-success btn-block">Register</button>

                          </form>
					</div>
                  </div>
              </div>
          </div>
			</div>
			</div>
		</div>


<!--List an item Modal -->
		<div id="listingModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">List An Item</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="categoryForm" method="POST">
								<p> Category: </p>
								<input type="radio" name="category" onclick="books();" value="books" checked> Books <br>
								<input type="radio" name="category" onclick="ele();" value="ele"> Electronics <br>
								<input type="radio" name="category" onclick="furn();" value="furn"> Furniture <br>
								<input type="radio" name="category" onclick="tickets();" value="tickets"> Tickets <br>
								<input type="radio" name="category" onclick="cloth();"value="cloth"> Clothing <br>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
					<div class="well">
                      <p class="lead">List Your Item:</p>

							<form id="bookForm" method="POST" style="display:block;" action="listBook.php" enctype="multipart/form-data">
								<div class="form-group">
									<label for="username" class="control-label">Listing Title:</label>
									<input type="text" class="form-control" name="post_listing" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Book Title:</label>
									<input type="text" class="form-control" name="post_title" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">ISBN:</label>
									<input type="text" class="form-control" name="post_isbn" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Class Subject:</label>
									<input type="text" class="form-control" name="post_subject" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Asking Price:</label>
									<input type="text" class="form-control" name="post_price" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Email:</label>
									<input type="text" class="form-control" name="post_email" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Phone Number:</label>
									<input type="text" class="form-control" name="post_phone" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Contact Name:</label>
									<input type="text" class="form-control" name="post_name" required="">
									<span class="help-block"></span>
								</div>
								<label class="control-label"> Add a Picture: </label>
								<input type="file" name="file">
								<br>

								<button type="submit" class="btn btn-success btn-block">Add Listing</button>

							</form>

							<form id="eleForm" method="POST" style="display:none;" action="listEle.php" enctype="multipart/form-data">
								<div class="form-group">
									<label for="username" class="control-label">Listing Title:</label>
									<input type="text" class="form-control" name="post_listing" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Type of Electronic:</label>
									<input type="text" class="form-control" name="post_type" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Asking Price:</label>
									<input type="text" class="form-control" name="post_price" required="">
									<span class="help-block"></span>
								</div>
								<div id="contact"> Contact Info <br>
								<div class="form-group">
									<label for="username" class="control-label">Email:</label>
									<input type="text" class="form-control" name="post_email" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Phone Number:</label>
									<input type="text" class="form-control" name="post_phone" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Contact Name:</label>
									<input type="text" class="form-control" name="post_name" required="">
									<span class="help-block"></span>
								</div>
								</div>

								<label class="control-label"> Add a Picture: </label>
								<input type="file" name="file">
								<br>

								<button type="submit" class="btn btn-success btn-block"> Add Listing</button>
							</form>

							<form id="furnForm" method="POST" style="display:none;" action="listFurn.php" enctype="multipart/form-data">
								<div class="form-group">
									<label for="username" class="control-label">Listing Title:</label>
									<input type="text" class="form-control" name="post_listing" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Type of Furniture:</label>
									<input type="text" class="form-control" name="post_type" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Asking Price:</label>
									<input type="text" class="form-control" name="post_price" required="">
									<span class="help-block"></span>
								</div>
								<div id="contact"> Contact Info <br>
								<div class="form-group">
									<label for="username" class="control-label">Email:</label>
									<input type="text" class="form-control" name="post_email" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Phone Number:</label>
									<input type="text" class="form-control" name="post_phone" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Contact Name:</label>
									<input type="text" class="form-control" name="post_name" required="">
									<span class="help-block"></span>
								</div>
								</div>

								<label class="control-label"> Add a Picture: </label>
								<input type="file" name="file">
								<br>

								<button type="submit" class="btn btn-success btn-block"> Add Listing</button>
							</form>

							<form id="tickForm" method="POST" style="display:none;" action="listTicket.php" enctype="multipart/form-data">
								<div class="form-group">
									<label for="username" class="control-label">Listing Title:</label>
									<input type="text" class="form-control" name="post_listing" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Ticket is for:</label>
									<input type="text" class="form-control" name="post_for" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Asking Price:</label>
									<input type="text" class="form-control" name="post_price" required="">
									<span class="help-block"></span>
								</div>
								<div id="contact"> Contact Info <br>
								<div class="form-group">
									<label for="username" class="control-label">Email:</label>
									<input type="text" class="form-control" name="post_email" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Phone Number:</label>
									<input type="text" class="form-control" name="post_phone" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Contact Name:</label>
									<input type="text" class="form-control" name="post_name" required="">
									<span class="help-block"></span>
								</div>
								</div>

								<label class="control-label"> Add a Picture: </label>
								<input type="file" name="file">
								<br>

								<button type="submit" class="btn btn-success btn-block"> Add Listing</button>
							</form>

							<form id="clothForm" method="POST" style="display:none;" action="listCloth.php" enctype="multipart/form-data">
								<div class="form-group">
									<label for="username" class="control-label">Listing Title:</label>
									<input type="text" class="form-control" name="post_listing" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Type of Clothing:</label>
									<input type="text" class="form-control" name="post_type" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Asking Price:</label>
									<input type="text" class="form-control" name="post_price" required="">
									<span class="help-block"></span>
								</div>
								<div id="contact"> Contact Info <br>
								<div class="form-group">
									<label for="username" class="control-label">Email:</label>
									<input type="text" class="form-control" name="post_email" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Phone Number:</label>
									<input type="text" class="form-control" name="post_phone" required="">
									<span class="help-block"></span>
								</div>
								<div class="form-group">
									<label for="username" class="control-label">Contact Name:</label>
									<input type="text" class="form-control" name="post_name" required="">
									<span class="help-block"></span>
								</div>
								</div>

								<label class="control-label"> Add a Picture: </label>
								<input type="file" name="file">
								<br>

								<button type="submit" class="btn btn-success btn-block"> Add Listing</button>
							</form>
					</div>
                  </div>
              </div>
          </div>
			</div>
			</div>
		</div>


<!-- brand logo div -->
<div class="positioner">
	<a href="../index.php">
		<img class="brand" href="#" src="../logo.png"></img>
	</a>
</div>

<div align="center">
<p1>
<b>Welcome to Campus Trade. We hope you find it useful. </b>
<br>
<br>
<b>By accessing our servers, websites, or content, you agree to these Terms of Use ("TOU"), last updated February 14th 2017.</b>

<br>
<br>
If you are 18 or older, we grant you a limited, revocable, nonexclusive, license to access Campus Trade in compliance with the TOU; unlicensed access is unauthorized.
<br>
You agree not to license, distribute, make derivative works, display, sell, or "frame" content from Campus Trade, excluding content you create and sharing with friends/family.
<br>
You grant us a perpetual, irrevocable, unlimited, worldwide, fully paid license to use, copy, perform, display, distribute, and make derivative works from content you post.
<br>
You agree not to use or provide software (except for general purpose web browsers and email Clients, or software expressly licensed by us) or services that interact or interoperate with Campus List, e.g. for downloading, uploading, posting, flagging, emailing, search, or mobile use.
<br>
Robots, spiders, scripts, scrapers, crawlers, etc. are prohibited, as are misleading, unsolicited, unlawful, and/or spam postings/email.
<br>
You agree not to collect users' personal and/or contact information ("PI").
<br>
Users must comply with all applicable laws, Campus Trade terms of use, and all posted site rules.
<br><br><br>
<font size="8">
<b>Prohibited</b>
</font>
<br>
<b>Here is a partial list of goods, services, and content prohibited on Campus Trade:</b>
<br>
<br>
<ul><li>
Weapons; firearms/guns and components; BB/pellet, stun, and spear guns; etc</li>
<li>
Ammunition, cartridges, reloading materials, gunpowder, fireworks, explosives</li>
<li>
Recalled or hazardous materials; body parts/fluids; unsanitized bedding/ clothing</li>
<li>
Prescription drugs, medical devices; controlled substances and related items</li>
<li>
Alcohol or tobacco; unpackaged or adulterated food or cosmetics</li>
<li>
Child pornography; bestiality; offers or solicitation of illegal prostitution</li>
<li>
Pet sales (re-homing with small adoption fee ok), animal parts, stud service</li>
<li>
Endangered, imperiled and/or protected species and any parts thereof, e.g. ivory</li>
<li>
False, misleading, deceptive, or fraudulent content; bait and switch; keyword spam</li>
<li>
Offensive, obscene, defamatory, threatening, or malicious postings or email</li>
<li>
Anyone's personal, identifying, confidential or proprietary information</li>
<li>
Food stamps, WIC vouchers, SNAP or WIC goods, governmental assistance</li>

<li>
Stolen property, property with serial number removed/altered, burglary tools, etc</li>
<li>
ID cards, licenses, police insignia, government documents, birth certificates, etc</li>
<li>
US military items not demilitarized in accord with Defense Department policy</li>
<li>
Counterfeit, replica, or pirated items; tickets or gift cards that restrict transfer</li>
<li>
Lottery or raffle tickets, sweepstakes entries, slot machines, gambling items</li>
<li>
Spam; miscategorized, over posted, cross-posted, or nonlocal content</li>
<li>
Postings or email the primary purpose of which is to drive traffic to a website</li>
<li>
Postings or email offering, promoting, or linking to unsolicited products or services</li>
<li>
Affiliate marketing; network, or multi-level marketing; pyramid schemes</li>
<li>
Any good, service, or content that violates the law or legal rights of others</li>
</ul><br>
<b>Please don't use  Campus Trade for these purposes, and report anyone else you see doing so.</b>
<br>
Thanks for helping keep  Campus Trade safe and useful for everyone.
<br>
<br>
<b>Moderation</b>
<br>
You agree we may moderate Campus Trade access and use in our sole discretion, e.g. by blocking (e.g. IP addresses), filtering, deletion, delay, omission, verification, and/or access/account/license termination.
<br>
You agree (1) not to bypass said moderation,
<br>
(2) we are not liable for moderating, not moderating, or representations as to moderating, and
<br>
(3) nothing we say or do waives our right to moderate, or not.
<br>
<br>

<b>Disclaimer</b>.
<br>
MANY JURISDICTIONS HAVE LAWS PROTECTING CONSUMERS AND OTHER CONTRACT PARTIES, LIMITING THEIR ABILITY TO WAIVE CERTAIN RIGHTS AND RESPONSIBILITIES.
<br>
WE RESPECT SUCH LAWS; NOTHING HEREIN SHALL WAIVE RIGHTS OR RESPONSIBILITIES THAT CANNOT BE WAIVED.
<br>
To the extent permitted by law,
<br>
(1) we make no promise as to Campus Trade, its completeness, accuracy, availability, timeliness, propriety, security or reliability;
<br>
(2) your access and use are at your own risk, and Campus Trade is provided "AS IS" and "AS AVAILABLE";
<br>
(3) we are not liable for any harm resulting from (a) user content; (b) user conduct, e.g. illegal conduct; (c) your Campus Trade use; or (d) our representations;




</p1>
</div>


<!-- footer bar for about safety and terms of use pages -->
<footer class="footer-basic-center">
		<p class="footer-links">
			<a href="../About/About.php">About</a>
			<span>&#8226;</span>
			<a href="../Safety/Safety.php">Safety</a>
			<span>&#8226;</span>
			<a href="TOU.php">Terms of Use</a>
		</p>
		<p class="footer-company-name">Campus Trade &copy; 2017</p>
</footer>

</body>

</html>
