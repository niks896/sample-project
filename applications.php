<html ng-app="myapp">
<head>
<title>Registration form </title>
<script src="js/jquery-3.0.1.js"></script>
<script type="text/javascript" src="js/angular.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript">
var app= angular.module("myapp",[]);
app.controller("myCtrl",function($scope){
	$("#submit").click(function(){
	alert(" i am here");
	});
});

</script>
</head>
<body style="background-color:bdc3c7" ng-controller="myCtrl">

<center><nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <font size="9" color="white">User Registration Form</center></font>
</nav>
<div class="container">
	<form id="myform">
  <fieldset><br><br>
  <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" name="fname" id="fname" class="form-control" placeholder="type your name">
    </div>
	<div class="form-group">
      <label for="exampleInputEmail1">last Name</label>
      <input type="text" name="lname" class="form-control" id="lname" placeholder="type your name">
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
	
	<div class="form-group">
      <label for="exampleInputEmail1">password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="password">
    </div>

	<div class="form-group">
      <label for="exampleInputEmail1">Mobile</label>
      <input type="number_format" name="mobile" class="form-control" id="mobile" placeholder="number">
    </div>
	
	<div class="form-group">
      <label for="exampleTextarea">Address</label>
      <textarea class="form-control" name="address" id="address" rows="3" placeholder="Address"></textarea>
    </div>
	
	<fieldset class="form-group">
      <label for="exampleInputEmail1">Gender</label>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" id="gender" value="Male" checked="">Male
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" id="gender" value="female">
          Female
        </label>
      </div>
    </fieldset>
	
	<div class="form-group">
      <label for="exampleSelect1">Nationality</label>
      <select class="form-control" name="nationality"id="nationality">
        <option>select</option>
		<option>india</option>
        <option>UAE</option>
        <option>Afrika</option>
      </select>
    </div>

     
    <button type="submit" id="submit" name="submit"  class="btn btn-primary">Submit </button>
  </fieldset>
</form>
</div>
</body>
</html>