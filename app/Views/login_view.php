<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-800 mb-3">Welcome Pengaduan Masyarakat</h1>
                                    </div>
                                    <form class="user" method="post" action="login">
                                        <?php if (!empty(session()->getFlashdata('gagal'))) : ?>
                                    <div class="alert aleart-success">
                                        <?php echo session()->getFlashdata('gagal'); ?>
                                    </div>
                                       <?php endif ?> 
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user"
                                                id="username" aria-describedby="username"
                                                placeholder="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password">
                                        </div>
                                       
                                        <a href="/login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="/register">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                            <?php if (!empty(session()->getFlashdata('gagal'))) : ?>
                                <div class="alert aleart-success">
                                    <?php echo session()->getFlashdata('gagal'); ?>
                                </div>
                            <?php endif ?> 
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>/js/sb-admin-2.min.js"></script>

</body>

</html>