<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template--> 
    <link href="<?=base_url()?>/vendor/fontawesome-free/css/all.min.css"rel="stylesheet" type="text/css">

    <!-- Custom styles for this template--> 
    <link href="<?=base_url()?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body">
            <!-- Nestes Row within Card Body --> 
            <?php
            if (!empty(session()->getFlashdata("gagal"))):
                ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata("gagal")?>
            </div>
            <?php endif?>
            <div class="row justify-content-center">
                
            <div class="col-5">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Buat Account Disini!</h1>
                    </div>
                    <form class="user" method="post" action="saveregister">
                        <div class="form-group row">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nik" id="nik" placeholder="nik" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama" id="nama" class="form-control form-control-user" placeholder="name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control form-control-user" placeholder="username" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="telp" id="telp" class="form-control form-control-user" placeholder="telp" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-sw-6 mb-3 nb-sm-0">
                                <input type="password" name="password"
                                class="form-control form-control-user"
                                id="password" placeholder="password" required>
                            </div>
                        <div class="col">
                            <input type="password" name="password2" class="form-control form-control-user"
                            id="ulangipassword" placeholder="ulangi password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark btn-user btn-block">
                        Register Account
                    </button>
                    <hr>
                </form>
                <div class="text-center">
                    <a class="small" href="/login">Sudah Memiliki Akun? Login!</a>
                 </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript --> 
<script src="<?=base_url()?>/vendor/jquery.min.js"></script>
<script src="<?=base_url()?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript --> 
<script src="<?=base_url()?>/vendor/jquery-easing.min.js"></script>

<!-- Custom script for all pages -->
<script src="<?= base_url()?>/js/sb-admin-2.min.js"></script>

</body>

</html>