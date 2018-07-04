        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Transaksi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo base_url('index.php/transaksi/add_view'); ?>" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Kode Transaksi</th>
                                <th>Nama Pembeli</th>
                                <th>Total Harga</th>
                                <th>Tanggal Beli</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>TR001</td>
                                <td>Paijosss</td>
                                <td>5000</td>
                                <td>2017-09-09</td>
                                <td>
                                    <a href="#" class="btn btn-info">Detail</a>
                                </td>
                            </tr>                       
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->