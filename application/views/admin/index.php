<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row">
        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
        <div class="page-header">
            <span class="fas fa-users text-primary mt-2 "> Data User</span>
            <!-- <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a> -->
        </div>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Anggota</th>
                <th>Email</th>
                <th>Role ID</th>
                <th>Aktif</th>
                <th>Member Sejak</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach ($anggota as $a) { ?>
                <tr>
                <td><?= $i++; ?></td>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['email']; ?></td>
                <td><?= $a['role_id']; ?></td>
                <td><?= $a['is_active']; ?></td>
                <td><?= date('Y', $a['tanggal_input']); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>

    <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
      <div class="page-header">
        <span class="fas fa-book text-warning mt-2"> Data Buku</span>
        <!-- <a href="<?= base_url('buku'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a> -->
      </div>
      <div class="table-responsive">
      <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Baik</th>
                    <th scope="col">Motif</th>
                    <th scope="col">Asal Daerah</th>
                    <th scope="col">Size</th>
                    <th scope="col">Bahan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Pilihan</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $a = 1;
            foreach ($produk as $b) { ?>
            <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $b['nama_batik']; ?></td>
                <td><?= $b['motif']; ?></td>
                <td><?= $b['asal_daerah']; ?></td>
                <td><?= $b['size']; ?></td>
                <td><?= $b['bahan']; ?></td>
                <td><?= $b['harga']; ?></td>
                <td><?= $b['stok']; ?></td>
                <td><?= $b['gender']; ?></td>
                <td>
                    <picture>
                        <source srcset="" type="image/svg+xml">
                        <img src="<?= base_url('assets/img/upload/') . $b['image'];?>" class="img-fluid img-thumbnail" alt="...">
                    </picture></td>
                <td>
                    <a href="<?= base_url('produk/ubahProduk/').$b['id'];?>">Ubah</a>
                    <a href="<?= base_url('produk/hapusProduk/').$b['id'];?>" onclick="return confirm('Kamu yakin akan menghapus ?')"> Hapus</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
      </div>
    </div>