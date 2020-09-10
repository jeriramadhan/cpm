<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sub Kegiatan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Sub Kegiatan</a></li>
            <li class="active">Index</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="<?= site_url('subkegiatan/createSubkegiatan') ?>" class="btn btn-success">Tambah</a>
            </div>

            <div class="box-body">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="15" style="text-align:center">No</th>
                            <th width="250" style="text-align:center">Nama Sub Kegiatan</th>
                            <th width="50" style="text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $k => $resdata) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $resdata->nama_subkegiatan . '</td>';
                            echo '<td style="text-align:center">
                            <a href="' . site_url('subkegiatan/updateSubkegiatan/' . $resdata->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Update"><i class="fa fa-pencil"></i></a>&nbsp;
                            <a href="' . site_url('subkegiatan/deleteSubkegiatan/' . $resdata->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';
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