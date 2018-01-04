<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	    <link rel="stylesheet" type="text/css" href="css/style.css">


	    <link rel="stylesheet" href="{{asset('css/style.css')}}">


	    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="js/cycle2.js"></script>

	    <script src = "js/bootsrap.js"></script>
	    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	    <script
		  src="https://code.jquery.com/jquery-3.2.1.min.js"
		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous">
		</script>
</head>
<body>
	@yield('content')
	<div class="col-md-8" style="height: 100vh">
		<div class="row">
			<nav class="navbar">
				<div class="col-md-12">
					<div class="col-md-3" style="margin-top: .6%">
						<div class="col-md-10 input-group">
							<input type="text" name="search" class="form-control"><span class="input-group-addon"><i class="fa fa-search"></i></span>
						</div>
					</div>

					<div id="quickbtns" class="col-md-9" style="text-align: right;margin-top: 1.3%;">
						<ul class="nobullets">
							<li><a href="">Trending</li></a>
							<li><a href="" style="color:green;">Recommended</li></a>
							<li><a href="" style="color:black;">Circle</li></a>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="col-md-12" style="margin-top: 5%">
			<h3>Latest Feeds</h3><br>

			<table id="intro" class="table table-stripped">
				<tr style="color: #6f767b">
					<td>Categories</td><td>Topics</td><td>Comments</td><td>Status</td>
				</tr>
				<tr>
					<td><h4>General</h4><br><p class="noty">This is an open discussion space.</p> </td>
					<td><br><i style="font-size: 150%" class="fa fa-commenting" aria-hidden="true"><p class="noty">10</p></i></td>
					<td><br><i style="font-size: 150%" class="fa fa-comments-o" aria-hidden="true"><p class="noty">56</p></i></td>
					<td><br>Active</td>
				</tr>
				<tr>
					<td><h4>Law</h4><br><p class="noty">The judiciary system, rule of law and such subjects related to the Law.</p> </td>
					<td><br><i style="font-size: 150%" class="fa fa-commenting" aria-hidden="true"><p class="noty">36</p></i></td>
					<td><br><i style="font-size: 150%" class="fa fa-comments-o" aria-hidden="true"><p class="noty">76</p></i></td>
					<td><br>2 hours ago.</td>
				</tr>
				<tr>
					<td><h4>Engineering</h4><br><p class="noty">Civil, Architecural, Computer, Electrical, Electronics and other engineers.</p> </td>
					<td><br><i style="font-size: 150%" class="fa fa-commenting" aria-hidden="true"><p class="noty">45</p></i></td>
					<td><br><i style="font-size: 150%" class="fa fa-comments-o" aria-hidden="true"><p class="noty">108</p></i></td>
					<td><br>Active</td>
				</tr>
				<tr>
					<td><h4>Business Administration</h4><br><p class="noty">Finance, Economics, Transactions and anything related to money.</p> </td>
					<td><br><i style="font-size: 150%" class="fa fa-commenting" aria-hidden="true"><p class="noty">78</p></i></td>
					<td><br><i style="font-size: 150%" class="fa fa-comments-o" aria-hidden="true"><p class="noty">347</p></i></td>
					<td><br>7 minutes ago.</td>
				</tr>
			</table>
			<hr>
		</div>
	</div>

	<div class="col-md-2">
		<nav class="row navbar">
			<div class="col-md-12" style="margin-top: 4%">
			<div class="col-md-5">
				<div class="col-md-6">
					<i style="font-size: 140%;" class="fa fa-bell" aria-hidden="true">2</i>
				</div>
				<div class="col-md-6">
					<i style="font-size: 140%" class="fa fa-envelope" aria-hidden="true">4</i>
				</div>
			</div>
			<div class="col-md-7">
				<div class="col-md-6">
					<p>Username</p>
				</div>
				<div class="col-md-6 round">
						<img src="images/profile.jpg" width="100%">
				</div>
			</div>
			</div>

		</nav>

		<div class="col-md-12" style="border: 1px solid #b2b2b2;height: 100vh">
		<div class="col-md-12">
			<h5 style="margin-top: 25%;">Recent Topics</h5>
		</div>

		<div class="col-md-12 margin10">
			<table class="table table-stripped">
				<tr>
					<td style="border-top: none;">
						<p>Topic 1</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Topic 2</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Topic 3</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Topic 4</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Topic 5</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Topic 6</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Topic 7</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Topic 8</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Topic 9</p>
					</td>
				</tr>
			</table>
			<hr style="margin-top: -8%">
		</div>
		</div>

	</div>

</body>
</html>