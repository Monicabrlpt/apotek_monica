<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Apotek Moklet</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
        <h1 style="color: #FFFFFF; background-color: #337ab7"><marquee>Selamat Datang di Halaman Login - Apotek Moklet</marquee></h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">Login - Apotek Moklet</h3>
                    </div>
                    <div class="panel-body">
                        <?php 
                            if (!empty($notif)) {
                                echo '<div class="alert alert-danger">'.$notif.'</div>';
                            }
                        ?>
                        <form action="<?php echo base_url('index.php/admin/masuk'); ?>" method="post">
                            <fieldset>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i>
                                    </span>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i>
                                    </span>
                                    <input type="password" class="form-control" name="password" placeholder="Username">
                                </div>
                                <input type="submit" class="btn btn-md btn-primary btn-block" value="LOGIN" name="submit">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
