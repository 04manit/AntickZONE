<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | AntickZONE</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="stylesheet" href="dist/css/style.css">
</head>

<body class="hold-transition login-page">
    <div class="container">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="index2.html" class="h1"><b>Antick Zone</b></a>
                </div>

                <div class="card-body">
                    <h5 class="text-center fw-bold mb-1"><b>ADMIN PANEL</b></h5>
                    <p class="login-box-msg">Control panel login</p>

                    <form id="login-form">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">

                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">

                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>
        $('#login-form').on('submit', function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url:"dynamic/login_admin.php",
                type:"POST",
                data:formData,
                contentType: false,
                processData: false,
                success:function(data){
                    if(data == "1"){
                        // window.location.href = "";
                        swal("Control Panel", "Logged In Successfuly!", "success").then((value) => {
                            // location.reload();
                            window.location.href = "starter.php";
                        });;
                    }else if(data == "0"){
                        swal("Alert!", "Incorrect User Credentials!", "warning");
                    }
                }
            })
        })
    </script>
</body>

</html>