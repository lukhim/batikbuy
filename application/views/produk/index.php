<!-- Begin Page Content -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url('produk/tambahProduk/');?>" class="btn btn-primary mb-3" data-toggle="modal" data-target="#produkBaruModal"><i class="fas fa-file-alt"></i> Batik Baru</a>
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


<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Modal Tambah buku baru-->
<div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="produkBaruModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h5 class="modal-title" id="produkBaruModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('produk'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama_batik" name="nama_batik" placeholder="Masukkan Nama Batik">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="motif" name="motif" placeholder="Masukkan Motif Batik">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="asal_daerah" name="asal_daerah" placeholder="Masukkan Asal Daerah">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="bahan" name="bahan" placeholder="Masukkan Bahan Batik">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="size" name="size" placeholder="Masukkan Size Batik">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan Nominal Stok">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Masukkan Harga Batik">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="gender" name="gender" placeholder="Masukkan Gender">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="gambar" name="gambar">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i>Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- End of Modal Tambah Mneu -->