        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pembeli</h1>
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

                            <form action="#" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Kode Transaksi</label>
                                    <input class="form-control" placeholder="TR***" name="kd_transaksi">
                                </div>

                                <div class="form-group">
                                    <label>Nama Pembeli</label>
                                    <input class="form-control" placeholder="Masukkan Nama Pembeli" name="nm_pembeli">
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