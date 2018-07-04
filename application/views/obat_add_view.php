        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-lg-6">

                            <?php 
                                if (!empty($notif))
                                {
                                    echo '<div class="alert alert-danger">'.$notif.'</div>';
                                }
                             ?>

                            <form action="<?php echo base_url('index.php/obat/add'); ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Kode Obat</label>
                                    <input class="form-control" placeholder="OB***" name="kd_obat">
                                </div>

                                <div class="form-group">
                                    <label>Kode Supplier</label>
                                    <select class="form-control" name="kd_supplier">
                                    <?php 
                                        foreach ($sup as $data) {
                                            echo '
                                                <option>'.$data->KD_SUPPLIER.'</option>
                                            ';
                                        }
                                    ?>
                                    </select>
                                </div>
                              
                                <div class="form-group">
                                    <label>Nama Obat</label>
                                    <input class="form-control" placeholder="Mixagrip Flu" name="nm_obat">
                                </div>

                                <div class="form-group">
                                    <label>Produsen</label>
                                    <input class="form-control" placeholder="PT Mixagrip Indonesia" name="produsen">
                                </div>

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" type="number" placeholder="5000" name="harga">
                                </div>

                                <div class="form-group">
                                    <label>Jumlah Stok</label>
                                    <input class="form-control" type="number" placeholder="100" name="jml_stok">
                                </div>

                                <div class="form-group">
                                    <label>Foto Obat</label>
                                    <input type="file" name="foto">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                                <input type="reset" class="btn btn-default" value="Reset">
                            </form>

                        </div>
                        <!-- /.col-lg-12 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                       
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>