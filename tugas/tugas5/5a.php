<?php 

$mahasiswa = [
    [
        "nrp" => " 223040149 ",
        "nama" => " Pebry Andrian ",
        "email" => " pebry.223040149@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-7692a90842f07b8317a12aacb0440e61af3e5eeace99b6820f7d1487d8bbda43-whatsapp-image-2022-08-25-at-17.57.35.jpeg "
    ],
    [
        "nrp" => " 223040159 ",
        "nama" => " Aditya Fauzan Salmannaufal ",
        "email" => " aditya.223040159@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-25d5d10c29563179af2a2a6451f1ee82ad5a67e2df745b8b9000b861469b5ab8-347478.jpg "
    ],
    [
        "nrp" => " 223040151 ",
        "nama" => " Adrian Muhammad Zidan ",
        "email" => " Adrian.223040151@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-6f1722416eb1c16fbe8717218e33a2e263cc9a46c7356695a97dadaf61f10b42-adrian.jpg "
    ],
    [
        "nrp" => " 223040164 ",
        "nama" => " Annisa Nursafitri ",
        "email" => " annisa.223040164@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-68f53d3dc827d07a31a14628960b2bef3997c719dc25085c3819cd2ef252b5cb-img-20220910-201341-1614560721541899098.jpg "
    ],
    [
        "nrp" => " 223040138 ",
        "nama" => " Darryl Azzuri ",
        "email" => " darryl.223040138@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-842ef2d561b7ddcb90785fbe451ef330b02f65add02a10c63825525557a5f92d-img-20221009-175602-9026201917274328247.jpg "
    ],
    [
        "nrp" => " 223040175 ",
        "nama" => " Hilmi Anugrah Bela negara ",
        "email" => " hilmi.223040175@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-e9bf345400cd5ff59e1eb396db669788267eb15abf085e3178f978e7ea1af406-img-20220927-144233-5128513620500898.jpg "
    ],
    [
        "nrp" => " 223040165 ",
        "nama" => " Ilman Hanifa ",
        "email" => " ilman.223040165@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-9cfb9e635796e8196fda46d3e8a0a0bae4165e4de1f083550ae6b2f2b4fff2a2-4x6%5B1%5D.jpg "
    ],
    [
        "nrp" => " 223040166 ",
        "nama" => " Muhamad Rinaldi Agus Pratama ",
        "email" => " rinaldi.223040166@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-557316eef49a1c68d6ef5324df64ecc123e0df47e935f43189bae1ca29119d15-img-20220922-093854-3286185462867630594.jpg "
    ],
    [
        "nrp" => " 223040167 ",
        "nama" => " Muhamad Rizki Maulanan ",
        "email" => " rizki.223040167@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-7bb72645137298bfadf1bf691dc8e14bc0a6309011045a02f1fb82d27fedc606-img-20220927-141635-1527231034083600655.jpg "
    ],
    [
        "nrp" => " 223040152 ",
        "nama" => " Naufal Sayyid Akbar ",
        "email" => " naufal.223040152@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " https://storage.googleapis.com/assets-edlink/p/thumb-fc1657a792b811cd70b3691d5b02471e1b10dea3227a1fa73ab101d14fb571a1-img-20220929-191014-3349495824430964855.jpg "
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li> <img src="<?= $mhs ["gambar"];?> "> </li>
            <li>Nama : <?= $mhs ["nama"];?></li>
            <li>NRP : <?= $mhs ["nrp"];?></li>
            <li>Jurusan : <?= $mhs ["jurusan"];?></li>
            <li>Email : <?= $mhs ["email"];?></li>
        </ul>

    <?php endforeach; ?>

</body>

</html>