<!DOCTYPE HTML>
<html>
	<head>

		<title>My online Shop</title>

	<link rel="stylesheet" href="styles/style.css" media="all"/>

	</head>

<body>

	<!--Main Container  starts here-->

	<div class="main_wrapper">

		<div class="header_wrapper">

			<img id="logo" src="images/logo.gif" />
			<img id="banner"src="images/ad_banner.gif" />

		</div>

		<div class="menubar">

			<ul id="menu">
				<li><a href="#">Home</li>
				<li><a href="#">All Products</li>
				<li><a href="#">My Account</li>
				<li><a href="#">Sign Up</li>
				<li><a href="#">Shopping Cart</li>
				<li><a href="#">Contact Us</li>

			</ul>


			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a product" />
					<input type="submit" name="search" value="Search" />
				</form>
			</div>


		</div>



		<div class="content_wrapper">

		        <div id="sidebar">This is sidebar</div>

			<div id="content_area">This is content area</div>

		</div>

		<div id="footer">This is the footer</div>


	</div>

	<!--Main Container ends here-->


</body	

</html>
