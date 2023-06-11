<?php 
    require "koneksi.php";
    require ('partials/style.php');
    require ('partials/header.php');
    ?>
<div id="layoutSidenav">

    <?php 
    require ('partials/sidebar.php');
    ?>

    <div id="layoutSidenav_content">
        <main>

            <div class="row">
                <div class="col-md-8 mx-5">
                    <form action="proses-produk.php" method="post">
                        <div class="mb-3 w-25">
                            <label for="nim" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" maxlength="9" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" name="gambar" id="gambar">
                        </div>
                        <button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </main>