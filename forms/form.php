<!DOCTYPE HTML>  
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="form.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>

</head>
<body id="bg">  
<div class="container">


<h2><i>Form</h2></i></h2>
<div class="form1" >
<div class="well col-sm-6 col-sm-offset-3">


<form method="post" action="display_from.php">


  <b>Name:</b> <input type="text" name="name" placeholder="john" required>
 
  <br><br>

  <b>Last name:</b> <input type="text" name="lname" placeholder="snow" required="">
 
  <br><br>

  <b>E-mail:</b> <input type="text" name="email" placeholder="email" required>
 
  <br><br>

  <b>message:</b> <textarea name="message"></textarea>
  <br><br>

  <b>Gender:</b>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other

  <br><br>
  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="reset">  
</form>
</div>
</div>


</body>
</html>