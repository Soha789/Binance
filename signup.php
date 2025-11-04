<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign Up - CryptoX</title>
<style>
body{
  font-family:'Poppins',sans-serif;
  background:#000;
  color:white;
  display:flex;
  justify-content:center;
  align-items:center;
  height:100vh;
}
form{
  background:#1c1c1c;
  padding:40px;
  border-radius:15px;
  width:300px;
  box-shadow:0 0 15px #f2b41b55;
}
input{
  width:100%;
  padding:10px;
  margin:10px 0;
  border:none;
  border-radius:5px;
}
button{
  width:100%;
  padding:12px;
  background:#f2b41b;
  border:none;
  color:#000;
  font-size:16px;
  border-radius:5px;
  cursor:pointer;
}
button:hover{background:#ffc107;}
</style>
</head>
<body>
<form id="signupForm">
<h2>Create Account</h2>
<input type="text" id="name" placeholder="Full Name" required>
<input type="email" id="email" placeholder="Email" required>
<input type="password" id="pass" placeholder="Password" required>
<button type="submit">Sign Up</button>
<p style="text-align:center;margin-top:15px;">Already have an account? <a href="#" style="color:#f2b41b;" onclick="goLogin()">Login</a></p>
</form>
<script>
document.getElementById('signupForm').addEventListener('submit',function(e){
  e.preventDefault();
  alert('Signup successful!');
  window.location.href='login.php';
});
function goLogin(){window.location.href='login.php';}
</script>
</body>
</html>
