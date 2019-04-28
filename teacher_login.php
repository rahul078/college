
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2> lecturer Login</h2>
  </div>

  <form method="post" action="login_teacher.php">

  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
    <select name="dept" id="dept">
  <option value="MBA">MBA</option>
  <option value="MCA">MCA</option>
</select>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  </form>
</body>
</html>
