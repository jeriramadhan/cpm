<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Sub Kegiatan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Sub Kegiatan</a></li>
            <li class="active">Create</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create New</h3>
            </div>

            <form role="form" action="<?= site_url('subkegiatan/createSubkegiatan') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama Sub Kegiatan</label>
                            <input type="text" class="form-control" name="nama_subkegiatan" placeholder="Masukkan Nama Sub Kegiatan" required>
                        </div>
                        <!-- ganti sesuai kolom -->
                        
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>

    </section>
</div>