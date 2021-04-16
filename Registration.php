<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header.php');
include_once('link.php');
?>
<html>
  <body>
<div id="frmRegistration">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>User Registration</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="number">Number:</label>
    <div class="col-sm-6"> 
      <input type="integer" name="number" class="form-control" id="number" placeholder="Enter phone number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Address">Address:</label>
    <div class="col-sm-6"> 
      <input type="varchar" name="Address" class="form-control" id="Address" placeholder="">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
</body>
</html>
<style type="text/css">
#right{
	padding: 10px;
}
#frmRegistration{
	
	width: 900px;
	margin-left: 250px;
}
#frmRegistration h1
{
	padding-left: 140px;
	padding-bottom: 15px;
}
#frmRegistration form{
	margin-left: 150px;
}
#account{
	margin-left: 400px;
}

body{
  background:url(pjc.jpg);
  background-size:100% 100%;
  background-repeat: no-repeat;
}
</style>