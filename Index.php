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
<script src="index.js"></script>
<link rel="stylesheet" href="IndexCSS.css">

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
				<li><a href="./Books/Books.php">
				Books</a></li>
				<li><a class="tags" href="./Electronics/Electronics.php">
				Electronics</a></li>
				<li><a class="tags" href="./Furniture/Furniture.php">
				Furniture</a></li>
				<li><a class="tags" href="./Tickets/Tickets.php">
				Tickets</a></li>
				<li><a class="tags" href="./Clothing/Clothing.php">
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
	<a href="index.php">
		<img class="brand" href="#" src="logo.png"></img>
	</a>
</div>


<!-- php for connecting to the server -->
<?php

$servername = "localhost";
$username = "test";
$password = "test";
$db = "campuslist";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>

	<!-- Sections of the body seperated for each category -->
	<div class="sections">

		<!-- Header for book category -->
		<div class="headings">
		Books:
		</div>
		<!-- php to display the database entries for books -->
		<?php
		$sql = "SELECT listingTitle, bookTitle, ISBN, price, image FROM books ORDER BY id DESC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$image = $row['image'];
				echo '<div class="box">';

				echo "<img src='images/books/".$image."' class='picture' />";

				echo '<div class="text">';
				echo '<div id="title">' . $row["listingTitle"]. "</div>". "<br>Book Title: " . $row["bookTitle"].
							"<br>Price: $". $row["price"]. "<br>ISBN: " . $row["ISBN"];
				echo "</div>";
				echo "</div>";
			}
		} else {
		}
		?>
	</div>

	<div class="sections">

		<div class="headings">
		Electronics:
		</div>

		<?php
		$sql = "SELECT listingTitle, electronic, price, image FROM electronics ORDER BY id DESC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$image = $row['image'];
				echo '<div class="box">';

				echo "<img src='images/electronics/".$image."' class='picture' />";

				echo '<div class="text">';
				echo '<div id="title">' . $row["listingTitle"]. "</div>". "<br>Electronic: " . $row["electronic"].
							"<br>Price: $". $row["price"]. "<br>";
				echo "</div>";
				echo "</div>";
			}
		} else {
		}
		?>
	</div>

	<div class="sections">

		<div class="headings">
		Furniture:
		</div>

		<?php
		$sql = "SELECT listingTitle, furniture, price, image FROM furniture ORDER BY id DESC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$image = $row['image'];
				echo '<div class="box">';

				echo "<img src='images/furniture/".$image."' class='picture' />";

				echo '<div class="text">';
				echo '<div id="title">' . $row["listingTitle"]. "</div>". "<br>Furniture: " . $row["furniture"].
							"<br>Price: $". $row["price"]. "<br>";
				echo "</div>";
				echo "</div>";
			}
		} else {
		}
		?>
	</div>

	<div class="sections">

		<div class="headings">
		Tickets:
		</div>

		<?php
		$sql = "SELECT listingTitle, concert, price, image FROM tickets ORDER BY id DESC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$image = $row['image'];
				echo '<div class="box">';

				echo "<img src='images/tickets/".$image."' class='picture' />";

				echo '<div class="text">';
				echo '<div id="title">' . $row["listingTitle"]. "</div>". "<br>Tickets For: " . $row["concert"].
							"<br>Price: $". $row["price"]. "<br>";
				echo "</div>";
				echo "</div>";
			}
		} else {
		}
		?>
	</div>

	<div class="sections">

		<div class="headings">
		Clothing:
		</div>

		<?php
		$sql = "SELECT listingTitle, clothing, price, image FROM clothing ORDER BY id DESC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$image = $row['image'];
				echo '<div class="box">';

				echo "<img src='images/clothing/".$image."' class='picture' />";

				echo '<div class="text">';
				echo '<div id="title">' . $row["listingTitle"]. "</div>". "<br>Clothing: " . $row["clothing"].
							"<br>Price: $". $row["price"]. "<br>";
				echo "</div>";
				echo "</div>";
			}
		} else {
		}
		$conn->close();
		?>
	</div>



	<!-- footer bar for about safety and terms of use pages -->
	<footer class="footer-basic-center">
			<p class="footer-links">
				<a href="./About/About.php">About</a>
				<span>&#8226;</span>
				<a href="./Safety/Safety.php">Safety</a>
				<span>&#8226;</span>
				<a href="./TOU/TOU.php">Terms of Use</a>
			</p>
			<p class="footer-company-name">Campus Trade &copy; 2017</p>
	</footer>

</body>

</html>
