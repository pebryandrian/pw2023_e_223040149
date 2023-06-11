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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- My Style -->
    <link rel="stylesheet" href="css/style1.css">

    <!-- ... Kode HTML lainnya ... -->

    <!-- My Style -->
    <link rel="stylesheet" href="css/style1.css">

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>

    </style>

    <script>

    </script>


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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quos ipsa autem facilis delectus
                non, officiis adipisci.</p>
            <a href="login.php" class="cta">Pesan Sekarang</a>
        </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section class="about" id="about">
        <div class="content">
            <div class="text">
                <h2>Tentang Kami</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat odit nesciunt a animi. Fuga
                    doloremque, deserunt dolores voluptate numquam vero laboriosam quibusdam eos consequatur quod.
                    Explicabo repellat beatae ipsam nisi?</p>
            </div>
            <div class="image">
                <img src="img/about-img.jpg" alt="About Image">
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Menu Section Start -->
    <section class="menu" id="menu-kami">
        <div class="content">
            <h2>Menu Kami</h2>
            <div class="menu-cards">
                <div class="menu-card">
                    <img src="./asset/img/menu-1.jpg" alt="Menu 1" class="menu-card-img">
                    <h3 class="menu-card-title">Mie Ayam Bakso</h3>
                    <p class="menu-card-price">Rp25.000</p>
                    <p class="menu-card-description">Mie dengan topping ayam dan bakso.</p>
                </div>
                <div class="menu-card">
                    <img src="./asset/img/menu-2.jpg" alt="Menu 2" class="menu-card-img">
                    <h3 class="menu-card-title">Mie Goreng Spesial</h3>
                    <p class="menu-card-price">Rp20.000</p>
                    <p class="menu-card-description">Mie goreng dengan bumbu spesial.</p>
                </div>
                <div class="menu-card">
                    <img src="./asset/img/menu-3.jpg" alt="Menu 3" class="menu-card-img">
                    <h3 class="menu-card-title">Mie Kuah Sederhana</h3>
                    <p class="menu-card-price">Rp15.000</p>
                    <p class="menu-card-description">Mie dengan kuah sederhana.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Menu Section End -->

    <!-- Pop-up Start -->
    <div class="popup-container">
        <div class="popup">
            <h2 id="popup-title"></h2>
            <p id="popup-price"></p>
            <p id="popup-description"></p>
            <img id="popup-image" src="" alt="Menu Image">
            <button id="popup-close">Close</button>
        </div>
    </div>
    <!-- Pop-up End -->

    <!-- Contact Section Start -->
    <section class="contact" id="contact">
        <div class="content">
            <h2>Hubungi Kami</h2>
            <form>
                <div class="form-group">
                    <input type="text" name="name" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Email Anda" required>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" placeholder="Pesan Anda" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Kirim Pesan</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="content">
            <p>&copy; 2023 MIE GACORAN - All rights reserved</p>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- My Script -->
    <script src="js/script.js"></script>

</body>

</html>