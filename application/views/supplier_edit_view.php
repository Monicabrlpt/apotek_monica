        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Data Supplier</h1>
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

                            <form action="<?php echo base_url(); ?>index.php/supplier/edit/<?php echo $detil->KD_SUPPLIER; ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Kode Supplier</label>
                                    <input class="form-control" disabled placeholder="Edit Nama Supplier" name="kd_supplier" value="<?php echo $detil->KD_SUPPLIER; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Nama Supplier</label>
                                    <input class="form-control" placeholder="Edit Nama Supplier" name="nm_supplier" value="<?php echo $detil->NM_SUPPLIER; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" placeholder="Edit Alamat Supplier" rows="4" name="alamat"><?php echo $detil->ALAMAT; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Kota</label>
                                    <input class="form-control" placeholder="Edit Kota Supplier" name="kota" value="<?php echo $detil->KOTA; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Nomor Telp</label>
                                    <input class="form-control" type="number" placeholder="081234567890" name="telp" value="<?php echo $detil->TELP; ?>">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
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