        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Supplier</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo base_url('index.php/supplier/add_view'); ?>" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Kode Supplier</th>
                                <th>Nama Supplier</th>
                                <th>Alamat</th>
                                <th>Kota</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($supplier as $data) {
                                echo '
                                    <tr class="odd gradeX">
                                        <td>'.$data->KD_SUPPLIER.'</td>
                                        <td>'.$data->NM_SUPPLIER.'</td>
                                        <td>'.$data->ALAMAT.'</td>
                                        <td>'.$data->KOTA.'</td>
                                        <td>'.$data->TELP.'</td>
                                        <td>
                                            <a href="'.base_url().'index.php/supplier/lihat/'.$data->KD_SUPPLIER.'" class="btn btn-info">Edit</a>
                                            <a href="'.base_url().'index.php/supplier/delete/'.$data->KD_SUPPLIER.'" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
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