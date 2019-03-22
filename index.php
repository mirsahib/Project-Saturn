<!DOCTYPE html>
<html>
<head>
	 <title>D·A·R·S</title>

	    <!-- Bootstrap core CSS -->

<link href="css/bootstrap.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="icon" href="http://localhost/public_html/Final_project/img/favicon_new.png" type="image/png" sizes="16x16"> 

	<style type="text/css">
    html, body {
    	height: 100%;
		margin: 0px;
	}
	.row{
		height: 100%;
	}
	#login-col{
		background-color: #c9087c;
	}
	#form_div{
		margin: auto;
  		width: 50%;
  		padding: 10px;
	}
	#h1_font{
		color: white;
		margin-top: 150px;
		margin-left:  90px;
	}
	#inputEmail{
		margin-bottom: 10px;
	}
	#inputPassword{
		margin-bottom: 10px;
	}
	img{
		max-height: 100%;
		max-width: 100%;
	}
	#cover{
		height: 100%;
	}
	#type{
		margin-bottom: 10px;
	}
</style>
</head>
<body>
	<div class="row">
	    <div id = "cover" class="col-md-7">
	    	<img class="mb-4" src="img/v_demo.jpg">
	    </div>
	    <div id="login-col" class="col-sm-5">
	    	<div id="form_div" class="form-signing">
	    		  <h1 id="h1_font" class="h3 mb-3 font-weight-normal">Log in</h1>
	    		    <label for="inputEmail" class="sr-only">Username</label>
  					<input name = "username" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
  					<label for="inputPassword" class="sr-only">Password</label>
  					<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  					<select class="browser-default custom-select" id ="type">
  						<option>Admin</option>
  						<option>Stakeholder</option>
  					</select>

  					<button class="btn btn-lg btn-primary btn-block" type="submit" onclick="showData()">Log in</button>
	    	</div>

	    </div>
	    
  </div>
<script src="http://localhost/public_html/Final_project/js/jquery.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
    
</body>
</html>