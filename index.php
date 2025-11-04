<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CryptoX - Trade Smarter</title>
<style>
body{
  margin:0;
  font-family: 'Poppins', sans-serif;
  background: radial-gradient(circle at top left, #101010, #000);
  color:white;
  text-align:center;
  overflow-x:hidden;
}
header{
  padding:20px;
  font-size:30px;
  color:#f2b41b;
  letter-spacing:2px;
}
.crypto-container{
  display:flex;
  justify-content:center;
  gap:40px;
  margin-top:40px;
}
.card{
  background:#1c1c1c;
  padding:25px;
  border-radius:15px;
  box-shadow:0 0 15px #f2b41b44;
  width:180px;
  transition:0.3s;
}
.card:hover{
  transform:translateY(-5px);
  box-shadow:0 0 20px #f2b41b88;
}
button{
  margin-top:60px;
  padding:15px 30px;
  border:none;
  border-radius:30px;
  background:#f2b41b;
  color:#000;
  font-size:18px;
  cursor:pointer;
  transition:0.3s;
}
button:hover{
  background:#ffc107;
}
</style>
</head>
<body>
<header>CryptoX Exchange</header>
<h2>Track Real-Time Cryptocurrency Prices</h2>
<div class="crypto-container">
  <div class="card"><h3>Bitcoin (BTC)</h3><p id="btc">Loading...</p></div>
  <div class="card"><h3>Ethereum (ETH)</h3><p id="eth">Loading...</p></div>
  <div class="card"><h3>BNB</h3><p id="bnb">Loading...</p></div>
</div>
<button onclick="redirectToSignup()">Get Started</button>

<script>
function redirectToSignup(){window.location.href='signup.php';}
async function loadPrices(){
  const res=await fetch('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,binancecoin&vs_currencies=usd');
  const data=await res.json();
  document.getElementById('btc').innerText='$'+data.bitcoin.usd;
  document.getElementById('eth').innerText='$'+data.ethereum.usd;
  document.getElementById('bnb').innerText='$'+data.binancecoin.usd;
}
loadPrices();
setInterval(loadPrices,10000);
</script>
</body>
</html>
