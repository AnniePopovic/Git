<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Themes/CSS/products-responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/7f7cb6b174.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="hcf">
      <header>
         <nav>
           <img src="Themes/Image/foodshop.jpg" alt="ime shopa" id="slika-bootcamp">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">PRODUCTS</a></li>
            <li><a href="#">LOGIN</a></li>
            <li><a href="#">CONTACT US</a></li>
          </ul>
          <div class="ikonice">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-viber"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
         </nav>
        <button class="hamburger"><i class="fa fa-bars"></i></button>
        </header>
      <div class="container">
        <button id="filter_dugme"><i class="fa-solid fa-sort-down"></i></button>
          <aside>
              <div class="filter f1">
                <ul><h4 class="naslov">Hrana</h5>
                  <li><label for="Nudle">Nudle</label> <input type="checkbox" name ="Hrana[]"id="Nudle" value="Nudle"></li>
                  <li><label for="Suši">Suši</label> <input type="checkbox" name ="Hrana[]"id="Suši" value="Suši"></li>
                  <li><label for="Čips">Čips</label> <input type="checkbox" name ="Hrana[]"id="Čips" value="Čips"></li>
                  <li><label for="Meso">Meso</label> <input type="checkbox" name ="Hrana[]"id="Meso" value="Meso"></li>
                  <li><label for="Sir">Sir</label> <input type="checkbox" name ="Hrana[]"id="Sir" value="Sir"></li>
                  <li><label for="Pirinač">Pirinač</label> <input type="checkbox" name ="Hrana[]"id="Pirinač" value="Pirinač"></li>
                </ul>
              </div>
              <div class="filter f2">
                <ul><h4 class="naslov">Pića</h5>
                  <li><label for="Vino">Vino</label> <input type="checkbox" name ="Pića[]"id="Vino" value="Vino"></li>
                  <li><label for="Pivo">Pivo</label> <input type="checkbox" name ="Pića[]"id="Pivo" value="Pivo"></li>
                  <li><label for="Mleko">Mleko</label> <input type="checkbox" name ="Pića[]"id="Mleko" value="Mleko"></li>
                  <li><label for="Voda">Voda</label> <input type="checkbox" name ="Pića[]"id="Voda" value="Voda"></li>
                  <li><label for="Čaj">Čaj</label> <input type="checkbox" name ="Pića[]"id="Čaj" value="Čaj"></li>
                  <li><label for="Sok">Sok</label> <input type="checkbox" name ="Pića[]"id="Sok" value="Sok"></li>
                  <li><label for="Vodka">Vodka</label> <input type="checkbox" name ="Pića[]"id="Vodka" value="Vodka"></li>
                  <li><label for="Energetska">Energetska pića</label> <input type="checkbox" name ="Pića[]"id="Energetska" value="Energetska"></li>
                  <li><label for="Kafa">Sok</label> <input type="checkbox" name ="Pića[]"id="Kafa" value="Kafa"></li>
                  <li><label for="Viski">Sok</label> <input type="checkbox" name ="Pića[]"id="Viski" value="Viski"></li>
               </ul>
              </div>
              <div class="filter f3">
                <ul><h4 class="naslov">Slatkiši</h5>
                  <li><label for="Medeno">Medeno srce</label> <input type="checkbox" name ="Slatkiši[]"id="Medeno" value="Medeno"></li>
                  <li><label for="Gumene">Gumene bombone</label> <input type="checkbox" name ="Slatkiši[]"id="Gumene" value="Gumene"></li>
                  <li><label for="Čokolada">Čokolada</label> <input type="checkbox" name ="Slatkiši[]"id="Čokolada" value="Čokolada"></li>
                  <li><label for="Marmelada">Marmelada</label> <input type="checkbox" name ="Slatkiši[]"id="Marmelada" value="Marmelada"></li>
                  <li><label for="Bombone">Bombone</label> <input type="checkbox" name ="Slatkiši[]"id="Bombone" value="Bombone"></li>
                  <li><label for="Torte">Torte</label> <input type="checkbox" name ="Slatkiši[]"id="Torte" value="Torte"></li>
                </ul>
              </div>
          </aside>
          <main>
              <div class="product p1">
                <h4 class="title">Nudle</h4>
                <img src="Themes/Image/product1.jpg" alt="Nudle">
                <p class="price">CENA: 300 din.</p>
                <button class="cart">Add to Cart</button>
              </div>
              <div class="product p2">
                <h4 class="title">Gumene bombone</h4>
                <img src="Themes/Image/product2.jpg" alt="Gumene bombone">
                <p class="price">CENA: 200 din.</p>
                <button class="cart">Add to Cart</button>
              </div>
              <div class="product p3">
                  <h4 class="title">Čips</h4>
                  <img src="Themes/Image/product3.jpg" alt="Čips">
                  <p class="price">CENA: 120 din.</p>
                  <button class="cart">Add to Cart</button>
                </div>
                <div class="product p4">
                  <h4 class="title">Kafa</h4>
                  <img src="Themes/Image/product4.jpg" alt="Kafa">
                  <p class="price">CENA: 250 din.</p>
                  <button class="cart">Add to Cart</button>
                </div>
                <div class="product p5">
                  <h4 class="title">Čokolada</h4>
                  <img src="Themes/Image/product5.png" alt="Čokolada">
                  <p class="price">CENA:150 din.</p>
                  <button class="cart">Add to Cart</button>
                </div>
                <div class="product p6">
                  <h4 class="title">Mleko</h4>
                  <img src="Themes/Image/product6.jpg" alt="Mleko">
                  <p class="price">CENA: 100 din.</p>
                  <button class="cart">Add to Cart</button>
                </div>
                <div class="product p7">
                  <h4 class="title">Pileći batak 1kg</h4>
                  <img src="Themes/Image/product7.jpg" alt="Pileći batak">
                  <p class="price">CENA: 350 din.</p>
                  <button class="cart">Add to Cart</button>
                </div>
                <div class="product p8">
                  <h4 class="title">Vino</h4>
                  <img src="Themes/Image/product8.png" alt="Vino">
                  <p class="price">CENA: 190 din.</p>
                  <button class="cart">Add to Cart</button>
                </div>
                <div class="product p9">
                  <h4 class="title">Sok</h4>
                  <img src="Themes/Image/product9.jpg" alt="Sok">
                  <p class="price">CENA: 130 din.</p>
                  <button class="cart">Add to Cart</button>
                </div>
          </main>
      </div>
      <footer>
        <ul>
          <li><a href="#"><i class="fa-solid fa-user-secret"></i>Privacy policy</a></li>
          <li><a href="#"><i class="fa-solid fa-handshake"></i>Terms of Use</a></li>
          <li><a href="#"><i class="fa-solid fa-sitemap"></i>Sitemap</a></li>
          <li><i class="fa-solid fa-trademark"></i>Copyright &copy; AP</li>
        </ul>
        <button id="top"><a href="#">Back to Top</a></button>
      </footer>
    </div>
</body>
</html>