<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Proyek
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Proyek</a></li>
            <li class="active">Index</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="<?= site_url('proyek/createProyek') ?>" class="btn btn-success">Tambah</a>
            </div>

            <div class="box-body">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="15" style="text-align:center">No</th>
                            <th width="250" style="text-align:center">Nama</th>
                            <th width="150" style="text-align:center">Lokasi</th>
                            <th width="100" style="text-align:center">Waktu</th>
                            <th width="100" style="text-align:center">Biaya</th>
                            <th width="150" style="text-align:center">Keterangan</th>
                            <th width="150" style="text-align:center">Status</th>
                            <th width="50" style="text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $k => $resdata) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $resdata->nama . '</td>';
                            echo '<td style="text-align:center">' . $resdata->lokasi . '</td>';
                            echo '<td style="text-align:center">' . $resdata->waktu . '</td>';
                            echo '<td style="text-align:center">' . $resdata->biaya . '</td>';
                            echo '<td style="text-align:center">' . $resdata->keterangan . '</td>';
                            echo '<td style="text-align:center">' . $resdata->status . '</td>';
                            echo '<td style="text-align:center">
                            <a href="' . site_url('proyek/updateProyek/' . $resdata->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Update"><i class="fa fa-pencil"></i></a>&nbsp;
                            <a href="' . site_url('proyek/deleteProyek/' . $resdata->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
    })
</script>