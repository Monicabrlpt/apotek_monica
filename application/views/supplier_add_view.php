        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Supplier</h1>
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
                            <form action="<?php echo base_url('index.php/supplier/add'); ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Kode Supplier</label>
                                    <input class="form-control" placeholder="SUP***" name="kd_supplier">
                                </div>

                                <div class="form-group">
                                    <label>Nama Supplier</label>
                                    <input class="form-control" placeholder="Masukkan Nama Supplier" name="nm_supplier">
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" placeholder="Masukkan Alamat Supplier" rows="4" name="alamat"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Kota</label>
                                    <input class="form-control" placeholder="Masukkan Kota Supplier" name="kota">
                                </div>

                                <div class="form-group">
                                    <label>Nomor Telp</label>
                                    <input class="form-control" type="number" placeholder="081234567890" name="telp">
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