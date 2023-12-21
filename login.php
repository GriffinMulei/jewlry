
<html>
<head>
<link href="css/loginReg.css" type="text/css" rel="Stylesheet"/>
</head>
<body>
<div id="all">
<h1>
Login to Jewelery for u</h1>
<nav id="nav">
<ul>
<li><a href="login.php">Login</a></li>
<li><a href="adm.php">Admin</a></li>
<li><a href="register.php">Register</a></li>
</ul>
</nav>
<div id="web">
<div id="logo">
<img src="pics/jw.jpg"  "alt="Mountain View" >

</div>
<div id="login">
<form id="loginform" method="post" action="account.php">
<table>
<tr>
<td><label class="label">Username:</label></td>
</tr>
<tr>
<td><input type="text" required name="username" class="lgn" placeholder="First Name"/></td>
</tr>
<tr>
<td><label class="label">Password:</label></td>
</tr>
<tr>
<td><input type="password" required name="password" class="lgn" placeholder="Password"/></td>
</tr>
<tr>
<td><input type="submit" value="Login" class="login"></td>
</tr>
</table>
</form>
</div>
</div>
<p>
<marquee width="80%">Welcome back to Jewelery for u.</marquee></p>
</div>
</body>
</html>