<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="e-sertif, sertifikat vokasi unair">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Change Password - E-Sertifikat Fakultas Vokasi</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/LogoUnair.png') }}">
    <!-- Start css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <style>
        .card{
            box-shadow: 10px 10px 15px;
        }
    </style>
    <!-- End css -->
</head>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ url('/change-pass') }}" method="POST">
                                    @csrf
                                        <!-- <div class="form-head">
                                            <h1>E-Sertifikat Fakultas Vokasi</h1>
                                        </div>                                         -->
                                        <h4 class="text-primary my-4">Change Password</h4>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="old_password" id="old-password" placeholder="Enter Old Password here" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="new_password" id="pass1" placeholder="Enter New Password here" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="pass2" placeholder="Re-Enter Password here" oninput="check()" required>
                                        </div>   
                                        <p style="color: red; display: none;" id="alert">Password tidak sesuai</p>                       
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18" id="button">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->  
    <script type="text/javascript">
      function check(){
        console.log("masuk function");
        if(document.getElementById("pass1").value != document.getElementById("pass2").value){
          document.getElementById("alert").style.display = 'block';
          document.getElementById("button").setAttribute('disabled',true);
        }
        else{
          console.log("masuk else");
          document.getElementById("alert").style.display = 'none';
          document.getElementById("button").removeAttribute("disabled");
        }
      }
    </script>      
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <!-- End js -->
</body>
</html>