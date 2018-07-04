        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo base_url('index.php/obat/add_view'); ?>" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Kode Obat</th>
                                <th>Kode Supplier</th>
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
                                        <td>'.$data->KD_OBAT.'</td>
                                        <td>'.$data->KD_SUPPLIER.'</td>
                                        <td>'.$data->NM_OBAT.'</td>
                                        <td>'.$data->PRODUSEN.'</td>
                                        <td>'.$data->HARGA.'</td>
                                        <td>'.$data->JML_STOK.'</td>
                                        <td><img src="'.base_url('uploads/').''.$data->FOTO.'" width="100"></td>
                                        <td>
                                            <a href="'.base_url().'index.php/obat/lihat/'.$data->KD_OBAT.'" class="btn btn-info">Edit</a>
                                            <a href="'.base_url().'index.php/obat/delete/'.$data->KD_OBAT.'" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
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