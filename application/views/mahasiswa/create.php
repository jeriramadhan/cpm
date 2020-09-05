<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Mahasiswa
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Mahasiswa</a></li>
            <li class="active">Create</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create New</h3>
            </div>

            <form role="form" action="<?= site_url('mahasiswa/create') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                              <select class="form-control" id="nama" name="nama">
                                  <?php foreach ($getUser as $row) {
                                echo '<option  value="' . $row->nama . '">' . $row->nama . '</option>';
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr />
                        <small>Penilaian</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Pengiriman CV</label>
                        <input type="number" class="form-control" name="c1" placeholder="Masukkan Pengiriman CV" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Kehadiran Diseluruh Rangkaian Acara</label>
                        <input type="number" class="form-control" name="c2" placeholder="Masukkan Kehadiran Diseluruh Rangkaian Acara" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Pembuatan Script</label>
                        <input type="number" class="form-control" name="c3" placeholder="Masukkan Pembuatan Script" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Video Siaran</label>
                        <input type="number" class="form-control" name="c4" placeholder="Masukkan Video Siaran" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Kelengkapan Diary ORAKOM</label>
                        <input type="number" class="form-control" name="c5" placeholder="Masukkan Kelengkapan Diary ORAKOM" required>
                    </div>

                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>

    </section>
</div>