@extends('right')


@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	    <link rel="stylesheet" type="text/css" href="css/style.css">

	    <link rel="stylesheet" href="{{URL::asset('css/style.css') }}"/>

	    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>

	    <script src = "js/bootsrap.js"></script>
	    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	    <script src="js/jquery.js"></script>

	     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-md-2">
	<div class="row" style="height: 100vh;background-color: #2f435c;">

		<!--Title-->
		<div class="">
			<nav class=" navbar navbar-custom">
				<a href="index.php"><center><h4 class="wyt">Inter University Forum</h4></center></a>
			</nav>
		</div>

		<div class="col-md-12">
			<img src="images/mainlogo.png" width="100%">
		</div>

		<!--Categories-->
		<div class="col-md-12 margin10">
			<div class="row">
			  <div class="panel-group">
			    <div class="panel wyt" style="background-color: #2f435c">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <li><a data-toggle="collapse" href="#collapse1"><i class="fa fa-balance-scale ibg" aria-hidden="true"></i>&ensp;&ensp;Arts</a></li>
			        </h4>
			      </div>
			      <div id="collapse1" class="panel-collapse collapse coll">
			        <ul class="list-group" style="text-align: center;">
			          <li class="list-group-item"><a href=""> Education arts programs</a></li>
			          <li class="list-group-item"><a href=""> Laws</a></li>
			          <li class="list-group-item"><a href=""> Mass Communication</a></li>
			          <li class="list-group-item"><a href=""> Sociology</a></li>
			          <li class="list-group-item"><a href=""> Social Work</a></li>
			          <li class="list-group-item"><a href=""> Archaeology, Heritage</a></li>
			        </ul>
			      </div>
			    </div>

			    <div class="panel wyt" style="background-color: #2f435c">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <li><a data-toggle="collapse" href="#collapse2"><i class="fa fa-flask ibg" aria-hidden="true"></i>&ensp;&ensp;Science</a></li>
			        </h4>
			      </div>
			      <div id="collapse2" class="panel-collapse collapse coll">
			        <ul class="list-group" style="text-align: center;">
			          <li class="list-group-item"><a href=""> Engineering Programs</a></li>
			          <li class="list-group-item"><a href=""> Educational Science</a></li>
			          <li class="list-group-item"><a href=""> Computer, Information Technology</a></li>
			          <li class="list-group-item"><a href=""> Legal and Industrial Metrology</a></li>
			          <li class="list-group-item"><a href=""> Statistics and Population</a></li>
			          <li class="list-group-item"><a href=""> Production & Operation Management</a></li>
			        </ul>
			      </div>
			    </div>

			    <div class="panel wyt" style="background-color: #2f435c">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <li><a data-toggle="collapse" href="#collapse3"><i class="fa fa-briefcase ibg" aria-hidden="true"></i>&ensp;&ensp;Business</a></li>
			        </h4>
			      </div>
			      <div id="collapse3" class="panel-collapse collapse coll">
			        <ul class="list-group" style="text-align: center;">
			          <li class="list-group-item"><a href=""> Business Administration</a></li>
			          <li class="list-group-item"><a href=""> Economics, Marketing and Investment</a></li>
			          <li class="list-group-item"><a href=""> Accounting, banking and Finance</a></li>
			          <li class="list-group-item"><a href=""> Customs, tax management, Insurance and Risk Management</a></li>
			          <li class="list-group-item"><a href=""> Procurement and Supplies Management</a></li>
			          <li class="list-group-item"><a href=""> Logistics and Transportation</a></li>
			        </ul>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

	</div>
	</div>


</body>
</html>

@stop