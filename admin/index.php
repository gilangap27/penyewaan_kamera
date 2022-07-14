<?php
session_start();
require '../functions.php';


if (isset($_POST['login'])) {
    if (login_admin($_POST)) {
        echo "
			 <script>
				alert('Login berhasil');
				document.location.href = './dashboard.php';
			 </script>
			 ";
    } else {
        echo "
			 <script>
				alert('Login gagal');
				document.location.href = './index.php';
			 </script>
			 ";
    }
}

?>

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-6">

                <div class="card border-0 shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col px-5 py-3">
                                <div class="text-center">
                                    <h1 class="h4 mb-5">Login</h1>
                                </div>
                                <form class="mb-5" action="" method="POST">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control rounded-pill" placeholder="Username" name="username">
                                    </div>
                                    <div class="input-group-md mb-5">
                                        <input type="password" class="form-control rounded-pill" placeholder="Password" name="password">
                                    </div>
                                    <button name="login" class="btn btn-dark rounded-pill w-100">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>