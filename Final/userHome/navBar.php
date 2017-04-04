<!DOCTYPE html>
<html>
<head>
	<title>
	  user home page
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/userHome.css" rel="stylesheet">
	<script src="css/userHome.js"></script>
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
</head>
<body>
	<!-- Navigation bar-->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
				      </button>
						<span class="nav navbar-brand navbar-left" id="brandname">Find Your Group</span>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-left">
				        <li ><form class="navbar-form">
			            	<div class="input-group">
			               	 	<input type="text" class="form-control" placeholder="Search">
			               	 	<div class="input-group-btn">
			    	           		<button type="submit" class="btn btn-default" >
			    	           			 <i class="glyphicon glyphicon-search"></i>
			    	           		</button>
			  	           		</div>
			           		</div>
		          		</form></li>
		          	</ul>
		          	<ul class="nav navbar-nav navbar-left">
		          		<li >
	          		      	<a href="#userPage"><img  src="img/avatar.png" class="avatar img-responsive img-circle" style="display:inline-block;" width="20" height="20" alt="Avatar"/><span style="padding-left:0.7em;">Name</span></a>
	          		    </li>
		          	</ul>
		          	<ul class="nav navbar-nav navbar-right">
	          		    <li>
	          		    	<a href="#sth">something else</a>
	          		    </li>
	          			<li ><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout<span class="sr-only">(log out)</span></a></li>
		       		</ul>
		       	</div>	
			</div>	
		</nav>
</body>
</html>