<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Proyek
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Proyek</a></li>
            <li class="active">Create</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create New</h3>
            </div>

            <form role="form" action="<?= site_url('proyek/createProyek') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
                        </div>
                        <!-- ganti sesuai kolom -->
                        <div class="form-group col-md-4">
                            <label>Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" placeholder="Masukkan Lokasi Proyek" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Waktu</label>
                            <input type="text" class="form-control" name="waktu" placeholder="Masukkan Waktu" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Biaya</label>
                            <input type="text" class="form-control" name="biaya" placeholder="Masukkan Biaya" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <select class="form-control" id="status" name="status">
                                <option  value="1">Baru</option>';
                                <option  value="2">Lama</option>';
                                <option  value="3">Proses</option>';
                                <option  value="4">Selesai</option>';
                            </select>
                            <!-- <input type="text" class="form-control" name="status" placeholder="Masukkan status" required> -->
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>

    </section>
</div>