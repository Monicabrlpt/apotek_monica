        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Data Obat</h1>
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

                            <form action="<?php echo base_url(); ?>index.php/obat/lihat/<?php echo $detil->KD_OBAT; ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label>Kode Obat</label>
                                    <input class="form-control" placeholder="Mixagrip Flu" name="kd_obat" disabled value="<?php echo $detil->KD_OBAT; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Kode Supplier</label>
                                    <input class="form-control" placeholder="Mixagrip Flu" name="kd_supplier" disabled value="<?php echo $detil->KD_SUPPLIER; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Nama Obat</label>
                                    <input class="form-control" placeholder="Mixagrip Flu" name="nm_obat" value="<?php echo $detil->NM_OBAT; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Produsen</label>
                                    <input class="form-control" placeholder="PT Mixagrip Indonesia" name="produsen" value="<?php echo $detil->PRODUSEN; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" type="number" placeholder="5000" name="harga" value="<?php echo $detil->HARGA; ?>" >
                                </div>

                                <div class="form-group">
                                    <label>Jumlah Stok</label>
                                    <input class="form-control" type="number" placeholder="100" name="jml_stok" value="<?php echo $detil->JML_STOK; ?>" >
                                </div>

                                <div class="form-group">
                                    <label>Foto Obat</label>
                                    <input type="file" name="foto">
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