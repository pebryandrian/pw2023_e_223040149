<?php 
    require "koneksi.php";

    // select tabel produk
    $sql = "SELECT id_produk , nama_produk, deskripsi FROM produk";
    $result = $koneksi->query($sql);

    require ('partials/style.php');
    require ('partials/header.php');
    ?>
<div id="layoutSidenav">

    <?php 
    require ('partials/sidebar.php');
    ?>

    <!-- Content -->
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <a href="produk-add.php">TAMBAH</a>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID produk</th>
                                    <th>Nama produk</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php  while($row = $result->fetch_assoc()) {?>
                                <tr>
                                    <th><?php echo $row ['id_produk'] ?></th>
                                    <th><?php echo $row ['nama_produk'] ?></th>
                                    <th><?php echo $row ['deskripsi'] ?></th>
                                    <td>
                                        <button>Edit</button>
                                        <button>Delete</button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- END Content -->

</div>
<?php
    require ('partials/script.php');


?>