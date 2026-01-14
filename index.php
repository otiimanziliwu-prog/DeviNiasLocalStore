<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Nias Local Store</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Poppins}
body{background:#fff6e9;color:#333}

/* HEADER */
.top-header{
    background:#8b0000;
    text-align:center;
    padding:40px 20px;
    color:#ffd700
}
.top-header img{
    width:90px;
    background:#fff;
    border-radius:50%;
    padding:8px;
    margin-bottom:15px
}

/* NAV */
header{
    background:#6f0000;
    position:sticky;
    top:0;
    z-index:100
}
.nav ul{
    list-style:none;
    display:flex;
    justify-content:center;
    gap:40px;
    padding:12px 0
}
.nav a{color:#ffd700;text-decoration:none}

/* HERO */
.hero{
    text-align:center;
    padding:80px 20px;
    background:linear-gradient(rgba(139,0,0,.85),rgba(139,0,0,.85)),
    url('https://images.unsplash.com/photo-1603808033192-082d6919d3c5') center/cover;
    color:#fff
}
.hero h2{color:#ffd700;font-size:38px}
.hero .promo{
    color:#ffeb3b;
    font-weight:bold;
    margin-top:15px;
    font-size:18px;
}

/* LAYOUT */
.main{
    display:flex;
    gap:30px;
    padding:40px
}

/* PRODUK */
.produk-list{
    flex:3;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px
}
.card{
    background:#fff;
    border-radius:15px;
    box-shadow:0 8px 15px rgba(0,0,0,.1);
    overflow:hidden
}
.card img{
    width:100%;
    height:180px;
    object-fit:contain;
    background:#f8f8f8;
    padding:10px
}
.card-body{text-align:center;padding:15px}
.card-body h3{color:#8b0000}
.card-body p{font-weight:bold;margin:8px 0}
.card-body button{
    background:#8b0000;
    color:#fff;
    border:none;
    padding:10px 20px;
    border-radius:25px;
    cursor:pointer
}
.card-body button:hover{
    background:#ffd700;
    color:#8b0000
}

/* KERANJANG */
.cart{
    flex:1;
    background:#fff;
    border-radius:18px;
    padding:20px;
    box-shadow:0 8px 15px rgba(0,0,0,.1);
    position:sticky;
    top:110px;
    height:max-content
}
.cart h3{color:#8b0000;margin-bottom:10px}
.cart-item{
    border-bottom:1px dashed #ccc;
    padding:8px 0
}
.cart-total{font-weight:bold;margin-top:10px}
.cart button{
    width:100%;
    margin-top:8px;
    padding:8px;
    border:none;
    border-radius:20px;
    cursor:pointer
}
.checkout-btn{background:#25D366;color:#fff}
.clear-btn{background:#ddd}

/* CHECKOUT */
.checkout{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.5);
    justify-content:center;
    align-items:center
}
.checkout-box{
    background:#fff;
    width:90%;
    max-width:420px;
    border-radius:20px;
    padding:20px
}
.checkout-box h3{color:#8b0000;margin-bottom:10px}
.checkout-box input,select,textarea{
    width:100%;
    padding:8px;
    margin:6px 0
}
.checkout-box button{
    width:100%;
    padding:10px;
    margin-top:6px;
    border:none;
    border-radius:20px
}

/* REVIEW MODAL */
.review-modal{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.5);
    justify-content:center;
    align-items:center
}
.review-box{
    background:#fff;
    width:90%;
    max-width:420px;
    border-radius:20px;
    padding:20px
}

/* INFO */
.info-section{
    background:#fff;
    margin:40px;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 20px rgba(0,0,0,.1)
}
.steps{display:flex;gap:10px;margin:8px 0}
.step-number{
    background:#8b0000;
    color:#fff;
    width:30px;
    height:30px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center
}

footer{
    background:#8b0000;
    color:#fff;
    text-align:center;
    padding:20px
}
footer span{color:#ffd700}
</style>
</head>

<body>

<div class="top-header">
<img src="logo.jpeg">
<h1>Nias Local Store</h1>
<p>Produk Budaya Asli Nias Selatan</p>
</div>

<header>
<div class="nav">
<ul>
<li><a href="#produk">Produk</a></li>
<li><a href="#cara">Cara Pemesanan</a></li>
<li><a href="#kontak">Kontak & Lokasi</a></li>
<li><a href="#riwayat">Riwayat Pembelian</a></li>
<li><a href="#ulasan">Testimoni & Ulasan</a></li>
</ul>
</div>
</header>

<section class="hero">
<h2>Melestarikan Budaya Lewat Produk Lokal</h2>
<p>Pesan cepat melalui WhatsApp & kami konfirmasi pesanan Anda</p>
<p class="promo">🎉 Promo 13 Januari – 17 Januari: Diskon 10% untuk pembelian 2 produk atau lebih! </p>
</section>

<div class="main" id="produk">
<div class="produk-list"></div>
<div class="cart">
<h3>Keranjang Anda</h3>
<p id="cart-count">0 item<br>Keranjang kosong</p>
<div id="cart-items"></div>
<p class="cart-total">Total: Rp<span id="total">0</span></p>
<button class="checkout-btn" onclick="openCheckout()">Checkout</button>
<button class="clear-btn" onclick="clearCart()">Kosongkan</button>
</div>
</div>

<section class="info-section" id="cara">
<h2>Cara Pemesanan</h2>
<div class="steps"><div class="step-number">1</div>Pilih produk budaya Nias</div>
<div class="steps"><div class="step-number">2</div>Tambahkan ke keranjang</div>
<div class="steps"><div class="step-number">3</div>Atur jumlah di keranjang</div>
<div class="steps"><div class="step-number">4</div>Checkout & pilih metode pembayaran</div>
<div class="steps"><div class="step-number">5</div>Terima barang & beri ulasan</div>
</section>

<section class="info-section" id="kontak">
<h2>Kontak, Lokasi & Jam Operasional</h2>
<p>
📍 <a href="https://www.google.com/maps/search/Jalan+Hilisoromi+RT.0+RW.30+Desa+Hiliseremu+Toma" target="_blank">
Jalan Hilisoromi, RT.0/RW.30, Desa Hiliseremu, Hilisoromi, Toma</a><br><br>

📞 <a href="https://wa.me/6285260158352">0852 6015 8352</a><br><br>

⏰ <strong>Jam Operasional:</strong><br>
Senin – Minggu : 08.00 – 22.00 WIB<br><br>
</p>
</section>

<section class="info-section" id="riwayat">
<h2>Riwayat Pembelian</h2>
<div id="history-list">
<p>Belum ada riwayat pembelian.</p>
</div>
</section>

<section class="info-section" id="ulasan">
<h2>Testimoni & Ulasan</h2>
<div id="review-list">
<p>Belum ada ulasan.</p>
</div>
</section>

<footer>
<p>&copy; 2026 <span>Nias Local Store</span> | Produk Budaya Nias Selatan | 

<!-- CHECKOUT -->
<div class="checkout" id="checkout">
<div class="checkout-box">
<h3>Checkout — Ringkasan Pesanan</h3>
<div id="checkout-items"></div>
<p><strong>Total: Rp<span id="checkout-total">0</span></strong></p>

<input id="nama" placeholder="Nama">
<input id="wa" placeholder="No WA">
<input id="alamat" placeholder="Alamat (Opsional)">

<select id="bayar">
<option>COD</option>
<option>E-Wallet</option>
<option>Transfer Bank</option>
<option>WhatsApp</option>
</select>

<button style="background:#25D366;color:#fff" onclick="kirimWA()">Kirim Pesanan</button>
<button onclick="closeCheckout()">Tutup</button>
</div>
</div>

<!-- MODAL REVIEW -->
<div class="review-modal" id="reviewModal">
<div class="review-box">
<h3>Beri Ulasan</h3>
<label>Rating:</label>
<select id="reviewStars">
<option value="1">⭐</option>
<option value="2">⭐⭐</option>
<option value="3">⭐⭐⭐</option>
<option value="4">⭐⭐⭐⭐</option>
<option value="5">⭐⭐⭐⭐⭐</option>
</select>
<textarea id="reviewText" placeholder="Tulis ulasan Anda di sini..." rows="5"></textarea>
<button style="background:#25D366;color:#fff" onclick="submitReview()">Kirim Ulasan</button>
<button onclick="closeReview()">Tutup</button>
</div>
</div>

<script>
const products=[
{name:"Baju Adat Nias Selatan",price:750000,img:"Baju Adat Nias Selatan.jpg"},
{name:"Baju Adat Nias Utara",price:700000,img:"baju adat nias utara.jpg"},
{name:"Rompi Adat Nias",price:350000,img:"rompi.jpg"},
{name:"Aksesoris Adat Nias",price:150000,img:"Aksesoris.jpg"},
{name:"Mahkota Emas Adat",price:500000,img:"mahkota emas.jpg"},
{name:"Selendang Tradisional",price:100000,img:"Selendang Nias.jpg"},
{name:"Tombak Tradisional Nias",price:400000,img:"Tombak.jpg"},
{name:"Pedang Tradisional Nias",price:650000,img:"pedang nias.jpg"}
];

const list=document.querySelector(".produk-list");
products.forEach((p,i)=>{
list.innerHTML+=`
<div class="card">
<img src="${p.img}">
<div class="card-body">
<h3>${p.name}</h3>
<p>Rp ${p.price.toLocaleString()}</p>
<button onclick="addCart(${i})">Tambah ke Keranjang</button>
</div></div>`; 
});

let cart=[];
let history=JSON.parse(localStorage.getItem("riwayatPembelian"))||[];
let reviews=JSON.parse(localStorage.getItem("ulasanPembeli"))||[];
let reviewIndex=null;

function addCart(i){
let item=cart.find(x=>x.i===i);
item?item.q++:cart.push({i,q:1});
render();
}

function render(){
let h="",total=0,count=0;
cart.forEach((x,idx)=>{
let p=products[x.i];
total+=p.price*x.q;
count+=x.q;
h+=`
<div class="cart-item">
<strong>${p.name}</strong><br>
Rp ${p.price.toLocaleString()}<br>
<button onclick="minusItem(${idx})">−</button>
${x.q}
<button onclick="plusItem(${idx})">+</button>
<button onclick="removeItem(${idx})" style="float:right">✕</button>
</div>`; 
});
document.getElementById("cart-items").innerHTML=h||"Keranjang kosong";
document.getElementById("total").innerText=total.toLocaleString();
document.getElementById("cart-count").innerHTML=count+" item";
}

function plusItem(i){cart[i].q++;render();}
function minusItem(i){cart[i].q--;if(cart[i].q<=0)cart.splice(i,1);render();}
function removeItem(i){cart.splice(i,1);render();}
function clearCart(){cart=[];render();}

function openCheckout(){
if(cart.length===0){alert("Keranjang kosong");return;}
document.getElementById("checkout").style.display="flex";
let h="",t=0,totalItems=0;
cart.forEach(x=>{
let p=products[x.i];
t+=p.price*x.q;
totalItems+=x.q;
h+=`${p.name}<br>Rp ${p.price.toLocaleString()} × ${x.q}<hr>`;
});

// Cek promo 13-17 Januari
const today = new Date();
const promoStart = new Date(today.getFullYear(),0,13);
const promoEnd = new Date(today.getFullYear(),0,17);
let discount=0;
if(totalItems>=2 && today>=promoStart && today<=promoEnd){
    discount=t*0.10;
    t-=discount;
    h+=`<p style="color:#ff0000; font-weight:bold;">🎉 Promo 10% diterapkan (-Rp ${discount.toLocaleString()})</p>`;
}

document.getElementById("checkout-items").innerHTML=h;
document.getElementById("checkout-total").innerText=t.toLocaleString();
}

function closeCheckout(){document.getElementById("checkout").style.display="none";}

// Kirim WA & simpan riwayat
function kirimWA(){
let nama=document.getElementById("nama").value;
let wa=document.getElementById("wa").value;
let alamat=document.getElementById("alamat").value;
let bayar=document.getElementById("bayar").value;
if(!nama||!wa){alert("Nama dan No WA wajib diisi!"); return;}

let pesan="Halo Nias Local Store,%0A";
pesan+="Nama: "+nama+"%0A";
pesan+="Alamat: "+alamat+"%0A";
pesan+="Metode Pembayaran: "+bayar+"%0A%0A";
pesan+="Pesanan:%0A";

let total=0;
let totalItems=0;
let pesananText="";
cart.forEach(x=>{
let p=products[x.i];
total+=p.price*x.q;
totalItems+=x.q;
pesananText+=`${p.name} (${x.q}), `;
pesan+=`- ${p.name} (${x.q})%0A`;
});

// Promo
const today = new Date();
const promoStart = new Date(today.getFullYear(),0,13);
const promoEnd = new Date(today.getFullYear(),0,17);
let discount=0;
if(totalItems>=2 && today>=promoStart && today<=promoEnd){
    discount=total*0.10;
    total-=discount;
    pesan+="%0A🎉 Promo 10% diterapkan (-Rp "+discount.toLocaleString()+")";
}

// Simpan riwayat
history.push({nama,namaWA:wa,alamat,pesanan:pesananText,total,diterima:false});
localStorage.setItem("riwayatPembelian",JSON.stringify(history));
updateHistory();

pesan+="%0ATotal: Rp "+total.toLocaleString();
window.open("https://wa.me/6285260158352?text="+pesan,"_blank");
cart=[]; render(); closeCheckout();
}

function updateHistory(){
let h="";
if(history.length===0){h="<p>Belum ada riwayat pembelian.</p>";}
else{
history.forEach((x,i)=>{
let btnTerima="",btnUlas="";
if(!x.diterima){
btnTerima=`<button onclick="barangDiterima(${i})">Barang Diterima</button>`;
} else if(x.diterima && !reviews.find(r=>r.nama===x.nama && r.pesanan===x.pesanan)){
btnUlas=`<button onclick="openReview(${i})">Beri Ulasan</button>`;
}
h+=`<div class="cart-item">
<strong>${x.nama}</strong><br>
${x.pesanan}<br>
Total: Rp ${x.total.toLocaleString()} ${btnTerima} ${btnUlas}<hr>
</div>`;
});
}
document.getElementById("history-list").innerHTML=h;
updateReviews();
}

function barangDiterima(i){
history[i].diterima=true;
localStorage.setItem("riwayatPembelian",JSON.stringify(history));
updateHistory();
alert("Terima kasih! Sekarang Anda bisa memberi ulasan untuk pesanan ini.");
}

function openReview(i){
reviewIndex=i;
document.getElementById("reviewModal").style.display="flex";
document.getElementById("reviewText").value="";
document.getElementById("reviewStars").value="5";
}

function closeReview(){document.getElementById("reviewModal").style.display="none";}

function submitReview(){
let text=document.getElementById("reviewText").value.trim();
let stars=document.getElementById("reviewStars").value;
if(!text){alert("Ulasan tidak boleh kosong!"); return;}
let nama=history[reviewIndex].nama;
reviews.push({nama, komentar:text, rating: stars, pesanan:history[reviewIndex].pesanan});
localStorage.setItem("ulasanPembeli",JSON.stringify(reviews));
updateHistory();
closeReview();
alert("Terima kasih atas ulasan Anda!");
}

function updateReviews(){
let r="";
if(reviews.length===0){r="<p>Belum ada ulasan.</p>";}
else{
reviews.forEach(x=>{
let starsDisplay="⭐".repeat(x.rating);
r+=`<div class="cart-item">
<strong>${x.nama}</strong> - ${starsDisplay}<br>
"${x.komentar}"<hr>
</div>`;
});
}
document.getElementById("review-list").innerHTML=r;
}

// Load history & ulasan awal
updateHistory();
updateReviews();
</script>

</body>
</html>
