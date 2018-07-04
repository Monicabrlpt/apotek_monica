        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Silahkan Pilih Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Nama Obat</th>
                                <th>Produsen</th>
                                <th>Harga</th>
                                <th>Jumlah Stok</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($obat as $data) {
                                echo '
                                    <tr class="odd gradeX">
                                        <td>'.$data->NM_OBAT.'</td>
                                        <td>'.$data->PRODUSEN.'</td>
                                        <td>'.$data->HARGA.'</td>
                                        <td>'.$data->JML_STOK.'</td>
                                        <td><img src="'.base_url('uploads/').''.$data->FOTO.'" width="100"></td>
                                        <td>
                                            <a href="'.base_url().'index.php/transaksi/beli_view" class="btn btn-success">Beli</a>
                                        </td>
                                    </tr>
                                ';
                            }
                        ?>                        
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->