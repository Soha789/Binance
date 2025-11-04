<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CryptoX Dashboard</title>
<style>
body{
  margin:0;
  font-family:'Poppins',sans-serif;
  background-color:#0b0b0b;
  color:#e0e0e0;
}
header{
  background:#111;
  color:#f2b41b;
  text-align:center;
  padding:20px;
  font-size:26px;
  letter-spacing:1px;
}
.container{
  padding:30px;
  max-width:1200px;
  margin:auto;
}
.crypto-section{
  margin-bottom:40px;
}
h2{
  color:#f2b41b;
  border-bottom:2px solid #f2b41b55;
  padding-bottom:8px;
}
table{
  width:100%;
  border-collapse:collapse;
  margin-top:20px;
  box-shadow:0 0 10px #f2b41b33;
}
th,td{
  padding:12px 15px;
  text-align:left;
}
th{
  background:#1c1c1c;
  color:#f2b41b;
}
tr:nth-child(even){background:#151515;}
tr:hover{background:#222;}
.btns{
  text-align:center;
  margin-top:50px;
}
button{
  margin:10px;
  padding:12px 25px;
  background:#f2b41b;
  border:none;
  color:#000;
  border-radius:8px;
  font-size:16px;
  cursor:pointer;
}
button:hover{background:#ffc107;}
footer{
  text-align:center;
  color:#888;
  margin-top:60px;
  font-size:14px;
}
</style>
</head>
<body>
<header>CryptoX Dashboard</header>

<div class="container">
  <div class="crypto-section">
    <h2>Bitcoin (BTC)</h2>
    <table>
      <thead>
        <tr>
          <th>Parameter</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody id="btcTable">
        <tr><td>Current Price (USD)</td><td>Loading...</td></tr>
        <tr><td>24h Change</td><td>Loading...</td></tr>
        <tr><td>Market Cap</td><td>Loading...</td></tr>
        <tr><td>Total Volume</td><td>Loading...</td></tr>
        <tr><td>Circulating Supply</td><td>Loading...</td></tr>
      </tbody>
    </table>
  </div>

  <div class="crypto-section">
    <h2>Ethereum (ETH)</h2>
    <table>
      <thead>
        <tr>
          <th>Parameter</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody id="ethTable">
        <tr><td>Current Price (USD)</td><td>Loading...</td></tr>
        <tr><td>24h Change</td><td>Loading...</td></tr>
        <tr><td>Market Cap</td><td>Loading...</td></tr>
        <tr><td>Total Volume</td><td>Loading...</td></tr>
        <tr><td>Circulating Supply</td><td>Loading...</td></tr>
      </tbody>
    </table>
  </div>

  <div class="crypto-section">
    <h2>BNB</h2>
    <table>
      <thead>
        <tr>
          <th>Parameter</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody id="bnbTable">
        <tr><td>Current Price (USD)</td><td>Loading...</td></tr>
        <tr><td>24h Change</td><td>Loading...</td></tr>
        <tr><td>Market Cap</td><td>Loading...</td></tr>
        <tr><td>Total Volume</td><td>Loading...</td></tr>
        <tr><td>Circulating Supply</td><td>Loading...</td></tr>
      </tbody>
    </table>
  </div>

  <div class="btns">
    <button onclick="buy()">Buy Crypto</button>
    <button onclick="sell()">Sell Crypto</button>
  </div>
</div>

<footer>© 2025 CryptoX Exchange. All rights reserved.</footer>

<script>
async function loadDetails(){
  const res=await fetch('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=bitcoin,ethereum,binancecoin');
  const data=await res.json();
  updateTable('btcTable',data[0]);
  updateTable('ethTable',data[1]);
  updateTable('bnbTable',data[2]);
}
function updateTable(id,coin){
  const rows=document.getElementById(id).getElementsByTagName('td');
  rows[1].innerText='$'+coin.current_price.toLocaleString();
  rows[3].innerText=(coin.price_change_percentage_24h).toFixed(2)+'%';
  rows[5].innerText='$'+coin.market_cap.toLocaleString();
  rows[7].innerText='$'+coin.total_volume.toLocaleString();
  rows[9].innerText=coin.circulating_supply.toLocaleString()+' '+coin.symbol.toUpperCase();
}
loadDetails();
setInterval(loadDetails,15000);

function buy(){window.location.href='buy_crypto.php';}
function sell(){window.location.href='sell_crypto.php';}
</script>
</body>
</html>
