<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Update Data Proyek
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

            <form role="form" action="<?= site_url('proyek/updateProyek/' . $data->id) ?>" method="post" style="padding: 10px 20px">
                <input type="hidden" name="id" value="<?= $data->id ?>" />
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" required>
                        </div>
                        <!-- ganti sesuai kolom -->
                        <div class="form-group col-md-4">
                            <label>Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" value="<?= $data->lokasi ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Waktu</label>
                            <input type="text" class="form-control" name="waktu" value="<?= $data->waktu ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Biaya</label>
                            <input type="text" class="form-control" name="biaya" value="<?= $data->biaya ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="<?= $data->keterangan ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <input type="text" class="form-control" name="status" value="<?= $data->status ?>" required>
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