



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIE GACORAN</title>



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,700;1,400;1,700&display=swap" rel="stylesheet">
<!-- Feather Icons -->
<script src="https://unpkg.com/feather-icons"></script>
<!-- My Style -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">MIE <span>GACORAN</span></a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#menu-kami">Menu</a>
            <a href="#contact">contact</a>
            
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"> <i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"> <i data-feather="shopping-cart"></i></a>
            <a href="#" id="menu"> <i data-feather="menu"></i></a>
        </div>
    </nav>


    <!-- Navbar end -->


<!-- Hero Section Start -->
<section class="hero" id="home">
    <main class="content">
        <h1>Ayo Makan MIE <span>GACORAN</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quos ipsa autem facilis delectus non, officiis adipisci.</p>
        <a href="#" class="cta">Pesan Sekarang</a>
    </main>
</section>

<!-- Hero Section end -->

<!-- About section Start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="img/gacoran_about.jpg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa Membeli Mie Gacoran?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat optio explicabo excepturi eveniet vitae ducimus laudantium ex commodi illum dolorem!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam totam consectetur a quidem magni aliquam deserunt illo reprehenderit quisquam, quo, ipsa obcaecati maxime corrupti eveniet tempora quis tenetur vitae nulla?</p>
            </div>
        </div>
    </section>


<!-- About section end -->

<!-- Menu Section Start -->

<section id="menu-kami" class="menu-kami">
    <h2><span>Menu</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quasi magnam doloremque harum dolorem dolorum?</p>

    <div class="row">
        <div class="menu-card">
            <img src="./img/gacoran1.jpg" alt="Mie1" class="menu-card-img">
            <h3 class="menu-card-tittle">-Mie Gacoran With French Fries-</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="./img/gacoran2.jpg" alt="Mie2" class="menu-card-img">
            <h3 class="menu-card-tittle">-Mie Gacoran With Slice Pizza-</h3>
            <p class="menu-card-price">IDR 25K</p>
        </div>
        <div class="menu-card">
            <img src="./img/gacoran3.jpg" alt="Mie3" class="menu-card-img">
            <h3 class="menu-card-tittle">-Mie Gacoran With rice and with herbs and slice-</h3>
            <p class="menu-card-price">IDR 45K</p>
        </div>
        <div class="menu-card">
            <img src="./img/gacoran4.jpg" alt="Mie4" class="menu-card-img">
            <h3 class="menu-card-tittle">-Mie Gacoran With Herbs and slice-</h3>
            <p class="menu-card-price">IDR 20K</p>
        </div>
    </div>
</section>

<!-- Menu Section end -->

<!-- Contact section Start -->
    <section id="contact" class="contact">
     <h2><span>Kontak</span> Kami</h2>
     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit odio, saepe minima cum ut officiis tenetur esse, </p>
    
    <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.827652783149!2d107.71097962969439!3d-6.920883062089715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd2bbe83916d%3A0x3c1c86655fd850af!2sSeblak%20Iyen!5e0!3m2!1sid!2sid!4v1682394248219!5m2!1sid!2sid"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

        <form action="">
            <div class="input-grup">
                <i data-feather="user"></i>
                <input type="text"
                placeholder="Nama">
            </div>
            <div class="input-grup">
                <i data-feather="mail"></i>
                <input type="text"
                placeholder="Email">
            </div>
            <div class="input-grup">
                <i data-feather="phone"></i>
                <input type="text"
                placeholder="No Telepon">
            </div>
                <button type="submit" class="btn">Kirim Pesan</button>
        </form>

    </div>
    
    </section>

<!-- Contact section end -->

        <!-- Footer Start -->
        <footer>
            <div class="social">
                <a href="https://www.instagram.com/pebryandriann/"><i data-feather="instagram"></i></a>
                <a href="#"><i data-feather="twitter"></i></a>
                <a href="#"><i data-feather="phone-call"></i></a>
            </div>

            <div class="links">
                <a href="#home">Home</a>
                <a href="#about">Tentang Kami</a>
                <a href="#menu-kami">Menu</a>
                <a href="#contact">Kontak</a>
            </div>

            <div class="credit">
                <p>Created by <a href="">Pebryandriann</a>. | &copy;2023</p>
            </div>
        </footer>


        <!-- Footer end -->


<!-- Feather Icons -->
<script>
      feather.replace()
    </script>

    <!-- Java Script -->
    <script src="js/script.js">
    </script>
</body>
</html>