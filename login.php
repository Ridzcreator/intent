<!DOCTYPE html>
<html>
<head>
	<title>Login Form </title>
<style>
body {
	background: rgba(0, 128, 0, 0.3);
	}
form{
	text-align:center;
	}

input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  color : #E60965;
}

input[type=text]:focus {
  background-color: lightblue;
}


a {
  background-color: #24A19C; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

a:hover {
  background-color: #E60965; 
  color: white;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

.button:hover {
  background-color: #24A19C; 
  color: white;
}

</style>

</head>

<body>

<img src="smektis.jpg" height="400px" width="1265">

<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
<button class="button">Submit</button>

<a href="home.php">Cancel</a>

</form> 
</body>
</html>

