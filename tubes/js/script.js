// Toogle class active
const navbarNav = document.querySelector(".navbar-nav");
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik diluar sidebar untuk menghilangkan nav
const menu = document.querySelector("#menu");

document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// Simulasikan database pengguna yang valid
const validUsers = [{ username: "user1", password: "password1" }];

// Fungsi untuk melakukan login
function login(username, password) {
  // Cek apakah username dan password ada dalam database
  const user = validUsers.find(
    (user) => user.username === username && user.password === password
  );

  if (user) {
    // Jika login berhasil, arahkan ke halaman index
    window.location.href = "index.html";
  } else {
    // Jika login gagal, tampilkan pesan error
    alert("Login gagal. Periksa kembali username dan password Anda.");
  }
}

// Contoh pemanggilan fungsi login
login("user4", "password4");

$(document).ready(function () {
  $(".menu-card").click(function () {
    // Ambil informasi menu dari elemen yang diklik
    var title = $(this).find(".menu-card-title").text();
    var price = $(this).find(".menu-card-price").text();
    var description = $(this).find(".menu-card-description").text();
    var imageSrc = $(this).find(".menu-card-img").attr("src");

    // Tampilkan informasi menu dalam pop-up
    $("#popup-title").text(title);
    $("#popup-price").text(price);
    $("#popup-description").text(description);
    $("#popup-image").attr("src", imageSrc);

    // Munculkan pop-up
    $(".popup-container").fadeIn();
  });

  // Tutup pop-up ketika tombol "Close" di klik
  $("#popup-close").click(function () {
    $(".popup-container").fadeOut();
  });
});
