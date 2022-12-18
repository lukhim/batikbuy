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
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#bukuBaruModal"><i class="fas fa-file-alt"></i> Batik Baru</a>
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
    <div class="modal fade" id="bukuBaruModal" tabindex="-1" role="dialog" aria-labelledby="bukuBaruModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bukuBaruModalLabel">Tambah Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('buku'); ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku">
                        </div>
                        <div class="form-group">
                            <select name="id_kategori" class="form-control form-control-user">
                                <option value="">Pilih Kategori</option>
                                <?php
                                foreach ($kategori as $k) { ?>
                                    <option value="<?= $k['id'];?>"><?= $k['kategori'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan nama pengarang">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit">
                        </div>
                        <div class="form-group">
                            <select name="tahun" class="form-control form-control-user">
                                <option value="">Pilih Tahun</option>
                                <?php
                                for ($i=date('Y'); $i > 1000 ; $i--) { ?>
                                    <option value="<?= $i;?>"><?= $i;?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control form-control-user" id="image" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Modal Tambah Mneu -->