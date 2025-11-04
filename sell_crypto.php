<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sell Crypto - CryptoX</title>
<style>
body{
  background:#000;
  color:white;
  font-family:'Poppins',sans-serif;
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
input,select{
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
<form id="sellForm">
<h2>Sell Crypto</h2>
<select id="crypto">
  <option value="BTC">Bitcoin (BTC)</option>
  <option value="ETH">Ethereum (ETH)</option>
  <option value="BNB">BNB</option>
</select>
<input type="number" id="amount" placeholder="Amount (USD)" required>
<button type="submit">Sell Now</button>
<p style="text-align:center;margin-top:15px;"><a href="#" style="color:#f2b41b;" onclick="goHome()">Back to Home</a></p>
</form>
<script>
document.getElementById('sellForm').addEventListener('submit',function(e){
  e.preventDefault();
  alert('Sale successful! Your '+document.getElementById('crypto').value+' has been sold.');
  window.location.href='home.php';
});
function goHome(){window.location.href='home.php';}
</script>
</body>
</html>
