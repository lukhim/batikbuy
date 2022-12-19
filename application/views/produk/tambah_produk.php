<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <?php foreach ($produk as $b) { ?>
                <form action="<?= base_url('produk/tambahProduk'); ?>" method="post" enctype="multipart/form-data">
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i>Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Tambah</button>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>